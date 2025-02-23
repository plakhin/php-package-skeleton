<?php

declare(strict_types=1);

namespace Plakhin\PPSkeleton\Tests;

use Plakhin\PPSkeleton\MyClass;

it('foo', function (): void {
    expect((new MyClass)->foo())->toBe('bar');
});
