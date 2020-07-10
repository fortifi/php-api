<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class PublishersPublisherFidApprovedEndpoint extends ApiEndpoint
{
  protected $_path = 'publishers/{publisherFid}/approved';
  protected $_replacements = [];

  public function __construct($publisherFid)
  {
    $this->_replacements['{publisherFid}'] = $publisherFid;
  }

  /**
   * @summary Set approved status on an publisher
   *
   * @return ApiRequest
   */
  public function setApproved()
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
        'publishers/{publisherFid}/approved'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Remove approved status on an publisher
   *
   * @return ApiRequest
   */
  public function delete()
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
        'publishers/{publisherFid}/approved'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
