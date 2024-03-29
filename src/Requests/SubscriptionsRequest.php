<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class SubscriptionsRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "subscriptions" => $this->getSubscriptions(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return SubscriptionRequest[]
   */
  public function getSubscriptions($default = [])
  {
    return Objects::property($this->_getResultJson(), 'subscriptions', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->subscriptions))
    {
      foreach($return->subscriptions as $itmKey => $itm)
      {
        $return->subscriptions[$itmKey] = (new SubscriptionRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
