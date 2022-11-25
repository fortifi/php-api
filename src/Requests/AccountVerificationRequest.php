<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AccountVerificationRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "datanodeFid" => $this->getDatanodeFid(),
      "verified" => $this->getVerified(),
      "successfulVerifications" => $this->getSuccessfulVerifications(),
      "failedVerifications" => $this->getFailedVerifications(),
      "skippedVerifications" => $this->getSkippedVerifications(),
      "requiredVerifications" => $this->getRequiredVerifications(),
      "verificationFid" => $this->getVerificationFid(),
      "questionKey" => $this->getQuestionKey(),
      "verification" => $this->getVerification(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDatanodeFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'datanodeFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getVerified($default = null)
  {
    return Objects::property($this->_getResultJson(), 'verified', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSuccessfulVerifications($default = null)
  {
    return Objects::property($this->_getResultJson(), 'successfulVerifications', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getFailedVerifications($default = null)
  {
    return Objects::property($this->_getResultJson(), 'failedVerifications', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSkippedVerifications($default = null)
  {
    return Objects::property($this->_getResultJson(), 'skippedVerifications', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getRequiredVerifications($default = null)
  {
    return Objects::property($this->_getResultJson(), 'requiredVerifications', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getVerificationFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'verificationFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getQuestionKey($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'questionKey', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return InteractionVerificationRequest
   */
  public function getVerification($default = null)
  {
    return Objects::property($this->_getResultJson(), 'verification', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->verification))
    {
      $return->verification = (new InteractionVerificationRequest())
        ->hydrate($return->verification);
    }

    return $return;
  }
}
