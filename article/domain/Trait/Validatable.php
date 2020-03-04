<?php

class Validatable
{
    protected function assertNotEmpty($data): void
    {
        if (empty($data)) {
            throw new InvalidArgumentException('Empty data');
        }
    }
}
