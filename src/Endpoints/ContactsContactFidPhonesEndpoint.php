<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PhonesRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class ContactsContactFidPhonesEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/{contactFid}/phones';
  protected $_replacements = [];

  public function __construct($contactFid)
  {
    $this->_replacements['{contactFid}'] = $contactFid;
  }

  /**
   * @param $phoneFid
   *
   * @return ContactsContactFidPhonesPhoneFidEndpoint
   */
  public function with($phoneFid)
  {
    $endpoint = new ContactsContactFidPhonesPhoneFidEndpoint(
      $this->_replacements['{contactFid}'],
      $phoneFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List contact phones
   *
   * @return PhonesRequest
   */
  public function all()
  {
    $request = new PhonesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'contacts/{contactFid}/phones'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Add a phone number to a contact
   *
   * @param $phoneNumber
   * @param $displayName
   * @param $setAsDefault
   *
   * @return ApiRequest
   */
  public function create($phoneNumber, $displayName = null, $setAsDefault = null)
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
        'contacts/{contactFid}/phones'
      )
    ));
    $detail->addPostField('phoneNumber', $phoneNumber);
    $detail->addPostField('displayName', $displayName);
    $detail->addPostField('setAsDefault', $setAsDefault);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
