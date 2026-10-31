<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use TomasChochola\Template\Library\Lib;

/**
 * @internal
 *
 * @no-named-arguments
 */
#[CoversClass(Lib::class)]
#[Small()]
class LibTest extends TestCase
{
    #[Test()]
    public function invoke(): void
    {
        $lib = new Lib();

        self::assertSame($lib::class, $lib());
    }
}
