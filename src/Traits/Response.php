<?php
/**
 * Project omnisend
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/09/2021
 * Time: 09:50
 */

namespace nguyenanhung\Omnisend\Traits;

/**
 * Trait Response
 *
 * @package   nguyenanhung\Omnisend\Traits
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
trait Response
{
    /**
     * Function setResponseIsObject
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/11/2021 49:08
     */
    public function setResponseIsObject()
    {
        $this->responseIsObject = TRUE;

        return $this;
    }

    /**
     * Function setResponseIsJson
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/11/2021 49:11
     */
    public function setResponseIsJson()
    {
        $this->responseIsJson = TRUE;

        return $this;
    }

    /**
     * Function getResponse
     *
     * @return array|mixed|object|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/11/2021 49:13
     */
    public function getResponse()
    {
        if ($this->responseIsJson === TRUE) {
            return json_encode($this->response);
        }
        if (($this->responseIsObject === true) && is_array($this->response)) {
            return arrayToObject($this->response);
        }

        return $this->response;
    }

    /**
     * Function toJson
     *
     * @return false|string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/11/2021 48:58
     */
    public function toJson()
    {
        return json_encode($this->response);
    }
}
