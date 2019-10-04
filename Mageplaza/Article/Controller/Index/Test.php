<?php


namespace Mageplaza\Article\Controller\Index;


class Test extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        $textDisplay = new \Magento\Framework\DataObject(array('text' => 'Congrat u !!! 10% of the code cracked'));
        $this->_eventManager->dispatch('mageplaza_article_display_text', ['mp_text' => $textDisplay]);
        echo $textDisplay->getText();
        exit;
    }
}
