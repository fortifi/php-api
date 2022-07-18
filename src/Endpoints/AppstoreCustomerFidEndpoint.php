<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class AppstoreCustomerFidEndpoint extends ApiEndpoint
{
  protected $_path = 'appstore/{customerFid}';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @return AppstoreCustomerFidGoogleEndpoint
   */
  public function google()
  {
    $endpoint = new AppstoreCustomerFidGoogleEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return AppstoreCustomerFidAppleEndpoint
   */
  public function apple()
  {
    $endpoint = new AppstoreCustomerFidAppleEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
