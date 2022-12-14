<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CorsConfiguration_v2 File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* CorsConfiguration_v2 class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CorsConfiguration_v2 extends Entity
{
    /**
    * Gets the allowedHeaders
    *
    * @return array|null The allowedHeaders
    */
    public function getAllowedHeaders()
    {
        if (array_key_exists("allowedHeaders", $this->_propDict)) {
            return $this->_propDict["allowedHeaders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedHeaders
    *
    * @param string[] $val The allowedHeaders
    *
    * @return CorsConfiguration_v2
    */
    public function setAllowedHeaders($val)
    {
        $this->_propDict["allowedHeaders"] = $val;
        return $this;
    }

    /**
    * Gets the allowedMethods
    *
    * @return array|null The allowedMethods
    */
    public function getAllowedMethods()
    {
        if (array_key_exists("allowedMethods", $this->_propDict)) {
            return $this->_propDict["allowedMethods"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedMethods
    *
    * @param string[] $val The allowedMethods
    *
    * @return CorsConfiguration_v2
    */
    public function setAllowedMethods($val)
    {
        $this->_propDict["allowedMethods"] = $val;
        return $this;
    }

    /**
    * Gets the allowedOrigins
    *
    * @return array|null The allowedOrigins
    */
    public function getAllowedOrigins()
    {
        if (array_key_exists("allowedOrigins", $this->_propDict)) {
            return $this->_propDict["allowedOrigins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedOrigins
    *
    * @param string[] $val The allowedOrigins
    *
    * @return CorsConfiguration_v2
    */
    public function setAllowedOrigins($val)
    {
        $this->_propDict["allowedOrigins"] = $val;
        return $this;
    }

    /**
    * Gets the maxAgeInSeconds
    *
    * @return int|null The maxAgeInSeconds
    */
    public function getMaxAgeInSeconds()
    {
        if (array_key_exists("maxAgeInSeconds", $this->_propDict)) {
            return $this->_propDict["maxAgeInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxAgeInSeconds
    *
    * @param int $val The maxAgeInSeconds
    *
    * @return CorsConfiguration_v2
    */
    public function setMaxAgeInSeconds($val)
    {
        $this->_propDict["maxAgeInSeconds"] = intval($val);
        return $this;
    }

    /**
    * Gets the resource
    *
    * @return string|null The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            return $this->_propDict["resource"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resource
    *
    * @param string $val The resource
    *
    * @return CorsConfiguration_v2
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }

}
