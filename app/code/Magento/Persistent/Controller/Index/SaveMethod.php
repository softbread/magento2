<?php
/**
 *
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Persistent\Controller\Index;

class SaveMethod extends \Magento\Persistent\Controller\Index
{
    /**
     * @var \Magento\Persistent\Model\QuoteManager
     */
    protected $quoteManager;

    /**
     * Save onepage checkout method to be register
     *
     * @return void
     */
    public function execute()
    {
        if ($this->_getHelper()->isPersistent()) {
            $this->_getHelper()->getSession()->removePersistentCookie();
            if (!$this->_customerSession->isLoggedIn()) {
                $this->_customerSession->setCustomerId(null)->setCustomerGroupId(null);
            }

            $this->quoteManager->setGuest();
        }

        $checkoutUrl = $this->_redirect->getRefererUrl();
        $this->getResponse()->setRedirect($checkoutUrl . (strpos($checkoutUrl, '?') ? '&' : '?') . 'register');
    }
}
