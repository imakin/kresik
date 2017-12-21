<?php
class Test_Muhammad_Model_Products extends Mage_Catalog_Model_Product
{
    public function getItemsCollection()
    {
        $collection = $this->getCollection()
            ->addAttributeToSelect('*')
            ->addAttributeToFilter(
                'sort_order',
                array('notnull' => true)
            );
        Mage::getSingleton('cataloginventory/stock')->
            addInStockFilterToCollection($collection);
        return $collection;
    }
}
