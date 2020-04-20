<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\InvoiceRequest;
use Fortifi\Api\V1\Requests\InvoiceDownloadRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
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
   * @return CustomersCustomerFidInvoicesInvoiceFidCreditNoteEndpoint
   */
  public function creditNote()
  {
    $endpoint = new CustomersCustomerFidInvoicesInvoiceFidCreditNoteEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{invoiceFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retreive a specific itemised invoice
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

  /**
   * @summary Retreive a specific itemised invoice PDF
   *
   * @param $filename
   *
   * @return InvoiceDownloadRequest
   */
  public function download($filename = null)
  {
    $request = new InvoiceDownloadRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/invoices/{invoiceFid}/download'
      )
    ));
    $detail->addQueryField('filename', $filename);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Retry payment of invoice
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
        'customers/{customerFid}/invoices/{invoiceFid}/retry'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
