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
   * @param $interactionFid
   *
   * @return InteractionsInteractionFidEndpoint
   */
  public function with($interactionFid)
  {
    $endpoint = new InteractionsInteractionFidEndpoint(
      $interactionFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return InteractionsInviteEndpoint
   */
  public function invite()
  {
    $endpoint = new InteractionsInviteEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
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

  /**
   * @return InteractionsTicketEndpoint
   */
  public function ticket()
  {
    $endpoint = new InteractionsTicketEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
