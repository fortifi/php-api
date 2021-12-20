<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PaymentCardsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentMethodsCardsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/paymentMethods/cards';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @param $cardFid
   *
   * @return CustomersCustomerFidPaymentMethodsCardsCardFidEndpoint
   */
  public function with($cardFid)
  {
    $endpoint = new CustomersCustomerFidPaymentMethodsCardsCardFidEndpoint(
      $this->_replacements['{customerFid}'],
      $cardFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List customers card payment methods
   *
   * @return PaymentCardsRequest
   */
  public function all()
  {
    $request = new PaymentCardsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/paymentMethods/cards'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
