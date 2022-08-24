<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PublisherRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class PublishersPublisherFidEndpoint extends ApiEndpoint
{
  protected $_path = 'publishers/{publisherFid}';
  protected $_replacements = [];

  public function __construct($publisherFid)
  {
    $this->_replacements['{publisherFid}'] = $publisherFid;
  }

  /**
   * @return PublishersPublisherFidApprovedEndpoint
   */
  public function approved()
  {
    $endpoint = new PublishersPublisherFidApprovedEndpoint(
      $this->_replacements['{publisherFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return PublishersPublisherFidCampaignsEndpoint
   */
  public function campaigns()
  {
    $endpoint = new PublishersPublisherFidCampaignsEndpoint(
      $this->_replacements['{publisherFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return PublishersPublisherFidFinanceEndpoint
   */
  public function finance()
  {
    $endpoint = new PublishersPublisherFidFinanceEndpoint(
      $this->_replacements['{publisherFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve a publisher
   *
   * @return PublisherRequest
   */
  public function retrieve()
  {
    $request = new PublisherRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'publishers/{publisherFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Delete a publisher
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
        'publishers/{publisherFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Restore a publisher
   *
   * @return ApiRequest
   */
  public function setRestore()
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
        'publishers/{publisherFid}/restore'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Enable a publisher
   *
   * @return ApiRequest
   */
  public function setEnable()
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
        'publishers/{publisherFid}/enable'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Disable a publisher
   *
   * @return ApiRequest
   */
  public function setDisable()
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
        'publishers/{publisherFid}/disable'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
