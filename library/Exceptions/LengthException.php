<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Exceptions;

class LengthException extends ValidationException
{
    const BOTH = 0;
    const LOWER = 1;
    const GREATER = 2;

    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::BOTH => 'Поле {{name}} должно иметь длину между {{minValue}} и {{maxValue}}',
            self::LOWER => 'Поле {{name}} должно иметь длину больше {{minValue}}',
            self::GREATER => 'Поле {{name}} должно иметь длину меньше {{maxValue}}',
        ],
        self::MODE_NEGATIVE => [
            self::BOTH => 'Поле {{name}} не должно иметь длину между {{minValue}} и {{maxValue}}',
            self::LOWER => 'Поле {{name}} не должно иметь длину больше {{minValue}}',
            self::GREATER => 'Поле {{name}} не должно иметь длину меньше {{maxValue}}',
        ],
    ];

    public function chooseTemplate()
    {
        if (!$this->getParam('minValue')) {
            return static::GREATER;
        } elseif (!$this->getParam('maxValue')) {
            return static::LOWER;
        } else {
            return static::BOTH;
        }
    }
}
