<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ConfigItemsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidConfigSectionNameEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}/config/{sectionName}';
  protected $_replacements = [];

  public function __construct($entityFid, $sectionName)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
    $this->_replacements['{sectionName}'] = $sectionName;
  }

  /**
   * @return EntitiesEntityFidConfigSectionNameItemsEndpoint
   */
  public function items()
  {
    $endpoint = new EntitiesEntityFidConfigSectionNameItemsEndpoint(
      $this->_replacements['{entityFid}'],
      $this->_replacements['{sectionName}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Remove a config section, or property from an entity
   *
   * @param $itemName
   *
   * @return ApiRequest
   */
  public function delete($itemName = null)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/config/{sectionName}'
      )
    ));
    $detail->addPostField('itemName', $itemName);
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Retrieve a config section
   *
   * @return ConfigItemsRequest
   */
  public function retrieve()
  {
    $request = new ConfigItemsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/config/{sectionName}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Write a config item
   *
   * @param $itemName
   * @param $value
   *
   * @return ApiRequest
   */
  public function create($itemName, $value)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/config/{sectionName}'
      )
    ));
    $detail->addPostField('itemName', $itemName);
    $detail->addPostField('value', $value);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
