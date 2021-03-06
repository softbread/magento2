<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */

namespace Magento\Reports\Test\Block\Adminhtml\Product\Viewed;

use Magento\Reports\Test\Block\Adminhtml\Customer\Totals\Grid;

/**
 * Product Views Report.
 */
class ProductGrid extends Grid
{
    /**
     * Filters array mapping
     *
     * @var array
     */
    protected $filters = [
        'date' => [
            'selector' => 'td[contains(@class,"col-period") and normalize-space(.)="%s"]',
        ],
        'product' => [
            'selector' => 'td[contains(@class,"col-product") and normalize-space(.)="%s"]',
        ],
        'price' => [
            'selector' => 'td[contains(@class,"col-price") and contains(.,"%s")]',
        ],
        'orders' => [
            'selector' => 'td[contains(@class,"col-qty") and normalize-space(.)="%s"]',
        ],
    ];
}
