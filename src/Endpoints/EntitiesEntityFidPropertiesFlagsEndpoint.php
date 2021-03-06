<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidPropertiesFlagsEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}/properties/flags';
  protected $_replacements = [];

  public function __construct($entityFid)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
  }

  /**
   * @param $propertyName
   *
   * @return EntitiesEntityFidPropertiesFlagsPropertyNameEndpoint
   */
  public function with($propertyName)
  {
    $endpoint = new EntitiesEntityFidPropertiesFlagsPropertyNameEndpoint(
      $this->_replacements['{entityFid}'],
      $propertyName
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
