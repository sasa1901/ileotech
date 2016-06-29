<?php

namespace Personews\FlowBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flowcontent
 *
 * @ORM\Table(name="flowcontent")
 * @ORM\Entity(repositoryClass="Personews\FlowBundle\Repository\FlowcontentRepository")
 */
class Flowcontent
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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="StayAware", type="blob")
     */
    private $stayAware;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Flowcontent
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set stayAware
     *
     * @param string $stayAware
     * @return Flowcontent
     */
    public function setStayAware($stayAware)
    {
        $this->stayAware = $stayAware;

        return $this;
    }

    /**
     * Get stayAware
     *
     * @return string 
     */
    public function getStayAware()
    {
        return $this->stayAware;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Flowcontent
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Flowcontent
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
}
