<?php
/**
 * Project omnisend
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/09/2021
 * Time: 09:57
 */

namespace nguyenanhung\Omnisend\Services;

use Exception;
use Omnisend as OmniSendSDK;
use nguyenanhung\Omnisend\BaseCore;

/**
 * Class Omnisend
 *
 * @package   nguyenanhung\Omnisend\Services
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Omnisend extends BaseCore
{
    /** @var string $apiKey */
    protected $apiKey;

    /** @var string $method */
    protected $method;

    /**
     * Omnisend constructor.
     *
     * @param array $options
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->logger->setLoggerSubPath(__CLASS__);
    }

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
    public function setApiKey($key): Omnisend
    {
        $this->apiKey = $key;

        return $this;
    }

    /**
     * Function getApiKey
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 58:10
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * Function getMethod
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/08/2021 39:16
     */
    public function getMethod(): string
    {
        return $this->method;
    }

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
    public function setMethod(string $method = 'POST'): Omnisend
    {
        $method       = strtoupper($method);
        $this->method = $method;

        return $this;
    }

    /**
     * Function withPostRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 11:17
     */
    public function withPostRequest(): Omnisend
    {
        $this->method = 'POST';

        return $this;
    }

    /**
     * Function withGetRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 11:12
     */
    public function withGetRequest(): Omnisend
    {
        $this->method = 'GET';

        return $this;
    }

    /**
     * Function withPutRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 11:09
     */
    public function withPutRequest(): Omnisend
    {
        $this->method = 'PUT';

        return $this;
    }

    /**
     * Function withPatchRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 11:05
     */
    public function withPatchRequest(): Omnisend
    {
        $this->method = 'PATCH';

        return $this;
    }

    /**
     * Function withDeleteRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 11:02
     */
    public function withDeleteRequest(): Omnisend
    {
        $this->method = 'DELETE';

        return $this;
    }

    /**
     * Function withOptionsRequest
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/09/2021 10:59
     */
    public function withOptionsRequest(): Omnisend
    {
        $this->method = 'OPTIONS';

        return $this;
    }

    /**
     * Function init
     *
     * @return \Omnisend|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/31/2021 18:26
     */
    public function init()
    {
        try {
            $options = array(
                'timeout'   => 30,
                'verifySSL' => false
            );

            $this->logger->debug(ucfirst(__FUNCTION__), 'Omnisend Init API Key: ' . $this->apiKey);
            $this->logger->debug(ucfirst(__FUNCTION__), 'Omnisend Init Options: ', $options);

            return new OmniSendSDK($this->apiKey, $options);
        } catch (Exception $exception) {
            $this->logger->error(__FUNCTION__, $exception->getMessage());
            $this->logger->error(__FUNCTION__, $exception->getTraceAsString());

            return null;
        }
    }

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
    public function contracts(array $params = array(), array $body = array())
    {
        $endpoint = 'contacts';
        $id       = $params['contractId'] ?? null;
        $omnisend = $this->init();
        if ($omnisend === null) {
            return null;
        }
        if ($this->method === 'GET') {
            if (!empty($id)) {
                $data = $omnisend->get($endpoint . '/' . $id, $params);
            } else {
                $data = $omnisend->get($endpoint, $params);
            }
        } elseif ($this->method === 'POST') {
            $data = $omnisend->post($endpoint, $body);
        } elseif ($this->method === 'PATCH') {
            $data = $omnisend->patch($endpoint . '/' . $id, $body);
        } else {
            $data = array();
        }

        if ($data) {
            $this->logger->debug(ucfirst(__FUNCTION__), 'Request Response for Method : ' . $this->method . ' - ' . json_encode($data));

            return $data;
        }

        $this->logger->error(ucfirst(__FUNCTION__), 'Request Response has Error for Method : ' . $this->method . ' - ' . json_encode($omnisend->lastError()));

        //there was an error
        return $omnisend->lastError();

    }

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
    public function carts(array $params = array(), array $body = array())
    {
        $endpoint  = 'carts';
        $id        = $params['cartId'] ?? null;
        $productId = $params['productId'] ?? null;
        $omnisend  = $this->init();
        if ($omnisend === null) {
            return null;
        }
        if ($this->method === 'GET') {
            if (!empty($id)) {
                // Get info
                $data = $omnisend->get($endpoint . '/' . $id, $params);
            } else {
                // Get list
                $data = $omnisend->get($endpoint, $params);
            }
        } elseif ($this->method === 'POST') {
            // Create new item
            if (!empty($id)) {
                $data = $omnisend->post($endpoint . '/' . $id . '/products', $body);
            } else {
                $data = $omnisend->post($endpoint, $body);
            }
        } elseif ($this->method === 'PUT') {
            if ($id && $productId) {
                // Replace product
                $data = $omnisend->put($endpoint . '/' . $id . '/products/' . $productId, $body);
            } else {
                // Replace existing item
                $data = $omnisend->put($endpoint . '/' . $id, $body);
            }
        } elseif ($this->method === 'PATCH') {
            if (!empty($id) && !empty($productId)) {
                $data = $omnisend->patch($endpoint . '/' . $id . '/products/' . $productId, $body);
            } else {
                // Update item
                $data = $omnisend->patch($endpoint . '/' . $id, $body);
            }
        } elseif ($this->method === 'DELETE') {
            if (!empty($id) && !empty($productId)) {
                // Remove product from cart
                $data = $omnisend->delete($endpoint . '/' . $id . '/products/' . $productId);
            } else {
                // Delete item
                $data = $omnisend->delete($endpoint . '/' . $id);
            }
        } else {
            $data = array();
        }

        if ($data) {
            $this->logger->debug(ucfirst(__FUNCTION__), 'Request Response for Method : ' . $this->method . ' - ' . json_encode($data));

            return $data;
        }

        $this->logger->error(ucfirst(__FUNCTION__), 'Request Response has Error for Method : ' . $this->method . ' - ' . json_encode($omnisend->lastError()));

        //there was an error
        return $omnisend->lastError();
    }

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
    public function orders(array $params = array(), array $body = array())
    {
        $endpoint = 'orders';
        $id       = $params['orderId'] ?? null;
        $omnisend = $this->init();
        if ($omnisend === null) {
            return null;
        }
        if ($this->method === 'GET') {
            if (!empty($id)) {
                // Get info
                $data = $omnisend->get($endpoint . '/' . $id, $params);
            } else {
                // Get list
                $data = $omnisend->get($endpoint, $params);
            }
        } elseif ($this->method === 'POST') {
            // Create new item
            $data = $omnisend->post($endpoint, $body);
        } elseif ($this->method === 'PUT') {
            // Replace existing item
            $data = $omnisend->put($endpoint . '/' . $id, $body);
        } elseif ($this->method === 'PATCH') {
            // Update order status
            $data = $omnisend->patch($endpoint . '/' . $id, $body);
        } elseif ($this->method === 'DELETE') {
            // Delete item
            $data = $omnisend->delete($endpoint . '/' . $id);
        } else {
            $data = array();
        }

        if ($data) {
            $this->logger->debug(ucfirst(__FUNCTION__), 'Request Response for Method : ' . $this->method . ' - ' . json_encode($data));

            return $data;
        }

        $this->logger->error(ucfirst(__FUNCTION__), 'Request Response has Error for Method : ' . $this->method . ' - ' . json_encode($omnisend->lastError()));

        //there was an error
        return $omnisend->lastError();
    }

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
    public function campaigns(array $params = array(), array $body = array())
    {
        $endpoint  = 'campaigns';
        $id        = $params['campaignId'] ?? null;
        $contactId = $params['contactId'] ?? null;
        $omnisend  = $this->init();
        if ($omnisend === null) {
            return null;
        }
        if ($this->method === 'GET') {
            if (!empty($id)) {
                $data = !empty($contactId) ? $omnisend->get($endpoint . '/' . $id . '/contacts/' . $contactId, $params) : $omnisend->get($endpoint . '/' . $id, $params);
            } elseif (!empty($contactId)) {
                $data = $omnisend->get($endpoint . '/' . $id . '/contacts', $params);
            } else {
                // Get list
                $data = $omnisend->get($endpoint, $params);
            }
        } elseif ($this->method === 'POST') {
            // Start sending campaign emails
            $data = $omnisend->post($endpoint . '/' . $id . '/actions/start', $body);
        } elseif ($this->method === 'DELETE') {
            // Delete item
            $data = $omnisend->delete($endpoint . '/' . $id);
        } else {
            $data = [];
        }

        if ($data) {
            $this->logger->debug(ucfirst(__FUNCTION__), 'Request Response for Method : ' . $this->method . ' - ' . json_encode($data));

            return $data;
        }

        $this->logger->error(ucfirst(__FUNCTION__), 'Request Response has Error for Method : ' . $this->method . ' - ' . json_encode($omnisend->lastError()));

        //there was an error
        return $omnisend->lastError();
    }

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
    public function products(array $params = array(), array $body = array())
    {
        $endpoint = 'products';
        $id       = $params['productId'] ?? null;
        $omnisend = $this->init();
        if ($omnisend === null) {
            return null;
        }
        if ($this->method === 'GET') {
            if (!empty($id)) {
                // Get info
                $data = $omnisend->get($endpoint . '/' . $id, $params);
            } else {
                // Get list
                $data = $omnisend->get($endpoint, $params);
            }
        } elseif ($this->method === 'POST') {
            // Create new item
            $data = $omnisend->post($endpoint, $body);
        } elseif ($this->method === 'PUT') {
            // Replace existing item
            $data = $omnisend->put($endpoint . '/' . $id, $body);
        } elseif ($this->method === 'DELETE') {
            // Delete item
            $data = $omnisend->delete($endpoint . '/' . $id);
        } else {
            $data = [];
        }

        if ($data) {
            $this->logger->debug(ucfirst(__FUNCTION__), 'Request Response for Method : ' . $this->method . ' - ' . json_encode($data));

            return $data;
        }

        $this->logger->error(ucfirst(__FUNCTION__), 'Request Response has Error for Method : ' . $this->method . ' - ' . json_encode($omnisend->lastError()));

        //there was an error
        return $omnisend->lastError();
    }

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
    public function categories(array $params = array(), array $body = array())
    {
        $endpoint = 'products';
        $id       = $params['categoryId'] ?? null;
        $omnisend = $this->init();
        if ($omnisend === null) {
            return null;
        }
        if ($this->method === 'GET') {
            if (!empty($id)) {
                // Get info
                $data = $omnisend->get($endpoint . '/' . $id, $params);
            } else {
                // Get list
                $data = $omnisend->get($endpoint, $params);
            }
        } elseif ($this->method === 'POST') {
            // Create new item
            $data = $omnisend->post($endpoint, $body);
        } elseif ($this->method === 'PUT') {
            // Replace existing item
            $data = $omnisend->put($endpoint . '/' . $id, $body);
        } elseif ($this->method === 'DELETE') {
            // Delete item
            $data = $omnisend->delete($endpoint . '/' . $id);
        } else {
            $data = [];
        }

        if ($data) {
            $this->logger->debug(ucfirst(__FUNCTION__), 'Request Response for Method : ' . $this->method . ' - ' . json_encode($data));

            return $data;
        }

        $this->logger->error(ucfirst(__FUNCTION__), 'Request Response has Error for Method : ' . $this->method . ' - ' . json_encode($omnisend->lastError()));

        //there was an error
        return $omnisend->lastError();
    }

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
    public function events(array $params = array(), array $body = array())
    {
        $endpoint = 'events';
        $id       = $params['eventId'] ?? null;
        $omnisend = $this->init();
        if ($omnisend === null) {
            return null;
        }
        if ($this->method === 'GET') {
            if (!empty($id)) {
                // Get info
                $data = $omnisend->get($endpoint . '/' . $id, $params);
            } else {
                // Get list
                $data = $omnisend->get($endpoint, $params);
            }
        } elseif ($this->method === 'POST') {
            if (!empty($id)) {
                // Trigger custom event
                $data = $omnisend->post($endpoint . '/' . $id, $body);
            } else {
                // Trigger or create custom event
                $data = $omnisend->post($endpoint, $body);
            }
        } else {
            $data = [];
        }

        if ($data) {
            $this->logger->debug(ucfirst(__FUNCTION__), 'Request Response for Method : ' . $this->method . ' - ' . json_encode($data));

            return $data;
        }

        $this->logger->error(ucfirst(__FUNCTION__), 'Request Response has Error for Method : ' . $this->method . ' - ' . json_encode($omnisend->lastError()));

        //there was an error
        return $omnisend->lastError();
    }

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
    public function event(array $params = array(), array $body = array())
    {
        return $this->events($params, $body);
    }

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
    public function batches(array $params = array(), array $body = array(), bool $item = false)
    {
        $endpoint = 'batches';
        $id       = $params['batchId'] ?? null;
        $itemId   = $params['itemId'] ?? null;
        $omnisend = $this->init();
        if ($omnisend === null) {
            return null;
        }
        if ($this->method === 'GET') {
            if (!empty($id)) {
                // Get info
                if ($item) {
                    if (!empty($itemId)) {
                        $data = $omnisend->get($endpoint . '/' . $id . '/items/' . $itemId, $params);
                    } else {
                        $data = $omnisend->get($endpoint . '/' . $id . '/items', $params);
                    }
                } else {
                    $data = $omnisend->get($endpoint . '/' . $id, $params);
                }
            } else {
                // Get list
                $data = $omnisend->get($endpoint, $params);
            }
        } elseif ($this->method === 'POST') {
            // Create new item
            $data = $omnisend->post($endpoint, $body);
        } elseif ($this->method === 'PUT') {
            // Replace existing item
            $data = $omnisend->put($endpoint . '/' . $id, $body);
        } elseif ($this->method === 'DELETE') {
            // Delete item
            $data = $omnisend->delete($endpoint . '/' . $id);
        } else {
            $data = [];
        }

        if ($data) {
            $this->logger->debug(ucfirst(__FUNCTION__), 'Request Response for Method : ' . $this->method . ' - ' . json_encode($data));

            return $data;
        }

        $this->logger->error(ucfirst(__FUNCTION__), 'Request Response has Error for Method : ' . $this->method . ' - ' . json_encode($omnisend->lastError()));

        //there was an error
        return $omnisend->lastError();
    }
}
