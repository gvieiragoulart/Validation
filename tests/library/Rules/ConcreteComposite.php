<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Test\Rules;

use Respect\Validation\Result;
use Respect\Validation\Rules\Composite;

final class ConcreteComposite extends Composite
{
    public function evaluate(mixed $input): Result
    {
        return Result::passed($input, $this);
    }
}
