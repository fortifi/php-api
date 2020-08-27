<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ContactsFindByReferenceEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/findByReference';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $contactReference
   *
   * @return ContactsFindByReferenceContactReferenceEndpoint
   */
  public function with($contactReference)
  {
    $endpoint = new ContactsFindByReferenceContactReferenceEndpoint(
      $contactReference
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
