<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PersonRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ContactsFindByReferenceContactReferenceEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/findByReference/{contactReference}';
  protected $_replacements = [];

  public function __construct($contactReference)
  {
    $this->_replacements['{contactReference}'] = $contactReference;
  }

  /**
   * @summary Find a person with a reference
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
        'contacts/findByReference/{contactReference}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
