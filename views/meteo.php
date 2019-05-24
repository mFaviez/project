<!-- API -->
<?php 		
	$json = file_get_contents('https://www.prevision-meteo.ch/services/json/vannes');
	$json = json_decode($json);
?>
<!-- CONTENU -->
<section class="bg-light">		
    <div class="row paddingtop">
		
		<!-- TITRE -->
        <div class="col-md-12">
			<h1 class="text-center">Météo à <?php echo $json->city_info->name; ?></h1>
		</div>
		<!-- INFOS METEO -->
		<div class="col-md-4 offset-md-3 cadre-meteo col-sm-10 offset-sm-1">
			<h2 class="text-center titre-meteo">Aujourd'hui<br>le <?php echo $json->current_condition->date; ?></h2>
			<div class="float-left texte-meteo">
				<p><span class="font-weight-bold"><?php echo $json->current_condition->condition; ?></span>
				<br>Température&nbsp;: <?php echo $json->current_condition->tmp; ?>°C	
				<br>Humidité&nbsp;: <?php echo $json->current_condition->humidity; ?>%</p>
			</div>
			<img class="img-fluid icone-meteo" src="<?php echo $json->current_condition->icon; ?>" width="45" height="45" alt="météo d'aujourd'hui" />
			<div style="clear: both;" id="texte-horaire">
				<p>Levé du soleil&nbsp;: <?php echo $json->city_info->sunrise; ?><br>Couché du soleil&nbsp;: <?php echo $json->city_info->sunset; ?></p>
			</div>	
		</div>
		<!-- PROCHAINS JOURS -->
		<div class="col-md-2 offset-md-0 cadre-meteo col-sm-10 offset-sm-1">	
			<h2 class="text-center titre-meteo">Prochains jours</h2>
			<ul>
				<li><span><?php echo $json->fcst_day_1->day_short; ?></span><img src="<?php echo $json->fcst_day_1->icon; ?>" width="45" height="45" alt="météo de demain" /></li>
				<li><span><?php echo $json->fcst_day_2->day_short; ?></span><img src="<?php echo $json->fcst_day_2->icon; ?>" width="45" height="45" alt="météo d'après-demain" /></li>
				<li><span><?php echo $json->fcst_day_3->day_short; ?></span><img src="<?php echo $json->fcst_day_3->icon; ?>" width="45" height="45" alt="météo dans 3 jours" /></li>
				<li><span><?php echo $json->fcst_day_4->day_short; ?></span><img src="<?php echo $json->fcst_day_4->icon; ?>" width="45" height="45" alt="météo dans 4 jours" /></li>	
			</ul>
		</div>
		<!-- MÉTÉO RÉGIONALE -->
        <div class="col-md-12">
			<h2 class="text-center" style="margin-top: 15px;">Météo régionale</h2>
		</div>
		
		<div class="col-md-12">
				<!-- CARTE -->
			  <div id="mapdiv" style="height: 300px;"></div>
			  <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
			  <script>

				class Meteo {
				  constructor(longLat) {
					this.longLat = longLat;
				  }

				  afficherSurcarte(carte, markers, zoom) {
					fetch(`https://www.prevision-meteo.ch/services/json/lat=${this.longLat.lat}lng=${this.longLat.lon}`)
					  .then((response) => {
						if (response.status == 200) {

						  // Examine the text in the response
						  response.json().then((data) => {
							console.log(data);
							var html = this.buildHtml(data);

							let lonLat = new OpenLayers.LonLat(this.longLat.lon, this.longLat.lat).transform(
							  new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
							  carte.getProjectionObject() // to Spherical Mercator Projection
							);
							carte.setCenter(lonLat, zoom);

							  markers.markers.forEach((m) => markers.removeMarker(m));


							// // A popup with some information about our location
							var popup = new OpenLayers.Popup.FramedCloud(
							  "Popup",
							  lonLat,
							  null, html,
							  null,
							  true // <-- true if we want a close (X) button, false otherwise
							);

							// and add the popup to it.
							carte.addPopup(popup,true);
							markers.addMarker(new OpenLayers.Marker(lonLat));
							return;
						  });
						}
					  })
					  .catch((err) => {
						console.log("Fetch Error :-S", err);
					  });
				  }

				  buildHtml(data) {
					return `<table>
						<tr>
						<td>${data.fcst_day_0.date}</td>
						<td><img src="${data.fcst_day_0.icon}" /></td>
						<td> ${data.fcst_day_0.tmin} - ${data.fcst_day_0.tmax}  ${data.fcst_day_0.condition}</td>
						</tr>
						<tr>
						<td>${data.fcst_day_1.date}</td>
						<td><img src="${data.fcst_day_1.icon}" /></td>
						<td> ${data.fcst_day_1.tmin} - ${data.fcst_day_1.tmax}  ${data.fcst_day_1.condition}</td>
						</tr>
						<tr>
						<td>${data.fcst_day_2.date}</td>
						<td><img src="${data.fcst_day_2.icon}" /></td>
						<td> ${data.fcst_day_2.tmin} - ${data.fcst_day_2.tmax}  ${data.fcst_day_2.condition}</td>
						</tr>
						</table>`
				  }
				}

				let map = new OpenLayers.Map({ div: "mapdiv", projection: "EPSG:4326" });
				map.addLayer(new OpenLayers.Layer.OSM());



				OpenLayers.Control.Click = OpenLayers.Class(OpenLayers.Control, {
				  defaultHandlerOptions: {
					'single': true,
					'double': false,
					'pixelTolerance': 0,
					'stopSingle': false,
					'stopDouble': false
				  },

				  initialize: function (options) {
					this.handlerOptions = OpenLayers.Util.extend(
					  {}, this.defaultHandlerOptions
					);
					OpenLayers.Control.prototype.initialize.apply(
					  this, arguments
					);
					this.handler = new OpenLayers.Handler.Click(
					  this, {
						'click': this.trigger
					  }, this.handlerOptions
					);
				  },

				  trigger: function (e) {


					var lonlat = map.getLonLatFromPixel(e.xy);

					let coordoonnees = new OpenLayers.LonLat(lonlat.lon, lonlat.lat).transform(
					  map.getProjectionObject(), // to Spherical Mercator Projection
					  new OpenLayers.Projection("EPSG:4326") // transform from WGS 1984
					);

					newMeteo = new Meteo(coordoonnees);
					newMeteo.afficherSurcarte(map, markers, zoom);
				  }

				});

				let coordoonnees =
				{
				  lon: -2.760847,
				  lat: 47.658236
				};

				let zoom = 16;

				let markers = new OpenLayers.Layer.Markers("Markers");
				map.addLayer(markers);

				newMeteo = new Meteo(coordoonnees);
				newMeteo.afficherSurcarte(map, markers, zoom);

				var click = new OpenLayers.Control.Click();
				map.addControl(click);
				click.activate();

			  </script>
			<!-- FIN CARTE -->
		</div>


		
    </div>
</section>