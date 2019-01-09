<?php
/**
 * Created by PhpStorm.
 * User: nitesh
 * Date: 16/12/18
 * Time: 4:59 PM
 */



namespace Nitesh\Sms\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Nitesh\Sms\Model\ResourceModel\Post\Collection as PostCollection;
use \Nitesh\Sms\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;
use \Nitesh\Sms\Model\Post;

class NewSms extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_postCollectionFactory = null;


    /**
     * Constructor
     *
     * @param Context $context
     * @param PostCollectionFactory $postCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        PostCollectionFactory $postCollectionFactory,
        array $data = []
    ) {
        $this->_postCollectionFactory = $postCollectionFactory;
        parent::__construct($context, $data);

    }

    /**
     * @return Post[]
     */
    public function getNewSms()
    {
        /** @var PostCollection $postCollection */
        $postCollection = $this->_postCollectionFactory->create();
        
        $postCollection->addFieldToSelect('*');
        $postCollection->load();
        
        return $postCollection->getItems();
    }

    /**
     * For a given post, returns its url
     * @param Post $post
     * @return string
     */
    public function getPostUrl(
        Post $post
    ) {
        return $this->getUrl().'sms/post/view/id/'. $post->getId();
    }



}