<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidPropertiesEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'https://api.fortifi.io';
  protected $_basePath = '/v1';
  protected $_path = 'entities/{entityFid}/properties';
  protected $_replacements = [];

  public function __construct($entityFid)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
  }

  /**
   * @return EntitiesEntityFidPropertiesValuesEndpoint
   */
  public function values()
  {
    $endpoint = new EntitiesEntityFidPropertiesValuesEndpoint(
      $this->_replacements['{entityFid}']
    );
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @return EntitiesEntityFidPropertiesFlagsEndpoint
   */
  public function flags()
  {
    $endpoint = new EntitiesEntityFidPropertiesFlagsEndpoint(
      $this->_replacements['{entityFid}']
    );
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @return EntitiesEntityFidPropertiesCountersEndpoint
   */
  public function counters()
  {
    $endpoint = new EntitiesEntityFidPropertiesCountersEndpoint(
      $this->_replacements['{entityFid}']
    );
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }
}
