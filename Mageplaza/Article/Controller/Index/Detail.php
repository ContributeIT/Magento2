<?php


namespace Mageplaza\Article\Controller\Index;

use \Mageplaza\Article\Helper\Data;
use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
//use \Mageplaza\Article\Model\PostFactory;
use \Mageplaza\Article\Model\ResourceModel\Post\CollectionFactory;

class Detail extends Action
{
    protected $_pageFactory;
    protected $_helperData;

    public function __construct(Context $context, PageFactory $pageFactory, Data $helperData)
    {
        $this->_pageFactory = $pageFactory;
        $this->_helperData = $helperData;
        return parent::__construct($context);

    }

    public function execute()
    {
        if (!$this->_helperData->getGeneralConfig('enable')) {
            $this->_redirect('/');
        }
        return $this->_pageFactory->create();
    }
}
