<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\InvoicesRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidInvoicesEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/invoices';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @param $invoiceFid
   *
   * @return CustomersCustomerFidInvoicesInvoiceFidEndpoint
   */
  public function with($invoiceFid)
  {
    $endpoint = new CustomersCustomerFidInvoicesInvoiceFidEndpoint(
      $this->_replacements['{customerFid}'],
      $invoiceFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List of invoice summaries for given customer
   *
   * @param $limit
   * @param $page
   *
   * @return InvoicesRequest
   */
  public function all($limit = null, $page = null)
  {
    $request = new InvoicesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/invoices'
      )
    ));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Retry payment of all customer invoices which are in invoice
   *
   * @return ApiRequest
   */
  public function setRetry()
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
        'customers/{customerFid}/invoices/retry'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
