<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ContactPeopleRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "contacts" => $this->getContacts(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return ContactPersonRequest[]
   */
  public function getContacts($default = [])
  {
    return Objects::property($this->_getResultJson(), 'contacts', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->contacts))
    {
      foreach($return->contacts as $itmKey => $itm)
      {
        $return->contacts[$itmKey] = (new ContactPersonRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
