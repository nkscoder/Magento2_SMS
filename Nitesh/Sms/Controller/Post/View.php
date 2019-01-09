<?php
/**
 * Created by PhpStorm.
 * User: nitesh
 * nkscoder@gmail.com
 * Date: 01/01/19
 * Time: 4:59 PM
 */
namespace Nitesh\Sms\Controller\Post;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\View\Result\Page;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\Exception\LocalizedException;
use \Magento\Framework\Registry;

class View extends Action
{
    const REGISTRY_KEY_POST_ID = 'nitesh_sms_sms_id';

    /**
     * Core registry
     * @var Registry
     */
    protected $_coreRegistry;

    /**
     * @var PageFactory
     */
    protected $_resultPageFactory;

    /**
     * @param Context $context
     * @param Registry $coreRegistry
     * @param PageFactory $resultPageFactory
     *
     * @codeCoverageIgnore
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        PageFactory $resultPageFactory
    ) {
        parent::__construct(
            $context
        );
        $this->_coreRegistry = $coreRegistry;
        $this->_resultPageFactory = $resultPageFactory;
    }

    /**
     * Saves the blog id to the register and renders the page
     * @return Page
     * @throws LocalizedException
     */
    public function execute()
    {

        $this->_coreRegistry->register(self::REGISTRY_KEY_POST_ID, (int) $this->_request->getParam('id'));
        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
    }
}