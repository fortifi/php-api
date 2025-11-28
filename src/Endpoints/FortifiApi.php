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
   * @return AccountEndpoint
   */
  public function account()
  {
    $endpoint = new AccountEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return AccountantEndpoint
   */
  public function accountant()
  {
    $endpoint = new AccountantEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
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
   * @return AppstoreEndpoint
   */
  public function appstore()
  {
    $endpoint = new AppstoreEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return AttachmentEndpoint
   */
  public function attachment()
  {
    $endpoint = new AttachmentEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return PresetChatEndpoint
   */
  public function presetChat()
  {
    $endpoint = new PresetChatEndpoint();
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
   * @return DeviceEndpoint
   */
  public function device()
  {
    $endpoint = new DeviceEndpoint();
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
   * @return FeatureFlagsEndpoint
   */
  public function featureFlags()
  {
    $endpoint = new FeatureFlagsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return FinanceEndpoint
   */
  public function finance()
  {
    $endpoint = new FinanceEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return FlowEndpoint
   */
  public function flow()
  {
    $endpoint = new FlowEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return InteractionsEndpoint
   */
  public function interactions()
  {
    $endpoint = new InteractionsEndpoint();
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
   * @return PaymentsEndpoint
   */
  public function payments()
  {
    $endpoint = new PaymentsEndpoint();
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
   * @return PublishersEndpoint
   */
  public function publishers()
  {
    $endpoint = new PublishersEndpoint();
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
   * @return ReservationsEndpoint
   */
  public function reservations()
  {
    $endpoint = new ReservationsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ReviewEndpoint
   */
  public function review()
  {
    $endpoint = new ReviewEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return SupportEndpoint
   */
  public function support()
  {
    $endpoint = new SupportEndpoint();
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
   * @return TicketsEndpoint
   */
  public function tickets()
  {
    $endpoint = new TicketsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return TransactionsEndpoint
   */
  public function transactions()
  {
    $endpoint = new TransactionsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return UploadEndpoint
   */
  public function upload()
  {
    $endpoint = new UploadEndpoint();
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
   * @return CommentsEndpoint
   */
  public function comments()
  {
    $endpoint = new CommentsEndpoint();
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
   * @return PropertiesEndpoint
   */
  public function properties()
  {
    $endpoint = new PropertiesEndpoint();
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
