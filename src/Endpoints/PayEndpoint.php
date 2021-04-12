<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class PayEndpoint extends ApiEndpoint
{
  protected $_path = 'pay';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return PayPublicKeyEndpoint
   */
  public function publicKey()
  {
    $endpoint = new PayPublicKeyEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
