<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\OrganisationRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class OrganisationEndpoint extends ApiEndpoint
{
  protected $_path = 'organisation';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Current Organisation
   *
   * Retrieve information about the current organisation
   *
   * @return OrganisationRequest
   */
  public function all()
  {
    $request = new OrganisationRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('organisation'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
