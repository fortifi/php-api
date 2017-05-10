<?php
namespace Fortifi\Api\Core;

class ApiResult implements IApiResult
{
  protected $_statusCode = 200;
  protected $_statusMessage = 'OK';
  protected $_content = '';
  protected $_callId = '';
  protected $_headers = [];
  protected $_cookies = [];
  protected $_timeTaken = 0;

  /**
   * @inheritDoc
   */
  public function getStatusCode()
  {
    return $this->_statusCode;
  }

  /**
   * @inheritDoc
   */
  public function getStatusMessage()
  {
    return $this->_statusMessage;
  }

  /**
   * @inheritDoc
   */
  public function getContent()
  {
    return $this->_content;
  }

  /**
   * @inheritDoc
   */
  public function getCallId()
  {
    return $this->_callId;
  }

  /**
   * @inheritDoc
   */
  public function getTotalTime()
  {
    return $this->_timeTaken;
  }

  /**
   * @inheritDoc
   */
  public function getCookies()
  {
    return $this->_cookies;
  }

  /**
   * @inheritDoc
   */
  public function getHeaders()
  {
    return $this->_headers;
  }

  /**
   * @param mixed $statusCode
   */
  public function setStatusCode($statusCode)
  {
    $this->_statusCode = $statusCode;
  }

  /**
   * @param mixed $statusMessage
   */
  public function setStatusMessage($statusMessage)
  {
    $this->_statusMessage = $statusMessage;
  }

  /**
   * @param mixed $content
   */
  public function setContent($content)
  {
    $this->_content = $content;
  }

  /**
   * @param mixed $callId
   */
  public function setCallId($callId)
  {
    $this->_callId = $callId;
  }

  /**
   * @param mixed $timeTaken
   */
  public function setTotalTime($timeTaken)
  {
    $this->_timeTaken = $timeTaken;
  }

  /**
   * @param array $headers
   *
   * @return $this
   */
  public function setHeaders(array $headers)
  {
    $this->_headers = $headers;
    return $this;
  }

  /**
   * @param array $cookies
   *
   * @return $this
   */
  public function setCookies(array $cookies)
  {
    $this->_cookies = $cookies;
    return $this;
  }
}
