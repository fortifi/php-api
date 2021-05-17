<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PolymersRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PolymersListCodeParentFidEndpoint extends ApiEndpoint
{
  protected $_path = 'polymers/list/{code}/{parentFid}';
  protected $_replacements = [];

  public function __construct($code, $parentFid)
  {
    $this->_replacements['{code}'] = $code;
    $this->_replacements['{parentFid}'] = $parentFid;
  }

  /**
   * @summary List polymers by type
   *
   * @param $dataKeys
   *
   * @return PolymersRequest
   */
  public function retrieve($dataKeys)
  {
    $request = new PolymersRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'polymers/list/{code}/{parentFid}'
      )
    ));
    $detail->addQueryField('dataKeys', $dataKeys);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
