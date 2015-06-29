<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 28/06/15
 * Time: 20:14
 */

namespace AppBundle\Tests\Controller;


use AppBundle\Tests\Library\LibHistory;

class HistoryControllerTest extends LibHistory{


    public function testCreate(){
        $this->setUp();
        $this->createNewHistory();
    }

    public function testAddTextToHistory(){
        $this->setUp();
        $historyId = $this->createNewHistory();
        $this->addTextToHistory($historyId);
    }

    public function testGetFullText(){
        $this->setUp();
        $historyId = $this->createNewHistory();
        $this->testAddTextToHistory($historyId);
        $this->getFullText($historyId);
    }
}