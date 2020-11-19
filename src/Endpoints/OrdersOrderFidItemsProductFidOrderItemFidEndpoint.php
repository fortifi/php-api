<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\UpdateOrderItemPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidItemsProductFidOrderItemFidEndpoint extends ApiEndpoint
{
  protected $_path = 'orders/{orderFid}/items/{productFid}/{orderItemFid}';
  protected $_replacements = [];

  public function __construct($orderFid, $productFid, $orderItemFid)
  {
    $this->_replacements['{orderFid}'] = $orderFid;
    $this->_replacements['{productFid}'] = $productFid;
    $this->_replacements['{orderItemFid}'] = $orderItemFid;
  }

  /**
   * @summary Update an order item
   *
   * @param UpdateOrderItemPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function update(UpdateOrderItemPayload $payload)
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/items/{productFid}/{orderItemFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
