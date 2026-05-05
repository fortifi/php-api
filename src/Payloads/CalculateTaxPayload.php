<?php
namespace Fortifi\Api\V1\Payloads;

class CalculateTaxPayload
  implements \JsonSerializable
{
  protected $_items;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["items"]))
    {
      $this->_items = [];
      foreach($data["items"] as $dItem)
      {
        $dObj = new TaxItemPayload();
        $dObj->hydrate($dItem);
        $this->_items[] = $dObj;
      }
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "items" => $this->_items,
    ];
  }

  /**
   * @param TaxItemPayload[] $value
   *
   * @return $this
   */
  public function setItems(?array $value)
  {
    $this->_items = $value;
    return $this;
  }

  /**
   * @param TaxItemPayload $item
   *
   * @return $this
   */
  public function addItem(TaxItemPayload $item)
  {
    $this->_items[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return TaxItemPayload[]
   */
  public function getItems($default = [])
  {
    return $this->_items ?? $default;
  }
}
