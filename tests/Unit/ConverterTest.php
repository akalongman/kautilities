<?php
/*
 * This file is part of the KaUtilities package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Unit;

use Longman\Kautilities\Converter;

/**
 * @package    KaUtilities
 * @author     Avtandil Kikabidze <akalongman@gmail.com>
 * @copyright  Avtandil Kikabidze <akalongman@gmail.com>
 * @license    http://opensource.org/licenses/mit-license.php  The MIT License (MIT)
 * @link       http://www.github.com/akalongman/php-kautilities
 */
class ConverterTest extends TestCase {


    /**
     * @test
     * @cover Converter::kaToLat
     * @expectedException \InvalidArgumentException
     */
    public function kaToLatThrowsException() {
        Converter::kaToLat(null);
        Converter::kaToLat(false);
        Converter::kaToLat(array());
    }

    /**
     * @test
     * @cover Converter::kaToLat
     */
	public function kaToLat() {
        $result = Converter::kaToLat('აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ');
        $this->assertSame('abgdevzTiklmnopJrstufqRySCcZwWxjh', $result);
    }

    /**
     * @test
     * @cover Converter::latToKa
     * @expectedException \InvalidArgumentException
     */
    public function latToKaThrowsException() {
        Converter::latToKa(null);
        Converter::latToKa(false);
        Converter::latToKa(array());
    }

    /**
     * @test
     * @cover Converter::latToKa
     */
    public function latToKa() {
        $result = Converter::latToKa('abgdevzTiklmnopJrstufqRySCcZwWxjh');
        $this->assertSame('აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ', $result);
    }

}