<?php

/*
 * Copyright (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 * SPDX-License-Identifier: MIT
 */

declare(strict_types=1);

namespace Respect\Validation\Rules;

use Respect\Validation\Message\Template;
use Respect\Validation\Result;
use Respect\Validation\Rules\Core\Standard;

#[Template(
    '{{name}} must be multiple of {{multipleOf}}',
    '{{name}} must not be multiple of {{multipleOf}}',
)]
final class Multiple extends Standard
{
    public function __construct(
        private readonly int $multipleOf
    ) {
    }

    public function evaluate(mixed $input): Result
    {
        $parameters = ['multipleOf' => $this->multipleOf];
        if ($this->multipleOf == 0) {
            return new Result($input == 0, $input, $this, $parameters);
        }

        return new Result($input % $this->multipleOf == 0, $input, $this, $parameters);
    }
}
