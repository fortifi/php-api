<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PaymentCardsRequest;
use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\V1\Payloads\CardDataPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentMethodsCardsEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'https://api.fortifi.io';
  protected $_basePath = '/v1';
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
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @summary Add a new card
   *
   * @param CardDataPayload $payload
   *
   * @return FidRequest
   */
  public function create(CardDataPayload $payload)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/paymentMethods/cards'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
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
    $detail = new ApiRequestDetail();
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
