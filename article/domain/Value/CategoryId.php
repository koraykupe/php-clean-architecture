<?php

use Ramsey\Uuid\Uuid;

class CategoryId
{
    private $id;

    /**
     * Immutable, so generation from construct is private
     * CategoryId constructor.
     * @param null $id
     * @throws Exception
     */
    private function __construct($id = null)
    {
        $this->id = $id ?: Uuid::uuid4()->toString();
    }

    /**
     * @param null $id
     * @returnCategoryId
     * @return CategoryId
     * @throws Exception
     */
    public static function create($id = null ): \CategoryId
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
