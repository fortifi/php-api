<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AttachmentsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "attachments" => $this->getAttachments(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return AttachmentRequest[]
   */
  public function getAttachments($default = [])
  {
    return Objects::property($this->_getResultJson(), 'attachments', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->attachments))
    {
      foreach($return->attachments as $itmKey => $itm)
      {
        $return->attachments[$itmKey] = (new AttachmentRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
