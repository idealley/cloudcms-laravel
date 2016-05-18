<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Cloud CMS API Keys
    |--------------------------------------------------------------------------
    |
    | Get this from the Cloud CMS Developers API keys menu item (per project)  
    |
    */
    'username' => env('CC_USERNAME', ''),
    'password' => env('CC_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | Cloud CMS API base URL 
    |--------------------------------------------------------------------------
    |
    | The base url of Cloud CMS API  (urlResourceOwnerDetails)
    |
    */
    'baseUrl'  => 'https://api.cloudcms.com',

    /*
    |--------------------------------------------------------------------------
    | Cloud CMS API Keys
    |--------------------------------------------------------------------------
    |
    | Get this from the Cloud CMS Developers API keys menu item (per project) 
    |
    */

    'clientKey'     => env('CC_CLIENT_KEY', ''),
    'clientSecret'  => env('CC_CLIENT_SECRET', ''),
    'redirectUrl'   => 'http://www.ersnet.org/',


    /*
    |--------------------------------------------------------------------------
    | Deployment Url
    |--------------------------------------------------------------------------
    |
    | This is the public url for the images and other assets for your project.
    | It is automatically generated for you by CloudCms. You can find it in
    | Platform-> Project-> your application-> Applications-> Deployments 
    |
    */  
    'deploymentUrl'   => 'https://5a0b7ae6-4372-406a-a293-88d22608dbc3-hosted.cloudcms.net',

   
);
