<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;

class PaymentCardRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "nameOnCard" => $this->getNameOnCard(),
        "expiryMonth" => $this->getExpiryMonth(),
        "expiryYear" => $this->getExpiryYear(),
        "issue" => $this->getIssue(),
        "last4" => $this->getLast4(),
        "cardType" => $this->getCardType(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getNameOnCard($default = null)
  {
    return Objects::property($this->_getResultJson(), 'nameOnCard', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getExpiryMonth($default = null)
  {
    return Objects::property($this->_getResultJson(), 'expiryMonth', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getExpiryYear($default = null)
  {
    return Objects::property($this->_getResultJson(), 'expiryYear', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getIssue($default = null)
  {
    return Objects::property($this->_getResultJson(), 'issue', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getLast4($default = null)
  {
    return Objects::property($this->_getResultJson(), 'last4', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCardType($default = null)
  {
    return Objects::property($this->_getResultJson(), 'cardType', $default);
  }
}
