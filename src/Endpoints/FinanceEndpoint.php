<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class FinanceEndpoint extends ApiEndpoint
{
  protected $_path = 'finance';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return FinancePaymentsEndpoint
   */
  public function payments()
  {
    $endpoint = new FinancePaymentsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
