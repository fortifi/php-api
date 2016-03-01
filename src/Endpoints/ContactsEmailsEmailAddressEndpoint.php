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
   * @param $companyFid
   *
   * @return ApiRequest
   */
  public function unsubscribe($companyFid = null)
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
    $detail->addPostField('companyFid', $companyFid);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
