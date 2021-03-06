<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */

namespace Magento\ImportExport\Test\Block\Adminhtml\Export;

use Magento\Backend\Test\Block\Widget\Grid;

/**
 * Class Filter
 * Filter for export grid
 */
class Filter extends Grid
{
    /**
     * Filters array mapping
     *
     * @var array
     */
    protected $filters = [
        'frontend_label' => [
            'selector' => 'input[name="frontend_label"]',
        ],
        'attribute_code' => [
            'selector' => 'input[name="attribute_code"]',
        ],
    ];
}
