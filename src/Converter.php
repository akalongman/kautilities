<?php
/*
 * This file is part of the KaUtilities package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Longman\Kautilities;


/**
 * @package    KaUtilities
 * @author     Avtandil Kikabidze <akalongman@gmail.com>
 * @copyright  Avtandil Kikabidze <akalongman@gmail.com>
 * @license    http://opensource.org/licenses/mit-license.php  The MIT License (MIT)
 * @link       http://www.github.com/akalongman/php-kautilities
 */
abstract class Converter
{
    /**
     * KA letters
     *
     * @var array
     */
    protected static $_letters_ka = array(
        'ა', 'ბ', 'გ', 'დ', 'ე', 'ვ', 'ზ', 'თ', 'ი', 'კ', 'ლ', 'მ', 'ნ',
        'ო', 'პ', 'ჟ', 'რ', 'ს', 'ტ', 'უ', 'ფ', 'ქ', 'ღ', 'ყ', 'შ', 'ჩ',
        'ც', 'ძ', 'წ', 'ჭ', 'ხ', 'ჯ', 'ჰ');

    /**
     * LAT letters
     *
     * @var array
     */
    protected static $_letters_lat = array(
        'a', 'b', 'g', 'd', 'e', 'v', 'z', 'T', 'i', 'k', 'l', 'm', 'n',
        'o', 'p', 'J', 'r', 's', 't', 'u', 'f', 'q', 'R', 'y', 'S', 'C',
        'c', 'Z', 'w', 'W', 'x','j', 'h');

    /**
     * LAT letters for wap
     *
     * @var array
     */
    protected static $_letters_ka_wap = array(
        'a', 'b', 'g', 'd', 'e', 'v', 'z', 'th', 'i', 'k', 'l', 'm', 'n',
        'o', 'p', 'zh', 'r', 's', 't', 'u', 'f', 'q', 'gh', 'y', 'sh','ch',
        'c', 'dz', 'ts', 'tc', 'kh', 'j', 'h');

    /**
     * Latinization of KA letters
     *
     * @var array
     */
    protected static $_letters_ka_latin = array(
        'a', 'b', 'g', 'd', 'e', 'v', 'z', 't', 'i', 'k', 'l', 'm', 'n',
        'o', 'p', 'zh', 'r', 's', 't', 'u', 'p', 'k', 'gh', 'q', 'sh', 'ch',
        'ts', 'dz', 'ts', 'ch', 'kh', 'j', 'h');

    /**
     * Returns a new translated string of a given text.
     *
     * @param String $text
     * @param bool $latinize
     * @throws \InvalidArgumentException
     * @return String
     */
    public static function kaToLat($text, $latinize = false)
    {
        if (!is_scalar($text)) {
            throw new \InvalidArgumentException('text must be scalar!');
        }

        $text = str_replace(self::$_letters_ka,
            $latinize ? self::$_letters_ka_latin : self::$_letters_lat, $text);
        return $text;
    }


    /**
     * Returns a new translated string of a given text.
     *
     * @param String $text
     * @throws \InvalidArgumentException
     * @return String
     */
    public static function latToKa($text)
    {
        if (!is_scalar($text)) {
            throw new \InvalidArgumentException('text must be scalar!');
        }
        $text = str_replace(self::$_letters_lat, self::$_letters_ka, $text);
        return $text;
    }

}