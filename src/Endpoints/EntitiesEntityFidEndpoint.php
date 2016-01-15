<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Payloads\TriggerActionPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}';
  protected $_replacements = [];

  public function __construct($entityFid)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
  }

  /**
   * @return EntitiesEntityFidPropertiesEndpoint
   */
  public function properties()
  {
    $endpoint = new EntitiesEntityFidPropertiesEndpoint(
      $this->_replacements['{entityFid}']
    );
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @summary Trigger a new event
   *
   * @param TriggerActionPayload $payload
   *
   * @return ApiRequest
   */
  public function createEvent(TriggerActionPayload $payload)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(false);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/events'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
