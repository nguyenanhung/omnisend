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
 * Trait SDKConfig
 *
 * @package   nguyenanhung\Omnisend\Traits
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
trait SDKConfig
{
    /**
     * Function getSdkConfig
     *
     * @return mixed
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 54:29
     */
    public function getSdkConfig()
    {
        return $this->sdkConfig;
    }

    /**
     * Function getSdkConfigOptions
     *
     * @return mixed|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/22/2021 52:28
     */
    public function getSdkConfigOptions()
    {
        if (isset($this->sdkConfig['OPTIONS'])) {
            return $this->sdkConfig['OPTIONS'];
        }

        return null;
    }

    /**
     * Function getSdkConfigServices
     *
     * @return mixed|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/22/2021 52:53
     */
    public function getSdkConfigServices()
    {
        if (isset($this->sdkConfig['SERVICES'])) {
            return $this->sdkConfig['SERVICES'];
        }

        return null;
    }

    /**
     * Function getSdkConfigShowConfirmHash
     *
     * @return mixed|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/22/2021 54:55
     */
    public function getSdkConfigShowConfirmHash()
    {
        $options = $this->getSdkConfigOptions();
        if (isset($options['showConfirmHash'])) {
            return $options['showConfirmHash'];
        }

        return null;
    }

    /**
     * Function setSdkConfig
     *
     * @param array $sdkConfig
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 54:51
     */
    public function setSdkConfig(array $sdkConfig)
    {
        $this->sdkConfig = $sdkConfig;

        return $this;
    }
}
