<?php


namespace Mageplaza\Article\Controller\Index;

use \Mageplaza\Article\Helper\Data;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
class DisplayAllArticles extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $_helperData;
    public function __construct(Context $context,PageFactory $pageFactory, Data $helperData)
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

