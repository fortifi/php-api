<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\InteractionRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsInteractionFidEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/{interactionFid}';
  protected $_replacements = [];

  public function __construct($interactionFid)
  {
    $this->_replacements['{interactionFid}'] = $interactionFid;
  }

  /**
   * @return InteractionsInteractionFidClientEndpoint
   */
  public function client()
  {
    $endpoint = new InteractionsInteractionFidClientEndpoint(
      $this->_replacements['{interactionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return InteractionsInteractionFidMessageEndpoint
   */
  public function message()
  {
    $endpoint = new InteractionsInteractionFidMessageEndpoint(
      $this->_replacements['{interactionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return InteractionsInteractionFidMessagesEndpoint
   */
  public function messages()
  {
    $endpoint = new InteractionsInteractionFidMessagesEndpoint(
      $this->_replacements['{interactionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return InteractionsInteractionFidFeedbackEndpoint
   */
  public function feedback()
  {
    $endpoint = new InteractionsInteractionFidFeedbackEndpoint(
      $this->_replacements['{interactionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return InteractionsInteractionFidAttachmentEndpoint
   */
  public function attachment()
  {
    $endpoint = new InteractionsInteractionFidAttachmentEndpoint(
      $this->_replacements['{interactionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return InteractionsInteractionFidCustomerClosedEndpoint
   */
  public function customerClosed()
  {
    $endpoint = new InteractionsInteractionFidCustomerClosedEndpoint(
      $this->_replacements['{interactionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return InteractionsInteractionFidSendChatTranscriptEndpoint
   */
  public function send-chat-transcript()
  {
    $endpoint = new InteractionsInteractionFidSendChatTranscriptEndpoint(
      $this->_replacements['{interactionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Get an interaction
   *
   * @return InteractionRequest
   */
  public function retrieve()
  {
    $request = new InteractionRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'interactions/{interactionFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
