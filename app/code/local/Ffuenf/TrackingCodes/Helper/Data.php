<?php
/**
 * Ffuenf_TrackingCodes extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2016 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

class Ffuenf_TrackingCodes_Helper_Data extends Ffuenf_Common_Helper_Core
{
    const CONFIG_EXTENSION_ACTIVE         = 'ffuenf_trackingcodes/general/enable';
    const CONFIG_EXTENSION_FACEBOOK_IDENT = 'ffuenf_trackingcodes/facebook/ident';
    const CONFIG_EXTENSION_FACEBOOK_URL   = 'ffuenf_trackingcodes/facebook/url';
    /**
     * Variable for if the extension is active.
     *
     * @var bool
     */
    protected $_bExtensionActive;

    /**
     * Check to see if the extension is active.
     *
     * @return bool
     */
    public function isExtensionActive()
    {
        return $this->getStoreFlag(self::CONFIG_EXTENSION_ACTIVE, '_bExtensionActive');
    }

    /**
     * @param string $flavour
     *
     * @return string
     */
    public function getIdentification($flavour)
    {
        if (!$this->isExtensionActive()) {
            $flavour = '';
        }
        switch ($flavour) {
            case 'facebook':
                $ident = Mage::getStoreConfig(self::CONFIG_EXTENSION_FACEBOOK_IDENT);
                break;
            default:
                $ident = '';
                break;
        }
        
        return $ident;
    }

    /**
     * @param string $flavour
     *
     * @return string
     */
    public function getTrackingUrl($flavour)
    {
        switch ($flavour) {
            case 'facebook':
                $url = Mage::getStoreConfig(self::CONFIG_EXTENSION_FACEBOOK_URL);
                break;
            default:
                $url = '';
                break;
        }
        
        return $url;
    }
}