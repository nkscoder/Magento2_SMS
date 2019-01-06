<?php

namespace Nitesh\Sms\Model\ResourceModel\Recipe;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Contact Resource Model Collection
 *
 * @author      Pierre FAY
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Nitesh\Sms\Model\Sms', 'Nitesh\Sms\Model\ResourceModel\Sms');
    }
}
