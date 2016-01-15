<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CustomerRequest;
use Fortifi\Api\V1\Payloads\CreateCustomerPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'https://api.fortifi.io';
  protected $_basePath = '/v1';
  protected $_path = 'customers';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $customerFid
   *
   * @return CustomersCustomerFidEndpoint
   */
  public function with($customerFid)
  {
    $endpoint = new CustomersCustomerFidEndpoint(
      $customerFid
    );
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @summary Create a new customer
   *
   * @param CreateCustomerPayload $payload
   *
   * @return CustomerRequest
   */
  public function create(CreateCustomerPayload $payload)
  {
    $request = new CustomerRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl('customers'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Find a customer by your reference
   *
   * @param $reference
   *
   * @return CustomerRequest
   */
  public function findByReference($reference = null)
  {
    $request = new CustomerRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl('customers/findByReference'));
    $detail->addQueryField('reference', $reference);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
