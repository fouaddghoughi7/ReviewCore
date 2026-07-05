<?php

declare(strict_types=1);

namespace ReviewCore\Core\Tests\Unit;

use PHPUnit\Framework\TestCase;
use ReviewCore\Core\Container;

final class ContainerConstructionTest extends TestCase
{
    public function testCanConstructContainer(): void
    {
        $container = new Container();

        $this->assertInstanceOf(Container::class, $container);
    }
}
