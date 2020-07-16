<?php
namespace Element119\IpBanList\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\HTTP\PhpEnvironment\RemoteAddress;

class Data extends AbstractHelper
{
    const MODULE_ENABLED_CONFIG = 'ip_ban_list/general/enable';
    const BANNED_IP_LIST_CONFIG = 'ip_ban_list/ban_list/ip_addresses';
    const REDIRECT_URL_CONFIG = 'ip_ban_list/ban_list/redirect_url';

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
    public function getVisitorIp()
    {
        return ($this->isModuleEnabled()) ? $this->remoteAddress->getRemoteAddress() : false;
    }

    /**
     * @return array|mixed
     */
    public function getBannedIpsList()
    {
        $ips = [];

        if ($this->isModuleEnabled()) {
            foreach (explode(',', $this->scopeConfig->getValue(self::BANNED_IP_LIST_CONFIG)) as $ip) {
                if ($ip) {
                    $ips[] = preg_replace('/^\r\n/', '', $ip);
                }
            }
        }

        return $ips;
    }

    /**
     * @return bool
     */
    public function isVisitorBanned()
    {
        return in_array($this->getVisitorIp(), $this->getBannedIpsList());
    }

    /**
     * @return mixed|string
     */
    public function getRedirectUrl()
    {
        return ($this->isModuleEnabled()) ? $this->scopeConfig->getValue(self::REDIRECT_URL_CONFIG) : '/';
    }
}
