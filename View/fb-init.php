<?php 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of fb-init
 *
 * @author Sebastian Aldas 2018-04-05
 */

require "./src/Facebook/autoload.php";

if(!session_id()) {
    session_start();
}


$fb = new Facebook\Facebook([
	'app_id' => '364009464113996', // Replace {app-id} with your app id
	'app_secret' => '4de86c084e290adf6a32b173d0a28b86',
	'default_graph_version' => 'v2.2',
]);

?>