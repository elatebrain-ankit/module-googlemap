<?php
/**
 * ElateBrain
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the elatebrain.com license which is available at https://www.elatebrain.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer version in the future.
 * If you wish to customize this extension for your needs, please refer to https://magento.com for more information.
 *
 * @category    Elatebrain
 * @package     Elatebrain_GoogleMap
 * @version     1.0.1
 * @copyright   Copyright (c) 2019 Elatebrain (https://www.elatebrain.com/)
 * @license     https://www.elatebrain.com/LICENSE.txt
 */

namespace Elatebrain\GoogleMap\Model\Config\Source;


/**
 *
 */
class MapTypes implements \Magento\Framework\Option\ArrayInterface
{

    /**
     *
     */
    public const ROADMAP = "roadmap";
    /**
     *
     */
    public const SATELLITE = "satellite";
    /**
     *
     */
    public const HYBRID = "hybrid";
    /**
     *
     */
    public const TERRAIN = "terrain";

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::ROADMAP, 'label' => __('Roadmap')],
            ['value' => self::SATELLITE, 'label' => __('Satellite')],
            ['value' => self::HYBRID, 'label' => __('Hybrid')],
            ['value' => self::TERRAIN, 'label' => __('Terrain')]
        ];
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [self::ROADMAP => __('Roadmap'), self::SATELLITE => __('Satellite'), self::HYBRID => __('Hybrid'), self::TERRAIN => __('Terrain')];
    }
}