<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class TransactionsEndpoint extends ApiEndpoint
{
  protected $_path = 'transactions';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $transactionFid
   *
   * @return TransactionsTransactionFidEndpoint
   */
  public function with($transactionFid)
  {
    $endpoint = new TransactionsTransactionFidEndpoint(
      $transactionFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
