<?php

/**
 * @apiGroup           SmsOtpAuthenticationContainer
 * @apiName            createSmsOtpAuthenticationContainer
 *
 * @api                {POST} /v1/smsotpauthenticationcontainers Endpoint title here..
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
$router->post('smsotpauthenticationcontainers', [
    'as' => 'api_smsotpauthenticationcontainer_create_sms_otp_authentication_container',
    'uses'  => 'Controller@createSmsOtpAuthenticationContainer',
    'middleware' => [
      'auth:api',
    ],
]);
