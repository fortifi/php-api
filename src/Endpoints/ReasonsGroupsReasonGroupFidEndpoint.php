<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ReasonsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ReasonsGroupsReasonGroupFidEndpoint extends ApiEndpoint
{
  protected $_path = 'reasons/groups/{reasonGroupFid}';
  protected $_replacements = [];

  public function __construct($reasonGroupFid)
  {
    $this->_replacements['{reasonGroupFid}'] = $reasonGroupFid;
  }

  /**
   * @summary Get all the reasons for the reason group
   *
   * @return ReasonsRequest
   */
  public function retrieve()
  {
    $request = new ReasonsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'reasons/groups/{reasonGroupFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
