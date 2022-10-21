<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PresetChatSessionLinkRequest;
use Fortifi\Api\V1\Payloads\CreatePresetChatSessionPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PresetChatEndpoint extends ApiEndpoint
{
  protected $_path = 'presetChat';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $sessionId
   *
   * @return PresetChatSessionIdEndpoint
   */
  public function with($sessionId)
  {
    $endpoint = new PresetChatSessionIdEndpoint(
      $sessionId
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Create a Preset Chat Instance
   *
   * @param CreatePresetChatSessionPayload $payload
   *
   * @return PresetChatSessionLinkRequest
   */
  public function create(CreatePresetChatSessionPayload $payload)
  {
    $request = new PresetChatSessionLinkRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('presetChat'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
