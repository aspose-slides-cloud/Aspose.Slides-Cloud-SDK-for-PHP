<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose">
 *   Copyright (c) 2018 Aspose.Slides for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */


namespace Aspose\Slides\Cloud\Sdk\Model;

use \Aspose\Slides\Cloud\Sdk\Api\ObjectSerializer;

/**
 * PhantomElement Class Doc Comment
 *
 * @category Class
 * @description Specifies an instance of mathematical text that contained within a MathParagraph and starts on its own line.
 * @package  Aspose\Slides\Cloud\Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhantomElement extends MathElement 
{
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PhantomElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base' => '\Aspose\Slides\Cloud\Sdk\Model\MathElement',
        'show' => 'bool',
        'zeroWidth' => 'bool',
        'zeroAsc' => 'bool',
        'zeroDesc' => 'bool',
        'transp' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base' => null,
        'show' => null,
        'zeroWidth' => null,
        'zeroAsc' => null,
        'zeroDesc' => null,
        'transp' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'base' => 'Base',
        'show' => 'Show',
        'zeroWidth' => 'ZeroWidth',
        'zeroAsc' => 'ZeroAsc',
        'zeroDesc' => 'ZeroDesc',
        'transp' => 'Transp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base' => 'setBase',
        'show' => 'setShow',
        'zeroWidth' => 'setZeroWidth',
        'zeroAsc' => 'setZeroAsc',
        'zeroDesc' => 'setZeroDesc',
        'transp' => 'setTransp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base' => 'getBase',
        'show' => 'getShow',
        'zeroWidth' => 'getZeroWidth',
        'zeroAsc' => 'getZeroAsc',
        'zeroDesc' => 'getZeroDesc',
        'transp' => 'getTransp'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
        $this->container['show'] = isset($data['show']) ? $data['show'] : null;
        $this->container['zeroWidth'] = isset($data['zeroWidth']) ? $data['zeroWidth'] : null;
        $this->container['zeroAsc'] = isset($data['zeroAsc']) ? $data['zeroAsc'] : null;
        $this->container['zeroDesc'] = isset($data['zeroDesc']) ? $data['zeroDesc'] : null;
        $this->container['transp'] = isset($data['transp']) ? $data['transp'] : null;
        $this->container['type'] = 'Phantom';
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!parent::valid()) {
            return false;
        }

        return true;
    }


    /**
     * Gets base
     *
     * @return \Aspose\Slides\Cloud\Sdk\Model\MathElement
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param \Aspose\Slides\Cloud\Sdk\Model\MathElement $base Base element
     *
     * @return $this
     */
    public function setBase($base)
    {
        $this->container['base'] = $base;

        return $this;
    }

    /**
     * Gets show
     *
     * @return bool
     */
    public function getShow()
    {
        return $this->container['show'];
    }

    /**
     * Sets show
     *
     * @param bool $show true if the base element is displayed.
     *
     * @return $this
     */
    public function setShow($show)
    {
        $this->container['show'] = $show;

        return $this;
    }

    /**
     * Gets zeroWidth
     *
     * @return bool
     */
    public function getZeroWidth()
    {
        return $this->container['zeroWidth'];
    }

    /**
     * Sets zeroWidth
     *
     * @param bool $zeroWidth true if the the width of the base element should be treated as zero.
     *
     * @return $this
     */
    public function setZeroWidth($zeroWidth)
    {
        $this->container['zeroWidth'] = $zeroWidth;

        return $this;
    }

    /**
     * Gets zeroAsc
     *
     * @return bool
     */
    public function getZeroAsc()
    {
        return $this->container['zeroAsc'];
    }

    /**
     * Sets zeroAsc
     *
     * @param bool $zeroAsc true if the the ascent (height above baseline) of the base element should be treated as zero.
     *
     * @return $this
     */
    public function setZeroAsc($zeroAsc)
    {
        $this->container['zeroAsc'] = $zeroAsc;

        return $this;
    }

    /**
     * Gets zeroDesc
     *
     * @return bool
     */
    public function getZeroDesc()
    {
        return $this->container['zeroDesc'];
    }

    /**
     * Sets zeroDesc
     *
     * @param bool $zeroDesc true if the the descent (depth below baseline) of the base element should be treated as zero.
     *
     * @return $this
     */
    public function setZeroDesc($zeroDesc)
    {
        $this->container['zeroDesc'] = $zeroDesc;

        return $this;
    }

    /**
     * Gets transp
     *
     * @return bool
     */
    public function getTransp()
    {
        return $this->container['transp'];
    }

    /**
     * Sets transp
     *
     * @param bool $transp true if operators and symbols inside the phantom still affect mathematical spacing around the phantom (as if visible).
     *
     * @return $this
     */
    public function setTransp($transp)
    {
        $this->container['transp'] = $transp;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset) : mixed
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


