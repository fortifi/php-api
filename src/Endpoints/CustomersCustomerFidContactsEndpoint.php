<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PeopleRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidContactsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/contacts';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @param $contactFid
   *
   * @return CustomersCustomerFidContactsContactFidEndpoint
   */
  public function with($contactFid)
  {
    $endpoint = new CustomersCustomerFidContactsContactFidEndpoint(
      $this->_replacements['{customerFid}'],
      $contactFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List contacts
   *
   * @param $limit
   * @param $page
   *
   * @return PeopleRequest
   */
  public function all($limit = null, $page = null)
  {
    $request = new PeopleRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/contacts'
      )
    ));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Create a new contact for a customer
   *
   * @param $email
   * @param $phone
   * @param $prefix
   * @param $firstName
   * @param $middleNames
   * @param $lastName
   * @param $suffix
   * @param $nickname
   * @param $birthday
   * @param $jobTitle
   * @param $address1
   * @param $address2
   * @param $address3
   * @param $town
   * @param $county
   * @param $country
   * @param $postalCode
   *
   * @return ApiRequest
   */
  public function create($email = null, $phone = null, $prefix = null, $firstName = null, $middleNames = null, $lastName = null, $suffix = null, $nickname = null, $birthday = null, $jobTitle = null, $address1 = null, $address2 = null, $address3 = null, $town = null, $county = null, $country = null, $postalCode = null)
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
        'customers/{customerFid}/contacts'
      )
    ));
    $detail->addPostField('email', $email);
    $detail->addPostField('phone', $phone);
    $detail->addPostField('prefix', $prefix);
    $detail->addPostField('firstName', $firstName);
    $detail->addPostField('middleNames', $middleNames);
    $detail->addPostField('lastName', $lastName);
    $detail->addPostField('suffix', $suffix);
    $detail->addPostField('nickname', $nickname);
    $detail->addPostField('birthday', $birthday);
    $detail->addPostField('jobTitle', $jobTitle);
    $detail->addPostField('address1', $address1);
    $detail->addPostField('address2', $address2);
    $detail->addPostField('address3', $address3);
    $detail->addPostField('town', $town);
    $detail->addPostField('county', $county);
    $detail->addPostField('country', $country);
    $detail->addPostField('postalCode', $postalCode);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
