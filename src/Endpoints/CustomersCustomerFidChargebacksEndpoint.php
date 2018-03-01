<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidChargebacksEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/chargebacks';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @param $chargebackFid
   *
   * @return CustomersCustomerFidChargebacksChargebackFidEndpoint
   */
  public function with($chargebackFid)
  {
    $endpoint = new CustomersCustomerFidChargebacksChargebackFidEndpoint(
      $this->_replacements['{customerFid}'],
      $chargebackFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
