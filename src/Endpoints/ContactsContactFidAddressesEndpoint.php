<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\AddressesRequest;
use Fortifi\Api\V1\Payloads\AddressPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class ContactsContactFidAddressesEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/{contactFid}/addresses';
  protected $_replacements = [];

  public function __construct($contactFid)
  {
    $this->_replacements['{contactFid}'] = $contactFid;
  }

  /**
   * @param $addressFid
   *
   * @return ContactsContactFidAddressesAddressFidEndpoint
   */
  public function with($addressFid)
  {
    $endpoint = new ContactsContactFidAddressesAddressFidEndpoint(
      $this->_replacements['{contactFid}'],
      $addressFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List contact addresses
   *
   * @return AddressesRequest
   */
  public function all()
  {
    $request = new AddressesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'contacts/{contactFid}/addresses'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Add an address to a contact
   *
   * @param AddressPayload $payload
   *
   * @return ApiRequest
   */
  public function create(AddressPayload $payload)
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
        'contacts/{contactFid}/addresses'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
