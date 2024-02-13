<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class UpdateReviewPayload
  implements \JsonSerializable
{
  /**
   * Subject of the Review
   */
  protected $_subject;
  /**
   * The Content of the Review
   */
  protected $_content;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["subject"]))
    {
      $this->_subject = (string)$data["subject"];
    }
    if(isset($data["content"]))
    {
      $this->_content = (string)$data["content"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "subject" => $this->_subject,
      "content" => $this->_content,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSubject(?string $value)
  {
    $this->_subject = $value;
    return $this;
  }

  /**
   * Subject of the Review
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubject($default = null, $trim = true)
  {
    $value = $this->_subject ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setContent(?string $value)
  {
    $this->_content = $value;
    return $this;
  }

  /**
   * The Content of the Review
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContent($default = null, $trim = true)
  {
    $value = $this->_content ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
