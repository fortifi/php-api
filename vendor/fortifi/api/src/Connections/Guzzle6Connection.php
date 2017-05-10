<?php
namespace Fortifi\Api\Core\Connections;

use Fortifi\Api\Core\ApiResult;
use Fortifi\Api\Core\IApiRequest;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

class Guzzle6Connection extends AbstractGuzzleConnection
{
  protected function _makeRequest(IApiRequest $request)
  {
    $req = $request->getRequestDetail();
    $gRequest = new Request(
      $req->getMethod(),
      $req->getUrl(),
      $this->_buildHeaders($req),
      $this->_buildData($request->getRequestDetail())
    );
    return $gRequest;
  }

  /**
   * @inheritDoc
   */
  public function load(IApiRequest $request)
  {
    $response = $this->_client->send(
      $this->_makeRequest($request),
      $request->getRequestDetail()->getOptions()
    );
    $result = $this->_getResult($response);
    $request->setRawResult($result);
    return $request;
  }

  /**
   * @param ResponseInterface $response
   *
   * @return ApiResult
   */
  protected function _getResult($response)
  {
    if(!($response instanceof ResponseInterface))
    {
      throw new \InvalidArgumentException(
        "$response should be an instance of ResponseInterface"
      );
    }

    $result = new ApiResult();
    $result->setStatusCode($response->getStatusCode());
    $callId = $response->getHeader('X-Call-Id');
    if(!empty($callId))
    {
      $result->setCallId($callId);
    }

    $decoded = json_decode((string)$response->getBody());
    if(isset($decoded->meta) && isset($decoded->data)
      && isset($decoded->meta->code)
      && $decoded->meta->code == $response->getStatusCode()
    )
    {
      $meta = $decoded->meta;
      $data = $decoded->data;
      if(isset($meta->message))
      {
        $result->setStatusMessage($meta->message);
      }
      $result->setContent(json_encode($data));
    }
    else
    {
      $result->setContent((string)$response->getBody());
    }

    $result->setHeaders($response->getHeaders());
    return $result;
  }
}
