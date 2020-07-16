<?php
namespace Element119\IpBanList\Observer;

use Element119\IpBanList\Helper\Data;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\Response\RedirectInterface;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class RedirectBannedIp implements ObserverInterface
{
    /** @var Data */
    protected $dataHelper;

    /** @var ResponseInterface */
    protected $response;

    /** @var RedirectInterface */
    protected $redirect;

    /**
     * RedirectBannedIp constructor.
     *
     * @param Data $dataHelper
     * @param ResponseInterface $response
     * @param RedirectInterface $redirect
     */
    public function __construct(
        Data $dataHelper,
        ResponseInterface $response,
        RedirectInterface $redirect
    ) {
        $this->dataHelper = $dataHelper;
        $this->response = $response;
        $this->redirect = $redirect;
    }

    /**
     * Redirect visitor if their IP is banned.
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        if ($this->dataHelper->isVisitorBanned()) {
            $this->redirect->redirect($this->response, $this->dataHelper->getRedirectUrl());
        }
    }
}
