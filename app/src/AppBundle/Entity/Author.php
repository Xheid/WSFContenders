<?php
/**
 * Created by PhpStorm.
 * User: Webschool37
 * Date: 22/11/2017
 * Time: 15:56
 */

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Class Author
 * @ORM\Entity
 * @ApiResource
 */
class Author
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", name="first_name")
     */
    private $firstName;
    /**
     * @var string
     * @ORM\Column(type="string", name="last_name")
     */
    private $lastName;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }



    public function getFullName()
    {
        return $this->firstName." ".$this->getLastName();
    }

}