<?php
namespace Fortifi\Api\V1\Payloads;

class UpdateCcBccPayload
  implements \JsonSerializable
{
  /**
   * key = Email | value = Display Name
   */
  protected $_addCc;
  protected $_removeCc;
  /**
   * key = Email | value = Display Name
   */
  protected $_addBcc;
  protected $_removeBcc;
  /**
   * Set to ```true``` to remove all existing CC/BCC. Can be used with addCc/addBcc fields
   */
  protected $_clearExistingCcBcc;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["addCc"]))
    {
      $this->_addCc = [];
      foreach($data["addCc"] as $dItem)
      {
        $dObj = new KeyValuePayload();
        $dObj->hydrate($dItem);
        $this->_addCc[] = $dObj;
      }
    }
    if(isset($data["removeCc"]))
    {
      $this->_removeCc = $data["removeCc"];
    }
    if(isset($data["addBcc"]))
    {
      $this->_addBcc = [];
      foreach($data["addBcc"] as $dItem)
      {
        $dObj = new KeyValuePayload();
        $dObj->hydrate($dItem);
        $this->_addBcc[] = $dObj;
      }
    }
    if(isset($data["removeBcc"]))
    {
      $this->_removeBcc = $data["removeBcc"];
    }
    if(isset($data["clearExistingCcBcc"]))
    {
      $this->_clearExistingCcBcc = $data["clearExistingCcBcc"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "addCc"              => $this->_addCc,
      "removeCc"           => $this->_removeCc,
      "addBcc"             => $this->_addBcc,
      "removeBcc"          => $this->_removeBcc,
      "clearExistingCcBcc" => $this->_clearExistingCcBcc,
    ];
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setAddCc(?array $value)
  {
    $this->_addCc = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addAddCc(KeyValuePayload $item)
  {
    $this->_addCc[] = $item;
    return $this;
  }

  /**
   * key = Email | value = Display Name
   *
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getAddCc($default = [])
  {
    return $this->_addCc ?: $default;
  }

  /**
   * @param string[] $value
   *
   * @return $this
   */
  public function setRemoveCc(?array $value)
  {
    $this->_removeCc = $value;
    return $this;
  }

  /**
   * @param string $item
   *
   * @return $this
   */
  public function addRemoveCc(string $item)
  {
    $this->_removeCc[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getRemoveCc($default = [])
  {
    return $this->_removeCc ?: $default;
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setAddBcc(?array $value)
  {
    $this->_addBcc = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addAddBcc(KeyValuePayload $item)
  {
    $this->_addBcc[] = $item;
    return $this;
  }

  /**
   * key = Email | value = Display Name
   *
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getAddBcc($default = [])
  {
    return $this->_addBcc ?: $default;
  }

  /**
   * @param string[] $value
   *
   * @return $this
   */
  public function setRemoveBcc(?array $value)
  {
    $this->_removeBcc = $value;
    return $this;
  }

  /**
   * @param string $item
   *
   * @return $this
   */
  public function addRemoveBcc(string $item)
  {
    $this->_removeBcc[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getRemoveBcc($default = [])
  {
    return $this->_removeBcc ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setClearExistingCcBcc(?bool $value)
  {
    $this->_clearExistingCcBcc = $value;
    return $this;
  }

  /**
   * Set to ```true``` to remove all existing CC/BCC. Can be used with addCc/addBcc fields
   *
   * @param bool $default
   *
   * @return boolean
   */
  public function isClearExistingCcBcc($default = false)
  {
    return (bool)$this->_clearExistingCcBcc ?: $default;
  }
}
