<?php
/**
 * Created by Adam Jakab.
 * Date: 26/09/16
 * Time: 14.17
 */

namespace ABJ\Bundle\SalesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ABJSalesBundle
 *
 * @package ABJ\Bundle\SalesBundle
 */
class ABJSalesBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'OroCRMSalesBundle';
    }
}