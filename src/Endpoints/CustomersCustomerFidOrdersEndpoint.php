<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\OrdersRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidOrdersEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/orders';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary List customer orders
   *
   * @param $filter
   * @param $externalReference
   * @param $state
   *
   * @return OrdersRequest
   */
  public function all($filter = null, $externalReference = null, $state = null)
  {
    $request = new OrdersRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/orders'
      )
    ));
    $detail->addQueryField('filter', $filter);
    $detail->addQueryField('externalReference', $externalReference);
    $detail->addQueryField('state', $state);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
