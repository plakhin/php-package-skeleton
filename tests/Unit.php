<?php

declare(strict_types=1);

use Plakhin\PPSkeleton\MyClass;

it('foo', function (): void {
    expect((new MyClass)->foo())->toBe('bar');
});
