<?php


namespace Mageplaza\Article\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Mageplaza\Article\Model\ResourceModel\Post\CollectionFactory;
use \Magento\Framework\App\Request\Http;
use \Magento\Framework\UrlInterface;

class ArticleDetail extends Template
{
    protected $_request;
    protected $_urlInterface;
    protected $_collectFactory;

    public function __construct(Context $context, CollectionFactory $collectionFactory, Http $request, UrlInterface $urlInterface)
    {
        $this->_urlInterface = $urlInterface;
        $this->_collectFactory = $collectionFactory;
        $this->_request = $request;
        parent::__construct($context);
    }

    public function loadSpecificArticle()
    {
//        $id = $this->getParam('id');
        $id = $this->_request->getParam('id');
        $collector = $this->_collectFactory->create();
        $collector->addFieldToFilter('article_id', $id);

        $object = $collector->getData();
        return $object;
    }

    public function getBaseUrl()
    {
        return $this->_urlInterface->getBaseUrl();
    }

}