<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CalculateTaxRequest;
use Fortifi\Api\V1\Payloads\CalculateTaxPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidFinanceEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/finance';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Calculate tax for a given amount
   *
   * @param CalculateTaxPayload $payload
   *
   * @return CalculateTaxRequest
   */
  public function createCalculateTax(CalculateTaxPayload $payload)
  {
    $request = new CalculateTaxRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/finance/calculateTax'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
