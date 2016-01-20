<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ContactsEmailsEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/emails';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $emailAddress
   *
   * @return ContactsEmailsEmailAddressEndpoint
   */
  public function with($emailAddress)
  {
    $endpoint = new ContactsEmailsEmailAddressEndpoint(
      $emailAddress
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
