<?php


namespace Mageplaza\Article\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Mageplaza\Article\Model\ResourceModel\Post\CollectionFactory;

class DisplayAllArticles extends Template
{
    protected $_postFactory;
    public function __construct(Context $context,CollectionFactory $collectionFactory)
    {
        $this->_postFactory = $collectionFactory;
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello World');
    }

    public function loadAllArticles(){
        $post = $this->_postFactory->create();
        return $post->getAllArticle();// day la cach viet kieu khac , de truy cap truc tiep vao database su dung file collection cua Model\ResourceModel
    } //getItems tuong tu nhu getCollection khi su dung file post cua model de truy cap csdl (getCollection = collection->getItems)
}