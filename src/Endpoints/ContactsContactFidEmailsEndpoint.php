<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\EmailsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class ContactsContactFidEmailsEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/{contactFid}/emails';
  protected $_replacements = [];

  public function __construct($contactFid)
  {
    $this->_replacements['{contactFid}'] = $contactFid;
  }

  /**
   * @param $emailFid
   *
   * @return ContactsContactFidEmailsEmailFidEndpoint
   */
  public function with($emailFid)
  {
    $endpoint = new ContactsContactFidEmailsEmailFidEndpoint(
      $this->_replacements['{contactFid}'],
      $emailFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List contact emails
   *
   * @return EmailsRequest
   */
  public function all()
  {
    $request = new EmailsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'contacts/{contactFid}/emails'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Add an email address to a contact
   *
   * @param $emailAddress
   * @param $setAsDefault
   *
   * @return ApiRequest
   */
  public function create($emailAddress, $setAsDefault = null)
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
        'contacts/{contactFid}/emails'
      )
    ));
    $detail->addPostField('emailAddress', $emailAddress);
    $detail->addPostField('setAsDefault', $setAsDefault);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
