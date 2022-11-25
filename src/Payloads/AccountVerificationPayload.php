<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class AccountVerificationPayload
  implements \JsonSerializable
{
  protected $_dataNodeFid;
  protected $_verificationFid;
  protected $_answer;
  protected $_questionKey;
  protected $_isLoggedIn;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["dataNodeFid"]))
    {
      $this->_dataNodeFid = (string)$data["dataNodeFid"];
    }
    if(isset($data["verificationFid"]))
    {
      $this->_verificationFid = (string)$data["verificationFid"];
    }
    if(isset($data["answer"]))
    {
      $this->_answer = (string)$data["answer"];
    }
    if(isset($data["questionKey"]))
    {
      $this->_questionKey = (string)$data["questionKey"];
    }
    if(isset($data["isLoggedIn"]))
    {
      $this->_isLoggedIn = $data["isLoggedIn"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "dataNodeFid"     => $this->_dataNodeFid,
      "verificationFid" => $this->_verificationFid,
      "answer"          => $this->_answer,
      "questionKey"     => $this->_questionKey,
      "isLoggedIn"      => $this->_isLoggedIn,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDataNodeFid(?string $value)
  {
    $this->_dataNodeFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDataNodeFid($default = null, $trim = true)
  {
    $value = $this->_dataNodeFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setVerificationFid(?string $value)
  {
    $this->_verificationFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getVerificationFid($default = null, $trim = true)
  {
    $value = $this->_verificationFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAnswer(?string $value)
  {
    $this->_answer = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAnswer($default = null, $trim = true)
  {
    $value = $this->_answer ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setQuestionKey(?string $value)
  {
    $this->_questionKey = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getQuestionKey($default = null, $trim = true)
  {
    $value = $this->_questionKey ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setIsLoggedIn(?bool $value)
  {
    $this->_isLoggedIn = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isLoggedIn($default = false)
  {
    return (bool)$this->_isLoggedIn ?: $default;
  }
}
