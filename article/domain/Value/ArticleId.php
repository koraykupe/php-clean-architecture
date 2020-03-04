<?php

use Ramsey\Uuid\Uuid;

class ArticleId
{
    private $id;

    /**
     * Immutable, so generation from construct is private
     * ArticleId constructor.
     * @param null $id
     * @throws Exception
     */
    private function __construct($id = null)
    {
        $this->id = $id ?: Uuid::uuid4()->toString();
    }

    /**
     * @param null $id
     * @returnArticleId
     * @return ArticleId
     * @throws Exception
     */
    public static function create($id = null ): \ArticleId
    {
        return new static($id);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->id;
    }
}
