<?php

namespace AppBundle\Services;
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 24/06/15
 * Time: 01:29
 */
class Example
{

    private $om;

    public function __construct($om){
        $this->om = $om;
    }

    public function test(){
        file_put_contents("/Users/leonardoalbuquerque/Desktop/success.txt","success");
    }

}