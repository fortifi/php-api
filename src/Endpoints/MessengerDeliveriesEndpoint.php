<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class MessengerDeliveriesEndpoint extends ApiEndpoint
{
  protected $_path = 'messenger/deliveries';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $deliveryFid
   *
   * @return MessengerDeliveriesDeliveryFidEndpoint
   */
  public function with($deliveryFid)
  {
    $endpoint = new MessengerDeliveriesDeliveryFidEndpoint(
      $deliveryFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
