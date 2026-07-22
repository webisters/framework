<?php
/*
 * This file is part of Webisters.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests;

use PHPUnit\Framework\TestCase;
use Webisters;

/**
 * Class WebistersTest.
 */
final class WebistersTest extends TestCase
{
    public function testVersion() : void
    {
        self::assertMatchesRegularExpression(
            '#^\d+\.\d+\.\d+$#',
            Webisters::VERSION
        );
    }
}
