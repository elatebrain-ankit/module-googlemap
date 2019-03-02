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

namespace Elatebrain\GoogleMap\Helper;


use Elatebrain\Core\Helper\AbstractData;

/**
 *
 */
class Data extends AbstractData
{
    /**
     * @param null $storeId
     * @return bool|mixed
     */
    public function isEnabled($storeId = null)
    {
        if($this->getMapApiKey() == null){
            return false;
        }
        return $this->getConfig("ebgooglemap/general/enabled", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getMapApiKey($storeId = null)
    {
        return $this->getConfig("ebgooglemap/general/api_key", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function allowDragging($storeId = null)
    {
        return $this->getConfig("ebgooglemap/general/dragging", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getZoomLevel($storeId = null)
    {
        return $this->getConfig("ebgooglemap/general/zoom", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getMapType($storeId = null)
    {
        return $this->getConfig("ebgooglemap/general/map_type", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getWidth($storeId = null)
    {
        return $this->getConfig("ebgooglemap/general/width", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getHeight($storeId = null)
    {
        return $this->getConfig("ebgooglemap/general/height", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getMapPosition($storeId = null)
    {
        return $this->getConfig("ebgooglemap/general/map_positions", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getAddress($storeId = null)
    {
        return $this->getConfig("ebgooglemap/location/address", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getLatitude($storeId = null)
    {
        return $this->getConfig("ebgooglemap/location/latitude", $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getLongitude($storeId = null)
    {
        return $this->getConfig("ebgooglemap/location/longitude", $storeId);
    }
}