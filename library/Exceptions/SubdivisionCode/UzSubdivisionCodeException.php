<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Exceptions\SubdivisionCode;

use Respect\Validation\Exceptions\SubdivisionCodeException;

/**
 * Exception class for Uzbekistan subdivision code.
 *
 * ISO 3166-1 alpha-2: UZ
 */
class UzSubdivisionCodeException extends SubdivisionCodeException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => 'Поле {{name}} должно быть кодом подразделения Узбекистана',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => 'Поле {{name}} не должно быть кодом подразделения Узбекистана',
        ],
    ];
}
