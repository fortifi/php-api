<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ContactsEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return ContactsFindByReferenceEndpoint
   */
  public function findByReference()
  {
    $endpoint = new ContactsFindByReferenceEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ContactsEmailsEndpoint
   */
  public function emails()
  {
    $endpoint = new ContactsEmailsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
