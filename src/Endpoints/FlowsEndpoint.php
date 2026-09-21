<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FlowsRequest;
use Fortifi\Api\V1\Requests\FlowRequest;
use Fortifi\Api\V1\Payloads\CreateFlowPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class FlowsEndpoint extends ApiEndpoint
{
  protected $_path = 'flows';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $flowFid
   *
   * @return FlowsFlowFidEndpoint
   */
  public function with($flowFid)
  {
    $endpoint = new FlowsFlowFidEndpoint(
      $flowFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List Retention Flows
   *
   * @return FlowsRequest
   */
  public function all()
  {
    $request = new FlowsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('flows'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Create a new Retention Flow
   *
   * @param CreateFlowPayload $payload
   *
   * @return FlowRequest
   */
  public function create(CreateFlowPayload $payload)
  {
    $request = new FlowRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('flows'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
