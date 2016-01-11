<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class OrderRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "fid" => $this->getFid(),
      "orderHash" => $this->getOrderHash(),
      "state" => $this->getState(),
      "queueFid" => $this->getQueueFid(),
      "offerFid" => $this->getOfferFid(),
      "couponCode" => $this->getCouponCode(),
      "amount" => $this->getAmount(),
      "setupAmount" => $this->getSetupAmount(),
      "taxAmount" => $this->getTaxAmount(),
      "totalAmount" => $this->getTotalAmount(),
      "currency" => $this->getCurrency(),
      "country" => $this->getCountry(),
      "discountAmount" => $this->getDiscountAmount(),
      "discountType" => $this->getDiscountType(),
      "approvedByFid" => $this->getApprovedByFid(),
      "userAgent" => $this->getUserAgent(),
      "userIp" => $this->getUserIp(),
      "paymentAccountFid" => $this->getPaymentAccountFid(),
      "paymentServiceType" => $this->getPaymentServiceType(),
      "lastPaymentFid" => $this->getLastPaymentFid(),
      "companyFid" => $this->getCompanyFid(),
      "customerFid" => $this->getCustomerFid(),
      "fraudFid" => $this->getFraudFid(),
      "invoiceFid" => $this->getInvoiceFid(),
      "amountPaid" => $this->getAmountPaid(),
      "authorizeId" => $this->getAuthorizeId(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'fid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getOrderHash($default = null)
  {
    return Objects::property($this->_getResultJson(), 'orderHash', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getState($default = null)
  {
    return Objects::property($this->_getResultJson(), 'state', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getQueueFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'queueFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getOfferFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'offerFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCouponCode($default = null)
  {
    return Objects::property($this->_getResultJson(), 'couponCode', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSetupAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'taxAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTotalAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCurrency($default = null)
  {
    return Objects::property($this->_getResultJson(), 'currency', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCountry($default = null)
  {
    return Objects::property($this->_getResultJson(), 'country', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getDiscountAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'discountAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getDiscountType($default = null)
  {
    return Objects::property($this->_getResultJson(), 'discountType', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getApprovedByFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'approvedByFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getUserAgent($default = null)
  {
    return Objects::property($this->_getResultJson(), 'userAgent', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getUserIp($default = null)
  {
    return Objects::property($this->_getResultJson(), 'userIp', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getPaymentAccountFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'paymentAccountFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getPaymentServiceType($default = null)
  {
    return Objects::property($this->_getResultJson(), 'paymentServiceType', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getLastPaymentFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'lastPaymentFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCompanyFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'companyFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCustomerFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'customerFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getFraudFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'fraudFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getInvoiceFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'invoiceFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getAmountPaid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amountPaid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getAuthorizeId($default = null)
  {
    return Objects::property($this->_getResultJson(), 'authorizeId', $default);
  }
}
      
