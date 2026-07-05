<?php

declare(strict_types=1);

namespace ReviewCore\Tests\Unit;

use PHPUnit\Framework\TestCase;

final class PackageMetadataTest extends TestCase
{
    public function testCorePackageComposerMetadataIsValid(): void
    {
        $root = dirname(__DIR__, 2);
        $composerFile = $root . '/packages/core/composer.json';
        $payload = json_decode((string) file_get_contents($composerFile), true, 512, JSON_THROW_ON_ERROR);

        $this->assertSame('reviewcore/core', $payload['name']);
        $this->assertSame('library', $payload['type']);
        $this->assertArrayHasKey('autoload', $payload);
        $this->assertArrayHasKey('psr-4', $payload['autoload']);

        $psr4 = $payload['autoload']['psr-4'];
        $this->assertArrayHasKey('ReviewCore\\Core\\', $psr4);
        $this->assertIsString($psr4['ReviewCore\\Core\\']);
        $this->assertNotEmpty($psr4['ReviewCore\\Core\\']);

        $autoloadPath = $root . '/packages/core/' . $psr4['ReviewCore\\Core\\'];
        $this->assertDirectoryExists($autoloadPath);
    }
}
