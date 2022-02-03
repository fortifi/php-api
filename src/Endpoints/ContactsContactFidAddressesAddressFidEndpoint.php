<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class ContactsContactFidAddressesAddressFidEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/{contactFid}/addresses/{addressFid}';
  protected $_replacements = [];

  public function __construct($contactFid, $addressFid)
  {
    $this->_replacements['{contactFid}'] = $contactFid;
    $this->_replacements['{addressFid}'] = $addressFid;
  }

  /**
   * @summary Remove an address from a contact
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
        'contacts/{contactFid}/addresses/{addressFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
