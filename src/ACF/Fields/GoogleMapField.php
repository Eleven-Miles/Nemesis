<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class MapField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class GoogleMapField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'google_map';

    /**
     * Defines the initial map center point latitude. Default ''.
     * 
     * @var string
     */
    public $center_lat = '';

    /**
     * Defines the initial map center point longitude. Default ''..
     * 
     * @var string
     */
    public $center_lat = '';

    /**
     * Sets the initial zoom level of the map. Default ''.
     * 
     * @var string
     */
    public $zoom = '';

    /**
     * Sets the height of the map. Default ''.
     * 
     * @var string
     */
    public $height = '';

    /**
     * Get the value of center_lat
     */
    public function getCenterLat()
    {
        return $this->center_lat;
    }

    /**
     * Set the value of center_lat
     */
    public function setCenterLat($center_lat): self
    {
        $this->center_lat = $center_lat;

        return $this;
    }

    /**
     * Get the value of center_lat
     */
    public function getCenterLat()
    {
        return $this->center_lat;
    }

    /**
     * Set the value of center_lat
     */
    public function setCenterLat($center_lat): self
    {
        $this->center_lat = $center_lat;

        return $this;
    }

    /**
     * Get the value of zoom
     */
    public function getZoom()
    {
        return $this->zoom;
    }

    /**
     * Set the value of zoom
     */
    public function setZoom($zoom): self
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * Get the value of height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     */
    public function setHeight($height): self
    {
        $this->height = $height;

        return $this;
    }
}
