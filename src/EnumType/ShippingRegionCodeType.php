<?php

namespace PayPal\EnumType;

/**
 * This class stands for ShippingRegionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: ShippingRegion CodeType This code list module defines the enumerated types of regions for shipping items (i.e., a seller may support shipment of an item).
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingRegionCodeType
{
    /**
     * Constant for value 'Africa'
     * @return string 'Africa'
     */
    const VALUE_AFRICA = 'Africa';
    /**
     * Constant for value 'Asia'
     * @return string 'Asia'
     */
    const VALUE_ASIA = 'Asia';
    /**
     * Constant for value 'Caribbean'
     * @return string 'Caribbean'
     */
    const VALUE_CARIBBEAN = 'Caribbean';
    /**
     * Constant for value 'Europe'
     * @return string 'Europe'
     */
    const VALUE_EUROPE = 'Europe';
    /**
     * Constant for value 'LatinAmerica'
     * @return string 'LatinAmerica'
     */
    const VALUE_LATIN_AMERICA = 'LatinAmerica';
    /**
     * Constant for value 'MiddleEast'
     * @return string 'MiddleEast'
     */
    const VALUE_MIDDLE_EAST = 'MiddleEast';
    /**
     * Constant for value 'NorthAmerica'
     * @return string 'NorthAmerica'
     */
    const VALUE_NORTH_AMERICA = 'NorthAmerica';
    /**
     * Constant for value 'Oceania'
     * @return string 'Oceania'
     */
    const VALUE_OCEANIA = 'Oceania';
    /**
     * Constant for value 'SouthAmerica'
     * @return string 'SouthAmerica'
     */
    const VALUE_SOUTH_AMERICA = 'SouthAmerica';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_AFRICA
     * @uses self::VALUE_ASIA
     * @uses self::VALUE_CARIBBEAN
     * @uses self::VALUE_EUROPE
     * @uses self::VALUE_LATIN_AMERICA
     * @uses self::VALUE_MIDDLE_EAST
     * @uses self::VALUE_NORTH_AMERICA
     * @uses self::VALUE_OCEANIA
     * @uses self::VALUE_SOUTH_AMERICA
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AFRICA,
            self::VALUE_ASIA,
            self::VALUE_CARIBBEAN,
            self::VALUE_EUROPE,
            self::VALUE_LATIN_AMERICA,
            self::VALUE_MIDDLE_EAST,
            self::VALUE_NORTH_AMERICA,
            self::VALUE_OCEANIA,
            self::VALUE_SOUTH_AMERICA,
            self::VALUE_CUSTOM_CODE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
