<?php
/**
 * Created by PhpStorm.
 * User: ania
 * Date: 24/07/2016
 * Time: 10:46
 */

namespace Ania\BlogBundle\Libs;


class Utils
{
    static public function sluggify($text) {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text)) {
            return NULL;
        }

        return $text;
    }
}