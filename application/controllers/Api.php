<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Api extends CI_Controller {
	public function __construct(){
	}
	public function index(){
		echo 'hello';
	}
	public function generate_token(){
		// require_once APPPATH.'third_party/jwt/autoload.php';
		// $currentTimeInMillis = microtime(true);
		$key = "annu";
		$payload = array(
		    "iss" => "akshay_gold",
		    "aud" => "akshay gold authetication",
		    "iat" => 1356999524,
		    "nbf" => 1357000000
		);
		$jwt = JWT::encode($payload, $key, 'HS256');
		$decoded = JWT::decode($jwt, new Key($key, 'HS256'));

		print_r($decoded);

		$decoded_array = (array) $decoded;
		JWT::$leeway = 60; // $leeway in seconds
		$decoded = JWT::decode($jwt, new Key($key, 'HS256'));
		print_r($decoded);
	}	

	public function verify_token(){
		
		
	}
}
