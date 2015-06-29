<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 28/06/15
 * Time: 20:53
 */

namespace AppBundle\Tests\Library;


class LibHistory extends LibBase{

    public static function createNewHistory(){

        parent::$client->request('POST', '/history/create',array(
            'name'=> "texto de teste",
            'text'=> "isto é um texto de teste"
        ));

        parent::assertResponse("Erro ao criar nova historia");

        return self::getResponseData()['historyId'];
    }

    public static function addTextToHistory($historyId){

        parent::$client->request('POST','/history/addPart',array(
            'text'=> 'e pode ser removido',
            'historyId'=> $historyId
        ));

        parent::assertResponse("Erro ao adicionar parte em um texto");
    }
}