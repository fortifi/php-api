<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CustomerInteractionsRequest;
use Fortifi\Api\V1\Requests\CreateInteractionRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidInteractionsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/interactions';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Create an interaction
   *
   * @param $interactionType
   *
   * @return CreateInteractionRequest
   */
  public function create($interactionType)
  {
    $request = new CreateInteractionRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/interactions'
      )
    ));
    $detail->addPostField('interactionType', $interactionType);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary List Customer interactions
   *
   * @return CustomerInteractionsRequest
   */
  public function all()
  {
    $request = new CustomerInteractionsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/interactions'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
