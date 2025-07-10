<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class ContactsSearchEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/search';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Search for contacts
   *
   * @param $limit
   * @param $page
   * @param $firstName
   * @param $lastName
   * @param $email
   *
   * @return ApiRequest
   */
  public function all($limit = null, $page = null, $firstName = null, $lastName = null, $email = null)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('contacts/search'));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
    $detail->addQueryField('firstName', $firstName);
    $detail->addQueryField('lastName', $lastName);
    $detail->addQueryField('email', $email);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
