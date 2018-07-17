<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\IntegrationUserRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class IntegrationsEndpoint extends ApiEndpoint
{
  protected $_path = 'integrations';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Verify a user
   *
   * @param $verifyKey
   * @param $remoteIp
   *
   * @return IntegrationUserRequest
   */
  public function verifyUser($verifyKey, $remoteIp)
  {
    $request = new IntegrationUserRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('integrations/verifyUser'));
    $detail->addQueryField('verifyKey', $verifyKey);
    $detail->addQueryField('remoteIp', $remoteIp);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
