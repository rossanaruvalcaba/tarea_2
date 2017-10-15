<?php  
require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;

//$api_key = getenv ('OPEN_WEATHER_API');
$api_key = getenv ('OpenWea');

$app = new Silex\Application();

$app->get('/clima', function() use($app,$api_key) {
                
        $client = new client();
        $url = "http://api.openweathermap.org/data/2.5/weather?id=3530597&appid=405f8a53a56edd41d4c4842656145ec7&units=metric";
        
        $response = $client -> get ($url);
        $body = $response -> getBody ();

        return new Response ($body,200,array('Content-Type' => 'application/json'));
});

$app->run();

?>