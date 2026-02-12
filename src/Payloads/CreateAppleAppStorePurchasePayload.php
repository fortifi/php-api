<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateAppleAppStorePurchasePayload
  implements \JsonSerializable
{
  /**
   * The package name of the application (Apple bundle ID)
   * @required
   */
  protected $_bundleId;
  /**
   * The Apple product/subscription ID (SKU)
   * @required
   */
  protected $_productId;
  /**
   * The original transaction ID for linking renewals
   * @required
   */
  protected $_originalTransactionId;
  /**
   * The current transaction ID
   * @required
   */
  protected $_transactionId;
  /**
   * ISO 3166-1 Alpha-3 (e.g. USA)
   * @required
   */
  protected $_storefront;
  /**
   * Purchase quantity
   * @required
   */
  protected $_quantity;
  /**
   * Subscription expiry date (timestamp, null for one-time products)
   */
  protected $_expiresDate;
  /**
   * Transaction date (timestamp)
   * @required
   */
  protected $_purchaseDate;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["bundleId"]))
    {
      $this->_bundleId = (string)$data["bundleId"];
    }
    if(isset($data["productId"]))
    {
      $this->_productId = (string)$data["productId"];
    }
    if(isset($data["originalTransactionId"]))
    {
      $this->_originalTransactionId = (string)$data["originalTransactionId"];
    }
    if(isset($data["transactionId"]))
    {
      $this->_transactionId = (string)$data["transactionId"];
    }
    if(isset($data["storefront"]))
    {
      $this->_storefront = (string)$data["storefront"];
    }
    if(isset($data["quantity"]))
    {
      $this->_quantity = (int)$data["quantity"];
    }
    if(isset($data["expiresDate"]))
    {
      $this->_expiresDate = (int)$data["expiresDate"];
    }
    if(isset($data["purchaseDate"]))
    {
      $this->_purchaseDate = (int)$data["purchaseDate"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "bundleId"              => $this->_bundleId,
      "productId"             => $this->_productId,
      "originalTransactionId" => $this->_originalTransactionId,
      "transactionId"         => $this->_transactionId,
      "storefront"            => $this->_storefront,
      "quantity"              => $this->_quantity,
      "expiresDate"           => $this->_expiresDate,
      "purchaseDate"          => $this->_purchaseDate,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setBundleId(?string $value)
  {
    $this->_bundleId = $value;
    return $this;
  }

  /**
   * The package name of the application (Apple bundle ID)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBundleId($default = null, $trim = true)
  {
    $value = $this->_bundleId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProductId(?string $value)
  {
    $this->_productId = $value;
    return $this;
  }

  /**
   * The Apple product/subscription ID (SKU)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductId($default = null, $trim = true)
  {
    $value = $this->_productId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOriginalTransactionId(?string $value)
  {
    $this->_originalTransactionId = $value;
    return $this;
  }

  /**
   * The original transaction ID for linking renewals
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOriginalTransactionId($default = null, $trim = true)
  {
    $value = $this->_originalTransactionId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTransactionId(?string $value)
  {
    $this->_transactionId = $value;
    return $this;
  }

  /**
   * The current transaction ID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTransactionId($default = null, $trim = true)
  {
    $value = $this->_transactionId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setStorefront(?string $value)
  {
    $this->_storefront = $value;
    return $this;
  }

  /**
   * ISO 3166-1 Alpha-3 (e.g. USA)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getStorefront($default = null, $trim = true)
  {
    $value = $this->_storefront ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setQuantity(?int $value)
  {
    $this->_quantity = $value;
    return $this;
  }

  /**
   * Purchase quantity
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getQuantity($default = null)
  {
    return $this->_quantity ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setExpiresDate(?int $value)
  {
    $this->_expiresDate = $value;
    return $this;
  }

  /**
   * Subscription expiry date (timestamp, null for one-time products)
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getExpiresDate($default = null)
  {
    return $this->_expiresDate ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setPurchaseDate(?int $value)
  {
    $this->_purchaseDate = $value;
    return $this;
  }

  /**
   * Transaction date (timestamp)
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getPurchaseDate($default = null)
  {
    return $this->_purchaseDate ?: $default;
  }
}
