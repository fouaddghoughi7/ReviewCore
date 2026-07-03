<?php

declare(strict_types=1);

namespace ReviewCore\Core;

final class Application
{
    public const VERSION = '0.1.0';

    public function version(): string
    {
        return self::VERSION;
    }

    public function name(): string
    {
        return 'ReviewCore';
    }
}