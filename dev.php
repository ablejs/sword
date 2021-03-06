<?php
/**
 * EasySwoole框架配置信息
 *
 */
return [
    'SERVER_NAME' => "EasySwoole",
    'MAIN_SERVER' => [
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT' => 8100,
        'SERVER_TYPE' => EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER,EASYSWOOLE_REDIS_SERVER
        'SOCK_TYPE' => SWOOLE_TCP,
        'RUN_MODEL' => SWOOLE_PROCESS,

        // Swoole配置信息
        'SETTING' => [
            'worker_num' => 8,
            'reload_async' => true,
            'max_wait_time'=> 3,

            // 兼容文件上传最大值
            // 'package_max_length' => 20 * 1024 * 1024
        ],
        'TASK' => [
            'workerNum' => 4,
            'maxRunningNum' => 128,
            'timeout' => 15
        ]
    ],
    'TEMP_DIR' => EASYSWOOLE_ROOT.'/Temp',
    'LOG_DIR' => EASYSWOOLE_ROOT.'/Temp/Log'
];
