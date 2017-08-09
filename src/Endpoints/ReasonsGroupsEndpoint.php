<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ReasonGroupsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ReasonsGroupsEndpoint extends ApiEndpoint
{
  protected $_path = 'reasons/groups';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $reasonGroupFid
   *
   * @return ReasonsGroupsReasonGroupFidEndpoint
   */
  public function with($reasonGroupFid)
  {
    $endpoint = new ReasonsGroupsReasonGroupFidEndpoint(
      $reasonGroupFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Get a list of all reason groups
   *
   * @param $reasonGroupType
   *
   * @return ReasonGroupsRequest
   */
  public function all($reasonGroupType = null)
  {
    $request = new ReasonGroupsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('reasons/groups'));
    $detail->addQueryField('reasonGroupType', $reasonGroupType);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
