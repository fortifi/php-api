<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PaymentRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PaymentsTransactionTransactionIdEndpoint extends ApiEndpoint
{
  protected $_path = 'payments/transaction/{transactionId}';
  protected $_replacements = [];

  public function __construct($transactionId)
  {
    $this->_replacements['{transactionId}'] = $transactionId;
  }

  /**
   * @summary Retrieve a payment by transaction ID
   *
   * @return PaymentRequest
   */
  public function retrieve()
  {
    $request = new PaymentRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'payments/transaction/{transactionId}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
