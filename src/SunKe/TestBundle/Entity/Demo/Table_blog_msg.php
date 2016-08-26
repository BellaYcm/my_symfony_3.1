<?php

namespace SunKe\TestBundle\Entity\Demo;

use Doctrine\ORM\Mapping as ORM;

/**
 * Table_blog_msg
 *
 * @ORM\Table(name="demo\table_blog_msg")
 * @ORM\Entity(repositoryClass="SunKe\TestBundle\Repository\Demo\Table_blog_msgRepository")
 */
class Table_blog_msg
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

