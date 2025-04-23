<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class NotificationsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "notifications" => $this->getNotifications(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return NotificationRequest[]
   */
  public function getNotifications($default = [])
  {
    return Objects::property($this->_getResultJson(), 'notifications', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->notifications))
    {
      foreach($return->notifications as $itmKey => $itm)
      {
        $return->notifications[$itmKey] = (new NotificationRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
