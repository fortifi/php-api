<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\V1\Payloads\ConfirmCardOrderPayload;
use Fortifi\Api\V1\Payloads\ConfirmOrderPayload;
use Fortifi\Api\V1\Payloads\ConfirmPayPalOrderPayload;
use Fortifi\Api\V1\Payloads\ConfirmTokenizedCardOrderPayload;
use Fortifi\Api\V1\Payloads\VerifyOrderPayload;
use Fortifi\Api\V1\Requests\OrderConfirmationRequest;
use Fortifi\Api\V1\Requests\OrderRequest;
use Fortifi\Api\V1\Requests\OrderVerificationRequest;

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
    $detail->setUrl(
      $this->_buildUrl(
        str_replace(
          array_keys($this->_replacements),
          array_values($this->_replacements),
          'orders/{orderFid}'
        )
      )
    );
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
    $detail->setUrl(
      $this->_buildUrl(
        str_replace(
          array_keys($this->_replacements),
          array_values($this->_replacements),
          'orders/{orderFid}/verify'
        )
      )
    );
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
    $detail->setUrl(
      $this->_buildUrl(
        str_replace(
          array_keys($this->_replacements),
          array_values($this->_replacements),
          'orders/{orderFid}/confirmCard'
        )
      )
    );
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Confirm an order, authorize the payment
   *
   * @param ConfirmTokenizedCardOrderPayload $payload
   *
   * @return OrderConfirmationRequest
   */
  public function confirmTokenizedCard(ConfirmTokenizedCardOrderPayload $payload)
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
        'orders/{orderFid}/confirmTokenizedCard'
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
    $detail->setUrl(
      $this->_buildUrl(
        str_replace(
          array_keys($this->_replacements),
          array_values($this->_replacements),
          'orders/{orderFid}/confirmPayPal'
        )
      )
    );
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Confirm an order, await payment
   *
   * @return OrderConfirmationRequest
   */
  public function confirmCoinbase()
  {
    $request = new OrderConfirmationRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl(
      $this->_buildUrl(
        str_replace(
          array_keys($this->_replacements),
          array_values($this->_replacements),
          'orders/{orderFid}/confirmCoinbase'
        )
      )
    );
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
