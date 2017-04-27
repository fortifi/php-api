<?php
namespace Fortifi\Api\Core;

use Packaged\Helpers\Objects;

class ApiRequestDetail implements IApiRequestDetail, \JsonSerializable
{
  protected $_url = '';
  protected $_headers = [];
  protected $_options = [];
  protected $_post = [];
  protected $_query = [];
  protected $_body = '';
  protected $_method = 'GET';
  protected $_isAsync = false;
  protected $_requireAuth = true;

  /**
   * @inheritDoc
   */
  public function getUrl()
  {
    if(empty($this->_query))
    {
      return $this->_url;
    }

    if(substr($this->_url, -1, 1) == '?')
    {
      $glue = '';
    }
    else if(stristr($this->_url, '?'))
    {
      $glue = '&';
    }
    else
    {
      $glue = '?';
    }

    return $this->_url . $glue . http_build_query($this->_query);
  }

  /**
   * @inheritDoc
   */
  public function getHeaders()
  {
    return $this->_headers;
  }

  /**
   * @inheritDoc
   */
  public function getOptions()
  {
    return $this->_options;
  }

  /**
   * @inheritDoc
   */
  public function getPostFields()
  {
    return $this->_post;
  }

  /**
   * @inheritDoc
   */
  public function getQueryFields()
  {
    return $this->_query;
  }

  /**
   * @inheritDoc
   */
  public function getRequestBody()
  {
    return $this->_body;
  }

  /**
   * @inheritDoc
   */
  public function getMethod()
  {
    return $this->_method;
  }

  /**
   * @inheritDoc
   */
  public function isAync()
  {
    return $this->_isAsync;
  }

  /**
   * @param string $url
   *
   * @return ApiRequestDetail
   */
  public function setUrl($url)
  {
    $this->_url = $url;
    return $this;
  }

  /**
   * @param array $headers
   *
   * @return ApiRequestDetail
   */
  public function setHeaders(array $headers)
  {
    $this->_headers = $headers;
    return $this;
  }

  /**
   * @param $key
   * @param $value
   *
   * @return $this
   */
  public function addHeader($key, $value)
  {
    $this->_headers[$key] = $value;
    return $this;
  }

  /**
   * @param array $options
   *
   * @return ApiRequestDetail
   */
  public function setOptions(array $options)
  {
    $this->_options = $options;
    return $this;
  }

  /**
   * @param $key
   * @param $value
   *
   * @return $this
   */
  public function addOption($key, $value)
  {
    $this->_options[$key] = $value;
    return $this;
  }

  /**
   * @param array $post
   *
   * @return ApiRequestDetail
   */
  public function setPostFields(array $post)
  {
    $this->_post = $post;
    return $this;
  }

  /**
   * @param $key
   * @param $value
   *
   * @return $this
   */
  public function addPostField($key, $value)
  {
    $this->_post[$key] = $value;
    return $this;
  }

  /**
   * @param array $query
   *
   * @return ApiRequestDetail
   */
  public function setQueryFields(array $query)
  {
    $this->_query = $query;
    return $this;
  }

  /**
   * @param $key
   * @param $value
   *
   * @return $this
   */
  public function addQueryField($key, $value)
  {
    $this->_query[$key] = $value;
    return $this;
  }

  /**
   * @param string $body
   *
   * @return ApiRequestDetail
   */
  public function setBody($body)
  {
    $this->_body = $body;
    return $this;
  }

  /**
   * @param string $method
   *
   * @return ApiRequestDetail
   */
  public function setMethod($method)
  {
    $this->_method = $method;
    return $this;
  }

  /**
   * @param boolean $isAsync
   *
   * @return ApiRequestDetail
   */
  public function setAsync($isAsync)
  {
    $this->_isAsync = $isAsync;
    return $this;
  }

  /**
   * @param boolean $requireAuth
   *
   * @return ApiRequestDetail
   */
  public function setRequireAuth($requireAuth)
  {
    $this->_requireAuth = $requireAuth;
    return $this;
  }

  /**
   * @inheritDoc
   */
  public function requiresAuth()
  {
    return (bool)$this->_requireAuth;
  }

  /**
   * @inheritDoc
   */
  public function jsonSerialize()
  {
    return [
      'url'         => $this->_url,
      'headers'     => $this->_headers,
      'options'     => $this->_options,
      'post'        => $this->_post,
      'query'       => $this->_query,
      'body'        => $this->_body,
      'method'      => $this->_method,
      'isAsync'     => $this->_isAsync,
      'requireAuth' => $this->_requireAuth,
    ];
  }

  public static function fromJson($json)
  {
    $obj = is_scalar($json) ? json_decode($json) : $json;
    $requestDetail = new static;
    $requestDetail->_url = Objects::property($obj, 'url');
    $requestDetail->_headers = Objects::property($obj, 'headers');
    $requestDetail->_options = Objects::property($obj, 'options');
    $requestDetail->_post = Objects::property($obj, 'post');
    $requestDetail->_query = Objects::property($obj, 'query');
    $requestDetail->_body = Objects::property($obj, 'body');
    $requestDetail->_method = Objects::property($obj, 'method');
    $requestDetail->_isAsync = Objects::property($obj, 'isAsync');
    $requestDetail->_requireAuth = Objects::property($obj, 'requireAuth');
    return $requestDetail;
  }

}
