<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ReservationsKeyApplicationEndpoint extends ApiEndpoint
{
  protected $_path = 'reservations/{key}/{application}';
  protected $_replacements = [];

  public function __construct($key, $application)
  {
    $this->_replacements['{key}'] = $key;
    $this->_replacements['{application}'] = $application;
  }

  /**
   * @param $brandFid
   *
   * @return ReservationsKeyApplicationBrandFidEndpoint
   */
  public function with($brandFid)
  {
    $endpoint = new ReservationsKeyApplicationBrandFidEndpoint(
      $this->_replacements['{key}'],
      $this->_replacements['{application}'],
      $brandFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
