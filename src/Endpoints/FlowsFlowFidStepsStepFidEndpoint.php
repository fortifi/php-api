<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FlowStepRequest;
use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\UpdateFlowStepPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class FlowsFlowFidStepsStepFidEndpoint extends ApiEndpoint
{
  protected $_path = 'flows/{flowFid}/steps/{stepFid}';
  protected $_replacements = [];

  public function __construct($flowFid, $stepFid)
  {
    $this->_replacements['{flowFid}'] = $flowFid;
    $this->_replacements['{stepFid}'] = $stepFid;
  }

  /**
   * @summary Retrieve Retention Flow Step Details
   *
   * @return FlowStepRequest
   */
  public function retrieve()
  {
    $request = new FlowStepRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'flows/{flowFid}/steps/{stepFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update Retention Flow Step Details
   *
   * @param UpdateFlowStepPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function update(UpdateFlowStepPayload $payload)
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
        'flows/{flowFid}/steps/{stepFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Archive a Retention Flow Step
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
        'flows/{flowFid}/steps/{stepFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
