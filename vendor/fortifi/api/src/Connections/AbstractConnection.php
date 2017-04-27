<?php
namespace Fortifi\Api\Core\Connections;

use Fortifi\Api\Core\IApiConnection;
use Fortifi\Api\Core\IApiRequestDetail;
use Fortifi\Api\Core\OAuth\Tokens\IToken;

abstract class AbstractConnection implements IApiConnection
{
  protected $_orgFid;

  /**
   * @var IToken
   */
  protected $_token;

  /**
   * @param string $fid Organisation FID
   *
   * @return $this
   */
  public function setOrganisationFid($fid)
  {
    $this->_orgFid = $fid;
    return $this;
  }

  /**
   * @param IToken $token Access Token
   *
   * @return $this
   */
  public function setToken(IToken $token)
  {
    $this->_token = $token;
    return $this;
  }

  protected function _buildHeaders(IApiRequestDetail $request)
  {
    $headers = $request->getHeaders();
    $headers['Expect'] = '';

    if(!empty($this->_orgFid))
    {
      $headers['X-Fortifi-Org'] = $this->_orgFid;
    }

    if($this->_token)
    {
      $headers['Authorization'] = $this->_token->getType()
        . ' ' . $this->_token->getToken();
    }

    if($request->getRequestBody())
    {
      $headers['Content-Type'] = 'application/json';
    }

    return $headers;
  }

  protected function _buildData(IApiRequestDetail $request)
  {
    if($request->getRequestBody())
    {
      return $request->getRequestBody();
    }
    else
    {
      return $request->getPostFields();
    }
  }
}
