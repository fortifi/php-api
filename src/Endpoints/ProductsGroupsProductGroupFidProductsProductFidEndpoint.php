<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsGroupsProductGroupFidProductsProductFidEndpoint extends ApiEndpoint
{
  protected $_path = 'products/groups/{productGroupFid}/products/{productFid}';
  protected $_replacements = [];

  public function __construct($productGroupFid, $productFid)
  {
    $this->_replacements['{productGroupFid}'] = $productGroupFid;
    $this->_replacements['{productFid}'] = $productFid;
  }

  /**
   * @summary Add a product to the group
   *
   * @return BoolMessageRequest
   */
  public function create()
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
        'products/groups/{productGroupFid}/products/{productFid}'
      )
    ));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Remove a product from the group
   *
   * @return BoolMessageRequest
   */
  public function delete()
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
        'products/groups/{productGroupFid}/products/{productFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
