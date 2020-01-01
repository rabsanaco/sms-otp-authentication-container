<?php

/**
 * @apiGroup           SmsOtpAuthenticationContainer
 * @apiName            updateSmsOtpAuthenticationContainer
 *
 * @api                {PATCH} /v1/smsotpauthenticationcontainers/:id Endpoint title here..
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
$router->patch('smsotpauthenticationcontainers/{id}', [
    'as' => 'api_smsotpauthenticationcontainer_update_sms_otp_authentication_container',
    'uses'  => 'Controller@updateSmsOtpAuthenticationContainer',
    'middleware' => [
      'auth:api',
    ],
]);
