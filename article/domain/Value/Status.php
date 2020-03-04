<?php

class Status
{
    public const PUBLISHED = 1;
    public const DRAFT     = 0;

    private $status;

    /**
     * Status constructor.
     * @param $aStatus
     */
    private function __construct($aStatus)
    {
        $this->status = $aStatus;
    }

    /**
     * @return Status
     */
    public static function published(): \Status
    {
        return new self(self::PUBLISHED);
    }

    /**
     * @return Status
     */
    public static function draft(): \Status
    {
        return new self(self::DRAFT);
    }

    /**
     * @param Status $aStatus
     * @return bool
     */
    public function equalsTo(self $aStatus): bool
    {
        return $this->status === $aStatus->status;
    }
}
