<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PaymentGatewaysRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ConfigurationFinanceGatewaysEndpoint extends ApiEndpoint
{
  protected $_path = 'configuration/finance/gateways';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Lists all the current gateways
   *
   * @param $limit
   * @param $page
   *
   * @return PaymentGatewaysRequest
   */
  public function all($limit = null, $page = null)
  {
    $request = new PaymentGatewaysRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('configuration/finance/gateways'));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
