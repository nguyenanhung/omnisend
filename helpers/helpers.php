<?php
/**
 * Project omnisend
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/09/2021
 * Time: 09:45
 */
if (!function_exists('arrayToObject')) {
    /**
     * Function arrayToObject
     *
     * @param array $array
     * @param false $strToLower
     *
     * @return array|false|\stdClass
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/26/2021 04:40
     */
    function arrayToObject($array = array(), $strToLower = false)
    {
        if (!is_array($array)) {
            return $array;
        }
        $object = new stdClass();
        if (count($array) > 0) {
            foreach ($array as $name => $value) {
                $name = trim($name);
                if ($strToLower === true) {
                    $name = strtolower($name);
                }
                if (!empty($name)) {
                    $object->$name = arrayToObject($value);
                }
            }

            return $object;
        }

        return false;
    }
}