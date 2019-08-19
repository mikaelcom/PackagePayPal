<?php

namespace PayPal\EnumType;

/**
 * This class stands for CheckoutStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: CheckoutStatusCodeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CheckoutStatusCodeType
{
    /**
     * Constant for value 'CheckoutComplete'
     * Meta information extracted from the WSDL
     * - documentation: Checkout complete.
     * @return string 'CheckoutComplete'
     */
    const VALUE_CHECKOUT_COMPLETE = 'CheckoutComplete';
    /**
     * Constant for value 'CheckoutIncomplete'
     * Meta information extracted from the WSDL
     * - documentation: Checkout incomplete. No details specified.
     * @return string 'CheckoutIncomplete'
     */
    const VALUE_CHECKOUT_INCOMPLETE = 'CheckoutIncomplete';
    /**
     * Constant for value 'BuyerRequestsTotal'
     * Meta information extracted from the WSDL
     * - documentation: Buyer requests total.
     * @return string 'BuyerRequestsTotal'
     */
    const VALUE_BUYER_REQUESTS_TOTAL = 'BuyerRequestsTotal';
    /**
     * Constant for value 'SellerResponded'
     * Meta information extracted from the WSDL
     * - documentation: Seller responded to buyer's request.
     * @return string 'SellerResponded'
     */
    const VALUE_SELLER_RESPONDED = 'SellerResponded';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
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
     * @uses self::VALUE_CHECKOUT_COMPLETE
     * @uses self::VALUE_CHECKOUT_INCOMPLETE
     * @uses self::VALUE_BUYER_REQUESTS_TOTAL
     * @uses self::VALUE_SELLER_RESPONDED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHECKOUT_COMPLETE,
            self::VALUE_CHECKOUT_INCOMPLETE,
            self::VALUE_BUYER_REQUESTS_TOTAL,
            self::VALUE_SELLER_RESPONDED,
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
