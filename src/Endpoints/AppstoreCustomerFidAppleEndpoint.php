<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\CreateAppleNotificationPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class AppstoreCustomerFidAppleEndpoint extends ApiEndpoint
{
  protected $_path = 'appstore/{customerFid}/apple';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Post a new Apple notification
   *
   * Post a new Apple notification.
   *
   * @param CreateAppleNotificationPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function create(CreateAppleNotificationPayload $payload)
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
        'appstore/{customerFid}/apple'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
