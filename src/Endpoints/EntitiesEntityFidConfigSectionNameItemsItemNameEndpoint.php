<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ConfigItemRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidConfigSectionNameItemsItemNameEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}/config/{sectionName}/items/{itemName}';
  protected $_replacements = [];

  public function __construct($entityFid, $sectionName, $itemName)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
    $this->_replacements['{sectionName}'] = $sectionName;
    $this->_replacements['{itemName}'] = $itemName;
  }

  /**
   * @summary Retrieve a config item
   *
   * @return ConfigItemRequest
   */
  public function retrieve()
  {
    $request = new ConfigItemRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/config/{sectionName}/items/{itemName}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
