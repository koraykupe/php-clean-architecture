<?php


class AddArticleResponse
{
    public $id;
    public $title;
    public $content;

    public function __construct(Article $article)
    {
        $this->id = $article->getId();
        $this->title = $article->getTitle();
        $this->content = $article->getContent();
    }
}
