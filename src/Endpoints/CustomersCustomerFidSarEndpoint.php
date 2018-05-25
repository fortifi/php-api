<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSarEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/sar';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Subject Access Request
   *
   * Initiate a Subject Access Request.  A URL will be sent via a webhook
   * (CustomerWHE::SUBJECT_ACCESS_REQUEST), once the archive is ready for
   * download
   *
   * @return BoolMessageRequest
   */
  public function create()
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
        'customers/{customerFid}/sar'
      )
    ));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
