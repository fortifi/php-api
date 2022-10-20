<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class PaymentsEndpoint extends ApiEndpoint
{
  protected $_path = 'payments';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return PaymentsTransactionEndpoint
   */
  public function transaction()
  {
    $endpoint = new PaymentsTransactionEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
