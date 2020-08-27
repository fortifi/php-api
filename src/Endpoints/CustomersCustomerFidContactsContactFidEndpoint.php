<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PersonRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidContactsContactFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/contacts/{contactFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $contactFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{contactFid}'] = $contactFid;
  }

  /**
   * @summary Update a contacts information
   *
   * @param $prefix
   * @param $firstName
   * @param $middleNames
   * @param $lastName
   * @param $suffix
   * @param $nickname
   * @param $birthday
   * @param $jobTitle
   * @param $defaultEmailFid
   * @param $defaultPhoneFid
   * @param $defaultAddressFid
   * @param $externalReference
   *
   * @return ApiRequest
   */
  public function update($prefix = null, $firstName = null, $middleNames = null, $lastName = null, $suffix = null, $nickname = null, $birthday = null, $jobTitle = null, $defaultEmailFid = null, $defaultPhoneFid = null, $defaultAddressFid = null, $externalReference = null)
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
        'customers/{customerFid}/contacts/{contactFid}'
      )
    ));
    $detail->addPostField('prefix', $prefix);
    $detail->addPostField('firstName', $firstName);
    $detail->addPostField('middleNames', $middleNames);
    $detail->addPostField('lastName', $lastName);
    $detail->addPostField('suffix', $suffix);
    $detail->addPostField('nickname', $nickname);
    $detail->addPostField('birthday', $birthday);
    $detail->addPostField('jobTitle', $jobTitle);
    $detail->addPostField('defaultEmailFid', $defaultEmailFid);
    $detail->addPostField('defaultPhoneFid', $defaultPhoneFid);
    $detail->addPostField('defaultAddressFid', $defaultAddressFid);
    $detail->addPostField('externalReference', $externalReference);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Retrieve information about a contact
   *
   * @return PersonRequest
   */
  public function retrieve()
  {
    $request = new PersonRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/contacts/{contactFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Remove a contact
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
        'customers/{customerFid}/contacts/{contactFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
