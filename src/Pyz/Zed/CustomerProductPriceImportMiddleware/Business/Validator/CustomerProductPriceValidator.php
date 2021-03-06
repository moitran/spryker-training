<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\CustomerProductPriceImportMiddleware\Business\Validator;

use Pyz\Zed\CustomerProductPriceImportMiddleware\Business\Mapper\CustomerProductPriceMapper;
use SprykerMiddleware\Zed\Process\Business\Validator\ValidationRuleSet\AbstractValidationRuleSet;

class CustomerProductPriceValidator extends AbstractValidationRuleSet
{
    /**
     * @return array
     */
    protected function getRules(): array
    {
        return [
            CustomerProductPriceMapper::MAP_COL_CUSTOMER_NUMBER => [
                'Required',
                [
                    'Type',
                    'options' => [
                        'type' => 'string',
                    ],
                ],
            ],
            CustomerProductPriceMapper::MAP_COL_PRODUCT_NUMBER => [
                'Required',
                [
                    'Type',
                    'options' => [
                        'type' => 'string',
                    ],
                ],
            ],
            CustomerProductPriceMapper::MAP_COL_PRICES => [
                'Required',
                [
                    'Type',
                    'options' => [
                        'type' => 'array',
                    ],
                ],
            ],
        ];
    }
}
