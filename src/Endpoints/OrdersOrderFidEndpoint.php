<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\OrderVerificationRequest;
use Fortifi\Api\V1\Requests\OrderRequest;
use Fortifi\Api\V1\Requests\OrderConfirmationRequest;
use Fortifi\Api\V1\Requests\EnvelopeRequest;
use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\VerifyOrderPayload;
use Fortifi\Api\V1\Payloads\FinalizeOrderPayload;
use Fortifi\Api\V1\Payloads\ConfirmPayPalOrderPayload;
use Fortifi\Api\V1\Payloads\ConfirmOrderWithNewCardPayload;
use Fortifi\Api\V1\Payloads\ConfirmCardOrderPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidEndpoint extends ApiEndpoint
{
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
    $endpoint->_buildFromEndpoint($this);
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
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return OrdersOrderFidFraudScanEndpoint
   */
  public function fraudScan()
  {
    $endpoint = new OrdersOrderFidFraudScanEndpoint(
      $this->_replacements['{orderFid}']
    );
    $endpoint->_buildFromEndpoint($this);
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
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
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
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
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
   * @summary Cancel an order
   *
   * @return BoolMessageRequest
   */
  public function setCancel()
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/cancel'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Mark an order as finalized
   *
   * @param FinalizeOrderPayload $payload
   *
   * @return ApiRequest
   */
  public function finalize(FinalizeOrderPayload $payload)
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
        'orders/{orderFid}/finalize'
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
   * @param ConfirmCardOrderPayload $payload
   *
   * @return OrderConfirmationRequest
   */
  public function confirmCard(ConfirmCardOrderPayload $payload)
  {
    $request = new OrderConfirmationRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/confirmCard'
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
   * @param ConfirmPayPalOrderPayload $payload
   *
   * @return OrderConfirmationRequest
   */
  public function confirmPayPal(ConfirmPayPalOrderPayload $payload)
  {
    $request = new OrderConfirmationRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/confirmPayPal'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set a ChargeHive.com Charge ID on an order
   *
   * @param $chargeId
   *
   * @return EnvelopeRequest
   */
  public function setChargeId($chargeId)
  {
    $request = new EnvelopeRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/setChargeId'
      )
    ));
    $detail->addPostField('chargeId', $chargeId);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Confirm an order with a new card, authorize the payment
   *
   * @param ConfirmOrderWithNewCardPayload $payload
   *
   * @return OrderConfirmationRequest
   */
  public function confirmNewCard(ConfirmOrderWithNewCardPayload $payload)
  {
    $request = new OrderConfirmationRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/confirmNewCard'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
