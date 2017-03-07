<?php
namespace Fortifi\Api\V1\Payloads;

class PropertyBulkSetPayload
  implements \JsonSerializable
{
  /**
   * Additional information to store
   */
  protected $_values;
  /**
   * Additional information to store
   */
  protected $_flags;
  /**
   * Additional information to store
   */
  protected $_incrementCounters;
  /**
   * Additional information to store
   */
  protected $_decrementCounters;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["values"]))
    {
      $this->_values = new KeyValuePayload();
      $this->_values->hydrate($data["values"]);
    }
    if(isset($data["flags"]))
    {
      $this->_flags = new KeyValuePayload();
      $this->_flags->hydrate($data["flags"]);
    }
    if(isset($data["incrementCounters"]))
    {
      $this->_incrementCounters = new KeyValuePayload();
      $this->_incrementCounters->hydrate($data["incrementCounters"]);
    }
    if(isset($data["decrementCounters"]))
    {
      $this->_decrementCounters = new KeyValuePayload();
      $this->_decrementCounters->hydrate($data["decrementCounters"]);
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "values"            => $this->_values,
      "flags"             => $this->_flags,
      "incrementCounters" => $this->_incrementCounters,
      "decrementCounters" => $this->_decrementCounters,
    ];
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setValues(array $value)
  {
    $this->_values = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addValue(KeyValuePayload $item)
  {
    $this->_values[] = $item;
    return $this;
  }

  /**
   * Additional information to store
   *
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getValues($default = [])
  {
    return $this->_values ?: $default;
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setFlags(array $value)
  {
    $this->_flags = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addFlag(KeyValuePayload $item)
  {
    $this->_flags[] = $item;
    return $this;
  }

  /**
   * Additional information to store
   *
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getFlags($default = [])
  {
    return $this->_flags ?: $default;
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setIncrementCounters(array $value)
  {
    $this->_incrementCounters = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addIncrementCounter(KeyValuePayload $item)
  {
    $this->_incrementCounters[] = $item;
    return $this;
  }

  /**
   * Additional information to store
   *
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getIncrementCounters($default = [])
  {
    return $this->_incrementCounters ?: $default;
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setDecrementCounters(array $value)
  {
    $this->_decrementCounters = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addDecrementCounter(KeyValuePayload $item)
  {
    $this->_decrementCounters[] = $item;
    return $this;
  }

  /**
   * Additional information to store
   *
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getDecrementCounters($default = [])
  {
    return $this->_decrementCounters ?: $default;
  }
}
