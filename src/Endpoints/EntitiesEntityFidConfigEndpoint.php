<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidConfigEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}/config';
  protected $_replacements = [];

  public function __construct($entityFid)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
  }

  /**
   * @param $sectionName
   *
   * @return EntitiesEntityFidConfigSectionNameEndpoint
   */
  public function with($sectionName)
  {
    $endpoint = new EntitiesEntityFidConfigSectionNameEndpoint(
      $this->_replacements['{entityFid}'],
      $sectionName
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
