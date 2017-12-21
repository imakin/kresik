<?php
class Test_Muhammad_Block_List extends Mage_Catalog_Block_Product_List
{
    protected $_itemCollection = null;

    public function getItems()
    {
        if (is_null($this->_itemCollection)) {
            $this->_itemCollection = Mage::getModel('test_muhammad/products')->
                getItemsCollection();
        }

        return $this->_itemCollection;
    }
}
