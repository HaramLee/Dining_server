<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MY_Model
{
	function __construct() {
		parent::__construct();
	}


	function rules() {
		$config = [
			['field'=>'id', 'label'=>'Menu code', 'rules'=> 'required|integer'],
			['field'=>'name', 'label'=>'Item name', 'rules'=> 'required'],
			['field'=>'description', 'label'=>'Item description', 'rules'=> 'required|max_length[256]'],
			['field'=>'price', 'label'=>'Item price', 'rules'=> 'required|decimal'],
			['field'=>'picture', 'label'=>'Item picture', 'rules'=> 'required'],
			['field'=>'category', 'label'=>'Menu category', 'rules'=> 'required']
		];
		return $config;
	}

	function rule_picture() {
	$config_picture = [
        'upload_path' => './images', // relative to front controller
		'allowed_types' => 'gif|jpg|jpeg|png',
		'max_size' => 100, // 100KB should be enough for our graphical menu
		'max_width' => 256,
		'max_height' => 256, // actually, we want exactly 256x256
		'min_width' => 256,
		'min_height' => 256, // fixed it
		'remove_spaces' => TRUE, // eliminate any spaces in the name
		'overwrite' => TRUE, // overwrite existing image
    ];

	return $config_picture;
	}


}
