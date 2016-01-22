<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class MessengerEndpoint extends ApiEndpoint
{
  protected $_path = 'messenger';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return MessengerDeliveriesEndpoint
   */
  public function deliveries()
  {
    $endpoint = new MessengerDeliveriesEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
