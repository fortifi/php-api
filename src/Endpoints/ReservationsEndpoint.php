<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ReservationsEndpoint extends ApiEndpoint
{
  protected $_path = 'reservations';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $key
   *
   * @return ReservationsKeyEndpoint
   */
  public function with($key)
  {
    $endpoint = new ReservationsKeyEndpoint(
      $key
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
