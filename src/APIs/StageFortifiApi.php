<?php
namespace Fortifi\Api\V1\APIs;

use Fortifi\Api\Core\ApiDefinition\ApiDefinition;
use Fortifi\Api\V1\Endpoints\FortifiApi;

class StageFortifiApi extends FortifiApi
{
  public function __construct()
  {
    parent::__construct();
    $def = $this->getApiDefinition();
    if($def instanceof ApiDefinition)
    {
      $def->setHost('api.fortifiio.xyz');
    }
  }

}
