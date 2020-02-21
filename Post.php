G<?php


class Post
{

    private $title;
    private $date;
    private $content;
    private $authorName;

    /**
     * Post constructor.
     * @param $title
     * @param $date
     * @param $content
     * @param $authorName
     */
    public function __construct($title, $date, $content, $authorName)
    {
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->authorName = $authorName;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @param mixed $authorName
     */
    public function setAuthorName($authorName): void
    {
        $this->authorName = $authorName;
    }



}