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
class Positions implements \Magento\Framework\Option\ArrayInterface
{

    /**
     *
     */
    public const TOP = "top";
    /**
     *
     */
    public const BOTTOM = "bottom";
    /**
     *
     */
    public const WIDGET = "widget";

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::TOP, 'label' => __('Top')],
            ['value' => self::BOTTOM, 'label' => __('Bottom')],
            ['value' => self::WIDGET, 'label' => __('Disable on Contact Us Page. Enable as widget.')]
        ];
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [self::TOP => __('Top'), self::BOTTOM => __('Bottom'), self::WIDGET => __('Disable on Contact Us Page. Enable as widget.')];
    }
}