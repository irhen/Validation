<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Respect\Validation\Exceptions;

/**
 * @author Bradyn Poulsen <bradyn@bradynpoulsen.com>
 */
class OneOfException extends NestedValidationException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => 'Как минимум одно из этих правил должно выполняться для поля {{name}}',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => 'Как минимум одно из этих правил не должно выполняться для поля {{name}}',
        ],
    ];
}
