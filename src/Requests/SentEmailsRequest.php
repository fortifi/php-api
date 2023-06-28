<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class SentEmailsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "emails" => $this->getEmails(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return SentEmailRequest[]
   */
  public function getEmails($default = [])
  {
    return Objects::property($this->_getResultJson(), 'emails', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->emails))
    {
      foreach($return->emails as $itmKey => $itm)
      {
        $return->emails[$itmKey] = (new SentEmailRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
