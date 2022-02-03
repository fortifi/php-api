<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ContactsContactFidEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/{contactFid}';
  protected $_replacements = [];

  public function __construct($contactFid)
  {
    $this->_replacements['{contactFid}'] = $contactFid;
  }

  /**
   * @return ContactsContactFidAddressesEndpoint
   */
  public function addresses()
  {
    $endpoint = new ContactsContactFidAddressesEndpoint(
      $this->_replacements['{contactFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ContactsContactFidEmailsEndpoint
   */
  public function emails()
  {
    $endpoint = new ContactsContactFidEmailsEndpoint(
      $this->_replacements['{contactFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ContactsContactFidPhonesEndpoint
   */
  public function phones()
  {
    $endpoint = new ContactsContactFidPhonesEndpoint(
      $this->_replacements['{contactFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
