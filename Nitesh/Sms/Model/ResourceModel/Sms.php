<?php
/**
 * Created by PhpStorm.
 * User: nitesh
 * nkscoder@gmail.com
 * Date: 01/01/19
 * Time: 4:59 PM
 */
namespace Nitesh\Sms\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Contact Resource Model
 *
 * @author      Pierre FAY
 */
class Sms extends AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('nitesh_sms', 'sms_id');
    }
}