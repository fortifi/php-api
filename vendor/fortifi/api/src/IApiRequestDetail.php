<?php
namespace Fortifi\Api\Core;

interface IApiRequestDetail
{
  /**
   * URL
   *
   * @return string
   */
  public function getUrl();

  /**
   * Headers
   *
   * @return array
   */
  public function getHeaders();

  /**
   * Options
   *
   * @return array
   */
  public function getOptions();

  /**
   * Form Data
   *
   * @return array
   */
  public function getPostFields();

  /**
   * Querystring Fields
   *
   * @return array
   */
  public function getQueryFields();

  /**
   * Raw Body (Payload)
   *
   * @return string
   */
  public function getRequestBody();

  /**
   * HTTP Verb
   *
   * @return string
   */
  public function getMethod();

  /**
   * Should the request be made async
   *
   * @return bool
   */
  public function isAync();

  /**
   * @return bool
   */
  public function requiresAuth();
}
