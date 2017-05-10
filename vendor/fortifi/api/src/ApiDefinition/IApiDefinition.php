<?php
namespace Fortifi\Api\Core\ApiDefinition;

interface IApiDefinition
{
  const SCHEME_JSON = 'application/json';

  /**
   * @return string
   */
  public function getTitle();

  /**
   * @return string
   */
  public function getVersion();

  /**
   * @return string
   */
  public function getTermsOfService();

  /**
   * @return string
   */
  public function getDescription();

  /**
   * @return string
   */
  public function getHost();

  /**
   * @return array
   */
  public function getSchemas();

  /**
   * @return string
   */
  public function getBasePath();

  /**
   * @return array
   */
  public function getProduces();

  /**
   * @return array
   */
  public function getConsumes();

  /**
   * @return DocumentationDefinition
   */
  public function getDocumentation();

  /**
   * @return SecurityDefinition[]
   */
  public function getSecurityDefinitions();

  /**
   * @param string $type Security type e.g. oauth2
   *
   * @return SecurityDefinition
   */
  public function getSecurityDefinition($type);

  /**
   * @return TagDefinition[]
   */
  public function getTags();
}
