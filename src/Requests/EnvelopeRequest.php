<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class EnvelopeRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "meta" => $this->getMeta(),
      "data" => $this->getData(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return EnvelopeMetaRequest
   */
  public function getMeta($default = null)
  {
    return Objects::property($this->_getResultJson(), 'meta', $default);
  }

  /**
   * @param mixed $default
   *
   * @return object
   */
  public function getData($default = null)
  {
    return Objects::property($this->_getResultJson(), 'data', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->meta))
    {
      $return->meta = (new EnvelopeMetaRequest())
        ->hydrate($return->meta);
    }

    return $return;
  }
}
