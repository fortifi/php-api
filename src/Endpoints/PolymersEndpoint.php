<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\V1\Payloads\CreatePolymerPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PolymersEndpoint extends ApiEndpoint
{
  protected $_path = 'polymers';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $polymerFid
   *
   * @return PolymersPolymerFidEndpoint
   */
  public function with($polymerFid)
  {
    $endpoint = new PolymersPolymerFidEndpoint(
      $polymerFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Create a new polymer
   *
   * @param CreatePolymerPayload $payload
   *
   * @return FidRequest
   */
  public function create(CreatePolymerPayload $payload)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('polymers'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
