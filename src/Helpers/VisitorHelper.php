<?php
namespace Fortifi\Api\V1\Helpers;

use Packaged\Helpers\Arrays;

class VisitorHelper
{
  public static function getCookieVisitorId()
  {
    return Arrays::value($_COOKIE, 'FRT:VIS');
  }

  public function getClientIp()
  {
    static $ip;
    if($ip === null)
    {
      $ipKeys = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_X_CLUSTER_CLIENT_IP',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR',
      ];
      foreach($ipKeys as $ipKey)
      {
        $ipString = Arrays::value($_SERVER, $ipKey);
        if($ipString !== null)
        {
          foreach(explode(",", $ipString) as $ip)
          {
            if(filter_var($ip, FILTER_VALIDATE_IP) !== false)
            {
              return $ip;
            }
          }
        }
      }
      $ip = "";
    }
    return $ip;
  }
}
