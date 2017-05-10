<?php
namespace Fortifi\Api\Core;

use Fortifi\Api\Core\OAuth\Tokens\IToken;

interface IApiConnection
{
  /**
   * @param IApiRequest $request to load
   *
   * @return IApiRequest Returns the loaded request
   */
  public function load(IApiRequest $request);

  /**
   * @param IApiRequest[] $requests Requests to load
   *
   * @return self
   */
  public function batchLoad($requests);

  /**
   * @param string $fid Organisation FID
   *
   * @return $this
   */
  public function setOrganisationFid($fid);

  /**
   * @param IToken $token Access Token
   *
   * @return $this
   */
  public function setToken(IToken $token);
}
