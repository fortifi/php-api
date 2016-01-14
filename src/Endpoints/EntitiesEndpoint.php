<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'https://api.fortifi.io';
  protected $_basePath = '/v1';
  protected $_path = 'entities';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $entityFid
   *
   * @return EntitiesEntityFidEndpoint
   */
  public function with($entityFid)
  {
    $endpoint = new EntitiesEntityFidEndpoint(
      $entityFid
    );
    $endpoint->setBaseUrl($this->getBaseUrl());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }
}
