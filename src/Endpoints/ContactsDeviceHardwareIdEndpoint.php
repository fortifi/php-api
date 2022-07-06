<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class ContactsDeviceHardwareIdEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/device/{hardwareId}';
  protected $_replacements = [];

  public function __construct($hardwareId)
  {
    $this->_replacements['{hardwareId}'] = $hardwareId;
  }

  /**
   * @summary Unsubscribe a device
   *
   * @param $unsubscribeType
   * @param $brandFid
   * @param $groupFid
   * @param $entityFid
   *
   * @return ApiRequest
   */
  public function setUnsubscribe($unsubscribeType = null, $brandFid = null, $groupFid = null, $entityFid = null)
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
        'contacts/device/{hardwareId}/unsubscribe'
      )
    ));
    $detail->addPostField('unsubscribeType', $unsubscribeType);
    $detail->addPostField('brandFid', $brandFid);
    $detail->addPostField('groupFid', $groupFid);
    $detail->addPostField('entityFid', $entityFid);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Subscribe an device
   *
   * @param $brandFid
   * @param $groupFid
   * @param $entityFid
   * @param $userAgent
   * @param $encoding
   * @param $language
   * @param $clientIp
   * @param $optInStatus
   * @param $optInData
   *
   * @return ApiRequest
   */
  public function setSubscribe($brandFid = null, $groupFid = null, $entityFid = null, $userAgent = null, $encoding = null, $language = null, $clientIp = null, $optInStatus = null, $optInData = null)
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
        'contacts/device/{hardwareId}/subscribe'
      )
    ));
    $detail->addPostField('brandFid', $brandFid);
    $detail->addPostField('groupFid', $groupFid);
    $detail->addPostField('entityFid', $entityFid);
    $detail->addPostField('userAgent', $userAgent);
    $detail->addPostField('encoding', $encoding);
    $detail->addPostField('language', $language);
    $detail->addPostField('clientIp', $clientIp);
    $detail->addPostField('optInStatus', $optInStatus);
    $detail->addPostField('optInData', $optInData);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
