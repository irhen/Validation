<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Rules;

use PHPUnit\Framework\TestCase;

/**
 * @group  rule
 * @covers \Respect\Validation\Rules\NumericVal
 * @covers \Respect\Validation\Exceptions\NumericValException
 */
class NumericValTest extends TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new NumericVal();
    }

    /**
     * @dataProvider providerForNumeric
     */
    public function testNumeric($input)
    {
        self::assertTrue($this->object->__invoke($input));
        self::assertTrue($this->object->check($input));
        self::assertTrue($this->object->assert($input));
    }

    /**
     * @dataProvider providerForNotNumeric
     * @expectedException \Respect\Validation\Exceptions\NumericValException
     */
    public function testNotNumeric($input)
    {
        self::assertFalse($this->object->__invoke($input));
        self::assertFalse($this->object->assert($input));
    }

    public function providerForNumeric()
    {
        return [
            [165],
            [165.0],
            [-165],
            ['165'],
            ['165.0'],
            ['+165.0'],
        ];
    }

    public function providerForNotNumeric()
    {
        return [
            [''],
            [null],
            ['a'],
            [' '],
            ['Foo'],
        ];
    }
}