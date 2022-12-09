<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class InteractionsInteractionFidClientEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/{interactionFid}/client';
  protected $_replacements = [];

  public function __construct($interactionFid)
  {
    $this->_replacements['{interactionFid}'] = $interactionFid;
  }

  /**
   * @return InteractionsInteractionFidClientConnectedEndpoint
   */
  public function connected()
  {
    $endpoint = new InteractionsInteractionFidClientConnectedEndpoint(
      $this->_replacements['{interactionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return InteractionsInteractionFidClientDisconnectedEndpoint
   */
  public function disconnected()
  {
    $endpoint = new InteractionsInteractionFidClientDisconnectedEndpoint(
      $this->_replacements['{interactionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
