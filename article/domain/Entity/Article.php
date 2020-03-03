<?php

class Article
{
    private $title;
    private $content;

    public function __construct($title, $content)
    {
        $this->setTitle($title);
        $this->setContent($content);
    }

    /**
     * @return mixed
     */
    private function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    private function setTitle($title): void
    {
        if (empty($title)) {
            throw new RuntimeException('Title cannot be empty');
        }
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    private function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    private function setContent($content): void
    {
        if (empty($content)) {
            throw new RuntimeException('Content cannot be empty');
        }
        $this->content = $content;
    }
}
