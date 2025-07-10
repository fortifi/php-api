<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FindTransactionsRequest;
use Fortifi\Api\V1\Payloads\FindTransactionsPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class AccountantTransactionsSearchEndpoint extends ApiEndpoint
{
  protected $_path = 'accountant/transactions/search';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Find multiple Account Transaction
   *
   * Find multiple Account Transaction based on purchase information
   *
   * @param FindTransactionsPayload $payload
   *
   * @return FindTransactionsRequest
   */
  public function create(FindTransactionsPayload $payload)
  {
    $request = new FindTransactionsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('accountant/transactions/search'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
