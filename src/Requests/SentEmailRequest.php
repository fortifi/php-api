<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class SentEmailRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "campaignFid" => $this->getCampaignFid(),
      "companyFid" => $this->getCompanyFid(),
      "messageFid" => $this->getMessageFid(),
      "bounced" => $this->isBounced(),
      "opened" => $this->isOpened(),
      "clicked" => $this->isClicked(),
      "complained" => $this->isComplained(),
      "subject" => $this->getSubject(),
      "sentTimestamp" => $this->getSentTimestamp(),
      "recipientEmails" => $this->getRecipientEmails(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCampaignFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'campaignFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'companyFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMessageFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'messageFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isBounced($default = false)
  {
    return Objects::property($this->_getResultJson(), 'bounced', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isOpened($default = false)
  {
    return Objects::property($this->_getResultJson(), 'opened', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isClicked($default = false)
  {
    return Objects::property($this->_getResultJson(), 'clicked', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isComplained($default = false)
  {
    return Objects::property($this->_getResultJson(), 'complained', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubject($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'subject', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSentTimestamp($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sentTimestamp', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getRecipientEmails($default = [])
  {
    return Objects::property($this->_getResultJson(), 'recipientEmails', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);


    return $return;
  }
}
