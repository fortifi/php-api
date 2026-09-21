<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FlowRequest;
use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\UpdateFlowPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class FlowsFlowFidEndpoint extends ApiEndpoint
{
  protected $_path = 'flows/{flowFid}';
  protected $_replacements = [];

  public function __construct($flowFid)
  {
    $this->_replacements['{flowFid}'] = $flowFid;
  }

  /**
   * @return FlowsFlowFidStepsEndpoint
   */
  public function steps()
  {
    $endpoint = new FlowsFlowFidStepsEndpoint(
      $this->_replacements['{flowFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve Retention Flow Details
   *
   * @return FlowRequest
   */
  public function retrieve()
  {
    $request = new FlowRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'flows/{flowFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update Retention Flow Details
   *
   * @param UpdateFlowPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function update(UpdateFlowPayload $payload)
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'flows/{flowFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Archive a Retention Flow
   *
   * @return BoolMessageRequest
   */
  public function delete()
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'flows/{flowFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
