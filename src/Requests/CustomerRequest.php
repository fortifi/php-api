<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;

class CustomerRequest
  extends FidRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "name" => $this->getName(),
        "firstName" => $this->getFirstName(),
        "lastName" => $this->getLastName(),
        "email" => $this->getEmail(),
        "phone" => $this->getPhone(),
        "externalReference" => $this->getExternalReference(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getName($default = null)
  {
    return Objects::property($this->_getResultJson(), 'name', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getFirstName($default = null)
  {
    return Objects::property($this->_getResultJson(), 'firstName', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getLastName($default = null)
  {
    return Objects::property($this->_getResultJson(), 'lastName', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getEmail($default = null)
  {
    return Objects::property($this->_getResultJson(), 'email', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getPhone($default = null)
  {
    return Objects::property($this->_getResultJson(), 'phone', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getExternalReference($default = null)
  {
    return Objects::property($this->_getResultJson(), 'externalReference', $default);
  }
}
