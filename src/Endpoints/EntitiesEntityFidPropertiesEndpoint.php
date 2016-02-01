<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Payloads\PropertyBulkSetPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidPropertiesEndpoint extends ApiEndpoint
{
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
    $endpoint->_buildFromEndpoint($this);
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
    $endpoint->_buildFromEndpoint($this);
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
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Write multiple entity properties
   *
   * @param PropertyBulkSetPayload $payload
   *
   * @return ApiRequest
   */
  public function setProperties(PropertyBulkSetPayload $payload)
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
        'entities/{entityFid}/properties'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
