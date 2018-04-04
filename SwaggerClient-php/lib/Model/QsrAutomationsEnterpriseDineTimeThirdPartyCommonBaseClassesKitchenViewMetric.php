<?php
/**
 * QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetric
 *
 * PHP version 5
 *
 * @category Class
 * @package  QsrAutomations\Api
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QSR Automations API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QsrAutomations\Api\Model;

use \ArrayAccess;

/**
 * QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetric Class Doc Comment
 *
 * @category    Class
 * @package     QsrAutomations\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QsrAutomationsEnterpriseDineTimeThirdPartyCommonBaseClassesKitchenViewMetric implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QsrAutomations.Enterprise.DineTimeThirdParty.Common.BaseClasses.Kitchen.ViewMetric';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'average_actual_cook_time' => 'int',
        'average_bump_time' => 'int',
        'average_cook_delay_time' => 'int',
        'average_expediter_time' => 'int',
        'average_item_priority_time' => 'int',
        'average_item_rush_time' => 'int',
        'average_prep_time' => 'int',
        'average_priority_time' => 'int',
        'average_rush_time' => 'int',
        'cook_time_deviation' => 'int',
        'cook_time_variance' => 'int',
        'courses_active' => 'int',
        'courses_in_priority' => 'int',
        'courses_in_rush' => 'int',
        'courses_prepared' => 'int',
        'item_forecast_prep_time' => 'int',
        'items_active' => 'int',
        'items_cooking' => 'int',
        'items_displayed' => 'int',
        'items_in_priority' => 'int',
        'items_in_rush' => 'int',
        'moving_average_bump_time' => 'int',
        'moving_average_expediter_time' => 'int',
        'total_courses_prepared' => 'int',
        'total_courses_with_priority' => 'int',
        'total_courses_with_rush' => 'int',
        'total_items_prepared' => 'int',
        'total_items_with_priority' => 'int',
        'total_items_with_rush' => 'int',
        'view_id' => 'int',
        'view_name' => 'string',
        'timestamp_local' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'average_actual_cook_time' => 'int32',
        'average_bump_time' => 'int32',
        'average_cook_delay_time' => 'int32',
        'average_expediter_time' => 'int32',
        'average_item_priority_time' => 'int32',
        'average_item_rush_time' => 'int32',
        'average_prep_time' => 'int32',
        'average_priority_time' => 'int32',
        'average_rush_time' => 'int32',
        'cook_time_deviation' => 'int32',
        'cook_time_variance' => 'int32',
        'courses_active' => 'int32',
        'courses_in_priority' => 'int32',
        'courses_in_rush' => 'int32',
        'courses_prepared' => 'int32',
        'item_forecast_prep_time' => 'int32',
        'items_active' => 'int32',
        'items_cooking' => 'int32',
        'items_displayed' => 'int32',
        'items_in_priority' => 'int32',
        'items_in_rush' => 'int32',
        'moving_average_bump_time' => 'int32',
        'moving_average_expediter_time' => 'int32',
        'total_courses_prepared' => 'int32',
        'total_courses_with_priority' => 'int32',
        'total_courses_with_rush' => 'int32',
        'total_items_prepared' => 'int32',
        'total_items_with_priority' => 'int32',
        'total_items_with_rush' => 'int32',
        'view_id' => 'int32',
        'view_name' => null,
        'timestamp_local' => 'date-time'
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
        'average_actual_cook_time' => 'AverageActualCookTime',
        'average_bump_time' => 'AverageBumpTime',
        'average_cook_delay_time' => 'AverageCookDelayTime',
        'average_expediter_time' => 'AverageExpediterTime',
        'average_item_priority_time' => 'AverageItemPriorityTime',
        'average_item_rush_time' => 'AverageItemRushTime',
        'average_prep_time' => 'AveragePrepTime',
        'average_priority_time' => 'AveragePriorityTime',
        'average_rush_time' => 'AverageRushTime',
        'cook_time_deviation' => 'CookTimeDeviation',
        'cook_time_variance' => 'CookTimeVariance',
        'courses_active' => 'CoursesActive',
        'courses_in_priority' => 'CoursesInPriority',
        'courses_in_rush' => 'CoursesInRush',
        'courses_prepared' => 'CoursesPrepared',
        'item_forecast_prep_time' => 'ItemForecastPrepTime',
        'items_active' => 'ItemsActive',
        'items_cooking' => 'ItemsCooking',
        'items_displayed' => 'ItemsDisplayed',
        'items_in_priority' => 'ItemsInPriority',
        'items_in_rush' => 'ItemsInRush',
        'moving_average_bump_time' => 'MovingAverageBumpTime',
        'moving_average_expediter_time' => 'MovingAverageExpediterTime',
        'total_courses_prepared' => 'TotalCoursesPrepared',
        'total_courses_with_priority' => 'TotalCoursesWithPriority',
        'total_courses_with_rush' => 'TotalCoursesWithRush',
        'total_items_prepared' => 'TotalItemsPrepared',
        'total_items_with_priority' => 'TotalItemsWithPriority',
        'total_items_with_rush' => 'TotalItemsWithRush',
        'view_id' => 'ViewID',
        'view_name' => 'ViewName',
        'timestamp_local' => 'TimestampLocal'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'average_actual_cook_time' => 'setAverageActualCookTime',
        'average_bump_time' => 'setAverageBumpTime',
        'average_cook_delay_time' => 'setAverageCookDelayTime',
        'average_expediter_time' => 'setAverageExpediterTime',
        'average_item_priority_time' => 'setAverageItemPriorityTime',
        'average_item_rush_time' => 'setAverageItemRushTime',
        'average_prep_time' => 'setAveragePrepTime',
        'average_priority_time' => 'setAveragePriorityTime',
        'average_rush_time' => 'setAverageRushTime',
        'cook_time_deviation' => 'setCookTimeDeviation',
        'cook_time_variance' => 'setCookTimeVariance',
        'courses_active' => 'setCoursesActive',
        'courses_in_priority' => 'setCoursesInPriority',
        'courses_in_rush' => 'setCoursesInRush',
        'courses_prepared' => 'setCoursesPrepared',
        'item_forecast_prep_time' => 'setItemForecastPrepTime',
        'items_active' => 'setItemsActive',
        'items_cooking' => 'setItemsCooking',
        'items_displayed' => 'setItemsDisplayed',
        'items_in_priority' => 'setItemsInPriority',
        'items_in_rush' => 'setItemsInRush',
        'moving_average_bump_time' => 'setMovingAverageBumpTime',
        'moving_average_expediter_time' => 'setMovingAverageExpediterTime',
        'total_courses_prepared' => 'setTotalCoursesPrepared',
        'total_courses_with_priority' => 'setTotalCoursesWithPriority',
        'total_courses_with_rush' => 'setTotalCoursesWithRush',
        'total_items_prepared' => 'setTotalItemsPrepared',
        'total_items_with_priority' => 'setTotalItemsWithPriority',
        'total_items_with_rush' => 'setTotalItemsWithRush',
        'view_id' => 'setViewId',
        'view_name' => 'setViewName',
        'timestamp_local' => 'setTimestampLocal'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'average_actual_cook_time' => 'getAverageActualCookTime',
        'average_bump_time' => 'getAverageBumpTime',
        'average_cook_delay_time' => 'getAverageCookDelayTime',
        'average_expediter_time' => 'getAverageExpediterTime',
        'average_item_priority_time' => 'getAverageItemPriorityTime',
        'average_item_rush_time' => 'getAverageItemRushTime',
        'average_prep_time' => 'getAveragePrepTime',
        'average_priority_time' => 'getAveragePriorityTime',
        'average_rush_time' => 'getAverageRushTime',
        'cook_time_deviation' => 'getCookTimeDeviation',
        'cook_time_variance' => 'getCookTimeVariance',
        'courses_active' => 'getCoursesActive',
        'courses_in_priority' => 'getCoursesInPriority',
        'courses_in_rush' => 'getCoursesInRush',
        'courses_prepared' => 'getCoursesPrepared',
        'item_forecast_prep_time' => 'getItemForecastPrepTime',
        'items_active' => 'getItemsActive',
        'items_cooking' => 'getItemsCooking',
        'items_displayed' => 'getItemsDisplayed',
        'items_in_priority' => 'getItemsInPriority',
        'items_in_rush' => 'getItemsInRush',
        'moving_average_bump_time' => 'getMovingAverageBumpTime',
        'moving_average_expediter_time' => 'getMovingAverageExpediterTime',
        'total_courses_prepared' => 'getTotalCoursesPrepared',
        'total_courses_with_priority' => 'getTotalCoursesWithPriority',
        'total_courses_with_rush' => 'getTotalCoursesWithRush',
        'total_items_prepared' => 'getTotalItemsPrepared',
        'total_items_with_priority' => 'getTotalItemsWithPriority',
        'total_items_with_rush' => 'getTotalItemsWithRush',
        'view_id' => 'getViewId',
        'view_name' => 'getViewName',
        'timestamp_local' => 'getTimestampLocal'
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
        $this->container['average_actual_cook_time'] = isset($data['average_actual_cook_time']) ? $data['average_actual_cook_time'] : null;
        $this->container['average_bump_time'] = isset($data['average_bump_time']) ? $data['average_bump_time'] : null;
        $this->container['average_cook_delay_time'] = isset($data['average_cook_delay_time']) ? $data['average_cook_delay_time'] : null;
        $this->container['average_expediter_time'] = isset($data['average_expediter_time']) ? $data['average_expediter_time'] : null;
        $this->container['average_item_priority_time'] = isset($data['average_item_priority_time']) ? $data['average_item_priority_time'] : null;
        $this->container['average_item_rush_time'] = isset($data['average_item_rush_time']) ? $data['average_item_rush_time'] : null;
        $this->container['average_prep_time'] = isset($data['average_prep_time']) ? $data['average_prep_time'] : null;
        $this->container['average_priority_time'] = isset($data['average_priority_time']) ? $data['average_priority_time'] : null;
        $this->container['average_rush_time'] = isset($data['average_rush_time']) ? $data['average_rush_time'] : null;
        $this->container['cook_time_deviation'] = isset($data['cook_time_deviation']) ? $data['cook_time_deviation'] : null;
        $this->container['cook_time_variance'] = isset($data['cook_time_variance']) ? $data['cook_time_variance'] : null;
        $this->container['courses_active'] = isset($data['courses_active']) ? $data['courses_active'] : null;
        $this->container['courses_in_priority'] = isset($data['courses_in_priority']) ? $data['courses_in_priority'] : null;
        $this->container['courses_in_rush'] = isset($data['courses_in_rush']) ? $data['courses_in_rush'] : null;
        $this->container['courses_prepared'] = isset($data['courses_prepared']) ? $data['courses_prepared'] : null;
        $this->container['item_forecast_prep_time'] = isset($data['item_forecast_prep_time']) ? $data['item_forecast_prep_time'] : null;
        $this->container['items_active'] = isset($data['items_active']) ? $data['items_active'] : null;
        $this->container['items_cooking'] = isset($data['items_cooking']) ? $data['items_cooking'] : null;
        $this->container['items_displayed'] = isset($data['items_displayed']) ? $data['items_displayed'] : null;
        $this->container['items_in_priority'] = isset($data['items_in_priority']) ? $data['items_in_priority'] : null;
        $this->container['items_in_rush'] = isset($data['items_in_rush']) ? $data['items_in_rush'] : null;
        $this->container['moving_average_bump_time'] = isset($data['moving_average_bump_time']) ? $data['moving_average_bump_time'] : null;
        $this->container['moving_average_expediter_time'] = isset($data['moving_average_expediter_time']) ? $data['moving_average_expediter_time'] : null;
        $this->container['total_courses_prepared'] = isset($data['total_courses_prepared']) ? $data['total_courses_prepared'] : null;
        $this->container['total_courses_with_priority'] = isset($data['total_courses_with_priority']) ? $data['total_courses_with_priority'] : null;
        $this->container['total_courses_with_rush'] = isset($data['total_courses_with_rush']) ? $data['total_courses_with_rush'] : null;
        $this->container['total_items_prepared'] = isset($data['total_items_prepared']) ? $data['total_items_prepared'] : null;
        $this->container['total_items_with_priority'] = isset($data['total_items_with_priority']) ? $data['total_items_with_priority'] : null;
        $this->container['total_items_with_rush'] = isset($data['total_items_with_rush']) ? $data['total_items_with_rush'] : null;
        $this->container['view_id'] = isset($data['view_id']) ? $data['view_id'] : null;
        $this->container['view_name'] = isset($data['view_name']) ? $data['view_name'] : null;
        $this->container['timestamp_local'] = isset($data['timestamp_local']) ? $data['timestamp_local'] : null;
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
     * Gets average_actual_cook_time
     * @return int
     */
    public function getAverageActualCookTime()
    {
        return $this->container['average_actual_cook_time'];
    }

    /**
     * Sets average_actual_cook_time
     * @param int $average_actual_cook_time
     * @return $this
     */
    public function setAverageActualCookTime($average_actual_cook_time)
    {
        $this->container['average_actual_cook_time'] = $average_actual_cook_time;

        return $this;
    }

    /**
     * Gets average_bump_time
     * @return int
     */
    public function getAverageBumpTime()
    {
        return $this->container['average_bump_time'];
    }

    /**
     * Sets average_bump_time
     * @param int $average_bump_time
     * @return $this
     */
    public function setAverageBumpTime($average_bump_time)
    {
        $this->container['average_bump_time'] = $average_bump_time;

        return $this;
    }

    /**
     * Gets average_cook_delay_time
     * @return int
     */
    public function getAverageCookDelayTime()
    {
        return $this->container['average_cook_delay_time'];
    }

    /**
     * Sets average_cook_delay_time
     * @param int $average_cook_delay_time
     * @return $this
     */
    public function setAverageCookDelayTime($average_cook_delay_time)
    {
        $this->container['average_cook_delay_time'] = $average_cook_delay_time;

        return $this;
    }

    /**
     * Gets average_expediter_time
     * @return int
     */
    public function getAverageExpediterTime()
    {
        return $this->container['average_expediter_time'];
    }

    /**
     * Sets average_expediter_time
     * @param int $average_expediter_time
     * @return $this
     */
    public function setAverageExpediterTime($average_expediter_time)
    {
        $this->container['average_expediter_time'] = $average_expediter_time;

        return $this;
    }

    /**
     * Gets average_item_priority_time
     * @return int
     */
    public function getAverageItemPriorityTime()
    {
        return $this->container['average_item_priority_time'];
    }

    /**
     * Sets average_item_priority_time
     * @param int $average_item_priority_time
     * @return $this
     */
    public function setAverageItemPriorityTime($average_item_priority_time)
    {
        $this->container['average_item_priority_time'] = $average_item_priority_time;

        return $this;
    }

    /**
     * Gets average_item_rush_time
     * @return int
     */
    public function getAverageItemRushTime()
    {
        return $this->container['average_item_rush_time'];
    }

    /**
     * Sets average_item_rush_time
     * @param int $average_item_rush_time
     * @return $this
     */
    public function setAverageItemRushTime($average_item_rush_time)
    {
        $this->container['average_item_rush_time'] = $average_item_rush_time;

        return $this;
    }

    /**
     * Gets average_prep_time
     * @return int
     */
    public function getAveragePrepTime()
    {
        return $this->container['average_prep_time'];
    }

    /**
     * Sets average_prep_time
     * @param int $average_prep_time
     * @return $this
     */
    public function setAveragePrepTime($average_prep_time)
    {
        $this->container['average_prep_time'] = $average_prep_time;

        return $this;
    }

    /**
     * Gets average_priority_time
     * @return int
     */
    public function getAveragePriorityTime()
    {
        return $this->container['average_priority_time'];
    }

    /**
     * Sets average_priority_time
     * @param int $average_priority_time
     * @return $this
     */
    public function setAveragePriorityTime($average_priority_time)
    {
        $this->container['average_priority_time'] = $average_priority_time;

        return $this;
    }

    /**
     * Gets average_rush_time
     * @return int
     */
    public function getAverageRushTime()
    {
        return $this->container['average_rush_time'];
    }

    /**
     * Sets average_rush_time
     * @param int $average_rush_time
     * @return $this
     */
    public function setAverageRushTime($average_rush_time)
    {
        $this->container['average_rush_time'] = $average_rush_time;

        return $this;
    }

    /**
     * Gets cook_time_deviation
     * @return int
     */
    public function getCookTimeDeviation()
    {
        return $this->container['cook_time_deviation'];
    }

    /**
     * Sets cook_time_deviation
     * @param int $cook_time_deviation
     * @return $this
     */
    public function setCookTimeDeviation($cook_time_deviation)
    {
        $this->container['cook_time_deviation'] = $cook_time_deviation;

        return $this;
    }

    /**
     * Gets cook_time_variance
     * @return int
     */
    public function getCookTimeVariance()
    {
        return $this->container['cook_time_variance'];
    }

    /**
     * Sets cook_time_variance
     * @param int $cook_time_variance
     * @return $this
     */
    public function setCookTimeVariance($cook_time_variance)
    {
        $this->container['cook_time_variance'] = $cook_time_variance;

        return $this;
    }

    /**
     * Gets courses_active
     * @return int
     */
    public function getCoursesActive()
    {
        return $this->container['courses_active'];
    }

    /**
     * Sets courses_active
     * @param int $courses_active
     * @return $this
     */
    public function setCoursesActive($courses_active)
    {
        $this->container['courses_active'] = $courses_active;

        return $this;
    }

    /**
     * Gets courses_in_priority
     * @return int
     */
    public function getCoursesInPriority()
    {
        return $this->container['courses_in_priority'];
    }

    /**
     * Sets courses_in_priority
     * @param int $courses_in_priority
     * @return $this
     */
    public function setCoursesInPriority($courses_in_priority)
    {
        $this->container['courses_in_priority'] = $courses_in_priority;

        return $this;
    }

    /**
     * Gets courses_in_rush
     * @return int
     */
    public function getCoursesInRush()
    {
        return $this->container['courses_in_rush'];
    }

    /**
     * Sets courses_in_rush
     * @param int $courses_in_rush
     * @return $this
     */
    public function setCoursesInRush($courses_in_rush)
    {
        $this->container['courses_in_rush'] = $courses_in_rush;

        return $this;
    }

    /**
     * Gets courses_prepared
     * @return int
     */
    public function getCoursesPrepared()
    {
        return $this->container['courses_prepared'];
    }

    /**
     * Sets courses_prepared
     * @param int $courses_prepared
     * @return $this
     */
    public function setCoursesPrepared($courses_prepared)
    {
        $this->container['courses_prepared'] = $courses_prepared;

        return $this;
    }

    /**
     * Gets item_forecast_prep_time
     * @return int
     */
    public function getItemForecastPrepTime()
    {
        return $this->container['item_forecast_prep_time'];
    }

    /**
     * Sets item_forecast_prep_time
     * @param int $item_forecast_prep_time
     * @return $this
     */
    public function setItemForecastPrepTime($item_forecast_prep_time)
    {
        $this->container['item_forecast_prep_time'] = $item_forecast_prep_time;

        return $this;
    }

    /**
     * Gets items_active
     * @return int
     */
    public function getItemsActive()
    {
        return $this->container['items_active'];
    }

    /**
     * Sets items_active
     * @param int $items_active
     * @return $this
     */
    public function setItemsActive($items_active)
    {
        $this->container['items_active'] = $items_active;

        return $this;
    }

    /**
     * Gets items_cooking
     * @return int
     */
    public function getItemsCooking()
    {
        return $this->container['items_cooking'];
    }

    /**
     * Sets items_cooking
     * @param int $items_cooking
     * @return $this
     */
    public function setItemsCooking($items_cooking)
    {
        $this->container['items_cooking'] = $items_cooking;

        return $this;
    }

    /**
     * Gets items_displayed
     * @return int
     */
    public function getItemsDisplayed()
    {
        return $this->container['items_displayed'];
    }

    /**
     * Sets items_displayed
     * @param int $items_displayed
     * @return $this
     */
    public function setItemsDisplayed($items_displayed)
    {
        $this->container['items_displayed'] = $items_displayed;

        return $this;
    }

    /**
     * Gets items_in_priority
     * @return int
     */
    public function getItemsInPriority()
    {
        return $this->container['items_in_priority'];
    }

    /**
     * Sets items_in_priority
     * @param int $items_in_priority
     * @return $this
     */
    public function setItemsInPriority($items_in_priority)
    {
        $this->container['items_in_priority'] = $items_in_priority;

        return $this;
    }

    /**
     * Gets items_in_rush
     * @return int
     */
    public function getItemsInRush()
    {
        return $this->container['items_in_rush'];
    }

    /**
     * Sets items_in_rush
     * @param int $items_in_rush
     * @return $this
     */
    public function setItemsInRush($items_in_rush)
    {
        $this->container['items_in_rush'] = $items_in_rush;

        return $this;
    }

    /**
     * Gets moving_average_bump_time
     * @return int
     */
    public function getMovingAverageBumpTime()
    {
        return $this->container['moving_average_bump_time'];
    }

    /**
     * Sets moving_average_bump_time
     * @param int $moving_average_bump_time
     * @return $this
     */
    public function setMovingAverageBumpTime($moving_average_bump_time)
    {
        $this->container['moving_average_bump_time'] = $moving_average_bump_time;

        return $this;
    }

    /**
     * Gets moving_average_expediter_time
     * @return int
     */
    public function getMovingAverageExpediterTime()
    {
        return $this->container['moving_average_expediter_time'];
    }

    /**
     * Sets moving_average_expediter_time
     * @param int $moving_average_expediter_time
     * @return $this
     */
    public function setMovingAverageExpediterTime($moving_average_expediter_time)
    {
        $this->container['moving_average_expediter_time'] = $moving_average_expediter_time;

        return $this;
    }

    /**
     * Gets total_courses_prepared
     * @return int
     */
    public function getTotalCoursesPrepared()
    {
        return $this->container['total_courses_prepared'];
    }

    /**
     * Sets total_courses_prepared
     * @param int $total_courses_prepared
     * @return $this
     */
    public function setTotalCoursesPrepared($total_courses_prepared)
    {
        $this->container['total_courses_prepared'] = $total_courses_prepared;

        return $this;
    }

    /**
     * Gets total_courses_with_priority
     * @return int
     */
    public function getTotalCoursesWithPriority()
    {
        return $this->container['total_courses_with_priority'];
    }

    /**
     * Sets total_courses_with_priority
     * @param int $total_courses_with_priority
     * @return $this
     */
    public function setTotalCoursesWithPriority($total_courses_with_priority)
    {
        $this->container['total_courses_with_priority'] = $total_courses_with_priority;

        return $this;
    }

    /**
     * Gets total_courses_with_rush
     * @return int
     */
    public function getTotalCoursesWithRush()
    {
        return $this->container['total_courses_with_rush'];
    }

    /**
     * Sets total_courses_with_rush
     * @param int $total_courses_with_rush
     * @return $this
     */
    public function setTotalCoursesWithRush($total_courses_with_rush)
    {
        $this->container['total_courses_with_rush'] = $total_courses_with_rush;

        return $this;
    }

    /**
     * Gets total_items_prepared
     * @return int
     */
    public function getTotalItemsPrepared()
    {
        return $this->container['total_items_prepared'];
    }

    /**
     * Sets total_items_prepared
     * @param int $total_items_prepared
     * @return $this
     */
    public function setTotalItemsPrepared($total_items_prepared)
    {
        $this->container['total_items_prepared'] = $total_items_prepared;

        return $this;
    }

    /**
     * Gets total_items_with_priority
     * @return int
     */
    public function getTotalItemsWithPriority()
    {
        return $this->container['total_items_with_priority'];
    }

    /**
     * Sets total_items_with_priority
     * @param int $total_items_with_priority
     * @return $this
     */
    public function setTotalItemsWithPriority($total_items_with_priority)
    {
        $this->container['total_items_with_priority'] = $total_items_with_priority;

        return $this;
    }

    /**
     * Gets total_items_with_rush
     * @return int
     */
    public function getTotalItemsWithRush()
    {
        return $this->container['total_items_with_rush'];
    }

    /**
     * Sets total_items_with_rush
     * @param int $total_items_with_rush
     * @return $this
     */
    public function setTotalItemsWithRush($total_items_with_rush)
    {
        $this->container['total_items_with_rush'] = $total_items_with_rush;

        return $this;
    }

    /**
     * Gets view_id
     * @return int
     */
    public function getViewId()
    {
        return $this->container['view_id'];
    }

    /**
     * Sets view_id
     * @param int $view_id
     * @return $this
     */
    public function setViewId($view_id)
    {
        $this->container['view_id'] = $view_id;

        return $this;
    }

    /**
     * Gets view_name
     * @return string
     */
    public function getViewName()
    {
        return $this->container['view_name'];
    }

    /**
     * Sets view_name
     * @param string $view_name
     * @return $this
     */
    public function setViewName($view_name)
    {
        $this->container['view_name'] = $view_name;

        return $this;
    }

    /**
     * Gets timestamp_local
     * @return \DateTime
     */
    public function getTimestampLocal()
    {
        return $this->container['timestamp_local'];
    }

    /**
     * Sets timestamp_local
     * @param \DateTime $timestamp_local
     * @return $this
     */
    public function setTimestampLocal($timestamp_local)
    {
        $this->container['timestamp_local'] = $timestamp_local;

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
            return json_encode(\QsrAutomations\Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\QsrAutomations\Api\ObjectSerializer::sanitizeForSerialization($this));
    }
}


