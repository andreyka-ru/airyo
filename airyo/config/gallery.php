<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/** @var array - Разрешение сформированных превью */
$config['gallery'] = array(
	'image_preview_extension' => '.jpg',
	'image_preview_size' => array(
		array('width' => 720, 'height' => 432),
		array('width' => 280, 'height' => 420)
	) // Варианты размеров превью
);

