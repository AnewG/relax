<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;
use \Carbon\Carbon;
use \Goutte\Client;
use \GuzzleHttp\Client as GuzzleClient;

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo 'test_only';die;

		require THIRD_PARTY_PATH . 'Mobile_Detect.php';
		$detect = new Mobile_Detect;
		var_dump($detect->is('iphone'));die;

		require THIRD_PARTY_PATH . 'guzzle.phar';
		$client = new \GuzzleHttp\Client();
		$res = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
		echo $res->getStatusCode();die;

		require THIRD_PARTY_PATH . 'goutte.phar';
		$client = new Client();
		$crawler = $client->request('GET', 'https://www.symfony.com/blog/');
		$link = $crawler->selectLink('Security Advisories')->link();
		$crawler = $client->click($link);
		$crawler->filter('h2 > a')->each(function ($node) {
		    var_dump($node->text());
		});die;

		require THIRD_PARTY_PATH . 'Symfony/Component/Translation/Translator.php';
		require THIRD_PARTY_PATH . 'Carbon/Carbon.php';
		$nt = Carbon::now();
		$dt = Carbon::createFromDate(2017, 8, 1);
		var_dump($nt->diffForHumans($dt));
		die;

		require_once THIRD_PARTY_PATH . 'Faker/autoload.php';
		$faker = Faker\Factory::create('zh_CN');
		
		var_dump($faker->randomDigit);
		var_dump($faker->words(3));
		var_dump($faker->bank);die;

		include THIRD_PARTY_PATH . 'JWT/JWT.php';
		$key = "example_key";
		$token = array(
		    "iss" => "http://example.org",
		    "aud" => "http://example.com",
		    "iat" => 1356999524,
		    "nbf" => 1357000000
		);
		$jwt = JWT::encode($token, $key);
		var_dump($jwt);
		$decoded = JWT::decode($jwt, $key, array('HS256'));
		var_dump($decoded);die;


		$this->load->view('templates/header');
        $this->load->view('welcome_message');
        $this->load->view('templates/footer');
	}
}
