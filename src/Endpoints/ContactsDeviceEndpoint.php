<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ContactsDeviceEndpoint extends ApiEndpoint
{
  protected $_path = 'contacts/device';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $hardwareId
   *
   * @return ContactsDeviceHardwareIdEndpoint
   */
  public function with($hardwareId)
  {
    $endpoint = new ContactsDeviceHardwareIdEndpoint(
      $hardwareId
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
