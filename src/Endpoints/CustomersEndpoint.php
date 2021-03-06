<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CustomerRequest;
use Fortifi\Api\V1\Payloads\CreateCustomerPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersEndpoint extends ApiEndpoint
{
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
    $endpoint->_buildFromEndpoint($this);
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
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
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
   * @param $retrieveBillingData
   *
   * @return CustomerRequest
   */
  public function findByReference($reference = null, $retrieveBillingData = null)
  {
    $request = new CustomerRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('customers/findByReference'));
    $detail->addQueryField('reference', $reference);
    $detail->addQueryField('retrieveBillingData', $retrieveBillingData);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Find a customer by brand and email address
   *
   * @param $email
   * @param $brandFid
   * @param $retrieveBillingData
   *
   * @return CustomerRequest
   */
  public function findByEmail($email = null, $brandFid = null, $retrieveBillingData = null)
  {
    $request = new CustomerRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('customers/findByEmail'));
    $detail->addQueryField('email', $email);
    $detail->addQueryField('brandFid', $brandFid);
    $detail->addQueryField('retrieveBillingData', $retrieveBillingData);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
