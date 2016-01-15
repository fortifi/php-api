<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Payloads\PropertyFlagPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidPropertiesFlagsPropertyNameEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}/properties/flags/{propertyName}';
  protected $_replacements = [];

  public function __construct($entityFid, $propertyName)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
    $this->_replacements['{propertyName}'] = $propertyName;
  }

  /**
   * @summary Remove a flag from a datanode
   *
   * @return ApiRequest
   */
  public function delete()
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/properties/flags/{propertyName}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Write a datanode flag
   *
   * @param PropertyFlagPayload $payload
   *
   * @return ApiRequest
   */
  public function update(PropertyFlagPayload $payload)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/properties/flags/{propertyName}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
