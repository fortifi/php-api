<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class ContactsContactFidEmailsEmailFidEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/{contactFid}/emails/{emailFid}';
  protected $_replacements = [];

  public function __construct($contactFid, $emailFid)
  {
    $this->_replacements['{contactFid}'] = $contactFid;
    $this->_replacements['{emailFid}'] = $emailFid;
  }

  /**
   * @summary Remove an email from a contact
   *
   * @return ApiRequest
   */
  public function delete()
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
        'contacts/{contactFid}/emails/{emailFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
