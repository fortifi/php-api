<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\FlowLogMetricPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class FlowFlowFidLogEndpoint extends ApiEndpoint
{
  protected $_path = 'flow/{flowFid}/log';
  protected $_replacements = [];

  public function __construct($flowFid)
  {
    $this->_replacements['{flowFid}'] = $flowFid;
  }

  /**
   * @summary Create Flow
   *
   * @param FlowLogMetricPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function create(FlowLogMetricPayload $payload)
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
        'flow/{flowFid}/log'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
