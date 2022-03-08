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
    
    function get_client() {
        $client = new Client([
            'verify' => false,
            'stream' => false,
        ]);
        return $client;
    }

    /**
     * Permet d’émettre une requête http vers l’api. Elle retourne un objet réponse
     *
     * @param Client $client
     * @param string $url
     * @return void
     */
    function make_a_request(Client $client, string $url) {
        $response = $client->get($url);
        return json_decode($response->getBody()->getContents());
    }

    // erreur ------------------------------------------------------------------------------------
    // use GuzzleHttp\Exception\ClientException;
    // try {
    //     pretty_print_r(make_a_request(get_client(), base_url. '/movie/popular?' .authentification_parameters . '&language=fr-FR' . '&page=1000')->getStatusCode());
    // }
    // catch(ClientException $e) {
    //     pretty_print_r($e->getResponse()->getStatusCode());
    // }
    // -------------------------------------------------------------------------------------------

    /**
     * Fonction qui retourne la liste des films les plus populaires
     *
     * @return array
     */
    function get_films($page) {
        $client = get_client();
        return make_a_request($client, base_url. '/movie/popular?' .authentification_parameters . '&language=fr-FR' . '&page=' . $page);
    }
    /**
     * Fonction qui retourne les informations d'un film par son id
     *
     * @param integer $id
     * @return array
     */
    function get_film_by_id(int $id) {
        $client = get_client();
        return make_a_request($client, base_url.'/movie/'. $id . '?' .authentification_parameters . '&language=fr-FR');
    }

    function searchFilms($research) {
        $client = get_client();
        return make_a_request($client, base_url. '/search/movie?' .authentification_parameters . '&language=fr-FR' . '&query=' . $research);
    }
?>
