<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class AccountantTransactionEndpoint extends ApiEndpoint
{
  protected $_path = 'accountant/transaction';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return AccountantTransactionSearchEndpoint
   */
  public function search()
  {
    $endpoint = new AccountantTransactionSearchEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
