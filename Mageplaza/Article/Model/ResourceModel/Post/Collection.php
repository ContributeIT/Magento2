<?php


namespace Mageplaza\Article\Model\ResourceModel\Post;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'article_id';
    protected $_eventPrefix = 'sm_article_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Mageplaza\Article\Model\Post', 'Mageplaza\Article\Model\ResourceModel\Post');
    }

    public function getAllArticle(){
        return $this->getItems();
    }


}
