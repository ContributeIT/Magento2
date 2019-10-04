<?php


namespace Mageplaza\Article\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'sm_article';

    protected $_cacheTag = 'sm_article';

    protected $_eventPrefix = 'sm_article';

    protected function _construct()
    {
        $this->_init('Mageplaza\Article\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}