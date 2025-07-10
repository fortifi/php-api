<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class AccountantEndpoint extends ApiEndpoint
{
  protected $_path = 'accountant';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return AccountantTransactionEndpoint
   */
  public function transaction()
  {
    $endpoint = new AccountantTransactionEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return AccountantTransactionsEndpoint
   */
  public function transactions()
  {
    $endpoint = new AccountantTransactionsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
