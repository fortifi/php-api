<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidChargebacksChargebackFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/chargebacks/{chargebackFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $chargebackFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{chargebackFid}'] = $chargebackFid;
  }

  /**
   * @summary Action a chargeback
   *
   * @param $reasonCode
   * @param $caseNumber
   * @param $state
   * @param $refunded
   * @param $description
   *
   * @return BoolMessageRequest
   */
  public function update($reasonCode, $caseNumber, $state, $refunded, $description = null)
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
        'customers/{customerFid}/chargebacks/{chargebackFid}'
      )
    ));
    $detail->addPostField('reasonCode', $reasonCode);
    $detail->addPostField('caseNumber', $caseNumber);
    $detail->addPostField('state', $state);
    $detail->addPostField('refunded', $refunded);
    $detail->addPostField('description', $description);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
