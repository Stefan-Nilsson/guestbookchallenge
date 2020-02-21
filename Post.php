<?php
declare(strict_types=1);

class Post
{
    public $authorName;
    public $title;
    public $content;
    public $date;

    /**
     * Post constructor.
     * @param $authorName
     * @param $title
     * @param $content
     * @param $date
     */
    public function __construct($authorName, $title, $content, $date)
    {
        $this->authorName = $authorName;
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
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

    public function setAll($authorName, $title, $content, $date)
    {
        $this->setAuthorName($authorName);
        $this->setTitle($title);
        $this->setContent($content);
        $this->setDate($date);
    }
    public function getAll()
    {
        $this->getAuthorName();
        $this->getTitle();
        $this->getContent();
        $this->getDate();
    }

    public function pushDataToArray()
    {
        return array_push($this->allData, $this->getAll());
    }
}