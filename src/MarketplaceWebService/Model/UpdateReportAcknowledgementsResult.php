<?php
/**
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/*******************************************************************************

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 *
 */

/**
 *  @see MarketplaceWebService_Model
 */
require_once ('MarketplaceWebService/Model.php');



/**
 * MarketplaceWebService_Model_UpdateReportAcknowledgementsResult
 *
 * Properties:
 * <ul>
 *
 * <li>Count: int</li>
 * <li>ReportInfo: MarketplaceWebService_Model_ReportInfo</li>
 *
 * </ul>
 */
class MarketplaceWebService_Model_UpdateReportAcknowledgementsResult extends MarketplaceWebService_Model
{


    /**
     * Construct new MarketplaceWebService_Model_UpdateReportAcknowledgementsResult
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Count: int</li>
     * <li>ReportInfo: MarketplaceWebService_Model_ReportInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'Count' => array('FieldValue' => null, 'FieldType' => 'int'),
        'ReportInfo' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebService_Model_ReportInfo')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Count property.
     *
     * @return int Count
     */
    public function getCount()
    {
        return $this->fields['Count']['FieldValue'];
    }

    /**
     * Sets the value of the Count property.
     *
     * @param int Count
     * @return this instance
     */
    public function setCount($value)
    {
        $this->fields['Count']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Count and returns this instance
     *
     * @param int $value Count
     * @return MarketplaceWebService_Model_UpdateReportAcknowledgementsResult instance
     */
    public function withCount($value)
    {
        $this->setCount($value);
        return $this;
    }


    /**
     * Checks if Count is set
     *
     * @return bool true if Count  is set
     */
    public function isSetCount()
    {
        return !is_null($this->fields['Count']['FieldValue']);
    }

    /**
     * Gets the value of the ReportInfo.
     *
     * @return array of ReportInfo ReportInfo
     */
    public function getReportInfoList()
    {
        return $this->fields['ReportInfo']['FieldValue'];
    }

    /**
     * Sets the value of the ReportInfo.
     *
     * @param mixed ReportInfo or an array of ReportInfo ReportInfo
     * @return this instance
     */
    public function setReportInfoList($reportInfo)
    {
        if (!$this->_isNumericArray($reportInfo)) {
            $reportInfo =  array ($reportInfo);
        }
        $this->fields['ReportInfo']['FieldValue'] = $reportInfo;
        return $this;
    }


    /**
     * Sets single or multiple values of ReportInfo list via variable number of arguments.
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReportInfo($reportInfo1, $reportInfo2)</code>
     *
     * @param ReportInfo  $reportInfoArgs one or more ReportInfo
     * @return MarketplaceWebService_Model_UpdateReportAcknowledgementsResult  instance
     */
    public function withReportInfo($reportInfoArgs)
    {
        foreach (func_get_args() as $reportInfo) {
            $this->fields['ReportInfo']['FieldValue'][] = $reportInfo;
        }
        return $this;
    }



    /**
     * Checks if ReportInfo list is non-empty
     *
     * @return bool true if ReportInfo list is non-empty
     */
    public function isSetReportInfo()
    {
        return is_array($this->fields['ReportInfo']['FieldValue']) && count ($this->fields['ReportInfo']['FieldValue']) > 0;
    }




}