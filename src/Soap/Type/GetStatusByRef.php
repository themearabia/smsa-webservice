<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStatusByRef Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetStatusByRef extends AbstractStructBase
{
    /**
     * The refNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $refNo;
    /**
     * The passkey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $passkey;

    /**
     * Constructor method for getStatusByRef
     *
     * @uses GetStatusByRef::setRefNo()
     * @uses GetStatusByRef::setPasskey()
     *
     * @param string $refNo
     * @param string $passkey
     */
    public function __construct($refNo = null, $passkey = null)
    {
        $this
            ->setRefNo($refNo)
            ->setPasskey($passkey);
    }

    /**
     * Get refNo value
     *
     * @return string|null
     */
    public function getRefNo()
    {
        return $this->refNo;
    }

    /**
     * Set refNo value
     *
     * @param string $refNo
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetStatusByRef
     */
    public function setRefNo($refNo = null)
    {
        // validation for constraint: string
        if (!is_null($refNo) && !is_string($refNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refNo)), __LINE__);
        }
        $this->refNo = $refNo;

        return $this;
    }

    /**
     * Get passkey value
     *
     * @return string|null
     */
    public function getPasskey()
    {
        return $this->passkey;
    }

    /**
     * Set passkey value
     *
     * @param string $passkey
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetStatusByRef
     */
    public function setPasskey($passkey = null)
    {
        // validation for constraint: string
        if (!is_null($passkey) && !is_string($passkey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passkey)), __LINE__);
        }
        $this->passkey = $passkey;

        return $this;
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see AbstractStructBase::__set_state()
     *
     * @uses AbstractStructBase::__set_state()
     *
     * @param array $array the exported values
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetStatusByRef
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
