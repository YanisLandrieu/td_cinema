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
// On initialise la base de l'url
const baseUrl = 'https://api.themoviedb.org/3/';

    require_once('../vendor/autoload.php');
    use GuzzleHttp\Client;
    function get_client(){
        $client = new Client([
            'verify' => false,
            'stream' => false,
        ]);
        return $client;
    }

    function make_a_request(Client $client){
        // $response = $client->get('https://api.themoviedb.org/3/authentication/token/new?api_key=ee7a7c67e85b3b17c01fe7b891ebdb11');
        
        $response = $client->get(baseUrl . 'search/movie?query=' . urlencode('harry Potter') .'&api_key=ee7a7c67e85b3b17c01fe7b891ebdb11');
        pretty_print_r(json_decode($response->getBody()->getContents()));
    }
    $client = get_client();
    make_a_request($client);

    function get_films() {
        
    }
    get_film_by_id($client, 767);
    /**
     * Fonction qui affiche les informations d'un film à partir de sont id
     *
     * @param Client $client
     * @param [type] $filmId
     * @return void
     */
    function get_film_by_id(Client $client , $filmId) {
        $response = $client->get(baseUrl . 'movie/' . $filmId .'?api_key=ee7a7c67e85b3b17c01fe7b891ebdb11');
        pretty_print_r(json_decode($response->getBody()->getContents()));
    }
?>