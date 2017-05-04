<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\V1\Payloads\CardDataPayload;
use Fortifi\Api\V1\Payloads\TokenizedCardDataPayload;
use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\V1\Requests\PaymentCardsRequest;

/**
 * Class CustomersCustomerFidPaymentMethodsCardsEndpoint
 */
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
   * @summary Add a new card
   *
   * @param CardDataPayload|TokenizedCardDataPayload $payload
   *
   * @return FidRequest
   * @throws \Exception
   */
  public function create($payload)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $subject = null;

    switch(1)
    {
      case $payload instanceof CardDataPayload:
        $subject = 'customers/{customerFid}/paymentMethods/cards';
        break;
      case $payload instanceof TokenizedCardDataPayload:
        $subject = 'customers/{customerFid}/paymentMethods/tokenizedCard';
        break;
      default:
        throw new \Exception(
          "Invalid create card payload type " . get_class($payload)
        );
        break;
    }

    $detail->setUrl(
      $this->_buildUrl(
        str_replace(
          array_keys($this->_replacements),
          array_values($this->_replacements),
          $subject
        )
      )
    );
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary List customers card payment methods
   *
   * @param $paymentMethodProcessor
   *
   * @return PaymentCardsRequest
   */
  public function all($paymentMethodProcessor = null)
  {
    $request = new PaymentCardsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl(
      $this->_buildUrl(
        str_replace(
          array_keys($this->_replacements),
          array_values($this->_replacements),
          'customers/{customerFid}/paymentMethods/cards'
        )
      )
    );
    $detail->addQueryField('paymentMethodProcessor', $paymentMethodProcessor);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
