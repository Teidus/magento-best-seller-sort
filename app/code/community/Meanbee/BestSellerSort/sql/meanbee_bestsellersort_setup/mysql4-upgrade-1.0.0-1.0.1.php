<?php

$installer = $this;

$installer->startSetup();

$installer->updateAttribute('catalog_product', Meanbee_BestSellerSort_Helper_Data::ATTRIBUTE_NAME_QTY_ORDERED, 'default_value', 0);

$installer->endSetup();
