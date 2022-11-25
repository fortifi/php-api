<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class AccountEndpoint extends ApiEndpoint
{
  protected $_path = 'account';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return AccountVerificationEndpoint
   */
  public function verification()
  {
    $endpoint = new AccountVerificationEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
