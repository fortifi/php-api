<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FlowStepsRequest;
use Fortifi\Api\V1\Requests\FlowStepRequest;
use Fortifi\Api\V1\Payloads\CreateFlowStepPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class FlowsFlowFidStepsEndpoint extends ApiEndpoint
{
  protected $_path = 'flows/{flowFid}/steps';
  protected $_replacements = [];

  public function __construct($flowFid)
  {
    $this->_replacements['{flowFid}'] = $flowFid;
  }

  /**
   * @param $stepFid
   *
   * @return FlowsFlowFidStepsStepFidEndpoint
   */
  public function with($stepFid)
  {
    $endpoint = new FlowsFlowFidStepsStepFidEndpoint(
      $this->_replacements['{flowFid}'],
      $stepFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve Retention Flow Steps
   *
   * @return FlowStepsRequest
   */
  public function all()
  {
    $request = new FlowStepsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'flows/{flowFid}/steps'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Create a new Retention Flow Step
   *
   * @param CreateFlowStepPayload $payload
   *
   * @return FlowStepRequest
   */
  public function create(CreateFlowStepPayload $payload)
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
        'flows/{flowFid}/steps'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
