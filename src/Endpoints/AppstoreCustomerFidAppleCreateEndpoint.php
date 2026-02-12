<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\CreateAppleAppStorePurchasePayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class AppstoreCustomerFidAppleCreateEndpoint extends ApiEndpoint
{
  protected $_path = 'appstore/{customerFid}/apple/create';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Create purchase from Apple App Store transaction data
   *
   * Create a subscription or product purchase from Apple App Store transaction
   * data.
   * The client has already verified the transaction with Apple and sends
   * structured transaction details.
   * This endpoint creates purchases synchronously and returns the purchase FID
   * immediately.
   *
   * @param CreateAppleAppStorePurchasePayload $payload
   *
   * @return BoolMessageRequest
   */
  public function create(CreateAppleAppStorePurchasePayload $payload)
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
        'appstore/{customerFid}/apple/create'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
