<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class UploadEndpoint extends ApiEndpoint
{
  protected $_path = 'upload';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return UploadUploadUrlEndpoint
   */
  public function uploadUrl()
  {
    $endpoint = new UploadUploadUrlEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
