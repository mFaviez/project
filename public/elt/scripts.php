<script src="<?= $path['js']; ?>jquery-min.js"></script>
<script src="<?= $path['bootstrap-js']; ?>js/bootstrap.min.js"></script>	
<script src="<?= $path['bootstrap-js']; ?>js/bootstrap.bundle.min.js"></script>	
<script src="<?= $path['js']; ?>mon-jquery.js"></script>
<?php //permet de ne pas importer des fichiers javascripts qui ne seront pas utilisés, import uniquement des scripts que p appelle
if(file_exists($path['js'].$p.'.js')):
?>
    <script type="text/javascript" src="<?= $path['js'].$p.'.js'; ?>"></script>
<?php
endif;
?>
<script>
$('.carousel').carousel({
  interval: 2500
})
</script>	