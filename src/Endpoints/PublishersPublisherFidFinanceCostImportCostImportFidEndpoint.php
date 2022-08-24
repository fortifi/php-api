<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PublishersPublisherFidFinanceCostImportCostImportFidEndpoint extends ApiEndpoint
{
  protected $_path = 'publishers/{publisherFid}/finance/costImport/{costImportFid}';
  protected $_replacements = [];

  public function __construct($publisherFid, $costImportFid)
  {
    $this->_replacements['{publisherFid}'] = $publisherFid;
    $this->_replacements['{costImportFid}'] = $costImportFid;
  }

  /**
   * @summary Retrieve the status of cost import
   *
   * @return BoolMessageRequest
   */
  public function retrieve()
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
        'publishers/{publisherFid}/finance/costImport/{costImportFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
