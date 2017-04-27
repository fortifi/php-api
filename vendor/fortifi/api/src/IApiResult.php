<?php
namespace Fortifi\Api\Core;

interface IApiResult
{
  /**
   * Stauts Code
   *
   * @return int
   */
  public function getStatusCode();

  /**
   * Status Message
   *
   * @return string
   */
  public function getStatusMessage();

  /**
   * Raw Content
   *
   * @return string
   */
  public function getContent();

  /**
   * API Call ID returned
   *
   * @return string
   */
  public function getCallId();

  /**
   * Number of milliseconds taken to retrieve the result
   *
   * @return int
   */
  public function getTotalTime();

  /**
   * Cookies from the result
   *
   * @return array
   */
  public function getCookies();

  /**
   * Headers from the result
   *
   * @return array
   */
  public function getHeaders();
}
