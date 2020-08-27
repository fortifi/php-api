<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PeopleRequest;
use Fortifi\Api\V1\Payloads\CreateCustomerContactPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidContactsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/contacts';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @param $contactFid
   *
   * @return CustomersCustomerFidContactsContactFidEndpoint
   */
  public function with($contactFid)
  {
    $endpoint = new CustomersCustomerFidContactsContactFidEndpoint(
      $this->_replacements['{customerFid}'],
      $contactFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List of people
   *
   * @param $limit
   * @param $page
   *
   * @return PeopleRequest
   */
  public function all($limit = null, $page = null)
  {
    $request = new PeopleRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/contacts'
      )
    ));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Create a new contact for a customer
   *
   * @param CreateCustomerContactPayload $payload
   *
   * @return ApiRequest
   */
  public function create(CreateCustomerContactPayload $payload)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/contacts'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
