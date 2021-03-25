<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\V1\Payloads\CreatePolymerPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PolymersParentFidEndpoint extends ApiEndpoint
{
  protected $_path = 'polymers/{parentFid}';
  protected $_replacements = [];

  public function __construct($parentFid)
  {
    $this->_replacements['{parentFid}'] = $parentFid;
  }

  /**
   * @param $polymerFid
   *
   * @return PolymersParentFidPolymerFidEndpoint
   */
  public function with($polymerFid)
  {
    $endpoint = new PolymersParentFidPolymerFidEndpoint(
      $this->_replacements['{parentFid}'],
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
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'polymers/{parentFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
