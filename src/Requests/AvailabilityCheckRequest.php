<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AvailabilityCheckRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "isAvailable" => $this->isAvailable(),
      "availableSkus" => $this->getAvailableSkus(),
      "suggestions" => $this->getSuggestions(),
    ];
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isAvailable($default = false)
  {
    return Objects::property($this->_getResultJson(), 'isAvailable', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getAvailableSkus($default = [])
  {
    return Objects::property($this->_getResultJson(), 'availableSkus', $default);
  }

  /**
   * @param mixed $default
   *
   * @return AvailabilityCheckSuggestionRequest[]
   */
  public function getSuggestions($default = [])
  {
    return Objects::property($this->_getResultJson(), 'suggestions', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);


    if(!empty($return->suggestions))
    {
      foreach($return->suggestions as $itmKey => $itm)
      {
        $return->suggestions[$itmKey] = (new AvailabilityCheckSuggestionRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
