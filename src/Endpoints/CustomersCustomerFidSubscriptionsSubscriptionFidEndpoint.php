<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\SubscriptionRequest;
use Fortifi\Api\V1\Requests\OrderRequest;
use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\V1\Payloads\SubscriptionCancelPayload;
use Fortifi\Api\V1\Payloads\ModifySubscriptionPayload;
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
   * @summary Re-enable renewals on a subscription
   *
   * @param $reason
   *
   * @return ApiRequest
   */
  public function setReEnableRenewal($reason)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/reEnableRenewal'
      )
    ));
    $detail->addPostField('reason', $reason);
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
