<?php


namespace Mageplaza\Article\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Mageplaza\Article\Model\ResourceModel\Post\CollectionFactory;
use \Magento\Framework\UrlInterface;
use \Magento\Framework\App\Request\Http;
use Mageplaza\Article\Helper\Data;

class DisplayAllArticles extends Template
{
    protected $_collectFactory;
    protected $_urlInterface;
    protected $_limit;
    public function __construct(Context $context,CollectionFactory $collectionFactory,UrlInterface $urlInterface, Http $request, Data $helperData)
    {
        $this->_urlInterface = $urlInterface;
        $this->_collectFactory = $collectionFactory;
        $this->_limit = (int) $helperData->getGeneralConfig('limit');
        parent::__construct($context);
    }

    public function loadAllArticles(){
//        $this->limit = $this->_helperData->getGeneralConfig('limit');
        $page = (($this->getRequest()->getParam('p')) ? $this->getRequest()->getParam('p') : 1);
        $pageSize = ($this->getRequest()->getParam('limit')) ?
            $this->getRequest()->getParam('limit') : $this->_limit;
        $__collectFactory = $this->_collectFactory->create();
        $__collectFactory->setPageSize($pageSize);
        $__collectFactory->setCurPage($page);
        return $__collectFactory;
    }

    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if ($this->loadAllArticles()) {
            $this->pageConfig->getTitle()->set(__('Articles'));
            $pager = $this->getLayout()
                ->createBlock('Magento\Theme\Block\Html\Pager', 'mageplaza.index')
                ->setAvailableLimit([
                    $this->_limit => $this->_limit,
                    $this->_limit*2 => $this->_limit*2,
                    $this->_limit*3 => $this->_limit*3
                ])
                ->setShowPerPage(true)->setCollection($this->loadAllArticles());
            $this->setChild('pager', $pager);
            $this->loadAllArticles()->load();
        }
    }

    public function getBaseUrl()
    {
        return $this->_urlInterface->getBaseUrl();
    }

    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }
}