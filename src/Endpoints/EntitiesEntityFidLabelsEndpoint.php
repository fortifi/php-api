<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\LabelsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidLabelsEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}/labels';
  protected $_replacements = [];

  public function __construct($entityFid)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
  }

  /**
   * @summary Get all labels for an entity
   *
   * @return LabelsRequest
   */
  public function all()
  {
    $request = new LabelsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/labels'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Assign label to entity
   *
   * @param $label
   * @param $value
   *
   * @return ApiRequest
   */
  public function setAssign($label = null, $value = null)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/labels/assign'
      )
    ));
    $detail->addPostField('label', $label);
    $detail->addPostField('value', $value);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
