<?php
namespace AppBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 24/06/15
 * Time: 02:06
 */

/**
 * @MongoDB\Document
 */
class User extends BaseUser
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $token;

    /**
     * @MongoDB\String
     */
    protected $userId;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
