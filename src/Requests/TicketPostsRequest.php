<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class TicketPostsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "posts" => $this->getPosts(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return TicketPostRequest[]
   */
  public function getPosts($default = [])
  {
    return Objects::property($this->_getResultJson(), 'posts', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->posts))
    {
      foreach($return->posts as $itmKey => $itm)
      {
        $return->posts[$itmKey] = (new TicketPostRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
