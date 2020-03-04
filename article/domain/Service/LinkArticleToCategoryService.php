<?php
/*
 * Sharing an article doesn't fit into either
 * an entity or a value object. Hence, we created
 * this domain service.
 */
class LinkArticleToCategoryService
{
    public function link(ArticleId $articleId, CategoryId $categoryId)
    {
        // @todo
    }
}
