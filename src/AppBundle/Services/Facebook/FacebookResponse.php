<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 12/07/15
 * Time: 14:07
 */

namespace AppBundle\Services\Facebook;


class FacebookResponse {

    public static function formatFacebookTokenResponse($response){
        $token = explode("=", $response);
        return $token[1];
    }
}