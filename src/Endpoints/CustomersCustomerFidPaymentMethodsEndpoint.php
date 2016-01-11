<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentMethodsEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'http://lapi.fortifi.io:9090';
  protected $_basePath = '/v1';
  protected $_path = 'customers/{customerFid}/paymentMethods';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @return CustomersCustomerFidPaymentMethodsCardsEndpoint
   */
  public function cards()
  {
    $endpoint = new CustomersCustomerFidPaymentMethodsCardsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }
}
