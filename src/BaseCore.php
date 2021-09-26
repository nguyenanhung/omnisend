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

use nguyenanhung\MyDebug\Logger;
use nguyenanhung\Omnisend\Traits\InputData;
use nguyenanhung\Omnisend\Traits\Response;
use nguyenanhung\Omnisend\Traits\SDKConfig;
use nguyenanhung\Omnisend\Traits\Version;

/**
 * Class BaseCore
 *
 * @package   nguyenanhung\Omnisend
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BaseCore implements Environment
{
    const EXIT_SUCCESS            = 0; // no errors
    const EXIT_ERROR              = 1; // generic error
    const EXIT_ACCESS_DENIED      = 2; // access denied
    const EXIT_CONFIG             = 3; // configuration error
    const EXIT_UNKNOWN_FILE       = 4; // file not found
    const EXIT_UNKNOWN_CLASS      = 5; // unknown class
    const EXIT_UNKNOWN_METHOD     = 6; // unknown class member
    const EXIT_USER_INPUT         = 7; // invalid user input
    const EXIT_DATABASE           = 8; // database error
    const EXIT_UNKNOWN_REQUEST    = 9; // invalid request
    const EXIT_REDIRECT_TO_RETURN = 10; // Return to Return URL

    use Version, SDKConfig, InputData, Response;

    /** @var \nguyenanhung\MyDebug\Logger $logger */
    protected $logger;

    /** @var mixed|array SDK Config */
    protected $sdkConfig;

    /** @var array $options */
    protected $options;

    /** @var array $inputData */
    protected $inputData;

    /** @var array|object|string $response */
    protected $response;

    /** @var bool $responseIsObject */
    protected $responseIsObject = false;

    /** @var bool $responseIsObject */
    protected $responseIsJson = false;

    /**
     * BaseCore constructor.
     *
     * @param array $options
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct(array $options = array())
    {
        $this->options = $options;
        $this->logger  = new Logger();
        if (isset($options['debugStatus']) && $options['debugStatus'] === true) {
            $this->logger->setDebugStatus(true);
            if (isset($options['debugLevel']) && !empty($options['debugLevel'])) {
                $this->logger->setGlobalLoggerLevel($options['debugLevel']);
            }
            if (isset($options['loggerPath']) && !empty($options['loggerPath'])) {
                $this->logger->setLoggerPath($options['loggerPath']);
            }
            $this->logger->setLoggerSubPath(__CLASS__);
            $this->logger->setLoggerFilename('Log-' . date('Y-m-d') . '.log');
        }
    }
}
