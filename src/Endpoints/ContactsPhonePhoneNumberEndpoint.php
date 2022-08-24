<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class ContactsPhonePhoneNumberEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/phone/{phoneNumber}';
  protected $_replacements = [];

  public function __construct($phoneNumber)
  {
    $this->_replacements['{phoneNumber}'] = $phoneNumber;
  }

  /**
   * @summary Confirm phone number
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
        'contacts/phone/{phoneNumber}/confirm'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
