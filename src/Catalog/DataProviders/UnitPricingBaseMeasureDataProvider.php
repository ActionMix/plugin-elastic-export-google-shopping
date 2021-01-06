<?php

namespace ElasticExportGoogleShopping\Catalog\DataProviders;

use ElasticExportGoogleShopping\Catalog\Contracts\AbstractKeyDataProvider;

/**
 * Class UnitPricingBaseMeasureDataProvider
 * @package ElasticExportGoogleShopping\Catalog\DataProviders
 */
class UnitPricingBaseMeasureDataProvider extends AbstractKeyDataProvider
{

    /**
     * @return string
     */
    public function getKey(): string
    {
        return 'Unit Pricing Base Measure';
    }

    /**
     * @inheritDoc
     */
    protected function getProviderValues(): array
    {
        //FIXME CHECK Google documentation
        return [
            'oz',
            'lb',
            'mg',
            'g',
            'kg',
            'floz',
            'pt',
            'qt',
            'gal',
            'ml',
            'cl',
            'l',
            'cbm',
            'in',
            'ft',
            'yd',
            'cm',
            'm',
            'sqft',
            'sqm',
            'ct'
        ];
    }
}