<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ImportCostRequest;
use Fortifi\Api\V1\Payloads\ImportCostPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PublishersPublisherFidFinanceCostImportEndpoint extends ApiEndpoint
{
  protected $_path = 'publishers/{publisherFid}/finance/costImport';
  protected $_replacements = [];

  public function __construct($publisherFid)
  {
    $this->_replacements['{publisherFid}'] = $publisherFid;
  }

  /**
   * @param $costImportFid
   *
   * @return PublishersPublisherFidFinanceCostImportCostImportFidEndpoint
   */
  public function with($costImportFid)
  {
    $endpoint = new PublishersPublisherFidFinanceCostImportCostImportFidEndpoint(
      $this->_replacements['{publisherFid}'],
      $costImportFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Import cost data
   *
   * @param ImportCostPayload $payload
   *
   * @return ImportCostRequest
   */
  public function create(ImportCostPayload $payload)
  {
    $request = new ImportCostRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'publishers/{publisherFid}/finance/costImport'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
