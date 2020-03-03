<?php

interface ArticleRepositoryInterface
{
    public function find(ArticleId $id);
    public function add(Article $planning);
    public function update(Article $planning);
    public function delete(ArticleId $id);
}
