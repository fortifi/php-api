<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class FraudScanRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "service" => $this->getService(),
      "score" => $this->getScore(),
      "message" => $this->getMessage(),
      "requestId" => $this->getRequestId(),
      "recommendation" => $this->getRecommendation(),
      "metaDataItems" => $this->getMetaDataItems(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getService($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'service', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getScore($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'score', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMessage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'message', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRequestId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'requestId', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRecommendation($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'recommendation', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return FraudScanMetaDataRequest[]
   */
  public function getMetaDataItems($default = [])
  {
    return Objects::property($this->_getResultJson(), 'metaDataItems', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->metaDataItems))
    {
      foreach($return->metaDataItems as $itmKey => $itm)
      {
        $return->metaDataItems[$itmKey] = (new FraudScanMetaDataRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
