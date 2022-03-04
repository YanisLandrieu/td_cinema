<?php 
    include_once('./vendor/autoload.php');

    function get_client() {
        // Create a client with a base URI
        $client = new GuzzleHttp\Client(['base_uri' => 'https://foo.com/api/']);
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'https://api.github.com/user');
        return $response;
    }
    var_dump(get_client());
?>