<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Finding\Types;

/**
 *
 * @property DTS\eBaySDK\Finding\Types\AspectFilter $aspectFilter
 * @property string $categoryId
 * @property DTS\eBaySDK\Finding\Types\DomainFilter $domainFilter
 * @property DTS\eBaySDK\Finding\Types\ItemFilter $itemFilter
 * @property string $keywords
 * @property DTS\eBaySDK\Finding\Types\OutputSelectorType(string) $outputSelector
 * @property string $storeName
 */
class FindItemsIneBayStoresRequest extends \DTS\eBaySDK\Finding\Types\BaseFindingServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'aspectFilter' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\AspectFilter',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'aspectFilter'
        ),
        'categoryId' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'categoryId'
        ),
        'domainFilter' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\DomainFilter',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'domainFilter'
        ),
        'itemFilter' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\ItemFilter',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'itemFilter'
        ),
        'keywords' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'keywords'
        ),
        'outputSelector' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'outputSelector'
        ),
        'storeName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'storeName'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'http://www.ebay.com/marketplace/search/v1/services';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
