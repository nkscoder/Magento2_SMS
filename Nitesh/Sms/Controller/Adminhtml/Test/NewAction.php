<?php
namespace Nitesh\Sms\Controller\Adminhtml\Test;
use Magento\Backend\App\Action;
use Nitesh\Sms\Model\Sms as Sms;

class NewAction extends \Magento\Backend\App\Action
{
    /**
     * Edit A Contact Page
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Backend\Model\View\Result\Redirect
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
//        var_dump($this->getRequest()->getParam('sms'));
//        die();
        $contactDatas = $this->getRequest()->getParam('sms');

        if(is_array($contactDatas)) {
            $resource = $this->_objectManager->create('\Magento\Framework\App\ResourceConnection');
            $connection = $resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
            $sms = $this->_objectManager->create(Sms::class);

            try{

                     $id= $sms->setData($contactDatas)->save();
                    $this->messageManager->addSuccess(__('your sms has been saved successfully.'));
                
                } catch (Exception $e) {
                $this->messageManager->addError(__('Error while trying to save sms: '));

            }


            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/index');
        }
    }
}