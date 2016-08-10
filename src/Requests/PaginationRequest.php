<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PaginationRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "limit" => $this->getLimit(),
      "page" => $this->getPage(),
      "totalItems" => $this->getTotalItems(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getLimit($default = null)
  {
    return Objects::property($this->_getResultJson(), 'limit', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getPage($default = null)
  {
    return Objects::property($this->_getResultJson(), 'page', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTotalItems($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalItems', $default);
  }
}
