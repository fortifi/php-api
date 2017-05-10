<?php
namespace Fortifi\Api\Core;

interface IApiConnectionAware
{
  /**
   * @param IApiConnection $connection
   *
   * @return self
   */
  public function setConnection(IApiConnection $connection);

  /**
   * Check for existing binding of an IFortifiApi
   *
   * @return bool
   */
  public function hasConnection();
}
