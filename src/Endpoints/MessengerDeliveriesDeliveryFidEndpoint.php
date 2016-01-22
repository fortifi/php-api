<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class MessengerDeliveriesDeliveryFidEndpoint extends ApiEndpoint
{
  protected $_path = 'messenger/deliveries/{deliveryFid}';
  protected $_replacements = [];

  public function __construct($deliveryFid)
  {
    $this->_replacements['{deliveryFid}'] = $deliveryFid;
  }

  /**
   * @summary Unsubscribe an email based on the delivery fid
   *
   * @param $userAgent
   * @param $encoding
   * @param $language
   * @param $clientIp
   *
   * @return ApiRequest
   */
  public function setUnsubscribe($userAgent = null, $encoding = null, $language = null, $clientIp = null)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'messenger/deliveries/{deliveryFid}/unsubscribe'
      )
    ));
    $detail->addPostField('userAgent', $userAgent);
    $detail->addPostField('encoding', $encoding);
    $detail->addPostField('language', $language);
    $detail->addPostField('clientIp', $clientIp);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
