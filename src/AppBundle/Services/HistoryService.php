<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 24/06/15
 * Time: 21:30
 */

namespace AppBundle\Services;

use AppBundle\Document\History;
use AppBundle\Document\HistoryPart;

class HistoryService{

    private $doctrine;
    public function __construct($dm){
        $this->doctrine = $dm;
    }

    /**
     * @param $historyData
     * @return \AppBundle\Document\id
     */
    public function createHistory($historyData){
        $history = new History();
        $history->setName($historyData['name']);
        $history->setText($historyData['text']);

        $this->doctrine->persist($history);
        $this->doctrine->flush();

        return $history->getId();
    }

    public function addTextToHistory($historyData){

        $part = new HistoryPart();
        $part->setText($historyData['text']);
        $part->setUser("123");

        $this->doctrine->persist($part);

        $history = $this->doctrine->getRepository('AppBundle:History')->find($historyData['historyId']);

        $history->addPart($part);

        $this->doctrine->flush();
    }

}