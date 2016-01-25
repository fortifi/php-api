<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\EntityRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PolymersPolymerFidEndpoint extends ApiEndpoint
{
  protected $_path = 'polymers/{polymerFid}';
  protected $_replacements = [];

  public function __construct($polymerFid)
  {
    $this->_replacements['{polymerFid}'] = $polymerFid;
  }

  /**
   * @summary Read a polymer
   *
   * @return EntityRequest
   */
  public function retrieve()
  {
    $request = new EntityRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'polymers/{polymerFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
