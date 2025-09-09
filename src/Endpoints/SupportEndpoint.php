<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class SupportEndpoint extends ApiEndpoint
{
  protected $_path = 'support';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return SupportChatEnabledEndpoint
   */
  public function chatEnabled()
  {
    $endpoint = new SupportChatEnabledEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
