<?php
/**
 * DashboardAppearance
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Looker API 3.1 Reference
 *
 * ### Authorization  The classic method of API authorization uses Looker **API3** credentials for authorization and access control. Looker admins can create API3 credentials on Looker's **Admin/Users** page.  API 4.0 adds additional ways to authenticate API requests, including OAuth and CORS requests.  For details, see [Looker API Authorization](https://looker.com/docs/r/api/authorization).   ### API Explorer  The API Explorer is a Looker-provided utility with many new and unique features for learning and using the Looker API and SDKs.  For details, see the [API Explorer documentation](https://looker.com/docs/r/api/explorer).   ### Looker Language SDKs  The Looker API is a RESTful system that should be usable by any programming language capable of making HTTPS requests. SDKs for a variety of programming languages are also provided to streamline using the API. Looker has an OpenSource [sdk-codegen project](https://github.com/looker-open-source/sdk-codegen) that provides several language SDKs. Language SDKs generated by `sdk-codegen` have an Authentication manager that can automatically authenticate API requests when needed.  For details on available Looker SDKs, see [Looker API Client SDKs](https://looker.com/docs/r/api/client_sdks).   ### API Versioning  Future releases of Looker expand the latest API version release-by-release to securely expose more and more of the core power of the Looker platform to API client applications. API endpoints marked as \"beta\" may receive breaking changes without warning (but we will try to avoid doing that). Stable (non-beta) API endpoints should not receive breaking changes in future releases.  For details, see [Looker API Versioning](https://looker.com/docs/r/api/versioning).   ### 3.1 Legacy API  API 3.1 is now **deprecated**. API 4.0 should be used instead.  The text below is retained for reference purposes.  The following are a few examples of noteworthy items that have changed between API 3.0 and API 3.1. For more comprehensive coverage of API changes, please see the release notes for your Looker release.  ### Examples of new things added in API 3.1 (compared to API 3.0):  * [Dashboard construction](#!/3.1/Dashboard/) APIs * [Themes](#!/3.1/Theme/) and [custom color collections](#!/3.1/ColorCollection) APIs * Create and run [SQL Runner](#!/3.1/Query/run_sql_query) queries * Create and run [merged results](#!/3.1/Query/create_merge_query) queries * Create and modify [dashboard filters](#!/3.1/Dashboard/create_dashboard_filter) * Create and modify [password requirements](#!/3.1/Auth/password_config)  ### Deprecated in API 3.0  The following functions and properties have been deprecated in API 3.0.  They continue to exist and work in API 3.0 for the next several Looker releases but they have not been carried forward to API 3.1:  * Dashboard Prefetch functions * User access_filter functions * User API 1.0 credentials functions * Space.is_root and Space.is_user_root properties. Use Space.is_shared_root and Space.is_users_root instead.  ### Semantic changes in API 3.1:  * [all_looks()](#!/3.1/Look/all_looks) no longer includes soft-deleted looks, matching [all_dashboards()](#!/3.1/Dashboard/all_dashboards) behavior. You can find soft-deleted looks using [search_looks()](#!/3.1/Look/search_looks) with the `deleted` param set to True. * [all_spaces()](#!/3.1/Space/all_spaces) no longer includes duplicate items * [search_users()](#!/3.1/User/search_users) no longer accepts Y,y,1,0,N,n for Boolean params, only \"true\" and \"false\". * For greater client and network compatibility, [render_task_results](#!/3.1/RenderTask/render_task_results) now returns HTTP status **202 Accepted** instead of HTTP status **102 Processing** * [all_running_queries()](#!/3.1/Query/all_running_queries) and [kill_query](#!/3.1/Query/kill_query) functions have moved into the [Query](#!/3.1/Query/) function group.  The API Explorer can be used to [interactively compare](https://looker.com/docs/r/api/explorer#comparing_api_versions) the differences between API 3.1 and 4.0.   ### API and SDK Support Policies  Looker API versions and language SDKs have varying support levels. Please read the API and SDK [support policies](https://looker.com/docs/r/api/support-policy) for more information.
 *
 * OpenAPI spec version: 3.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DashboardAppearance Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DashboardAppearance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DashboardAppearance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'page_side_margins' => 'int',
        'page_background_color' => 'string',
        'tile_title_alignment' => 'string',
        'tile_space_between' => 'int',
        'tile_background_color' => 'string',
        'tile_shadow' => 'bool',
        'key_color' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'page_side_margins' => 'int64',
        'page_background_color' => null,
        'tile_title_alignment' => null,
        'tile_space_between' => 'int64',
        'tile_background_color' => null,
        'tile_shadow' => null,
        'key_color' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'page_side_margins' => 'page_side_margins',
        'page_background_color' => 'page_background_color',
        'tile_title_alignment' => 'tile_title_alignment',
        'tile_space_between' => 'tile_space_between',
        'tile_background_color' => 'tile_background_color',
        'tile_shadow' => 'tile_shadow',
        'key_color' => 'key_color'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page_side_margins' => 'setPageSideMargins',
        'page_background_color' => 'setPageBackgroundColor',
        'tile_title_alignment' => 'setTileTitleAlignment',
        'tile_space_between' => 'setTileSpaceBetween',
        'tile_background_color' => 'setTileBackgroundColor',
        'tile_shadow' => 'setTileShadow',
        'key_color' => 'setKeyColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page_side_margins' => 'getPageSideMargins',
        'page_background_color' => 'getPageBackgroundColor',
        'tile_title_alignment' => 'getTileTitleAlignment',
        'tile_space_between' => 'getTileSpaceBetween',
        'tile_background_color' => 'getTileBackgroundColor',
        'tile_shadow' => 'getTileShadow',
        'key_color' => 'getKeyColor'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['page_side_margins'] = isset($data['page_side_margins']) ? $data['page_side_margins'] : null;
        $this->container['page_background_color'] = isset($data['page_background_color']) ? $data['page_background_color'] : null;
        $this->container['tile_title_alignment'] = isset($data['tile_title_alignment']) ? $data['tile_title_alignment'] : null;
        $this->container['tile_space_between'] = isset($data['tile_space_between']) ? $data['tile_space_between'] : null;
        $this->container['tile_background_color'] = isset($data['tile_background_color']) ? $data['tile_background_color'] : null;
        $this->container['tile_shadow'] = isset($data['tile_shadow']) ? $data['tile_shadow'] : null;
        $this->container['key_color'] = isset($data['key_color']) ? $data['key_color'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets page_side_margins
     *
     * @return int
     */
    public function getPageSideMargins()
    {
        return $this->container['page_side_margins'];
    }

    /**
     * Sets page_side_margins
     *
     * @param int $page_side_margins Page margin (side) width
     *
     * @return $this
     */
    public function setPageSideMargins($page_side_margins)
    {
        $this->container['page_side_margins'] = $page_side_margins;

        return $this;
    }

    /**
     * Gets page_background_color
     *
     * @return string
     */
    public function getPageBackgroundColor()
    {
        return $this->container['page_background_color'];
    }

    /**
     * Sets page_background_color
     *
     * @param string $page_background_color Background color for the dashboard
     *
     * @return $this
     */
    public function setPageBackgroundColor($page_background_color)
    {
        $this->container['page_background_color'] = $page_background_color;

        return $this;
    }

    /**
     * Gets tile_title_alignment
     *
     * @return string
     */
    public function getTileTitleAlignment()
    {
        return $this->container['tile_title_alignment'];
    }

    /**
     * Sets tile_title_alignment
     *
     * @param string $tile_title_alignment Title alignment on dashboard tiles
     *
     * @return $this
     */
    public function setTileTitleAlignment($tile_title_alignment)
    {
        $this->container['tile_title_alignment'] = $tile_title_alignment;

        return $this;
    }

    /**
     * Gets tile_space_between
     *
     * @return int
     */
    public function getTileSpaceBetween()
    {
        return $this->container['tile_space_between'];
    }

    /**
     * Sets tile_space_between
     *
     * @param int $tile_space_between Space between tiles
     *
     * @return $this
     */
    public function setTileSpaceBetween($tile_space_between)
    {
        $this->container['tile_space_between'] = $tile_space_between;

        return $this;
    }

    /**
     * Gets tile_background_color
     *
     * @return string
     */
    public function getTileBackgroundColor()
    {
        return $this->container['tile_background_color'];
    }

    /**
     * Sets tile_background_color
     *
     * @param string $tile_background_color Background color for tiles
     *
     * @return $this
     */
    public function setTileBackgroundColor($tile_background_color)
    {
        $this->container['tile_background_color'] = $tile_background_color;

        return $this;
    }

    /**
     * Gets tile_shadow
     *
     * @return bool
     */
    public function getTileShadow()
    {
        return $this->container['tile_shadow'];
    }

    /**
     * Sets tile_shadow
     *
     * @param bool $tile_shadow Tile shadow on/off
     *
     * @return $this
     */
    public function setTileShadow($tile_shadow)
    {
        $this->container['tile_shadow'] = $tile_shadow;

        return $this;
    }

    /**
     * Gets key_color
     *
     * @return string
     */
    public function getKeyColor()
    {
        return $this->container['key_color'];
    }

    /**
     * Sets key_color
     *
     * @param string $key_color Key color
     *
     * @return $this
     */
    public function setKeyColor($key_color)
    {
        $this->container['key_color'] = $key_color;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
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


