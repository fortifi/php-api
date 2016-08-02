<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class SubscriptionsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "subscriptions" => $this->getSubscriptions(),
    ];
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
      $tmp = [];
      foreach($return->subscriptions as $itm)
      {
        $tmp[] = (new SubscriptionRequest())
          ->hydrate($itm);
      }
      $return->subscriptions = $tmp;
    }

    return $return;
  }
}
