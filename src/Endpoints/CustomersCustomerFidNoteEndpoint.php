<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidNoteEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/note';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Save a note against a customer
   *
   * @param $note
   * @param $colour
   *
   * @return ApiRequest
   */
  public function create($note, $colour = null)
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
        'customers/{customerFid}/note'
      )
    ));
    $detail->addPostField('note', $note);
    $detail->addPostField('colour', $colour);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
