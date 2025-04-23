<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\NotificationsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidNotificationsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/notifications';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary List Push Notification sent to a Customer
   *
   * @return NotificationsRequest
   */
  public function all()
  {
    $request = new NotificationsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/notifications'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
