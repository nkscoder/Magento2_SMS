<?php
namespace Nitesh\Sms\Controller\Adminhtml\Test;
use Nitesh\Sms\Model\Sms as Sms;
use Nitesh\Sms\Model\Sms\DataProvider as Smses;
use Magento\Backend\App\Action;

class Edit extends \Magento\Backend\App\Action
{
    public function execute()
    {

        $this->_view->loadLayout();
        $this->_view->renderLayout();


        $contactDatas = $this->getRequest()->getParam('sms');
//        var_dump($contactDatas);
//        die();
        if(is_array($contactDatas)) {
            $resource = $this->_objectManager->create('\Magento\Framework\App\ResourceConnection');
            $connection = $resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);

            $sms = $this->_objectManager->create(Sms::class);

            try {
      

                $id= $sms->setData($contactDatas)->save();

                $this->messageManager->addSuccess(__('your sms has been update successfully.'));

            }
            catch (Exception $e) {
                $this->messageManager->addError(__('Error while trying to update sms: '));

            }


            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/index');
        }




    }
}