<?php

trait Validatable
{
    protected function assertNotEmpty($data): void
    {
        if (empty($data)) {
            throw new InvalidArgumentException('Empty data');
        }
    }
    protected function assertMinLength($string, $minLength)
    {
        if (strlen($string) < $minLength) {
            throw new InvalidArgumentException(sprintf(
                'String must be %d characters or more',
                $minLength
            ));
        }
    }

    protected function assertMaxLength($string, $maxLength)
    {
        if (strlen($string) > $maxLength) {
            throw new InvalidArgumentException(sprintf(
                'String must be less than %d characters',
                $maxLength
            ));
        }
    }
}
