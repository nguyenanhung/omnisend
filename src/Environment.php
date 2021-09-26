<?php
/**
 * Project omnisend
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/09/2021
 * Time: 09:50
 */

namespace nguyenanhung\Omnisend;

/**
 * Interface Environment
 *
 * @package   nguyenanhung\Omnisend
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface Environment
{
    const VERSION      = '2.0.0';
    const AUTHOR_NAME  = 'Hung Nguyen';
    const AUTHOR_EMAIL = 'dev@nguyenanhung.com';
    const AUTHOR_URL   = 'https://nguyenanhung.com';
    const ENCODING     = 'UTF-8';

    /**
     * Function getVersion
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/11/2021 41:29
     */
    public function getVersion(): string;
}