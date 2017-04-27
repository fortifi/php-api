<?php
namespace Fortifi\Api\Core\ApiDefinition;

class SecurityDefinition
{
  const TYPE_BASIC = 'basic';
  const TYPE_API_KEY = 'apiKey';
  const TYPE_OAUTH2 = 'oauth2';

  const IN_QUERY = 'query';
  const IN_HEADER = 'header';

  const FLOW_IMPLICIT = 'implicit';
  const FLOW_PASSWORD = 'password';
  const FLOW_APPLICATION = 'application';
  const FLOW_ACCESS_CODE = 'accessCode';

  protected $_type;
  protected $_description;
  protected $_name;
  protected $_in;
  protected $_flow;
  protected $_authorizationUrl;
  protected $_tokenUrl;
  protected $_scopes = [];

  /**
   * @return mixed
   */
  public function getType()
  {
    return $this->_type;
  }

  /**
   * @param mixed $type
   *
   * @return SecurityDefinition
   */
  public function setType($type)
  {
    $this->_type = $type;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getDescription()
  {
    return $this->_description;
  }

  /**
   * @param mixed $description
   *
   * @return SecurityDefinition
   */
  public function setDescription($description)
  {
    $this->_description = $description;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->_name;
  }

  /**
   * @param mixed $name
   *
   * @return SecurityDefinition
   */
  public function setName($name)
  {
    $this->_name = $name;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getIn()
  {
    return $this->_in;
  }

  /**
   * @param mixed $in
   *
   * @return SecurityDefinition
   */
  public function setIn($in)
  {
    $this->_in = $in;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getFlow()
  {
    return $this->_flow;
  }

  /**
   * @param mixed $flow
   *
   * @return SecurityDefinition
   */
  public function setFlow($flow)
  {
    $this->_flow = $flow;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getAuthorizationUrl()
  {
    return $this->_authorizationUrl;
  }

  /**
   * @param mixed $authorizationUrl
   *
   * @return SecurityDefinition
   */
  public function setAuthorizationUrl($authorizationUrl)
  {
    $this->_authorizationUrl = $authorizationUrl;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getTokenUrl()
  {
    return $this->_tokenUrl;
  }

  /**
   * @param mixed $tokenUrl
   *
   * @return SecurityDefinition
   */
  public function setTokenUrl($tokenUrl)
  {
    $this->_tokenUrl = $tokenUrl;
    return $this;
  }

  /**
   * @return array
   */
  public function getScopes()
  {
    return $this->_scopes;
  }

  /**
   * @param array $scopes
   *
   * @return SecurityDefinition
   */
  public function setScopes($scopes)
  {
    $this->_scopes = $scopes;
    return $this;
  }

  /**
   * @param $name
   * @param $description
   *
   * @return $this
   */
  public function addScope($name, $description)
  {
    $this->_scopes[$name] = $description;
    return $this;
  }
}
