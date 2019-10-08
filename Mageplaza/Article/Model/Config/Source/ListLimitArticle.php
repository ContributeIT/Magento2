<?php
// Using the input value to set the default pages limit option for the websites

namespace Mageplaza\Article\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
class ListLimitArticle
{
    public function toOptionArray()
    {
        return [
            ['value' => 2, 'label' => __('2')],
            ['value' => 4, 'label' => __('4')],
            ['value' => 6, 'label' => __('6')]
        ];
    }

}