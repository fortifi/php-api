<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Payloads\CardUpdatePayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentMethodsCardsCardFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/paymentMethods/cards/{cardFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $cardFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{cardFid}'] = $cardFid;
  }

  /**
   * @return CustomersCustomerFidPaymentMethodsCardsCardFidLockEndpoint
   */
  public function lock()
  {
    $endpoint = new CustomersCustomerFidPaymentMethodsCardsCardFidLockEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{cardFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ApiRequest
   */
  public function delete()
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/paymentMethods/cards/{cardFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a card
   *
   * @param CardUpdatePayload $payload
   *
   * @return ApiRequest
   */
  public function update(CardUpdatePayload $payload)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/paymentMethods/cards/{cardFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
