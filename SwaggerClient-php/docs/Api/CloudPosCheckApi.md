# QsrAutomations\Api\CloudPosCheckApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloudPosCheckAddCheck**](CloudPosCheckApi.md#cloudPosCheckAddCheck) | **POST** /Site/{siteUID}/Pos/Checks | 
[**cloudPosCheckAddCourseToCheck**](CloudPosCheckApi.md#cloudPosCheckAddCourseToCheck) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses | 
[**cloudPosCheckAddItemsToCourse**](CloudPosCheckApi.md#cloudPosCheckAddItemsToCourse) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/{courseNumber}/Items | 
[**cloudPosCheckAddPaymentStateToCourse**](CloudPosCheckApi.md#cloudPosCheckAddPaymentStateToCourse) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/{courseNumber}/PaymentStates | 
[**cloudPosCheckAddPaymentStatesToCheck**](CloudPosCheckApi.md#cloudPosCheckAddPaymentStatesToCheck) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/PaymentStates | 
[**cloudPosCheckBumpCheck**](CloudPosCheckApi.md#cloudPosCheckBumpCheck) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/Bumps | 
[**cloudPosCheckBumpCourseOnCheck**](CloudPosCheckApi.md#cloudPosCheckBumpCourseOnCheck) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/{courseNumber}/Bumps | 
[**cloudPosCheckCancelAllCoursesInCheck**](CloudPosCheckApi.md#cloudPosCheckCancelAllCoursesInCheck) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/Cancellations | 
[**cloudPosCheckCancelCourseInCheck**](CloudPosCheckApi.md#cloudPosCheckCancelCourseInCheck) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/{courseNumber}/Cancellations | 
[**cloudPosCheckCancelItemInCourse**](CloudPosCheckApi.md#cloudPosCheckCancelItemInCourse) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/{courseNumber}/Items/{itemNumber}/Cancellations | 
[**cloudPosCheckDeleteCheck**](CloudPosCheckApi.md#cloudPosCheckDeleteCheck) | **DELETE** /Site/{siteUID}/Pos/Checks/{checkNumber} | 
[**cloudPosCheckDeleteCourseFromCheck**](CloudPosCheckApi.md#cloudPosCheckDeleteCourseFromCheck) | **DELETE** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/{courseNumber} | 
[**cloudPosCheckFastTrackCheck**](CloudPosCheckApi.md#cloudPosCheckFastTrackCheck) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/FastTracks | 
[**cloudPosCheckFastTrackCourse**](CloudPosCheckApi.md#cloudPosCheckFastTrackCourse) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/{courseNumber}/FastTracks | 
[**cloudPosCheckFastTrackItemInCourse**](CloudPosCheckApi.md#cloudPosCheckFastTrackItemInCourse) | **POST** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/{courseNumber}/Items/{itemNumber}/FastTracks | 
[**cloudPosCheckGetCheckByCheckNumber**](CloudPosCheckApi.md#cloudPosCheckGetCheckByCheckNumber) | **GET** /Site/{siteUID}/Pos/Checks/{checkNumber} | 
[**cloudPosCheckUpdateCheck**](CloudPosCheckApi.md#cloudPosCheckUpdateCheck) | **PATCH** /Site/{siteUID}/Pos/Checks/{checkNumber} | 
[**cloudPosCheckUpdateCourse**](CloudPosCheckApi.md#cloudPosCheckUpdateCourse) | **PATCH** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/{courseNumber} | 
[**cloudPosCheckUpdateCoursesInCheck**](CloudPosCheckApi.md#cloudPosCheckUpdateCoursesInCheck) | **PATCH** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses | 
[**cloudPosCheckUpdateItemInCourse**](CloudPosCheckApi.md#cloudPosCheckUpdateItemInCourse) | **PATCH** /Site/{siteUID}/Pos/Checks/{checkNumber}/Courses/{courseNumber}/Items/{itemNumber} | 


# **cloudPosCheckAddCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckAddCheck($site_uid, $check)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check = new \QsrAutomations\Api\Model\CloudPos.Contract.BaseClasses.Check.DTO.Check(); // \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCheck | 

try {
    $result = $api_instance->cloudPosCheckAddCheck($site_uid, $check);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckAddCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check** | [**\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCheck**](../Model/CloudPos.Contract.BaseClasses.Check.DTO.Check.md)|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckAddCourseToCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckAddCourseToCheck($site_uid, $check_number, $course)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course = new \QsrAutomations\Api\Model\CloudPos.Contract.BaseClasses.Check.DTO.Course(); // \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCourse | 

try {
    $result = $api_instance->cloudPosCheckAddCourseToCheck($site_uid, $check_number, $course);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckAddCourseToCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course** | [**\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCourse**](../Model/CloudPos.Contract.BaseClasses.Check.DTO.Course.md)|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckAddItemsToCourse**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckAddItemsToCourse($site_uid, $check_number, $course_number, $items)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course_number = 56; // int | 
$items = new \QsrAutomations\Api\Model\CloudPos.Contract.BaseClasses.Check.DTO.ItemList(); // \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOItemList | 

try {
    $result = $api_instance->cloudPosCheckAddItemsToCourse($site_uid, $check_number, $course_number, $items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckAddItemsToCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course_number** | **int**|  |
 **items** | [**\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOItemList**](../Model/CloudPos.Contract.BaseClasses.Check.DTO.ItemList.md)|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckAddPaymentStateToCourse**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckAddPaymentStateToCourse($site_uid, $check_number, $course_number, $payment_state)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course_number = 56; // int | 
$payment_state = new \QsrAutomations\Api\Model\CloudPos.Contract.BaseClasses.Check.DTO.CoursePaymentState(); // \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCoursePaymentState | 

try {
    $result = $api_instance->cloudPosCheckAddPaymentStateToCourse($site_uid, $check_number, $course_number, $payment_state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckAddPaymentStateToCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course_number** | **int**|  |
 **payment_state** | [**\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCoursePaymentState**](../Model/CloudPos.Contract.BaseClasses.Check.DTO.CoursePaymentState.md)|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckAddPaymentStatesToCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckAddPaymentStatesToCheck($site_uid, $check_number, $payment_state)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$payment_state = new \QsrAutomations\Api\Model\CloudPos.Contract.BaseClasses.Check.DTO.CoursePaymentState(); // \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCoursePaymentState | 

try {
    $result = $api_instance->cloudPosCheckAddPaymentStatesToCheck($site_uid, $check_number, $payment_state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckAddPaymentStatesToCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **payment_state** | [**\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCoursePaymentState**](../Model/CloudPos.Contract.BaseClasses.Check.DTO.CoursePaymentState.md)|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckBumpCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckBumpCheck($site_uid, $check_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 

try {
    $result = $api_instance->cloudPosCheckBumpCheck($site_uid, $check_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckBumpCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckBumpCourseOnCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckBumpCourseOnCheck($site_uid, $check_number, $course_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course_number = 56; // int | 

try {
    $result = $api_instance->cloudPosCheckBumpCourseOnCheck($site_uid, $check_number, $course_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckBumpCourseOnCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course_number** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckCancelAllCoursesInCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckCancelAllCoursesInCheck($site_uid, $check_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 

try {
    $result = $api_instance->cloudPosCheckCancelAllCoursesInCheck($site_uid, $check_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckCancelAllCoursesInCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckCancelCourseInCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckCancelCourseInCheck($site_uid, $check_number, $course_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course_number = 56; // int | 

try {
    $result = $api_instance->cloudPosCheckCancelCourseInCheck($site_uid, $check_number, $course_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckCancelCourseInCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course_number** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckCancelItemInCourse**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckCancelItemInCourse($site_uid, $check_number, $course_number, $item_number, $cancellation)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course_number = 56; // int | 
$item_number = 789; // int | 
$cancellation = new \QsrAutomations\Api\Model\CloudPos.Contract.BaseClasses.Check.DTO.ItemCancellation(); // \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOItemCancellation | 

try {
    $result = $api_instance->cloudPosCheckCancelItemInCourse($site_uid, $check_number, $course_number, $item_number, $cancellation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckCancelItemInCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course_number** | **int**|  |
 **item_number** | **int**|  |
 **cancellation** | [**\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOItemCancellation**](../Model/CloudPos.Contract.BaseClasses.Check.DTO.ItemCancellation.md)|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckDeleteCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckDeleteCheck($site_uid, $check_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 

try {
    $result = $api_instance->cloudPosCheckDeleteCheck($site_uid, $check_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckDeleteCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckDeleteCourseFromCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckDeleteCourseFromCheck($site_uid, $check_number, $course_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course_number = 56; // int | 

try {
    $result = $api_instance->cloudPosCheckDeleteCourseFromCheck($site_uid, $check_number, $course_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckDeleteCourseFromCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course_number** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckFastTrackCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckFastTrackCheck($site_uid, $check_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 

try {
    $result = $api_instance->cloudPosCheckFastTrackCheck($site_uid, $check_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckFastTrackCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckFastTrackCourse**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckFastTrackCourse($site_uid, $check_number, $course_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course_number = 56; // int | 

try {
    $result = $api_instance->cloudPosCheckFastTrackCourse($site_uid, $check_number, $course_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckFastTrackCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course_number** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckFastTrackItemInCourse**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckFastTrackItemInCourse($site_uid, $check_number, $course_number, $item_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course_number = 56; // int | 
$item_number = 789; // int | 

try {
    $result = $api_instance->cloudPosCheckFastTrackItemInCourse($site_uid, $check_number, $course_number, $item_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckFastTrackItemInCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course_number** | **int**|  |
 **item_number** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckGetCheckByCheckNumber**
> \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCheckWithKitchenStatus cloudPosCheckGetCheckByCheckNumber($site_uid, $check_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 

try {
    $result = $api_instance->cloudPosCheckGetCheckByCheckNumber($site_uid, $check_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckGetCheckByCheckNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |

### Return type

[**\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCheckWithKitchenStatus**](../Model/CloudPosContractBaseClassesCheckDTOCheckWithKitchenStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckUpdateCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckUpdateCheck($site_uid, $check_number, $check)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$check = new \QsrAutomations\Api\Model\CloudPos.Contract.BaseClasses.Check.DTO.Check(); // \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCheck | 

try {
    $result = $api_instance->cloudPosCheckUpdateCheck($site_uid, $check_number, $check);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckUpdateCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **check** | [**\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCheck**](../Model/CloudPos.Contract.BaseClasses.Check.DTO.Check.md)|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckUpdateCourse**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckUpdateCourse($site_uid, $check_number, $course_number, $course)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course_number = 56; // int | 
$course = new \QsrAutomations\Api\Model\CloudPos.Contract.BaseClasses.Check.DTO.Course(); // \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCourse | 

try {
    $result = $api_instance->cloudPosCheckUpdateCourse($site_uid, $check_number, $course_number, $course);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckUpdateCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course_number** | **int**|  |
 **course** | [**\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCourse**](../Model/CloudPos.Contract.BaseClasses.Check.DTO.Course.md)|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckUpdateCoursesInCheck**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckUpdateCoursesInCheck($site_uid, $check_number, $course)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course = new \QsrAutomations\Api\Model\CloudPos.Contract.BaseClasses.Check.DTO.Course(); // \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCourse | 

try {
    $result = $api_instance->cloudPosCheckUpdateCoursesInCheck($site_uid, $check_number, $course);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckUpdateCoursesInCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course** | [**\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOCourse**](../Model/CloudPos.Contract.BaseClasses.Check.DTO.Course.md)|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloudPosCheckUpdateItemInCourse**
> \QsrAutomations\Api\Model\SystemObject cloudPosCheckUpdateItemInCourse($site_uid, $check_number, $course_number, $item_number, $item)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\CloudPosCheckApi();
$site_uid = "site_uid_example"; // string | 
$check_number = 789; // int | 
$course_number = 56; // int | 
$item_number = 789; // int | 
$item = new \QsrAutomations\Api\Model\CloudPos.Contract.BaseClasses.Check.DTO.Item(); // \QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOItem | 

try {
    $result = $api_instance->cloudPosCheckUpdateItemInCourse($site_uid, $check_number, $course_number, $item_number, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudPosCheckApi->cloudPosCheckUpdateItemInCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **check_number** | **int**|  |
 **course_number** | **int**|  |
 **item_number** | **int**|  |
 **item** | [**\QsrAutomations\Api\Model\CloudPosContractBaseClassesCheckDTOItem**](../Model/CloudPos.Contract.BaseClasses.Check.DTO.Item.md)|  |

### Return type

[**\QsrAutomations\Api\Model\SystemObject**](../Model/SystemObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

