<?php
namespace AppBundle\Services\Requests;

/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 12/07/15
 * Time: 15:10
 */
class Get {
    public static function get($requestUrl){

        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $requestUrl,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));

        // Send the request & save response to $resp
        $response = curl_exec($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);


        if($code != 200){
            throw new \Exception("Erro ao fazer request retorno codigo {$code}");
        }
        return $response;
    }
}