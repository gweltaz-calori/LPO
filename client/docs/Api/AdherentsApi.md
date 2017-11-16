# Swagger\Client\AdherentsApi

All URIs are relative to *http://localhost:8082*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdherent**](AdherentsApi.md#getAdherent) | **GET** /adherents/{id} | Retrieves a Adherent resource.


# **getAdherent**
> \Swagger\Client\Model\Adherent getAdherent($id)

Retrieves a Adherent resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AdherentsApi();
$id = 56; // int | 

try {
    $result = $api_instance->getAdherent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdherentsApi->getAdherent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Adherent**](../Model/Adherent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

