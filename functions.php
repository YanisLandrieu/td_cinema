<?php
    require('./vendor/autoload.php');
    use GuzzleHttp\Client;    function get_client(){
        $client = new Client([
            'verify' => false,
            'stream' => false,
        ]);
        return $client;
    }    function make_a_request(Client $client){
        $response = $client->get('https://api.themoviedb.org/3/movie/latest?api_key=ee7a7c67e85b3b17c01fe7b891ebdb11');
        //$response = $client->get('https://api.themoviedb.org/3/configuration?api_key=7222b8d04bf749f83dd5b306f3e4abf4');
        var_dump(json_decode($response->getBody()->getContents()));
    }    $client = get_client();
    make_a_request($client);
?>
