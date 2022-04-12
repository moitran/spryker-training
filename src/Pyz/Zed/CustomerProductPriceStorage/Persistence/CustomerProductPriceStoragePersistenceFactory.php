<?php

namespace Pyz\Zed\CustomerProductPriceStorage\Persistence;

use Pyz\Zed\CustomerProductPrice\Persistence\CustomerProductPriceQueryContainer;
use Pyz\Zed\CustomerProductPriceStorage\CustomerProductPriceStorageDependencyProvider;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * Class CustomerProductPriceStoragePersistenceFactory
 * @package Pyz\Zed\CustomerProductPriceStorage\Persistence
 */
class CustomerProductPriceStoragePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return CustomerProductPriceQueryContainer
     */
    public function getCustomerProductPriceQueryContainer()
    {
        return $this->getProvidedDependency(CustomerProductPriceStorageDependencyProvider::CUSTOMER_PRODUCT_PRICE_QUERY_CONTAINER);
    }
}