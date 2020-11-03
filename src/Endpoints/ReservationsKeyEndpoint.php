<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ReservationsKeyEndpoint extends ApiEndpoint
{
  protected $_path = 'reservations/{key}';
  protected $_replacements = [];

  public function __construct($key)
  {
    $this->_replacements['{key}'] = $key;
  }

  /**
   * @param $application
   *
   * @return ReservationsKeyApplicationEndpoint
   */
  public function with($application)
  {
    $endpoint = new ReservationsKeyApplicationEndpoint(
      $this->_replacements['{key}'],
      $application
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
