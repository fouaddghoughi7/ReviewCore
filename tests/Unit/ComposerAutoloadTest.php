<?php

declare(strict_types=1);

namespace ReviewCore\Tests\Unit;

use PHPUnit\Framework\TestCase;
use ReviewCore\Core\Application;
use ReviewCore\Core\Container;

final class ComposerAutoloadTest extends TestCase
{
    public function testComposerAutoloadLoadsPackageClasses(): void
    {
        $this->assertTrue(class_exists(Application::class, true));
        $this->assertTrue(class_exists(Container::class, true));

        $application = new Application();
        $container = new Container();

        $this->assertInstanceOf(Application::class, $application);
        $this->assertInstanceOf(Container::class, $container);
    }
}
