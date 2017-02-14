<?php
/**
 * Created by PhpStorm.
 * User: ania
 * Date: 23/07/2016
 * Time: 20:59
 */

namespace Ania\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="Ania\BlogBundle\Repository\PostRepository")
 * @ORM\Table(name="blog_posts")
 * @ORM\HasLifecycleCallbacks
 */
class Post
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120, unique=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=120, unique=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $thumbnail = null;

    /**
     * @ORM\ManyToOne(
     *      targetEntity = "Category",
     *      inversedBy = "posts"
     * )
     *
     * @ORM\JoinColumn(
     *     name = "category_id",
     *     referencedColumnName = "id",
     *     onDelete = "SET NULL"
     * )
     */
    private $category;

    /**
     * @ORM\ManyToMany(
     *      targetEntity = "Tag",
     *      inversedBy = "posts"
     * )
     *
     * @ORM\JoinTable(
     *     name = "blog_posts_tags",
     * )
     */
    private $tags;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $author;

    /**
     * @ORM\Column(name = "create_date", type="datetime")
     */
    private $createDate;

    /**
     * @ORM\Column(name = "published_date", type="datetime", nullable=true)
     */
    private $publishedDate = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     * @return Post
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
     * Set slug
     *
     * @param string $slug
     * @return Post
     */
    public function setSlug($slug)
    {
        $this->slug = \Ania\BlogBundle\Libs\Utils::sluggify($slug);

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Post
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
     * Set thumbnail
     *
     * @param string $thumbnail
     * @return Post
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
     * Set author
     *
     * @param string $author
     * @return Post
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Post
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set publishedDate
     *
     * @param \DateTime $publishedDate
     * @return Post
     */
    public function setPublishedDate($publishedDate)
    {
        $this->publishedDate = $publishedDate;

        return $this;
    }

    /**
     * Get publishedDate
     *
     * @return \DateTime 
     */
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    /**
     * Set category
     *
     * @param \Ania\BlogBundle\Entity\Category $category
     * @return Post
     */
    public function setCategory(\Ania\BlogBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Ania\BlogBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add tags
     *
     * @param \Ania\BlogBundle\Entity\Tag $tags
     * @return Post
     */
    public function addTag(\Ania\BlogBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \Ania\BlogBundle\Entity\Tag $tags
     */
    public function removeTag(\Ania\BlogBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preSave() {
        if(null === $this->slug) {
            $this->setSlug($this->getTitle());
        }
    }
}
