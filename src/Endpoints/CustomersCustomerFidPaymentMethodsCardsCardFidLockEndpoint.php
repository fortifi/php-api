<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentMethodsCardsCardFidLockEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/paymentMethods/cards/{cardFid}/lock';
  protected $_replacements = [];

  public function __construct($customerFid, $cardFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{cardFid}'] = $cardFid;
  }

  /**
   * @param $expirySeconds
   *
   * @return ApiRequest
   */
  public function create($expirySeconds)
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
        'customers/{customerFid}/paymentMethods/cards/{cardFid}/lock'
      )
    ));
    $detail->addPostField('expirySeconds', $expirySeconds);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
