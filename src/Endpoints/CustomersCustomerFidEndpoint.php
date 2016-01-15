<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CustomerRequest;
use Fortifi\Api\V1\Payloads\SetSubscriptionTypePayload;
use Fortifi\Api\V1\Payloads\SetAccountTypePayload;
use Fortifi\Api\V1\Payloads\SetAccountStatusPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @return CustomersCustomerFidPaymentMethodsEndpoint
   */
  public function paymentMethods()
  {
    $endpoint = new CustomersCustomerFidPaymentMethodsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @summary Retrieve a customer
   *
   * @return CustomerRequest
   */
  public function retrieve()
  {
    $request = new CustomerRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Archive a customer
   *
   * @return ApiRequest
   */
  public function delete()
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customers status
   *
   * @param SetAccountStatusPayload $payload
   *
   * @return ApiRequest
   */
  public function setAccountStatus(SetAccountStatusPayload $payload)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/accountStatus'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customers status
   *
   * @param SetAccountTypePayload $payload
   *
   * @return ApiRequest
   */
  public function setAccountType(SetAccountTypePayload $payload)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/accountType'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customers status
   *
   * @param SetSubscriptionTypePayload $payload
   *
   * @return ApiRequest
   */
  public function setSubscriptionType(SetSubscriptionTypePayload $payload)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptionType'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
