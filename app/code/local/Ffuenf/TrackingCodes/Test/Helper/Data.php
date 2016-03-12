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

/**
 * @see Ffuenf_TrackingCodes_Helper_Data
 *
 * @loadSharedFixture shared
 */

class Ffuenf_TrackingCodes_Test_Helper_Data extends EcomDev_PHPUnit_Test_Case
{
    /**
     * @var Ffuenf_TrackingCodes_Test_Helper_Data
     */
    protected $_helper;

    public function setUp()
    {
        $this->_helper = new Ffuenf_TrackingCodes_Helper_Data();
    }

    public function tearDown()
    {
        $this->helper = null;
    }

    /**
     * Tests whether extension is active.
     *
     * @test
     * @covers Ffuenf_TrackingCodes_Helper_Data::isExtensionActive
     */
    public function testIsExtensionActive()
    {
        $this->assertTrue(
            $this->_helper->isExtensionActive(),
            'Extension is not active please check config'
        );
    }
}
