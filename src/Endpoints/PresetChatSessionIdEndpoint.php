<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PresetChatSessionRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PresetChatSessionIdEndpoint extends ApiEndpoint
{
  protected $_path = 'presetChat/{sessionId}';
  protected $_replacements = [];

  public function __construct($sessionId)
  {
    $this->_replacements['{sessionId}'] = $sessionId;
  }

  /**
   * @summary Get a Preset Chat by ID
   *
   * @return PresetChatSessionRequest
   */
  public function retrieve()
  {
    $request = new PresetChatSessionRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'presetChat/{sessionId}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
