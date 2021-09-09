<?php
/**
 * Project omnisend
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/09/2021
 * Time: 09:56
 */

namespace nguyenanhung\Omnisend\Services;

/**
 * Interface OmnisendInterface
 *
 * @package   nguyenanhung\Omnisend\Services
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface OmnisendInterface
{
    /**
     * Function setApiKey
     *
     * @param $key
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 58:02
     */
    public function setApiKey($key): Omnisend;

    /**
     * Function getApiKey
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 58:10
     */
    public function getApiKey(): string;

    /**
     * Function getMethod
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/08/2021 39:16
     */
    public function getMethod(): string;

    /**
     * Function setMethod
     *
     * @param string $method
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/08/2021 40:04
     */
    public function setMethod(string $method = 'POST'): Omnisend;

    /**
     * Function withPostRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 11:17
     */
    public function withPostRequest(): Omnisend;

    /**
     * Function withGetRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 11:12
     */
    public function withGetRequest(): Omnisend;

    /**
     * Function withPutRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 11:09
     */
    public function withPutRequest(): Omnisend;

    /**
     * Function withPatchRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 11:05
     */
    public function withPatchRequest(): Omnisend;

    /**
     * Function withDeleteRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 11:02
     */
    public function withDeleteRequest(): Omnisend;

    /**
     * Function withOptionsRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 10:59
     */
    public function withOptionsRequest(): Omnisend;

    /**
     * Function init
     *
     * @return \Omnisend|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/31/2021 18:26
     */
    public function init();

    /**
     * Function contracts
     *
     * @param array $params
     * @param array $body
     *
     * @return array|bool|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/08/2021 37:12
     *
     * @see      https://api-docs.omnisend.com/v3/contacts
     */
    public function contracts(array $params = [], array $body = []);

    /**
     * Function carts
     *
     * @param array $params
     * @param array $body
     *
     * @return array|bool|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/08/2021 37:17
     *
     * @see      https://api-docs.omnisend.com/v3/carts
     */
    public function carts(array $params = [], array $body = []);

    /**
     * Function orders
     *
     * @param array $params
     * @param array $body
     *
     * @return array|bool|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/08/2021 37:41
     *
     * @see      https://api-docs.omnisend.com/v3/orders
     */
    public function orders(array $params = [], array $body = []);

    /**
     * Function campaigns
     *
     * @param array $params
     * @param array $body
     *
     * @return array|bool|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/08/2021 37:47
     *
     * @see      https://api-docs.omnisend.com/v3/campaigns
     */
    public function campaigns(array $params = [], array $body = []);

    /**
     * Function products
     *
     * @param array $params
     * @param array $body
     *
     * @return array|bool|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/08/2021 37:52
     *
     * @see      https://api-docs.omnisend.com/v3/products
     */
    public function products(array $params = [], array $body = []);

    /**
     * Function categories
     *
     * @param array $params
     * @param array $body
     *
     * @return array|bool|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/08/2021 37:58
     *
     * @see      https://api-docs.omnisend.com/v3/categories
     */
    public function categories(array $params = [], array $body = []);

    /**
     * Function events
     *
     * @param array $params
     * @param array $body
     *
     * @return array|bool|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/08/2021 38:03
     *
     * @see      https://api-docs.omnisend.com/v3/events
     */
    public function events(array $params = [], array $body = []);

    /**
     * Function event - Alias of method events
     *
     * @param array $params
     * @param array $body
     *
     * @return array|bool|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 03:04
     *
     * @see      https://api-docs.omnisend.com/v3/events
     */
    public function event(array $params = [], array $body = []);

    /**
     * Function batches
     *
     * @param array $params
     * @param array $body
     * @param bool  $item
     *
     * @return array|bool|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/31/2021 20:15
     *
     * @see      https://api-docs.omnisend.com/v3/batches
     */
    public function batches(array $params = [], array $body = [], bool $item = false);
}
