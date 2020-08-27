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
   * @return ContactsEmailsEndpoint
   */
  public function emails()
  {
    $endpoint = new ContactsEmailsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
