<?php
namespace Fortifi\Api\Core\Exceptions;

use Fortifi\Api\Core\Exceptions\Client\BadApiRequestException;
use Fortifi\Api\Core\Exceptions\Client\ClientApiException;
use Fortifi\Api\Core\Exceptions\Client\ConflictException;
use Fortifi\Api\Core\Exceptions\Client\ForbiddenException;
use Fortifi\Api\Core\Exceptions\Client\GoneException;
use Fortifi\Api\Core\Exceptions\Client\MethodNotAllowedException;
use Fortifi\Api\Core\Exceptions\Client\NotAcceptableException;
use Fortifi\Api\Core\Exceptions\Client\NotFoundException;
use Fortifi\Api\Core\Exceptions\Client\PaymentRequiredException;
use Fortifi\Api\Core\Exceptions\Client\ProxyAuthenticationRequiredException;
use Fortifi\Api\Core\Exceptions\Client\RequestTimeoutException;
use Fortifi\Api\Core\Exceptions\Client\TooManyRequestsException;
use Fortifi\Api\Core\Exceptions\Client\UnauthorizedException;
use Fortifi\Api\Core\Exceptions\Server\BadGatewayException;
use Fortifi\Api\Core\Exceptions\Server\GatewayTimeoutException;
use Fortifi\Api\Core\Exceptions\Server\InternalServerException;
use Fortifi\Api\Core\Exceptions\Server\NotImplementedException;
use Fortifi\Api\Core\Exceptions\Server\ServerApiException;
use Fortifi\Api\Core\Exceptions\Server\ServiceUnavailableException;

class ApiException extends \Exception
{
  public static function build(
    $code, $message = null, \Exception $previous = null
  )
  {
    switch((int)$code)
    {
      case 400:
        return new BadApiRequestException($message, $code, $previous);
      case 401:
        return new UnauthorizedException($message, $code, $previous);
      case 402:
        return new PaymentRequiredException($message, $code, $previous);
      case 403:
        return new ForbiddenException($message, $code, $previous);
      case 404:
        return new NotFoundException($message, $code, $previous);
      case 405:
        return new MethodNotAllowedException($message, $code, $previous);
      case 406:
        return new NotAcceptableException($message, $code, $previous);
      case 407:
        return new ProxyAuthenticationRequiredException(
          $message,
          $code,
          $previous
        );
      case 408:
        return new RequestTimeoutException($message, $code, $previous);
      case 409:
        return new ConflictException($message, $code, $previous);
      case 410:
        return new GoneException($message, $code, $previous);
      case 429:
        return new TooManyRequestsException($message, $code, $previous);
      case 500:
        return new InternalServerException($message, $code, $previous);
      case 501:
        return new NotImplementedException($message, $code, $previous);
      case 502:
        return new BadGatewayException($message, $code, $previous);
      case 503:
        return new ServiceUnavailableException($message, $code, $previous);
      case 504:
        return new GatewayTimeoutException($message, $code, $previous);
      default:
        if($code >= 400 && $code <= 500)
        {
          return new ClientApiException($message, $code, $previous);
        }
        else if($code >= 400 && $code <= 500)
        {
          return new ServerApiException($message, $code, $previous);
        }
        return new ApiException($message, $code, $previous);
    }
  }
}
