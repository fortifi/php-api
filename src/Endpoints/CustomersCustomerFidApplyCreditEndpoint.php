<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidApplyCreditEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/applyCredit';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Apply credit to a customer
   *
   * @param $amount
   * @param $currency
   * @param $reference
   * @param $description
   *
   * @return BoolMessageRequest
   */
  public function create($amount, $currency = null, $reference = null, $description = null)
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/applyCredit'
      )
    ));
    $detail->addPostField('amount', $amount);
    $detail->addPostField('currency', $currency);
    $detail->addPostField('reference', $reference);
    $detail->addPostField('description', $description);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
