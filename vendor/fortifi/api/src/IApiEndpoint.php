<?php
namespace Fortifi\Api\Core;

use Fortifi\Api\Core\ApiDefinition\IApiDefinition;

interface IApiEndpoint extends IApiConnectionAware
{
  /**
   * @param IApiDefinition $definition
   *
   * @return IApiEndpoint|static
   */
  public function setApiDefinition(IApiDefinition $definition);

  /**
   * @return OAuth\Tokens\IToken|null
   */
  public function getToken();
}
