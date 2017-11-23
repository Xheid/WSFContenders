<?php
/**
 * Created by PhpStorm.
 * User: Webschool37
 * Date: 22/11/2017
 * Time: 15:56
 */

namespace AppBundle\Entity;


use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Punchline
 * @ORM\Entity
 * @ApiResource
 *
 */
class Punchline
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
     *
     * @ORM\Column(type="string")
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", name="author_id")
     */
    private $author;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $promo;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $project;

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
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * @param string $promo
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;
    }


    /**
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param string $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }



}