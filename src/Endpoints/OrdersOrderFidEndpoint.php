<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\OrderVerificationRequest;
use Fortifi\Api\V1\Requests\OrderRequest;
use Fortifi\Api\V1\Requests\OrderConfirmationRequest;
use Fortifi\Api\V1\Payloads\VerifyOrderPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'http://lapi.fortifi.io:9090';
  protected $_basePath = '/v1';
  protected $_path = 'orders/{orderFid}';
  protected $_replacements = [];

  public function __construct($orderFid)
  {
    $this->_replacements['{orderFid}'] = $orderFid;
  }

  /**
   * @return OrdersOrderFidProductsEndpoint
   */
  public function products()
  {
    $endpoint = new OrdersOrderFidProductsEndpoint(
      $this->_replacements['{orderFid}']
    );
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @return OrdersOrderFidOffersEndpoint
   */
  public function offers()
  {
    $endpoint = new OrdersOrderFidOffersEndpoint(
      $this->_replacements['{orderFid}']
    );
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @summary Retrieve an order
   *
   * @return OrderRequest
   */
  public function retrieve()
  {
    $request = new OrderRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Verify an order, returning any security urls
   *
   * @param VerifyOrderPayload $payload
   *
   * @return OrderVerificationRequest
   */
  public function verify(VerifyOrderPayload $payload)
  {
    $request = new OrderVerificationRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/verify'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Confirm an order, authorize the payment
   *
   * @return OrderConfirmationRequest
   */
  public function confirm()
  {
    $request = new OrderConfirmationRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/confirm'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
