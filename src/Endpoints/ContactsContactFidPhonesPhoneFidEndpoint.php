<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class ContactsContactFidPhonesPhoneFidEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/{contactFid}/phones/{phoneFid}';
  protected $_replacements = [];

  public function __construct($contactFid, $phoneFid)
  {
    $this->_replacements['{contactFid}'] = $contactFid;
    $this->_replacements['{phoneFid}'] = $phoneFid;
  }

  /**
   * @summary Remove a phone
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
        'contacts/{contactFid}/phones/{phoneFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
