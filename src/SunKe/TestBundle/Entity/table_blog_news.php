<?php

namespace SunKe\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * table_blog_news
 *
 * @ORM\Table(name="table_blog_news")
 * @ORM\Entity(repositoryClass="SunKe\TestBundle\Repository\table_blog_newsRepository")
 */
class table_blog_news
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

