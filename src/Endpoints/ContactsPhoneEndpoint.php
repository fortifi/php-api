<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ContactsPhoneEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/phone';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $phoneNumber
   *
   * @return ContactsPhonePhoneNumberEndpoint
   */
  public function with($phoneNumber)
  {
    $endpoint = new ContactsPhonePhoneNumberEndpoint(
      $phoneNumber
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
