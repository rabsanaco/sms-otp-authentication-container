<?php

/**
 * @apiGroup           SmsOtpAuthenticationContainer
 * @apiName            deleteSmsOtpAuthenticationContainer
 *
 * @api                {DELETE} /v1/smsotpauthenticationcontainers/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->delete('smsotpauthenticationcontainers/{id}', [
    'as' => 'api_smsotpauthenticationcontainer_delete_sms_otp_authentication_container',
    'uses'  => 'Controller@deleteSmsOtpAuthenticationContainer',
    'middleware' => [
      'auth:api',
    ],
]);
