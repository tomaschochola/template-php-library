<?php

declare(strict_types=1);

namespace TomasChochola\Template\Library;

/**
 * @no-named-arguments
 */
readonly class Lib
{
    public function __invoke(): string
    {
        return static::class;
    }
}
