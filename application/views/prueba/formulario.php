<?= form_open('primercontroller/recibir') ?>
<?php


  $nombre = array('name' => 'nombre', 
  'placeholder' => 'Escribe el nombre',
'type'=> 'text'
);


  $video = array('name' => 'video', 
  'placeholder' => 'Escribe la cantidad',
'type'=> 'number'
);

?>

<?= form_label('Nombre:', 'nombre') ?>
    <?= form_input($nombre) ?>

<br><br>
<?= form_label('Video:', 'nombre') ?>
 <?= form_input($video) ?>

<?= form_submit('','Subir') ?>
	<?= form_close() ?>
</body>
</html>