<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentsPaymentFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/payments/{paymentFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $paymentFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{paymentFid}'] = $paymentFid;
  }

  /**
   * @return CustomersCustomerFidPaymentsPaymentFidChargebackEndpoint
   */
  public function chargeback()
  {
    $endpoint = new CustomersCustomerFidPaymentsPaymentFidChargebackEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{paymentFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
