<?php
namespace Nitesh\Sms\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Nitesh\Sms\Model\Post', 'Nitesh\Sms\Model\ResourceModel\Post');
    }
}