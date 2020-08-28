<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}';
  protected $_replacements = [];

  public function __construct($entityFid)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
  }

  /**
   * @return EntitiesEntityFidConfigEndpoint
   */
  public function config()
  {
    $endpoint = new EntitiesEntityFidConfigEndpoint(
      $this->_replacements['{entityFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return EntitiesEntityFidAttachmentsEndpoint
   */
  public function attachments()
  {
    $endpoint = new EntitiesEntityFidAttachmentsEndpoint(
      $this->_replacements['{entityFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return EntitiesEntityFidLabelsEndpoint
   */
  public function labels()
  {
    $endpoint = new EntitiesEntityFidLabelsEndpoint(
      $this->_replacements['{entityFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return EntitiesEntityFidPropertiesEndpoint
   */
  public function properties()
  {
    $endpoint = new EntitiesEntityFidPropertiesEndpoint(
      $this->_replacements['{entityFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return EntitiesEntityFidEventsEndpoint
   */
  public function events()
  {
    $endpoint = new EntitiesEntityFidEventsEndpoint(
      $this->_replacements['{entityFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
