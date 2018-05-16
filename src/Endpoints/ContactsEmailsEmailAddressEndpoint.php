<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class ContactsEmailsEmailAddressEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/emails/{emailAddress}';
  protected $_replacements = [];

  public function __construct($emailAddress)
  {
    $this->_replacements['{emailAddress}'] = $emailAddress;
  }

  /**
   * @summary Confirm email address
   *
   * @return ApiRequest
   */
  public function confirm()
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
        'contacts/emails/{emailAddress}/confirm'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Unsubscribe an email address
   *
   * @param $brandFid
   * @param $groupFid
   *
   * @return ApiRequest
   */
  public function setUnsubscribe($brandFid = null, $groupFid = null)
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
        'contacts/emails/{emailAddress}/unsubscribe'
      )
    ));
    $detail->addPostField('brandFid', $brandFid);
    $detail->addPostField('groupFid', $groupFid);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Subscribe an email address
   *
   * @param $brandFid
   * @param $groupFid
   * @param $userAgent
   * @param $encoding
   * @param $language
   * @param $clientIp
   * @param $optInStatus
   * @param $optInData
   *
   * @return ApiRequest
   */
  public function setSubscribe($brandFid = null, $groupFid = null, $userAgent = null, $encoding = null, $language = null, $clientIp = null, $optInStatus = null, $optInData = null)
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
        'contacts/emails/{emailAddress}/subscribe'
      )
    ));
    $detail->addPostField('brandFid', $brandFid);
    $detail->addPostField('groupFid', $groupFid);
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
