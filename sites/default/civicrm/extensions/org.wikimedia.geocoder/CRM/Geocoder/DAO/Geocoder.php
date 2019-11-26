<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Geocoder/Geocoder.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:0bbdc0a3a3d9d0200fa19d4bc00b8f08)
 */

/**
 * Database access object for the Geocoder entity.
 */
class CRM_Geocoder_DAO_Geocoder extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_geocoder';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Unique Geocoder ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Provider name
   *
   * @var string
   */
  public $name;

  /**
   * Provider Title
   *
   * @var string
   */
  public $title;

  /**
   * Non generic part of the class name - after Geocoder_Provider. See mgd files for examples
   *
   * @var string
   */
  public $class;

  /**
   * Enabled?
   *
   * @var boolean
   */
  public $is_active;

  /**
   * Weight
   *
   * @var int unsigned
   */
  public $weight;

  /**
   * API Key
   *
   * @var string
   */
  public $api_key;

  /**
   * URL (if required)
   *
   * @var string
   */
  public $url;

  /**
   * json array of fields required for this to parse
   *
   * @var string
   */
  public $required_fields;

  /**
   * fields to be retained from the response
   *
   * @var string
   */
  public $retained_response_fields;

  /**
   * Fields retained to fill but not overwrite data
   *
   * @var string
   */
  public $datafill_response_fields;

  /**
   * Number of seconds to wait before retrying after hitting threshold. Geocaching delayed in this time.
   *
   * @var int
   */
  public $threshold_standdown;

  /**
   * Timestamp when the threshold was last hit
   *
   * @var string
   */
  public $threshold_last_hit;

  /**
   * Countries this geocoder is valid for.
   *
   * @var string
   */
  public $valid_countries;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_geocoder';
    parent::__construct();
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Geocoder ID'),
          'description' => 'Unique Geocoder ID',
          'required' => TRUE,
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Name'),
          'description' => 'Provider name',
          'required' => TRUE,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
        ],
        'title' => [
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Title'),
          'description' => 'Provider Title',
          'required' => TRUE,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
        ],
        'class' => [
          'name' => 'class',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Class'),
          'description' => 'Non generic part of the class name - after Geocoder_Provider',
          'required' => TRUE,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
        ],
        'is_active' => [
          'name' => 'is_active',
          'title' => ts('Enabled'),
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'description' => 'Enabled?',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
        ],

        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Weight'),
          'description' => 'Weight',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
        ],

        'api_key' => [
          'name' => 'api_key',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Api Key'),
          'description' => 'API Key',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,

          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
        ],

        'url' => [
          'name' => 'url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Url'),
          'description' => 'URL (if required)',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
        ],

        'required_fields' => [
          'name' => 'required_fields',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Required Fields'),
          'description' => 'json array of fields required for this to parse',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,

          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'pseudoconstant' => [
            'callback' => 'CRM_Utils_Geocode_Geocoder::getAddressFields',
          ],
          'serialize' => self::SERIALIZE_JSON,
        ],

        'retained_response_fields' => [
          'name' => 'retained_response_fields',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Retained Response Fields'),
          'description' => 'fields to be retained from the response',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'default' => '["geo_code_1","geo_code_2"]',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
        ],
        'datafill_response_fields' => [
          'name' => 'datafill_response_fields',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Datafill Response Fields'),
          'description' => 'Fields retained to fill but not overwrite data',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
          'pseudoconstant' => [
            'callback' => 'CRM_Utils_Geocode_Geocoder::getAddressFields',
          ],
        ],
        'threshold_standdown' => [
          'name' => 'threshold_standdown',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Threshold standdown'),
          'description' => 'Number of seconds to wait before retrying after hitting threshold. Geocaching disabled in this time',
          'table_name' => 'civicrm_geocoder',
          'default' => 60,
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
        ],
        'threshold_last_hit' => [
          'name' => 'threshold_last_hit',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Threshold Last Hit'),
          'description' => 'Timestamp when the threshold was last hit.',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
        ],
        'valid_countries' => [
          'name' => 'valid_countries',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Valid countries'),
          'description' => 'Countries this geocoder is valid for',
          'table_name' => 'civicrm_geocoder',
          'entity' => 'Geocoder',
          'bao' => 'CRM_Geocoder_DAO_Geocoder',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
          'pseudoconstant' => [
            'table' => 'civicrm_country',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
            'nameColumn' => 'iso_code',
          ]
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'geocoder', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'geocoder', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}