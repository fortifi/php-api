<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidConfigSectionNameItemsEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}/config/{sectionName}/items';
  protected $_replacements = [];

  public function __construct($entityFid, $sectionName)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
    $this->_replacements['{sectionName}'] = $sectionName;
  }

  /**
   * @param $itemName
   *
   * @return EntitiesEntityFidConfigSectionNameItemsItemNameEndpoint
   */
  public function with($itemName)
  {
    $endpoint = new EntitiesEntityFidConfigSectionNameItemsItemNameEndpoint(
      $this->_replacements['{entityFid}'],
      $this->_replacements['{sectionName}'],
      $itemName
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
