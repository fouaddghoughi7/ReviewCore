<?php

declare(strict_types=1);

namespace ReviewCore\Core\Tests\Unit;

use PHPUnit\Framework\TestCase;
use ReviewCore\Core\Application;

final class ApplicationConstructionTest extends TestCase
{
    public function testCanConstructApplication(): void
    {
        $application = new Application();

        $this->assertSame('ReviewCore', $application->name());
        $this->assertSame('0.1.0', $application->version());
    }
}
