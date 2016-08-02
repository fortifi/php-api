<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\InvoicesRequest;
use Fortifi\Api\Core\ApiRequestDetail;
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
   * @summary Retrieve all invoices from a customer
   *
   * @return InvoicesRequest
   */
  public function all()
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
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
