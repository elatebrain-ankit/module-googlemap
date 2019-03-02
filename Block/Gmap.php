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

namespace Elatebrain\GoogleMap\Block;


use Elatebrain\GoogleMap\Helper\Data;
use Elatebrain\GoogleMap\Model\Config\Source\Positions;
use Magento\Framework\View\Element\Template;

/**
 *
 */
class Gmap extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    /**
     * @var Data
     */
    protected $_helper;
    /**
     * @var string
     */
    protected $_template = 'Elatebrain_GoogleMap::gmap.phtml';

    /**
     * Gmap constructor.
     * @param Template\Context $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Data $helper,
        array $data = []
    )
    {
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     */
    public function getMapId()
    {
        if (!$this->hasData('map_id')) {
            $this->setData('map_id', uniqid('ebgooglemap-'));
        }

        return $this->getData('map_id');
    }

    /**
     * @return mixed
     */
    public function getMapApiKey()
    {
        if (!$this->hasData('map_api_key')) {
            $this->setData('map_api_key', $this->_helper->getMapApiKey());
        }
        return $this->getData('map_api_key');
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        if (!$this->hasData('latitude')) {
            $this->setData('latitude', $this->_helper->getLatitude());
        }
        return $this->getData('latitude');
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        if (!$this->hasData('longitude')) {
            $this->setData('longitude', $this->_helper->getLongitude());
        }
        return $this->getData('longitude');
    }

    /**
     * @return mixed
     */
    public function allowDragging()
    {
        if (!$this->hasData('draggable')) {
            $this->setData('draggable', $this->_helper->allowDragging());
        }
        return $this->getData('draggable');
    }

    /**
     * @return mixed
     */
    public function getZoomLevel()
    {
        if (!$this->hasData('zoom')) {
            $this->setData('zoom', $this->_helper->getZoomLevel());
        }
        return $this->getData('zoom');
    }

    /**
     * @return mixed
     */
    public function getMapType()
    {
        if (!$this->hasData('map_type')) {
            $this->setData('map_type', $this->_helper->getMapType());
        }
        return $this->getData('map_type');
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        if (!$this->hasData('width')) {
            $this->setData('width', $this->_helper->getWidth());
        }
        return $this->getData('width');
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        if (!$this->hasData('height')) {
            $this->setData('height', $this->_helper->getHeight());
        }
        return $this->getData('height');
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        if (!$this->hasData('title')) {
            $this->setData('title', $this->_helper->getAddress());
        }
        return $this->getData('title');
    }

    /**
     * @return string|null
     */
    protected function _toHtml()
    {
        if(!$this->_helper->isEnabled()){
            return null;
        }
        if(($this->_helper->getMapPosition() != Positions::TOP && $this->getNameInLayout() == "ebgooglemap.top") || ($this->_helper->getMapPosition() != Positions::BOTTOM && $this->getNameInLayout() == "ebgooglemap.bottom")){
            return null;
        }
        return parent::_toHtml();
    }
}