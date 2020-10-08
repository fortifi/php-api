<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\SubscriptionRequest;
use Fortifi\Api\V1\Requests\OrderRequest;
use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\V1\Requests\CalculatedSubscriptionModificationRequest;
use Fortifi\Api\V1\Requests\CalculateSubscriptionRefundRequest;
use Fortifi\Api\V1\Payloads\SubscriptionCancelPayload;
use Fortifi\Api\V1\Payloads\ModifySubscriptionPayload;
use Fortifi\Api\V1\Payloads\CalculateRefundPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
  }

  /**
   * @return CustomersCustomerFidSubscriptionsSubscriptionFidPeriodsEndpoint
   */
  public function periods()
  {
    $endpoint = new CustomersCustomerFidSubscriptionsSubscriptionFidPeriodsEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{subscriptionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidSubscriptionsSubscriptionFidAllocationsEndpoint
   */
  public function allocations()
  {
    $endpoint = new CustomersCustomerFidSubscriptionsSubscriptionFidAllocationsEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{subscriptionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retreive a specific subscription
   *
   * @return SubscriptionRequest
   */
  public function retrieve()
  {
    $request = new SubscriptionRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a subscription
   *
   * @param $displayName
   * @param $description
   *
   * @return ApiRequest
   */
  public function update($displayName = null, $description = null)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}'
      )
    ));
    $detail->addPostField('displayName', $displayName);
    $detail->addPostField('description', $description);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Enable auto charge on specific subscription
   *
   * @return ApiRequest
   */
  public function setEnableAutoCharge()
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/enableAutoCharge'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Disable auto charge on specific subscription
   *
   * @return ApiRequest
   */
  public function setDisableAutoCharge()
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/disableAutoCharge'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set auto cancel days on a subscription
   *
   * @param $days
   *
   * @return ApiRequest
   */
  public function setAutoCancelDays($days)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/autoCancelDays'
      )
    ));
    $detail->addPostField('days', $days);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set auto suspend days on a subscription
   *
   * @param $days
   *
   * @return ApiRequest
   */
  public function setAutoSuspendDays($days)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/autoSuspendDays'
      )
    ));
    $detail->addPostField('days', $days);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set advance days on a subscription
   *
   * @param $days
   *
   * @return ApiRequest
   */
  public function setAdvanceDays($days)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/setAdvanceDays'
      )
    ));
    $detail->addPostField('days', $days);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set the renewal mode of a subscription
   *
   * @param $renewalMode
   * @param $reason
   * @param $note
   *
   * @return ApiRequest
   */
  public function setRenewalMode($renewalMode, $reason = null, $note = null)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/renewalMode'
      )
    ));
    $detail->addPostField('renewalMode', $renewalMode);
    $detail->addPostField('reason', $reason);
    $detail->addPostField('note', $note);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set parent subscription on a subscription
   *
   * @param $parentSubscriptionFid
   *
   * @return FidRequest
   */
  public function setParentSubscription($parentSubscriptionFid)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/setParentSubscription'
      )
    ));
    $detail->addPostField('parentSubscriptionFid', $parentSubscriptionFid);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Calculates the changes before a modification to a subscription
   *
   * @param ModifySubscriptionPayload $payload
   *
   * @return CalculatedSubscriptionModificationRequest
   */
  public function setCalculateModification(ModifySubscriptionPayload $payload)
  {
    $request = new CalculatedSubscriptionModificationRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/calculateModification'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Calculates the result of a potential refund on a subscription
   *
   * @param CalculateRefundPayload $payload
   *
   * @return CalculateSubscriptionRefundRequest
   */
  public function setCalculateRefund(CalculateRefundPayload $payload)
  {
    $request = new CalculateSubscriptionRefundRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/calculateRefund'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set paymentAccount for subscription. If changing a payment method from an
   * Automatic Payment Method such as PayPal Recurring Payments, any other
   * subscriptions paid with the same Agreement will be set to Default Payment
   * Method and the Agreement will be cancelled
   *
   * @param $paymentAccountFid
   *
   * @return ApiRequest
   */
  public function setPaymentAccount($paymentAccountFid = null)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/setPaymentAccount'
      )
    ));
    $detail->addPostField('paymentAccountFid', $paymentAccountFid);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Modify an existing subscription with a new price. Returns new open order to
   * be completed
   *
   * @param ModifySubscriptionPayload $payload
   *
   * @return OrderRequest
   */
  public function setModify(ModifySubscriptionPayload $payload)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/modify'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Modify an existing subscription with a new price which will be used for the
   * next renewal
   *
   * @param $priceFid
   *
   * @return FidRequest
   */
  public function setUpdateRenewalPrice($priceFid)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/updateRenewalPrice'
      )
    ));
    $detail->addPostField('priceFid', $priceFid);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Apply an offer to a subscription
   *
   * @param $offerFid
   *
   * @return ApiRequest
   */
  public function setApplyOffer($offerFid)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/applyOffer'
      )
    ));
    $detail->addPostField('offerFid', $offerFid);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Pre-renew an existing subscription with a different price. Returns new open
   * order to be completed
   *
   * @param $priceFid
   *
   * @return FidRequest
   */
  public function setPreRenew($priceFid)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/preRenew'
      )
    ));
    $detail->addPostField('priceFid', $priceFid);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Cancel a subscripion. Returns subscription FID.
   *
   * @param SubscriptionCancelPayload $payload
   *
   * @return SubscriptionRequest
   */
  public function setCancel(SubscriptionCancelPayload $payload)
  {
    $request = new SubscriptionRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/cancel'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
