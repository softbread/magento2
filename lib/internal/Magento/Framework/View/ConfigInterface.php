<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Framework\View;

/**
 * Config Interface
 */
interface ConfigInterface
{
    /**
     * Filename of view configuration
     */
    const CONFIG_FILE_NAME = 'etc/view.xml';

    /**
     * Render view config object for current package and theme
     *
     * @param array $params
     * @return \Magento\Framework\Config\View
     */
    public function getViewConfig(array $params = []);
}
