<?php
namespace Fortifi\Api\Core\Connections;

use Fortifi\Api\Core\IApiRequest;
use Fortifi\Api\Core\IApiResult;
use GuzzleHttp\Client;
use GuzzleHttp\Pool;

abstract class AbstractGuzzleConnection extends AbstractConnection
{
  abstract protected function _makeRequest(IApiRequest $request);

  /**
   * @param $response
   *
   * @return IApiResult
   */
  abstract protected function _getResult($response);

  protected $_client;

  /**
   * @inheritDoc
   */
  public function __construct()
  {
    $this->_client = new Client();
  }

  /**
   * @inheritDoc
   */
  public function batchLoad($requests)
  {
    /** @var IApiRequest[] $originals */
    $originals = [];
    $batchRequests = [];
    foreach($requests as $i => $request)
    {
      if($request instanceof IApiRequest)
      {
        $originals[$i] = $request;
        $batchRequests[$i] = $this->_makeRequest($request);
      }
    }
    $options = [];
    $responses = Pool::batch($this->_client, $batchRequests, $options);

    foreach($responses as $id => $response)
    {
      $originals[$id]->setRawResult($this->_getResult($response));
    }

    return $this;
  }
}
