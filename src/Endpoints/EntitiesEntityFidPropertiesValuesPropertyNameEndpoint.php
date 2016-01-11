<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Payloads\PropertyValuePayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidPropertiesValuesPropertyNameEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'http://lapi.fortifi.io:9090';
  protected $_basePath = '/v1';
  protected $_path = 'entities/{entityFid}/properties/values/{propertyName}';
  protected $_replacements = [];

  public function __construct($entityFid, $propertyName)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
    $this->_replacements['{propertyName}'] = $propertyName;
  }

  /**
   * @summary Remove a value property from a datanode
   *
   * @param PropertyValuePayload $payload
   *
   * @return ApiRequest
   */
  public function delete(PropertyValuePayload $payload)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/properties/values/{propertyName}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Write a datanode value property
   *
   * @param PropertyValuePayload $payload
   *
   * @return ApiRequest
   */
  public function update(PropertyValuePayload $payload)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/properties/values/{propertyName}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
