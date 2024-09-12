<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Sylius\TwigHooks\Utils\MotherObject;

use Sylius\TwigHooks\Profiler\HookProfile;

final class HookProfileMotherObject
{
    public static function some(): HookProfile
    {
        return new HookProfile(['some_name'], [], null);
    }
}
