<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/payments';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @param $paymentFid
   *
   * @return CustomersCustomerFidPaymentsPaymentFidEndpoint
   */
  public function with($paymentFid)
  {
    $endpoint = new CustomersCustomerFidPaymentsPaymentFidEndpoint(
      $this->_replacements['{customerFid}'],
      $paymentFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
