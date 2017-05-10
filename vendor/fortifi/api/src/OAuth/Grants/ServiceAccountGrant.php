<?php
namespace Fortifi\Api\Core\OAuth\Grants;

use Fortifi\Api\Core\ApiDefinition\SecurityDefinition;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\IApiConnection;
use Fortifi\Api\Core\OAuth\Tokens\AccessToken;
use Fortifi\Api\Core\OAuth\Tokens\IToken;
use Packaged\Helpers\Objects;

class ServiceAccountGrant implements IGrant
{
  protected $_apiSecret;
  protected $_apiUser;

  /**
   * @inheritDoc
   */
  public function __construct($user = null, $secret = null)
  {
    $this->_apiUser = $user;
    $this->_apiSecret = $secret;
  }

  /**
   * @inheritDoc
   */
  public function getKey()
  {
    return substr(md5($this->_apiUser), 6, 10);
  }

  /**
   * @param mixed $apiSecret
   *
   * @return ServiceAccountGrant
   */
  public function setApiSecret($apiSecret)
  {
    $this->_apiSecret = $apiSecret;
    return $this;
  }

  /**
   * @param mixed $apiUser
   *
   * @return ServiceAccountGrant
   */
  public function setApiUser($apiUser)
  {
    $this->_apiUser = $apiUser;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getApiSecret()
  {
    return $this->_apiSecret;
  }

  /**
   * @return mixed
   */
  public function getApiUser()
  {
    return $this->_apiUser;
  }

  /**
   * @param IApiConnection     $connection
   * @param SecurityDefinition $definition
   *
   * @return IToken
   */
  public function getToken(
    IApiConnection $connection, SecurityDefinition $definition
  )
  {
    if($definition->getType() !== 'oauth2')
    {
      throw new \InvalidArgumentException(
        'The security definition provided is not a valid oAuth2 definition'
      );
    }

    $params = [];
    $params['grant_type'] = $this->getGrantType();
    $params['api_user'] = $this->getApiUser();
    $params['api_key'] = $this->getApiSecret();

    $request = new ApiRequest();
    $request->setConnection($connection);
    $detail = new ApiRequestDetail();
    $detail->setMethod('POST');
    $detail->setUrl($definition->getTokenUrl());
    $detail->setPostFields($params);
    $request->setRequestDetail($detail);
    $connection->load($request);
    $tokenResponse = $request->getDecodedResponse();

    $token = new AccessToken();
    $token->setToken(Objects::property($tokenResponse, 'access_token'));
    $token->setType(Objects::property($tokenResponse, 'token_type', 'Bearer'));
    $token->setExpirySeconds(Objects::property($tokenResponse, 'expires_in'));
    $token->setExpiryTime(Objects::property($tokenResponse, 'expiry_time'));
    $token->setUserId(Objects::property($tokenResponse, 'uid'));
    $token->setSessionSecret(
      Objects::property($tokenResponse, 'session_secret')
    );

    return $token;
  }

  public function getGrantType()
  {
    return 'service_account';
  }
}
