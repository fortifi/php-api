<?php
namespace Fortifi\Api\Core\ApiDefinition;

class ApiDefinition implements IApiDefinition
{
  protected $_originalHost;
  protected $_title;
  protected $_version;
  protected $_termsOfService;
  protected $_description;
  protected $_host;
  protected $_schemas = [];
  protected $_basePath;
  protected $_produces = [];
  protected $_consumes = [];
  /**
   * @var DocumentationDefinition
   */
  protected $_documentation;
  /**
   * @var SecurityDefinition[]
   */
  protected $_securityDefinitions = [];
  /**
   * @var TagDefinition[]
   */
  protected $_tags = [];

  /**
   * @return mixed
   */
  public function getTitle()
  {
    return $this->_title;
  }

  /**
   * @param mixed $title
   *
   * @return ApiDefinition
   */
  public function setTitle($title)
  {
    $this->_title = $title;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getVersion()
  {
    return $this->_version;
  }

  /**
   * @param mixed $version
   *
   * @return ApiDefinition
   */
  public function setVersion($version)
  {
    $this->_version = $version;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getTermsOfService()
  {
    return $this->_termsOfService;
  }

  /**
   * @param mixed $termsOfService
   *
   * @return ApiDefinition
   */
  public function setTermsOfService($termsOfService)
  {
    $this->_termsOfService = $termsOfService;
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
   * @return ApiDefinition
   */
  public function setDescription($description)
  {
    $this->_description = $description;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getHost()
  {
    return $this->_host;
  }

  /**
   * @param mixed $host
   *
   * @return ApiDefinition
   */
  public function setHost($host)
  {
    if(empty($this->_originalHost))
    {
      $this->_originalHost = $host;
    }
    $this->_host = $host;
    return $this;
  }

  /**
   * @return array
   */
  public function getSchemas()
  {
    return $this->_schemas;
  }

  /**
   * @param array $schemas
   *
   * @return ApiDefinition
   */
  public function setSchemas($schemas)
  {
    $this->_schemas = $schemas;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getBasePath()
  {
    return $this->_basePath;
  }

  /**
   * @param mixed $basePath
   *
   * @return ApiDefinition
   */
  public function setBasePath($basePath)
  {
    $this->_basePath = $basePath;
    return $this;
  }

  /**
   * @return array
   */
  public function getProduces()
  {
    return $this->_produces;
  }

  /**
   * @param array $produces
   *
   * @return ApiDefinition
   */
  public function setProduces($produces)
  {
    $this->_produces = $produces;
    return $this;
  }

  /**
   * @return array
   */
  public function getConsumes()
  {
    return $this->_consumes;
  }

  /**
   * @param array $consumes
   *
   * @return ApiDefinition
   */
  public function setConsumes($consumes)
  {
    $this->_consumes = $consumes;
    return $this;
  }

  /**
   * @return DocumentationDefinition
   */
  public function getDocumentation()
  {
    return $this->_documentation;
  }

  /**
   * @param DocumentationDefinition $documentation
   *
   * @return ApiDefinition
   */
  public function setDocumentation(DocumentationDefinition $documentation)
  {
    $this->_documentation = $documentation;
    return $this;
  }

  /**
   * @return SecurityDefinition[]
   */
  public function getSecurityDefinitions()
  {
    return $this->_securityDefinitions;
  }

  /**
   * @param SecurityDefinition[] $securityDefinitions
   *
   * @return ApiDefinition
   */
  public function setSecurityDefinitions(array $securityDefinitions)
  {
    $this->_securityDefinitions = $securityDefinitions;
    return $this;
  }

  /**
   * @param SecurityDefinition $securityDefinition
   *
   * @return $this
   */
  public function addSecurityDefinition(SecurityDefinition $securityDefinition)
  {
    $this->_securityDefinitions[$securityDefinition->getType(
    )] = $securityDefinition;
    return $this;
  }

  /**
   * @param $type
   *
   * @return SecurityDefinition|null
   */
  public function getSecurityDefinition($type)
  {
    if(isset($this->_securityDefinitions[$type]))
    {
      $def = $this->_securityDefinitions[$type];
      $def->setTokenUrl($this->_replaceHost($def->getTokenUrl()));
      $def->setAuthorizationUrl(
        $this->_replaceHost($def->getAuthorizationUrl())
      );
      return $def;
    }
    return null;
  }

  protected function _replaceHost($url)
  {
    if($this->_originalHost == $this->_host)
    {
      return $url;
    }

    if(stristr($url, $this->_originalHost))
    {
      $url = str_replace($this->_originalHost, $this->_host, $url);
    }

    if(stristr($url, 'https'))
    {
      if(!in_array('https', $this->_schemas))
      {
        $url = str_replace('https', 'http', $url);
      }
    }
    else if(stristr($url, 'http') && !in_array('http', $this->_schemas))
    {
      $url = str_replace('http', 'https', $url);
    }

    return $url;
  }

  /**
   * @return TagDefinition[]
   */
  public function getTags()
  {
    return $this->_tags;
  }

  /**
   * @param TagDefinition[] $tags
   *
   * @return ApiDefinition
   */
  public function setTags(array $tags)
  {
    $this->_tags = $tags;
    return $this;
  }

  /**
   * @param TagDefinition $tag
   *
   * @return $this
   */
  public function addTag(TagDefinition $tag)
  {
    $this->_tags[] = $tag;
    return $this;
  }

}
