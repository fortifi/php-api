<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\UserRequest;
use Fortifi\Api\V1\Requests\OrganisationRequest;
use Fortifi\Api\V1\Definitions\FortifiApiApiDefinition;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class FortifiApi extends ApiEndpoint
{
  protected $_path = '';
  protected $_replacements = [];

  public function __construct()
  {
    $this->setApiDefinition(new FortifiApiApiDefinition());
  }

  /**
   * @return VisitorsEndpoint
   */
  public function visitors()
  {
    $endpoint = new VisitorsEndpoint();
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @return PayEndpoint
   */
  public function pay()
  {
    $endpoint = new PayEndpoint();
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @return CustomersEndpoint
   */
  public function customers()
  {
    $endpoint = new CustomersEndpoint();
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @return EntitiesEndpoint
   */
  public function entities()
  {
    $endpoint = new EntitiesEndpoint();
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @return ProductsEndpoint
   */
  public function products()
  {
    $endpoint = new ProductsEndpoint();
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @return OrdersEndpoint
   */
  public function orders()
  {
    $endpoint = new OrdersEndpoint();
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @summary Current Version
   *
   * Retrieve the current version of the Fortifi api
   *
   * @return ApiRequest
   */
  public function version()
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('version'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Current User
   *
   * Retrieve information about the current connected user (you)
   *
   * @return UserRequest
   */
  public function me()
  {
    $request = new UserRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('me'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Current Organisation
   *
   * Retrieve information about the current organisation
   *
   * @return OrganisationRequest
   */
  public function organisation()
  {
    $request = new OrganisationRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('organisation'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Your Companies
   *
   * Retrieve a list of all the companies within your Fortifi account
   *
   * @return ApiRequest
   */
  public function companies()
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('companies'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
