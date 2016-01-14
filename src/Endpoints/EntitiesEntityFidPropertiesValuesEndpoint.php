<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidPropertiesValuesEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'https://api.fortifi.io';
  protected $_basePath = '/v1';
  protected $_path = 'entities/{entityFid}/properties/values';
  protected $_replacements = [];

  public function __construct($entityFid)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
  }

  /**
   * @param $propertyName
   *
   * @return EntitiesEntityFidPropertiesValuesPropertyNameEndpoint
   */
  public function with($propertyName)
  {
    $endpoint = new EntitiesEntityFidPropertiesValuesPropertyNameEndpoint(
      $this->_replacements['{entityFid}'],
      $propertyName
    );
    $endpoint->setBaseUrl($this->getBaseUrl());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }
}
