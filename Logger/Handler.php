<?php
/* Vtn_Base Handler Block
* @category VTN
* @package Vtn_Base
* @version 1.0.0
* @author VTNetzwelt
*/

namespace Vtn\Base\Logger;

use Monolog\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level.
     *
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * File name.
     *
     * @var string
     */
    protected $fileName = '/var/log/vtn.log';
}
