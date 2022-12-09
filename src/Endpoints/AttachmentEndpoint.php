<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class AttachmentEndpoint extends ApiEndpoint
{
  protected $_path = 'attachment';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $entityFid
   *
   * @return AttachmentEntityFidEndpoint
   */
  public function with($entityFid)
  {
    $endpoint = new AttachmentEntityFidEndpoint(
      $entityFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
