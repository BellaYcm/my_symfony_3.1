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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

