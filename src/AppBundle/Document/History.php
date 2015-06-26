<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 24/06/15
 * Time: 21:19
 */

namespace AppBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use AppBundle\Document\HistoryPart;
/**
 * @MongoDB\Document
 */
class History
{

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $text;

    /**
     * @MongoDB\EmbedMany(targetDocument="HistoryPart")
     */
    protected $parts = array();


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Get text
     *
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }
    public function __construct()
    {
        $this->parts = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add part
     *
     * @param AppBundle\Document\HistoryPart $part
     */
    public function addPart(\AppBundle\Document\HistoryPart $part)
    {
        $this->parts[] = $part;
    }

    /**
     * Remove part
     *
     * @param AppBundle\Document\HistoryPart $part
     */
    public function removePart(\AppBundle\Document\HistoryPart $part)
    {
        $this->parts->removeElement($part);
    }

    /**
     * Get parts
     *
     * @return \Doctrine\Common\Collections\Collection $parts
     */
    public function getParts()
    {
        return $this->parts;
    }
}
