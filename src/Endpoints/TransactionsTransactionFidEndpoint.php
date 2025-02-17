<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\RetryTransactionPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class TransactionsTransactionFidEndpoint extends ApiEndpoint
{
  protected $_path = 'transactions/{transactionFid}';
  protected $_replacements = [];

  public function __construct($transactionFid)
  {
    $this->_replacements['{transactionFid}'] = $transactionFid;
  }

  /**
   * @summary Retry a Transaction
   *
   * @param RetryTransactionPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function createRetry(RetryTransactionPayload $payload)
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
        'transactions/{transactionFid}/retry'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
