<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FindTransactionRequest;
use Fortifi\Api\V1\Payloads\FindTransactionPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class AccountantTransactionSearchEndpoint extends ApiEndpoint
{
  protected $_path = 'accountant/transaction/search';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Find an Account Transaction
   *
   * Find an Account Transaction based on purchase information
   *
   * @param FindTransactionPayload $payload
   *
   * @return FindTransactionRequest
   */
  public function create(FindTransactionPayload $payload)
  {
    $request = new FindTransactionRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('accountant/transaction/search'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
