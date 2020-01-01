<?php

/**
 * @apiGroup           SmsOtpAuthenticationContainer
 * @apiName            findSmsOtpAuthenticationContainerById
 *
 * @api                {GET} /v1/smsotpauthenticationcontainers/:id Endpoint title here..
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
$router->get('smsotpauthenticationcontainers/{id}', [
    'as' => 'api_smsotpauthenticationcontainer_find_sms_otp_authentication_container_by_id',
    'uses'  => 'Controller@findSmsOtpAuthenticationContainerById',
    'middleware' => [
      'auth:api',
    ],
]);
