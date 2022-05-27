<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class AppstoreEndpoint extends ApiEndpoint
{
  protected $_path = 'appstore';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $customerFid
   *
   * @return AppstoreCustomerFidEndpoint
   */
  public function with($customerFid)
  {
    $endpoint = new AppstoreCustomerFidEndpoint(
      $customerFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
