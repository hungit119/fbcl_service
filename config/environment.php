<?php

if (env('APP_ENV') == 'live') {
    $urlConnectServiceMedia     = 'https://media.monkeyuni.net';
    $urlConnectProduct          = 'https://cms.monkeyuni.net';
    $urlConnectUserReader       = 'https://web.monkeyenglish.net/user_reader';
    $urlConnectServiceMail      = 'https://email.monkeyuni.net';
    $urlConnectServiceCRM       = 'https://crmv2.monkeyuni.net';
    $urlConnectServiceWebsocket = 'wss://websocket.monkeyuni.net';
    $urlDisplayCdn              = 'https://vnmedia2.monkeyuni.net/';
    $urlDisplayCdn              = 'https://vnmedia2.monkeyuni.net/';
    $urlConnectServiceLog       = 'https://app.monkeyenglish.net/log';
    $urlConnectServiceApp       = 'https://app.monkeyenglish.net/app';
    $urlConnectServiceLesson    = 'https://app.monkeyenglish.net/lesson';
    $urlConnectServiceReport    = 'https://app.monkeyenglish.net/report';
    $urlConnectServiceAgent     = 'https://agent.monkeyuni.net';
    $urlConnectNotification     = 'https://sendnotirequest-ynahehuzpq-uc.a.run.app';
    $tokenNotification          = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6ODQyOTczNSwiZW1haWwiOiJ0b2FuYnVpNzY1QGdtYWlsLmNvbSIsInBob25lIjoiMDkwMDAwMDEyMyIsInJvbGVzIjpbIlN0dWRlbnQiXSwicm9sZV9uYW1lIjp7IlN0dWRlbnQiOiJTdHVkZW50In0sInJvbGVfcHJpb3JpdHkiOiJTdHVkZW50IiwiaWF0IjoxNzIzNzg0MzI3fQ.DCcSJEDg8r5qDMYgLMmrStwc3HFpbJZr12_6a2RMHF8';
    $airbridgeAppName           = 'monkeyclass';
    $airbridgeApiKey            = 'c7d10555be5245ae81ccc835540ed916';
    $airbridgeApiUrl            = 'https://api.airbridge.io';
} elseif (env('APP_ENV') == 'dev') {
    $urlConnectServiceMedia     = 'https://media.dev.monkeyuni.net';
    $urlConnectProduct          = 'https://apicmsdev.monkeyenglish.net/product';
    $urlConnectUserReader       = 'https://appdev.monkeyenglish.net/user_reader_2';
    $urlConnectServiceMail      = 'https://email.dev.monkeyuni.com';
    $urlConnectServiceCRM       = 'https://crm.dev.monkeyuni.net';
    $urlConnectServiceWebsocket = 'wss://apiclassdev.monkey.edu.vn/websocket';
    $urlDisplayCdn              = 'https://vnmediadev.monkeyuni.net/';
    $urlConnectServiceLog       = 'http://apicrmdev.monkeyenglish.net/log';
    $urlConnectServiceApp       = 'https://api.dev.monkeyuni.com/user';
    $urlConnectServiceLesson    = 'https://api.dev.monkeyuni.com/lesson';
    $urlConnectServiceReport    = 'https://api.dev.monkeyuni.com/report/api';
    $urlConnectServiceAgent     = 'https://agent.dev.monkeyuni.net';
    $urlConnectNotification     = 'https://sendnotirequest-ynahehuzpq-uc.a.run.app';
    $tokenNotification          = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6ODQyOTczNSwiZW1haWwiOiJ0b2FuYnVpNzY1QGdtYWlsLmNvbSIsInBob25lIjoiMDkwMDAwMDEyMyIsInJvbGVzIjpbIlN0dWRlbnQiXSwicm9sZV9uYW1lIjp7IlN0dWRlbnQiOiJTdHVkZW50In0sInJvbGVfcHJpb3JpdHkiOiJTdHVkZW50IiwiaWF0IjoxNzIzNzg0MzI3fQ.DCcSJEDg8r5qDMYgLMmrStwc3HFpbJZr12_6a2RMHF8';
    $airbridgeAppName           = 'monkeyclass';
    $airbridgeApiKey            = 'c7d10555be5245ae81ccc835540ed916';
    $airbridgeApiUrl            = 'https://api.airbridge.io';
} else {
    $urlConnectServiceMedia     = 'https://media.dev.monkeyuni.net';
    $urlConnectProduct          = 'https://apicmsdev.monkeyenglish.net/product';
    $urlConnectUserReader       = 'https://appdev.monkeyenglish.net/user_reader_2';
    $urlConnectServiceMail      = 'https://email.dev.monkeyuni.com';
    $urlConnectServiceCRM       = 'https://crm.dev.monkeyuni.net';
    $urlConnectServiceWebsocket = 'wss://apiclassdev.monkey.edu.vn/websocket';
    $urlDisplayCdn              = 'https://vnmediadev.monkeyuni.net/';
    $urlConnectServiceLog       = 'http://apicrmdev.monkeyenglish.net/log';
    $urlConnectServiceApp       = 'https://api.dev.monkeyuni.com/user';
    $urlConnectServiceLesson    = 'https://api.dev.monkeyuni.com/lesson';
    $urlConnectServiceReport    = 'https://api.dev.monkeyuni.com/report/api';
    $urlConnectServiceAgent     = 'https://agent.dev.monkeyuni.net';
    $urlConnectNotification     = 'https://sendnotirequest-ynahehuzpq-uc.a.run.app';
    $tokenNotification          = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6ODQyOTczNSwiZW1haWwiOiJ0b2FuYnVpNzY1QGdtYWlsLmNvbSIsInBob25lIjoiMDkwMDAwMDEyMyIsInJvbGVzIjpbIlN0dWRlbnQiXSwicm9sZV9uYW1lIjp7IlN0dWRlbnQiOiJTdHVkZW50In0sInJvbGVfcHJpb3JpdHkiOiJTdHVkZW50IiwiaWF0IjoxNzIzNzg0MzI3fQ.DCcSJEDg8r5qDMYgLMmrStwc3HFpbJZr12_6a2RMHF8';
    $airbridgeAppName           = 'monkeyclass';
    $airbridgeApiKey            = 'c7d10555be5245ae81ccc835540ed916';
    $airbridgeApiUrl            = 'https://api.airbridge.io';
}

