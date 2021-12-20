<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class RetentionFlowStateRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "customerFid" => $this->getCustomerFid(),
        "subscriptionFid" => $this->getSubscriptionFid(),
        "initiatedByFid" => $this->getInitiatedByFid(),
        "uniqueCode" => $this->getUniqueCode(),
        "isComplete" => $this->isComplete(),
        "currentStep" => $this->getCurrentStep(),
        "stepData" => $this->getStepData(),
        "choices" => $this->getChoices(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCustomerFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'customerFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubscriptionFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'subscriptionFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInitiatedByFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'initiatedByFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUniqueCode($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'uniqueCode', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isComplete($default = false)
  {
    return Objects::property($this->_getResultJson(), 'isComplete', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCurrentStep($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'currentStep', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return RetentionFunnelStepRequest
   */
  public function getStepData($default = null)
  {
    return Objects::property($this->_getResultJson(), 'stepData', $default);
  }

  /**
   * @param mixed $default
   *
   * @return RetentionFunnelDecisionRequest[]
   */
  public function getChoices($default = [])
  {
    return Objects::property($this->_getResultJson(), 'choices', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->stepData))
    {
      $return->stepData = (new RetentionFunnelStepRequest())
        ->hydrate($return->stepData);
    }

    if(!empty($return->choices))
    {
      foreach($return->choices as $itmKey => $itm)
      {
        $return->choices[$itmKey] = (new RetentionFunnelDecisionRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
