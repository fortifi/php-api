<?php
namespace Fortifi\Api\V1\Payloads;

class OrderProductsPayload
  implements \JsonSerializable
{
  /**
   * Product price FIDs to add
   */
  protected $_productPriceFids;
  /**
   * Products to add with specified quantity
   */
  protected $_quantityProductPriceFids;
  /**
   * Products to add with display names
   */
  protected $_namesProductPriceFids;
  /**
   * Products to add with display names
   */
  protected $_products;
  /**
   * Subscriptions to modify on this order
   */
  protected $_modifySubscriptions;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["productPriceFids"]))
    {
      $this->_productPriceFids = $data["productPriceFids"];
    }
    if(isset($data["quantityProductPriceFids"]))
    {
      $this->_quantityProductPriceFids = [];
      foreach($data["quantityProductPriceFids"] as $dItem)
      {
        $dObj = new OrderProductQuantityPayload();
        $dObj->hydrate($dItem);
        $this->_quantityProductPriceFids[] = $dObj;
      }
    }
    if(isset($data["namesProductPriceFids"]))
    {
      $this->_namesProductPriceFids = [];
      foreach($data["namesProductPriceFids"] as $dItem)
      {
        $dObj = new OrderProductDisplayNamePayload();
        $dObj->hydrate($dItem);
        $this->_namesProductPriceFids[] = $dObj;
      }
    }
    if(isset($data["products"]))
    {
      $this->_products = [];
      foreach($data["products"] as $dItem)
      {
        $dObj = new OrderProductPayload();
        $dObj->hydrate($dItem);
        $this->_products[] = $dObj;
      }
    }
    if(isset($data["modifySubscriptions"]))
    {
      $this->_modifySubscriptions = [];
      foreach($data["modifySubscriptions"] as $dItem)
      {
        $dObj = new OrderModifySubscriptionPayload();
        $dObj->hydrate($dItem);
        $this->_modifySubscriptions[] = $dObj;
      }
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "productPriceFids"         => $this->_productPriceFids,
      "quantityProductPriceFids" => $this->_quantityProductPriceFids,
      "namesProductPriceFids"    => $this->_namesProductPriceFids,
      "products"                 => $this->_products,
      "modifySubscriptions"      => $this->_modifySubscriptions,
    ];
  }

  /**
   * @param string[] $value
   *
   * @return $this
   */
  public function setProductPriceFids(?array $value)
  {
    $this->_productPriceFids = $value;
    return $this;
  }

  /**
   * @param string $item
   *
   * @return $this
   */
  public function addProductPriceFid(string $item)
  {
    $this->_productPriceFids[] = $item;
    return $this;
  }

  /**
   * Product price FIDs to add
   *
   * @param mixed $default
   *
   * @return string[]
   */
  public function getProductPriceFids($default = [])
  {
    return $this->_productPriceFids ?: $default;
  }

  /**
   * @param OrderProductQuantityPayload[] $value
   *
   * @return $this
   */
  public function setQuantityProductPriceFids(?array $value)
  {
    $this->_quantityProductPriceFids = $value;
    return $this;
  }

  /**
   * @param OrderProductQuantityPayload $item
   *
   * @return $this
   */
  public function addQuantityProductPriceFid(OrderProductQuantityPayload $item)
  {
    $this->_quantityProductPriceFids[] = $item;
    return $this;
  }

  /**
   * Products to add with specified quantity
   *
   * @param mixed $default
   *
   * @return OrderProductQuantityPayload[]
   */
  public function getQuantityProductPriceFids($default = [])
  {
    return $this->_quantityProductPriceFids ?: $default;
  }

  /**
   * @param OrderProductDisplayNamePayload[] $value
   *
   * @return $this
   */
  public function setNamesProductPriceFids(?array $value)
  {
    $this->_namesProductPriceFids = $value;
    return $this;
  }

  /**
   * @param OrderProductDisplayNamePayload $item
   *
   * @return $this
   */
  public function addNamesProductPriceFid(OrderProductDisplayNamePayload $item)
  {
    $this->_namesProductPriceFids[] = $item;
    return $this;
  }

  /**
   * Products to add with display names
   *
   * @param mixed $default
   *
   * @return OrderProductDisplayNamePayload[]
   */
  public function getNamesProductPriceFids($default = [])
  {
    return $this->_namesProductPriceFids ?: $default;
  }

  /**
   * @param OrderProductPayload[] $value
   *
   * @return $this
   */
  public function setProducts(?array $value)
  {
    $this->_products = $value;
    return $this;
  }

  /**
   * @param OrderProductPayload $item
   *
   * @return $this
   */
  public function addProduct(OrderProductPayload $item)
  {
    $this->_products[] = $item;
    return $this;
  }

  /**
   * Products to add with display names
   *
   * @param mixed $default
   *
   * @return OrderProductPayload[]
   */
  public function getProducts($default = [])
  {
    return $this->_products ?: $default;
  }

  /**
   * @param OrderModifySubscriptionPayload[] $value
   *
   * @return $this
   */
  public function setModifySubscriptions(?array $value)
  {
    $this->_modifySubscriptions = $value;
    return $this;
  }

  /**
   * @param OrderModifySubscriptionPayload $item
   *
   * @return $this
   */
  public function addModifySubscription(OrderModifySubscriptionPayload $item)
  {
    $this->_modifySubscriptions[] = $item;
    return $this;
  }

  /**
   * Subscriptions to modify on this order
   *
   * @param mixed $default
   *
   * @return OrderModifySubscriptionPayload[]
   */
  public function getModifySubscriptions($default = [])
  {
    return $this->_modifySubscriptions ?: $default;
  }
}
