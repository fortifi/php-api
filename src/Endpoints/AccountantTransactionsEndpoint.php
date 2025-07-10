<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class AccountantTransactionsEndpoint extends ApiEndpoint
{
  protected $_path = 'accountant/transactions';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return AccountantTransactionsSearchEndpoint
   */
  public function search()
  {
    $endpoint = new AccountantTransactionsSearchEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
