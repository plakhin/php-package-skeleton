<?php

declare(strict_types=1);

namespace Plakhin\PPSkeleton\Tests;

use Plakhin\PPSkeleton\Skeleton;

test('skeleton', function (): void {
    expect((new Skeleton)->foo())->toBe('bar');
});
