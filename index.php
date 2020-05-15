<?php
    $request_params = [
    'user_id' => 233657630,
    'random_id'=> mt_rand(20,99999999),
    'peer_id'=> 233657630,
    'domain'=>'zhasbuian',
    'chat_id'=>36,
    'message'=>'Hello World!',
    'v'=>'5.52',
    'access_token'=>'250fddceff2e4b098ab43818f5df59c691cc4c015d1799e5c5634b09ea5d5f5040adcfcab3ed509e5990f'
                       ];
    $url = 'https://vk.api.com/method/messages.send?' . http_build_query($request_params);
    file_get_contents($url);
?>