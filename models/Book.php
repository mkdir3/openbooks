<?php
class Book {

    private $id;
    private $title;
    private $author;
    private $nbPages;
    private $imagePath;

    public function __construct($id,$title,$author,$nbPages,$imagePath)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->nbPages = $nbPages;
        $this->imagePath = $imagePath;
    }

    

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
            $this->id = $id;

            return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     */
    public function setAuthor($author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of nbPages
     */
    public function getNbPages()
    {
        return $this->nbPages;
    }

    /**
     * Set the value of nbPages
     */
    public function setNbPages($nbPages): self
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    /**
     * Get the value of imagePath
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * Set the value of imagePath
     */
    public function setImagePath($imagePath): self
    {
        $this->imagePath = $imagePath;

        return $this;
    }
}