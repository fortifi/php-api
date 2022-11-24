<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class InteractionsEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return InteractionsJourneyEndpoint
   */
  public function journey()
  {
    $endpoint = new InteractionsJourneyEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
