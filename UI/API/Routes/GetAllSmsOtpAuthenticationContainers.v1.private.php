<?php

/**
 * @apiGroup           SmsOtpAuthenticationContainer
 * @apiName            getAllSmsOtpAuthenticationContainers
 *
 * @api                {GET} /v1/smsotpauthenticationcontainers Endpoint title here..
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
$router->get('smsotpauthenticationcontainers', [
    'as' => 'api_smsotpauthenticationcontainer_get_all_sms_otp_authentication_containers',
    'uses'  => 'Controller@getAllSmsOtpAuthenticationContainers',
    'middleware' => [
      'auth:api',
    ],
]);
