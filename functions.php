<?php 
/**
 * Fonction qui fait un print_r plus visible
 *
 * @param [type] $var
 * @return void
 */
function pretty_print_r($var): void{
    echo '<pre>'.print_r($var, true).'</pre>';
}

require('./vendor/autoload.php');
require('./config/config.php');
    use GuzzleHttp\Client;
    
    function get_client(){
        $client = new Client([
            'verify' => false,
            'stream' => false,
        ]);
        return $client;
    }
    
    /**
     * Undocumented function
     *
     * @param Client $client
     * @param string $url
     * @return void
     */
    function make_a_request(Client $client, string $url){
        $response = $client->get($url);
        return json_decode($response->getBody()->getContents());
    }
    /**
     * Fonction qui retourne la liste des films les plus populaires
     *
     * @return array
     */
    function get_films(){
        $client = get_client();
        return make_a_request($client, base_url. '/movie/popular?' .authentification_parameters);   
    }
    /**
     * Fonction qui retourne les informations d'un film par son id
     *
     * @param integer $id
     * @return array
     */
    function get_film_by_id(int $id){
        $client = get_client();
        return make_a_request($client, base_url.'/movie/'. $id . '?' .authentification_parameters);
    }

    pretty_print_r(get_film_by_id(123));
?>
