<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 24/06/15
 * Time: 21:30
 */

namespace AppBundle\Services;

use AppBundle\Document\History;

class HistoryService{

    private $dm;
    public function __construct($dm){
        $this->dm = $dm;
    }

    /**
     * sets name and text
     * @param $historyData
     * @return \AppBundle\Document\id
     */
    public function createHistory($historyData){
        $history = new History();
        $history->setName($historyData['name']);
        $history->setText($historyData['text']);

        $this->dm->persist($history);
        $this->dm->flush();

        return $history->getId();
    }

    public function addTextToHistory($historyData){

    }

}