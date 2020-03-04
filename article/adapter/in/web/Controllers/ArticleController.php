<?php


class ArticleController extends Controller
{
    public function addArticle(AddArticleRequest$request)
    {
        try {
            $doctrineRepository = new DoctrineArticleRepository();
            $addArticleService = new AddArticleService($doctrineRepository);
            $addArticleService->createArticle($request->get('title'), $request->get('content'));
        } catch (Exception $exception) {
            // Show error message or smt
        }
        // Render something
    }
}
