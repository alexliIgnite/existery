<?php

namespace core\postBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * post
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="owid", type="integer")
     */
    private $owid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;
    
    /**
     * @var string
     *
     * @ORM\Column(name="thumbnail", type="string")
     */
    private $thumbnail;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string")
     */
    private $description;
    
    /**
     * @var string
     *
     * @ORM\Column(name="bgColor", type="string")
     */
    private $bgColor;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="scid", type="integer")
     */
    private $scid;

    /**
     * @var integer
     *
     * @ORM\Column(name="catid", type="integer")
     */
    private $catid;

    /**
     * @var integer
     *
     * @ORM\Column(name="generateType", type="integer")
     */
    private $generateType;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;


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
     * Set owid
     *
     * @param integer $owid
     * @return post
     */
    public function setOwid($owid)
    {
        $this->owid = $owid;

        return $this;
    }

    /**
     * Get owid
     *
     * @return integer 
     */
    public function getOwid()
    {
        return $this->owid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return post
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
     * Set bgColor
     *
     * @param string $bgColor
     * @return post
     */
    public function setBgColor($bgColor)
    {
    	$this->bgColor = $bgColor;
    
    	return $this;
    }
    
    /**
     * Get bgColor
     *
     * @return string
     */
    public function getBgColor()
    {
    	return $this->bgColor;
    }
	
    /**
     * Set thumbnail
     *
     * @param string $thumbnail
     * @return post
     */
    public function setThumbnail($thumbnail)
    {
    	$this->thumbnail = $thumbnail;
    
    	return $this;
    }
    
    /**
     * Get thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
    	return $this->thumbnail;
    }
    
    /**
     * Set description
     *
     * @param string $description
     * @return post
     */
    public function setDescription($description)
    {
    	$this->description = $description;
    
    	return $this;
    }
    
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
    	return $this->description;
    }
    /**
     * Set scid
     *
     * @param integer $scid
     * @return post
     */
    public function setScid($scid)
    {
        $this->scid = $scid;

        return $this;
    }

    /**
     * Get scid
     *
     * @return integer 
     */
    public function getScid()
    {
        return $this->scid;
    }

    /**
     * Set catid
     *
     * @param integer $catid
     * @return post
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;

        return $this;
    }

    /**
     * Get catid
     *
     * @return integer 
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set generateType
     *
     * @param integer $generateType
     * @return post
     */
    public function setGenerateType($generateType)
    {
        $this->generateType = $generateType;

        return $this;
    }

    /**
     * Get generateType
     *
     * @return integer 
     */
    public function getGenerateType()
    {
        return $this->generateType;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return post
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

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return post
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
}
