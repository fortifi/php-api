<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ReviewsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "reviews" => $this->getReviews(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ReviewRequest[]
   */
  public function getReviews($default = [])
  {
    return Objects::property($this->_getResultJson(), 'reviews', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->reviews))
    {
      foreach($return->reviews as $itmKey => $itm)
      {
        $return->reviews[$itmKey] = (new ReviewRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