return [
    'API_SERVICE_MEDIA'          => $urlConnectServiceMedia,
    'API_SERVICE_PRODUCT'        => $urlConnectProduct,
    'API_SERVICE_USER_READER'    => $urlConnectUserReader,
    'API_SERVICE_MAIL'           => $urlConnectServiceMail,
    'API_SERVICE_CRM'            => $urlConnectServiceCRM,
    'API_SERVICE_WEBSOCKET'      => $urlConnectServiceWebsocket,
    'URL_DISPLAY_CDN'            => $urlDisplayCdn,
    'API_SERVICE_LOG'            => $urlConnectServiceLog,
    'APP_SERVICE'                => $urlConnectServiceApp,
    'LESSON_SERVICE'             => $urlConnectServiceLesson,
    'REPORT_SERVICE'             => $urlConnectServiceReport,
    'API_SERVICE_NOTIFICATION'   => $urlConnectNotification,
    'API_SERVICE_AGENT'          => $urlConnectServiceAgent,
    'TOKEN_SERVICE_NOTIFICATION' => $tokenNotification,

    'API_SERVICE_TELEGRAM'         => 'https://api.telegram.org/bot',
    'TELEGRAM_BOT_TOKEN_ERROR_APP' => '1487939909:AAGKsgk7CYtFxptZalX53HciENV7SUxvkxA',
    'TELEGRAM_CHAT_ID_ERROR_APP'   => '-613698879',
    'API_CLEVERTAP'                => 'https://sg1.api.clevertap.com',
    'AIRBRIDGE_APP_NAME'         => $airbridgeAppName,
    'AIRBRIDGE_API_KEY'          => $airbridgeApiKey,
    'AIRBRIDGE_API_URL'          => $airbridgeApiUrl
];
