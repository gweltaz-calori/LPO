<?php
/**
 * Adherent
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Lpo Rest
 *
 * Service web pour gérer les oiseaux et nichoirs
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Adherent Class Doc Comment
 *
 * @category    Class
 * @description adherent
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Adherent implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'adherent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'nom' => 'string',
        'prenom' => 'string',
        'login' => 'string',
        'password' => 'string',
        'telephone' => 'string',
        'mail' => 'string',
        'photo' => 'string',
        'adresse' => '\Swagger\Client\Model\Adresse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'nom' => null,
        'prenom' => null,
        'login' => null,
        'password' => null,
        'telephone' => null,
        'mail' => null,
        'photo' => null,
        'adresse' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'nom' => 'nom',
        'prenom' => 'prenom',
        'login' => 'login',
        'password' => 'password',
        'telephone' => 'telephone',
        'mail' => 'mail',
        'photo' => 'photo',
        'adresse' => 'adresse'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'nom' => 'setNom',
        'prenom' => 'setPrenom',
        'login' => 'setLogin',
        'password' => 'setPassword',
        'telephone' => 'setTelephone',
        'mail' => 'setMail',
        'photo' => 'setPhoto',
        'adresse' => 'setAdresse'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'nom' => 'getNom',
        'prenom' => 'getPrenom',
        'login' => 'getLogin',
        'password' => 'getPassword',
        'telephone' => 'getTelephone',
        'mail' => 'getMail',
        'photo' => 'getPhoto',
        'adresse' => 'getAdresse'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['nom'] = isset($data['nom']) ? $data['nom'] : null;
        $this->container['prenom'] = isset($data['prenom']) ? $data['prenom'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['mail'] = isset($data['mail']) ? $data['mail'] : null;
        $this->container['photo'] = isset($data['photo']) ? $data['photo'] : null;
        $this->container['adresse'] = isset($data['adresse']) ? $data['adresse'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets nom
     * @return string
     */
    public function getNom()
    {
        return $this->container['nom'];
    }

    /**
     * Sets nom
     * @param string $nom
     * @return $this
     */
    public function setNom($nom)
    {
        $this->container['nom'] = $nom;

        return $this;
    }

    /**
     * Gets prenom
     * @return string
     */
    public function getPrenom()
    {
        return $this->container['prenom'];
    }

    /**
     * Sets prenom
     * @param string $prenom
     * @return $this
     */
    public function setPrenom($prenom)
    {
        $this->container['prenom'] = $prenom;

        return $this;
    }

    /**
     * Gets login
     * @return string
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     * @param string $login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets telephone
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     * @param string $telephone
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets mail
     * @return string
     */
    public function getMail()
    {
        return $this->container['mail'];
    }

    /**
     * Sets mail
     * @param string $mail
     * @return $this
     */
    public function setMail($mail)
    {
        $this->container['mail'] = $mail;

        return $this;
    }

    /**
     * Gets photo
     * @return string
     */
    public function getPhoto()
    {
        return $this->container['photo'];
    }

    /**
     * Sets photo
     * @param string $photo
     * @return $this
     */
    public function setPhoto($photo)
    {
        $this->container['photo'] = $photo;

        return $this;
    }

    /**
     * Gets adresse
     * @return \Swagger\Client\Model\Adresse
     */
    public function getAdresse()
    {
        return $this->container['adresse'];
    }

    /**
     * Sets adresse
     * @param \Swagger\Client\Model\Adresse $adresse
     * @return $this
     */
    public function setAdresse($adresse)
    {
        $this->container['adresse'] = $adresse;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


