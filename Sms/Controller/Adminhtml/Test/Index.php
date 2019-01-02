<?php
namespace Nitesh\Sms\Controller\Adminhtml\Test;
use Magento\Backend\App\Action;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}