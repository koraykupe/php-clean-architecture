<?php


class AddArticleService
{
    private $articleRepository;

    /**
     * AddArticleService constructor.
     * @param ArticleRepositoryInterface $articleRepository
     */
    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @param $title
     * @param $content
     * @return Article
     */
    public function createArticle($title, $content): \Article
    {
        $article = new Article($title, $content);

        $this->articleRepository->add($article);

        return $article;
    }

}
