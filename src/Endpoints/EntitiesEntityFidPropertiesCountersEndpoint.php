<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidPropertiesCountersEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'https://api.fortifi.io';
  protected $_basePath = '/v1';
  protected $_path = 'entities/{entityFid}/properties/counters';
  protected $_replacements = [];

  public function __construct($entityFid)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
  }

  /**
   * @param $propertyName
   *
   * @return EntitiesEntityFidPropertiesCountersPropertyNameEndpoint
   */
  public function with($propertyName)
  {
    $endpoint = new EntitiesEntityFidPropertiesCountersPropertyNameEndpoint(
      $this->_replacements['{entityFid}'],
      $propertyName
    );
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }
}
