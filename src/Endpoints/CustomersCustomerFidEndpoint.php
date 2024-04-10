<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CustomerRequest;
use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\SetSubscriptionTypePayload;
use Fortifi\Api\V1\Payloads\SetCustomerLocationPayload;
use Fortifi\Api\V1\Payloads\SetAccountTypePayload;
use Fortifi\Api\V1\Payloads\SetAccountStatusPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @return CustomersCustomerFidPaymentsEndpoint
   */
  public function payments()
  {
    $endpoint = new CustomersCustomerFidPaymentsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidChargebacksEndpoint
   */
  public function chargebacks()
  {
    $endpoint = new CustomersCustomerFidChargebacksEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidContactsEndpoint
   */
  public function contacts()
  {
    $endpoint = new CustomersCustomerFidContactsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidAddressesEndpoint
   */
  public function addresses()
  {
    $endpoint = new CustomersCustomerFidAddressesEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidEmailsEndpoint
   */
  public function emails()
  {
    $endpoint = new CustomersCustomerFidEmailsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidPhonesEndpoint
   */
  public function phones()
  {
    $endpoint = new CustomersCustomerFidPhonesEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidInteractionsEndpoint
   */
  public function interactions()
  {
    $endpoint = new CustomersCustomerFidInteractionsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidTicketsEndpoint
   */
  public function tickets()
  {
    $endpoint = new CustomersCustomerFidTicketsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidInvoicesEndpoint
   */
  public function invoices()
  {
    $endpoint = new CustomersCustomerFidInvoicesEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidLoyalEndpoint
   */
  public function loyal()
  {
    $endpoint = new CustomersCustomerFidLoyalEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidVipEndpoint
   */
  public function vip()
  {
    $endpoint = new CustomersCustomerFidVipEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidPaymentAccountsEndpoint
   */
  public function paymentAccounts()
  {
    $endpoint = new CustomersCustomerFidPaymentAccountsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidPaymentMethodsEndpoint
   */
  public function paymentMethods()
  {
    $endpoint = new CustomersCustomerFidPaymentMethodsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidSubscriptionsEndpoint
   */
  public function subscriptions()
  {
    $endpoint = new CustomersCustomerFidSubscriptionsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidChatSessionsEndpoint
   */
  public function chatSessions()
  {
    $endpoint = new CustomersCustomerFidChatSessionsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidNoteEndpoint
   */
  public function note()
  {
    $endpoint = new CustomersCustomerFidNoteEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidReviewsEndpoint
   */
  public function reviews()
  {
    $endpoint = new CustomersCustomerFidReviewsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidOrdersEndpoint
   */
  public function orders()
  {
    $endpoint = new CustomersCustomerFidOrdersEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidApplyCreditEndpoint
   */
  public function applyCredit()
  {
    $endpoint = new CustomersCustomerFidApplyCreditEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidSarEndpoint
   */
  public function sar()
  {
    $endpoint = new CustomersCustomerFidSarEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidSentEmailsEndpoint
   */
  public function sentEmails()
  {
    $endpoint = new CustomersCustomerFidSentEmailsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve a customer
   *
   * @param $retrieveBillingData
   *
   * @return CustomerRequest
   */
  public function retrieve($retrieveBillingData = null)
  {
    $request = new CustomerRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}'
      )
    ));
    $detail->addQueryField('retrieveBillingData', $retrieveBillingData);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customer
   *
   * @param $firstName
   * @param $lastName
   * @param $displayName
   *
   * @return ApiRequest
   */
  public function update($firstName = null, $lastName = null, $displayName = null)
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
        'customers/{customerFid}'
      )
    ));
    $detail->addPostField('firstName', $firstName);
    $detail->addPostField('lastName', $lastName);
    $detail->addPostField('displayName', $displayName);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Archive a customer
   *
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
        'customers/{customerFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customers status
   *
   * @param SetAccountStatusPayload $payload
   *
   * @return ApiRequest
   */
  public function setAccountStatus(SetAccountStatusPayload $payload)
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
        'customers/{customerFid}/accountStatus'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customers lifecycle stage
   *
   * @param $customerLifecycle
   *
   * @return ApiRequest
   */
  public function setLifecycleStage($customerLifecycle)
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
        'customers/{customerFid}/lifecycleStage'
      )
    ));
    $detail->addPostField('customerLifecycle', $customerLifecycle);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customers location
   *
   * @param SetCustomerLocationPayload $payload
   *
   * @return ApiRequest
   */
  public function setLocation(SetCustomerLocationPayload $payload)
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
        'customers/{customerFid}/location'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customers status
   *
   * @param SetAccountTypePayload $payload
   *
   * @return ApiRequest
   */
  public function setAccountType(SetAccountTypePayload $payload)
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
        'customers/{customerFid}/accountType'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customers status
   *
   * @param SetSubscriptionTypePayload $payload
   *
   * @return ApiRequest
   */
  public function setSubscriptionType(SetSubscriptionTypePayload $payload)
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
        'customers/{customerFid}/subscriptionType'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Mark customer as qualified, this action cannot be undone.
   *
   * @param $isoTime
   *
   * @return ApiRequest
   */
  public function setQualified($isoTime = null)
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
        'customers/{customerFid}/qualified'
      )
    ));
    $detail->addPostField('isoTime', $isoTime);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Mark customer as charged back, this action cannot be undone.
   *
   * @param $isoTime
   *
   * @return ApiRequest
   */
  public function setChargeback($isoTime = null)
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
        'customers/{customerFid}/chargeback'
      )
    ));
    $detail->addPostField('isoTime', $isoTime);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Mark customer as fraudulent, this action cannot be undone.
   *
   * @param $isoTime
   *
   * @return ApiRequest
   */
  public function setFraud($isoTime = null)
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
        'customers/{customerFid}/fraud'
      )
    ));
    $detail->addPostField('isoTime', $isoTime);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Mark customer as purchased, this action cannot be undone.
   *
   * @param $isoTime
   *
   * @return ApiRequest
   */
  public function setPurchased($isoTime = null)
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
        'customers/{customerFid}/purchased'
      )
    ));
    $detail->addPostField('isoTime', $isoTime);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set customer Currency
   *
   * @param $currency
   *
   * @return ApiRequest
   */
  public function setCurrency($currency)
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
        'customers/{customerFid}/currency'
      )
    ));
    $detail->addPostField('currency', $currency);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Link visitor to customer record
   *
   * @param $visitorId
   *
   * @return ApiRequest
   */
  public function setLinkVisitor($visitorId)
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
        'customers/{customerFid}/linkVisitor'
      )
    ));
    $detail->addPostField('visitorId', $visitorId);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customers external reference
   *
   * @param $externalReference
   *
   * @return ApiRequest
   */
  public function setExternalReference($externalReference)
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
        'customers/{customerFid}/externalReference'
      )
    ));
    $detail->addPostField('externalReference', $externalReference);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customers billing data
   *
   * @param $billingType
   * @param $taxNumber
   * @param $companyNumber
   * @param $knownIP
   *
   * @return ApiRequest
   */
  public function setBillingData($billingType = null, $taxNumber = null, $companyNumber = null, $knownIP = null)
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
        'customers/{customerFid}/billingData'
      )
    ));
    $detail->addPostField('billingType', $billingType);
    $detail->addPostField('taxNumber', $taxNumber);
    $detail->addPostField('companyNumber', $companyNumber);
    $detail->addPostField('knownIP', $knownIP);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Anonymize customer data
   *
   * Anonymize customer data
   *
   * @param $customer
   * @param $tickets
   * @param $chats
   * @param $orders
   * @param $emails
   * @param $phones
   * @param $addresses
   * @param $paymentAccounts
   *
   * @return BoolMessageRequest
   */
  public function createAnonymize($customer = null, $tickets = null, $chats = null, $orders = null, $emails = null, $phones = null, $addresses = null, $paymentAccounts = null)
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
        'customers/{customerFid}/anonymize'
      )
    ));
    $detail->addPostField('customer', $customer);
    $detail->addPostField('tickets', $tickets);
    $detail->addPostField('chats', $chats);
    $detail->addPostField('orders', $orders);
    $detail->addPostField('emails', $emails);
    $detail->addPostField('phones', $phones);
    $detail->addPostField('addresses', $addresses);
    $detail->addPostField('paymentAccounts', $paymentAccounts);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Upgrade customer from fortifi pay to chargehive
   *
   * @return ApiRequest
   */
  public function setUpgradePaymentAccount()
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
        'customers/{customerFid}/upgradePaymentAccount'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
