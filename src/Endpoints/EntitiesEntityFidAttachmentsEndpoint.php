<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidAttachmentsEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}/attachments';
  protected $_replacements = [];

  public function __construct($entityFid)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
  }

  /**
   * @return EntitiesEntityFidAttachmentsUploadUrlEndpoint
   */
  public function uploadUrl()
  {
    $endpoint = new EntitiesEntityFidAttachmentsUploadUrlEndpoint(
      $this->_replacements['{entityFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
