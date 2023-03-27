<?php
namespace Fortifi\Api\V1\Payloads;

class AddTicketNotePayload
  implements \JsonSerializable
{
  protected $_notes;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["notes"]))
    {
      $this->_notes = [];
      foreach($data["notes"] as $dItem)
      {
        $dObj = new KeyValuePayload();
        $dObj->hydrate($dItem);
        $this->_notes[] = $dObj;
      }
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "notes" => $this->_notes,
    ];
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setNotes(?array $value)
  {
    $this->_notes = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addNote(KeyValuePayload $item)
  {
    $this->_notes[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getNotes($default = [])
  {
    return $this->_notes ?: $default;
  }
}
