<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ReviewsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidReviewsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/reviews';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary List Reviews
   *
   * @return ReviewsRequest
   */
  public function all()
  {
    $request = new ReviewsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/reviews'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
