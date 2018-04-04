# QsrAutomations\Api\GuestBookApi

All URIs are relative to *https://gms.qsrpolarisdev.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**guestBookAddGuest**](GuestBookApi.md#guestBookAddGuest) | **POST** /site/{siteUID}/GuestBook | 
[**guestBookAddGuestToCompanyGuestBook**](GuestBookApi.md#guestBookAddGuestToCompanyGuestBook) | **POST** /company/{companyUID}/GuestBook | 
[**guestBookDeleteGuest**](GuestBookApi.md#guestBookDeleteGuest) | **DELETE** /site/{siteUID}/GuestBook/{guestId} | 
[**guestBookDeleteGuestInCompanyGuestBook**](GuestBookApi.md#guestBookDeleteGuestInCompanyGuestBook) | **DELETE** /company/{companyUID}/GuestBook/{guestId} | 
[**guestBookGetGuestUpdatesForCompany**](GuestBookApi.md#guestBookGetGuestUpdatesForCompany) | **GET** /Company/{companyUID}/GuestBook | 
[**guestBookGetGuests**](GuestBookApi.md#guestBookGetGuests) | **GET** /site/{siteUID}/GuestBook | 
[**guestBookPatchGuest**](GuestBookApi.md#guestBookPatchGuest) | **PATCH** /site/{siteUID}/GuestBook/{guestId} | 
[**guestBookPatchGuestInCompanyGuestBook**](GuestBookApi.md#guestBookPatchGuestInCompanyGuestBook) | **PATCH** /company/{companyUID}/GuestBook/{guestId} | 
[**guestBookSearchGuestBook**](GuestBookApi.md#guestBookSearchGuestBook) | **GET** /company/{companyUID}/GuestBook | 


# **guestBookAddGuest**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestInstance guestBookAddGuest($site_uid, $guest, $sync_source)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\GuestBookApi();
$site_uid = "site_uid_example"; // string | 
$guest = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.Contracts.Guests.Types.IGuestData(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestData | 
$sync_source = "sync_source_example"; // string | 

try {
    $result = $api_instance->guestBookAddGuest($site_uid, $guest, $sync_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestBookApi->guestBookAddGuest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **guest** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestData**](../Model/QsrAutomations.DineTime.Contracts.Guests.Types.IGuestData.md)|  |
 **sync_source** | **string**|  | [optional]

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestInstance**](../Model/QsrAutomationsDineTimeContractsGuestsTypesIGuestInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **guestBookAddGuestToCompanyGuestBook**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestInstance guestBookAddGuestToCompanyGuestBook($company_uid, $guest, $sync_source)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\GuestBookApi();
$company_uid = "company_uid_example"; // string | 
$guest = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.Contracts.Guests.Types.IGuestData(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestData | 
$sync_source = "sync_source_example"; // string | 

try {
    $result = $api_instance->guestBookAddGuestToCompanyGuestBook($company_uid, $guest, $sync_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestBookApi->guestBookAddGuestToCompanyGuestBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_uid** | **string**|  |
 **guest** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestData**](../Model/QsrAutomations.DineTime.Contracts.Guests.Types.IGuestData.md)|  |
 **sync_source** | **string**|  | [optional]

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestInstance**](../Model/QsrAutomationsDineTimeContractsGuestsTypesIGuestInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **guestBookDeleteGuest**
> string guestBookDeleteGuest($site_uid, $guest_id, $sync_source)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\GuestBookApi();
$site_uid = "site_uid_example"; // string | 
$guest_id = "guest_id_example"; // string | 
$sync_source = "sync_source_example"; // string | 

try {
    $result = $api_instance->guestBookDeleteGuest($site_uid, $guest_id, $sync_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestBookApi->guestBookDeleteGuest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **guest_id** | **string**|  |
 **sync_source** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **guestBookDeleteGuestInCompanyGuestBook**
> string guestBookDeleteGuestInCompanyGuestBook($company_uid, $guest_id, $sync_source)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\GuestBookApi();
$company_uid = "company_uid_example"; // string | 
$guest_id = "guest_id_example"; // string | 
$sync_source = "sync_source_example"; // string | 

try {
    $result = $api_instance->guestBookDeleteGuestInCompanyGuestBook($company_uid, $guest_id, $sync_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestBookApi->guestBookDeleteGuestInCompanyGuestBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_uid** | **string**|  |
 **guest_id** | **string**|  |
 **sync_source** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **guestBookGetGuestUpdatesForCompany**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestPollResponse guestBookGetGuestUpdatesForCompany($company_uid, $start, $stop, $sync_source)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\GuestBookApi();
$company_uid = "company_uid_example"; // string | 
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$stop = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$sync_source = "sync_source_example"; // string | 

try {
    $result = $api_instance->guestBookGetGuestUpdatesForCompany($company_uid, $start, $stop, $sync_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestBookApi->guestBookGetGuestUpdatesForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_uid** | **string**|  |
 **start** | **\DateTime**|  |
 **stop** | **\DateTime**|  | [optional]
 **sync_source** | **string**|  | [optional]

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestPollResponse**](../Model/QsrAutomationsDineTimeContractsGuestsTypesIGuestPollResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **guestBookGetGuests**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestBookPage guestBookGetGuests($site_uid, $startat, $count)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\GuestBookApi();
$site_uid = "site_uid_example"; // string | 
$startat = 56; // int | 
$count = 56; // int | 

try {
    $result = $api_instance->guestBookGetGuests($site_uid, $startat, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestBookApi->guestBookGetGuests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **startat** | **int**|  | [optional]
 **count** | **int**|  | [optional]

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesIGuestBookPage**](../Model/QsrAutomationsDineTimeContractsGuestsTypesIGuestBookPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **guestBookPatchGuest**
> string guestBookPatchGuest($site_uid, $guest_id, $command, $sync_source)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\GuestBookApi();
$site_uid = "site_uid_example"; // string | 
$guest_id = "guest_id_example"; // string | 
$command = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.Guests.Commands.PatchGuestCommand(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeGuestsCommandsPatchGuestCommand | 
$sync_source = "sync_source_example"; // string | 

try {
    $result = $api_instance->guestBookPatchGuest($site_uid, $guest_id, $command, $sync_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestBookApi->guestBookPatchGuest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_uid** | **string**|  |
 **guest_id** | **string**|  |
 **command** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeGuestsCommandsPatchGuestCommand**](../Model/QsrAutomations.DineTime.Guests.Commands.PatchGuestCommand.md)|  |
 **sync_source** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **guestBookPatchGuestInCompanyGuestBook**
> string guestBookPatchGuestInCompanyGuestBook($company_uid, $guest_id, $command, $sync_source)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\GuestBookApi();
$company_uid = "company_uid_example"; // string | 
$guest_id = "guest_id_example"; // string | 
$command = new \QsrAutomations\Api\Model\QsrAutomations.DineTime.Guests.Commands.PatchGuestCommand(); // \QsrAutomations\Api\Model\QsrAutomationsDineTimeGuestsCommandsPatchGuestCommand | 
$sync_source = "sync_source_example"; // string | 

try {
    $result = $api_instance->guestBookPatchGuestInCompanyGuestBook($company_uid, $guest_id, $command, $sync_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestBookApi->guestBookPatchGuestInCompanyGuestBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_uid** | **string**|  |
 **guest_id** | **string**|  |
 **command** | [**\QsrAutomations\Api\Model\QsrAutomationsDineTimeGuestsCommandsPatchGuestCommand**](../Model/QsrAutomations.DineTime.Guests.Commands.PatchGuestCommand.md)|  |
 **sync_source** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **guestBookSearchGuestBook**
> \QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesISearchGuestBookPage guestBookSearchGuestBook($company_uid, $search_guest_book_query_guest_id, $search_guest_book_query_first_name, $search_guest_book_query_last_name, $search_guest_book_query_email, $search_guest_book_query_city, $search_guest_book_query_state, $search_guest_book_query_postal_code, $search_guest_book_query_mobile_phone_number, $search_guest_book_query_e164_country_code, $search_guest_book_query_loyalty_card_id, $search_guest_book_query_guests_per_page, $search_guest_book_query_page_number, $search_guest_book_query_request_time, $search_guest_book_query_site_identifier, $search_guest_book_query_brand_uid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QsrAutomations\Api\Api\GuestBookApi();
$company_uid = "company_uid_example"; // string | 
$search_guest_book_query_guest_id = "search_guest_book_query_guest_id_example"; // string | 
$search_guest_book_query_first_name = "search_guest_book_query_first_name_example"; // string | 
$search_guest_book_query_last_name = "search_guest_book_query_last_name_example"; // string | 
$search_guest_book_query_email = "search_guest_book_query_email_example"; // string | 
$search_guest_book_query_city = "search_guest_book_query_city_example"; // string | 
$search_guest_book_query_state = "search_guest_book_query_state_example"; // string | 
$search_guest_book_query_postal_code = "search_guest_book_query_postal_code_example"; // string | 
$search_guest_book_query_mobile_phone_number = "search_guest_book_query_mobile_phone_number_example"; // string | 
$search_guest_book_query_e164_country_code = "search_guest_book_query_e164_country_code_example"; // string | 
$search_guest_book_query_loyalty_card_id = "search_guest_book_query_loyalty_card_id_example"; // string | 
$search_guest_book_query_guests_per_page = 56; // int | 
$search_guest_book_query_page_number = 56; // int | 
$search_guest_book_query_request_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$search_guest_book_query_site_identifier = "search_guest_book_query_site_identifier_example"; // string | 
$search_guest_book_query_brand_uid = "search_guest_book_query_brand_uid_example"; // string | 

try {
    $result = $api_instance->guestBookSearchGuestBook($company_uid, $search_guest_book_query_guest_id, $search_guest_book_query_first_name, $search_guest_book_query_last_name, $search_guest_book_query_email, $search_guest_book_query_city, $search_guest_book_query_state, $search_guest_book_query_postal_code, $search_guest_book_query_mobile_phone_number, $search_guest_book_query_e164_country_code, $search_guest_book_query_loyalty_card_id, $search_guest_book_query_guests_per_page, $search_guest_book_query_page_number, $search_guest_book_query_request_time, $search_guest_book_query_site_identifier, $search_guest_book_query_brand_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestBookApi->guestBookSearchGuestBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_uid** | **string**|  |
 **search_guest_book_query_guest_id** | **string**|  | [optional]
 **search_guest_book_query_first_name** | **string**|  | [optional]
 **search_guest_book_query_last_name** | **string**|  | [optional]
 **search_guest_book_query_email** | **string**|  | [optional]
 **search_guest_book_query_city** | **string**|  | [optional]
 **search_guest_book_query_state** | **string**|  | [optional]
 **search_guest_book_query_postal_code** | **string**|  | [optional]
 **search_guest_book_query_mobile_phone_number** | **string**|  | [optional]
 **search_guest_book_query_e164_country_code** | **string**|  | [optional]
 **search_guest_book_query_loyalty_card_id** | **string**|  | [optional]
 **search_guest_book_query_guests_per_page** | **int**|  | [optional]
 **search_guest_book_query_page_number** | **int**|  | [optional]
 **search_guest_book_query_request_time** | **\DateTime**|  | [optional]
 **search_guest_book_query_site_identifier** | **string**|  | [optional]
 **search_guest_book_query_brand_uid** | **string**|  | [optional]

### Return type

[**\QsrAutomations\Api\Model\QsrAutomationsDineTimeContractsGuestsTypesISearchGuestBookPage**](../Model/QsrAutomationsDineTimeContractsGuestsTypesISearchGuestBookPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

