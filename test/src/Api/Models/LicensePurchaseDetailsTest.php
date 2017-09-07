<?php

/*************************************************************************
 * ADOBE CONFIDENTIAL
 * ___________________
 *
 *  Copyright 2016 Adobe Systems Incorporated
 *  All Rights Reserved.
 *
 * NOTICE:  All information contained herein is, and remains
 * the property of Adobe Systems Incorporated and its suppliers,
 * if any.  The intellectual and technical concepts contained
 * herein are proprietary to Adobe Systems Incorporated and its
 * suppliers and are protected by all applicable intellectual property
 * laws, including trade secret and copyright laws.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from Adobe Systems Incorporated.
 **************************************************************************/

namespace AdobeStock\Api\Test;

use \AdobeStock\Api\Models\LicensePurchaseDetails;
use \PHPUnit\Framework\TestCase;

class LicensePurchaseDetailsTest extends TestCase
{
    /**
     * @var LicensePurchaseDetails
     */
    private $_license_purchase_details;
    
    /**
     * @var array
     */
    private $_data = [
        'date' => 'test',
        'cancelled' => 'test',
        'url' => 'http://adobetest.com',
        'content_type' => 'test',
        'width' => 1,
        'heigth' => 1,
        'frame_rate' => 1.2,
        'content_length' => 1,
        'duration' => 1,
        'license' => 'test',
        'state' => 'test',
    ];
    
    /**
     * @test
     * @before
     */
    public function initializeConstructorOfLicensePurchaseDetails()
    {
        $this->_license_purchase_details = new LicensePurchaseDetails($this->_data);
        $this->assertInstanceOf(LicensePurchaseDetails::class, $this->_license_purchase_details);
    }
    
    /**
     * @test
     */
    public function setterGetterShouldSetGetUrl()
    {
        $this->_license_purchase_details->setUrl('https://stock.adobe.io/Rest/Libraries/1/Member/Abandon');
        $this->assertEquals('https://stock.adobe.io/Rest/Libraries/1/Member/Abandon', $this->_license_purchase_details->getUrl());
    }
    
    /**
     * @test
     */
    public function setterGetterShouldSetGetContentType()
    {
        $this->_license_purchase_details->setContentType('comp');
        $this->assertEquals('comp', $this->_license_purchase_details->getContentType());
    }
    
    /**
     * @test
     */
    public function setterGetterShouldSetGetWidth()
    {
        $this->_license_purchase_details->setWidth(23);
        $this->assertEquals(23, $this->_license_purchase_details->getWidth());
    }
    
    /**
     * @test
     */
    public function setterGetterShouldSetGetHeight()
    {
        $this->_license_purchase_details->setHeight(23);
        $this->assertEquals(23, $this->_license_purchase_details->getHeight());
    }
    
    /**
     * @test
     */
    public function setterGetterShouldSetGetFrameRate()
    {
        $this->_license_purchase_details->setFrameRate(2.1);
        $this->assertEquals(2.1, $this->_license_purchase_details->getFrameRate());
    }
    
    /**
     * @test
     */
    public function setterGetterShouldSetGetContentLength()
    {
        $this->_license_purchase_details->setContentLength(23);
        $this->assertEquals(23, $this->_license_purchase_details->getContentLength());
    }
    
    /**
     * @test
     */
    public function setterGetterShouldSetGetDuration()
    {
        $this->_license_purchase_details->setDuration(5);
        $this->assertEquals(5, $this->_license_purchase_details->getDuration());
    }
    
    /**
     * @test
     * @expectedException \AdobeStock\Api\Exception\StockApi
     */
    public function setterGetterShouldSetGetLicense()
    {
        $this->_license_purchase_details->setLicense('STANDARD');
        $this->assertEquals('Standard', $this->_license_purchase_details->getLicense());
        $this->_license_purchase_details->setLicense('TEST');
    }
    
    /**
     * @test
     * @expectedException \AdobeStock\Api\Exception\StockApi
     */
    public function setterGetterShouldSetGetState()
    {
        $this->_license_purchase_details->setState('NOT_PURCHASED');
        $this->assertEquals('not_purchased', $this->_license_purchase_details->getState());
        $this->_license_purchase_details->setState('TEST');
    }
    
    /**
     * @test
     * @expectedException \AdobeStock\Api\Exception\StockApi
     */
    public function setterGetterShouldSetGetDate()
    {
        $this->_license_purchase_details->setDate('2017-06-18 05:57:21.246303');
        $this->assertEquals('2017-06-18 05:57:21.246303', $this->_license_purchase_details->getDate());
        $this->_license_purchase_details->setDate('2017-06-18 05:57:21');
        $this->assertEquals('2017-06-18 05:57:21', $this->_license_purchase_details->getDate());
        $this->_license_purchase_details->setDate('2017-06 05:57:21.246303');
    }
    
    /**
     * @test
     * @expectedException \AdobeStock\Api\Exception\StockApi
     */
    public function setterGetterShouldSetGetCancelled()
    {
        $this->_license_purchase_details->setCancelled('2017-06-18 05:57:21');
        $this->assertEquals('2017-06-18 05:57:21', $this->_license_purchase_details->getCancelled());
        $this->_license_purchase_details->setCancelled('2017-06-18 05:57:21.67');
        $this->assertEquals('2017-06-18 05:57:21.67', $this->_license_purchase_details->getCancelled());
        $this->_license_purchase_details->setCancelled('2017-18 05:57:21');
    }
}