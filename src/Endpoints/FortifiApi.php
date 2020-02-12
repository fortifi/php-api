<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\UserRequest;
use Fortifi\Api\V1\Definitions\FortifiApiDefinition;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class FortifiApi extends ApiEndpoint
{
  protected $_path = '';
  protected $_replacements = [];

  public function __construct()
  {
    $this->setApiDefinition(new FortifiApiDefinition());
  }

  /**
   * @return AdvertisersEndpoint
   */
  public function advertisers()
  {
    $endpoint = new AdvertisersEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ContactsEndpoint
   */
  public function contacts()
  {
    $endpoint = new ContactsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersEndpoint
   */
  public function customers()
  {
    $endpoint = new CustomersEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return EntitiesEndpoint
   */
  public function entities()
  {
    $endpoint = new EntitiesEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return PayEndpoint
   */
  public function pay()
  {
    $endpoint = new PayEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ConfigurationEndpoint
   */
  public function configuration()
  {
    $endpoint = new ConfigurationEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return LicenceEndpoint
   */
  public function licence()
  {
    $endpoint = new LicenceEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return IntegrationsEndpoint
   */
  public function integrations()
  {
    $endpoint = new IntegrationsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return MessengerEndpoint
   */
  public function messenger()
  {
    $endpoint = new MessengerEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return OrdersEndpoint
   */
  public function orders()
  {
    $endpoint = new OrdersEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return PolymersEndpoint
   */
  public function polymers()
  {
    $endpoint = new PolymersEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ProductsEndpoint
   */
  public function products()
  {
    $endpoint = new ProductsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ReasonsEndpoint
   */
  public function reasons()
  {
    $endpoint = new ReasonsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ServicesEndpoint
   */
  public function services()
  {
    $endpoint = new ServicesEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return SvcauthEndpoint
   */
  public function svcauth()
  {
    $endpoint = new SvcauthEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return VisitorsEndpoint
   */
  public function visitors()
  {
    $endpoint = new VisitorsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return BrandsEndpoint
   */
  public function brands()
  {
    $endpoint = new BrandsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return OrganisationEndpoint
   */
  public function organisation()
  {
    $endpoint = new OrganisationEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return TicketsEndpoint
   */
  public function tickets()
  {
    $endpoint = new TicketsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
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
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('me'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
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
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('version'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
