<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class PaymentsTransactionEndpoint extends ApiEndpoint
{
  protected $_path = 'payments/transaction';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $transactionId
   *
   * @return PaymentsTransactionTransactionIdEndpoint
   */
  public function with($transactionId)
  {
    $endpoint = new PaymentsTransactionTransactionIdEndpoint(
      $transactionId
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
