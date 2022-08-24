<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class PublishersPublisherFidFinanceEndpoint extends ApiEndpoint
{
  protected $_path = 'publishers/{publisherFid}/finance';
  protected $_replacements = [];

  public function __construct($publisherFid)
  {
    $this->_replacements['{publisherFid}'] = $publisherFid;
  }

  /**
   * @return PublishersPublisherFidFinanceCostImportEndpoint
   */
  public function costImport()
  {
    $endpoint = new PublishersPublisherFidFinanceCostImportEndpoint(
      $this->_replacements['{publisherFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
