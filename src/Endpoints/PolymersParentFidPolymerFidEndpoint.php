<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PolymerRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PolymersParentFidPolymerFidEndpoint extends ApiEndpoint
{
  protected $_path = 'polymers/{parentFid}/{polymerFid}';
  protected $_replacements = [];

  public function __construct($parentFid, $polymerFid)
  {
    $this->_replacements['{parentFid}'] = $parentFid;
    $this->_replacements['{polymerFid}'] = $polymerFid;
  }

  /**
   * @summary Read a polymer
   *
   * @param $dataKeys
   * @param $allData
   *
   * @return PolymerRequest
   */
  public function retrieve($dataKeys, $allData)
  {
    $request = new PolymerRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'polymers/{parentFid}/{polymerFid}'
      )
    ));
    $detail->addQueryField('dataKeys', $dataKeys);
    $detail->addQueryField('allData', $allData);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
