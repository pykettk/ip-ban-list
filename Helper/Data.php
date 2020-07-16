<?php
namespace Element119\IpBanList\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\HTTP\PhpEnvironment\RemoteAddress;

class Data extends AbstractHelper
{
    const MODULE_ENABLED_CONFIG = 'ip_ban_list/general/enable';

    /** @var RemoteAddress */
    protected $remoteAddress;

    /**
     * Data constructor.
     *
     * @param Context $context
     * @param RemoteAddress $remoteAddress
     */
    public function __construct(
        Context $context,
        RemoteAddress $remoteAddress
    ) {
        parent::__construct($context);

        $this->remoteAddress = $remoteAddress;
    }

    /**
     * @return bool
     */
    public function isModuleEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::MODULE_ENABLED_CONFIG);
    }

    /**
     * @return bool|string
     */
    public function getCustomerIp()
    {
        return ($this->isModuleEnabled()) ? $this->remoteAddress->getRemoteAddress() : false;
    }
}
