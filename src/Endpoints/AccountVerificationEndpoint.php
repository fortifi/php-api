<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\AccountVerificationRequest;
use Fortifi\Api\V1\Payloads\AccountVerificationPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class AccountVerificationEndpoint extends ApiEndpoint
{
  protected $_path = 'account/verification';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Main Entry for Verification
   *
   * @param AccountVerificationPayload $payload
   *
   * @return AccountVerificationRequest
   */
  public function create(AccountVerificationPayload $payload)
  {
    $request = new AccountVerificationRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('account/verification'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
