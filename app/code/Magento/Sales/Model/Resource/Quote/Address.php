<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Sales\Model\Resource\Quote;

use Magento\Framework\Model\Resource\Db\AbstractDb;

/**
 * Quote address resource model
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Address extends AbstractDb
{
    /**
     * Main table and field initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('sales_quote_address', 'address_id');
    }
}
