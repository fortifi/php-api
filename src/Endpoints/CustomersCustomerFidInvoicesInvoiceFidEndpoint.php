<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\InvoiceRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidInvoicesInvoiceFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/invoices/{invoiceFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $invoiceFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{invoiceFid}'] = $invoiceFid;
  }

  /**
   * @summary Retreive specific invoice by customerFid and invoice Fid
   *
   * @return InvoiceRequest
   */
  public function retrieve()
  {
    $request = new InvoiceRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/invoices/{invoiceFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}