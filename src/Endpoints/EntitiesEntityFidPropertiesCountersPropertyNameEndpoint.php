<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Payloads\PropertyCounterPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidPropertiesCountersPropertyNameEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}/properties/counters/{propertyName}';
  protected $_replacements = [];

  public function __construct($entityFid, $propertyName)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
    $this->_replacements['{propertyName}'] = $propertyName;
  }

  /**
   * @summary Remove a counter from an entity
   *
   * @return ApiRequest
   */
  public function delete()
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
        'entities/{entityFid}/properties/counters/{propertyName}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Increment an entity counter
   *
   * @param PropertyCounterPayload $payload
   *
   * @return ApiRequest
   */
  public function increment(PropertyCounterPayload $payload)
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
        'entities/{entityFid}/properties/counters/{propertyName}/increment'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Decrement an entity counter
   *
   * @param PropertyCounterPayload $payload
   *
   * @return ApiRequest
   */
  public function decrement(PropertyCounterPayload $payload)
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
        'entities/{entityFid}/properties/counters/{propertyName}/decrement'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
