<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CustomerRequest;
use Fortifi\Api\V1\Requests\AddressesRequest;
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
   * @summary Retrieve a customer
   *
   * @return CustomerRequest
   */
  public function retrieve()
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
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a customer
   *
   * @param $firstName
   * @param $lastName
   *
   * @return ApiRequest
   */
  public function update($firstName = null, $lastName = null)
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
   * @summary Save a note against a customer
   *
   * @param $note
   * @param $colour
   *
   * @return ApiRequest
   */
  public function setNote($note, $colour = null)
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
        'customers/{customerFid}/note'
      )
    ));
    $detail->addPostField('note', $note);
    $detail->addPostField('colour', $colour);
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
   * @summary Create a new support ticket
   *
   * @param $subject
   * @param $content
   * @param $recipient
   * @param $sender
   * @param $departmentFid
   *
   * @return ApiRequest
   */
  public function createTicket($subject, $content, $recipient, $sender, $departmentFid = null)
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
        'customers/{customerFid}/tickets'
      )
    ));
    $detail->addPostField('subject', $subject);
    $detail->addPostField('content', $content);
    $detail->addPostField('recipient', $recipient);
    $detail->addPostField('sender', $sender);
    $detail->addPostField('departmentFid', $departmentFid);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary List customers addresses
   *
   * @return AddressesRequest
   */
  public function addresses()
  {
    $request = new AddressesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/addresses'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Add an email address to a customer
   *
   * @param $emailAddress
   *
   * @return ApiRequest
   */
  public function createEmail($emailAddress)
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
        'customers/{customerFid}/emails'
      )
    ));
    $detail->addPostField('emailAddress', $emailAddress);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Add a phone number to a customer
   *
   * @param $phoneNumber
   * @param $displayName
   *
   * @return ApiRequest
   */
  public function createPhone($phoneNumber, $displayName = null)
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
        'customers/{customerFid}/phones'
      )
    ));
    $detail->addPostField('phoneNumber', $phoneNumber);
    $detail->addPostField('displayName', $displayName);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
