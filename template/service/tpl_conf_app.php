<?php
$namespace = '${PROJECT_NAMESPACE}';
$app_class = '\\Ice\\Frame\\App';

$debug = TRUE;

$root_path = __DIR__ . '/..';
$var_path  = $root_path . '/../var';
$run_path  = $var_path . '/run';
$log_path  = $var_path . '/logs';

/*
 每个日志项, 会被自动注册到自己App的成员变量. 比如common注册为$app->logger_common
*/
$log = array(
    'common' => array(
        'log_fmt' => array(
            'fmt_time'            => '', # 默认Y-m-d H:i:s
            'client_env.ip'       => '',
            'server_env.hostname' => '',
            'request.uri'         => '',
            'request.originalUri' => '',
            'request.controller'  => '',
            'request.action'      => '',
            'request.id'          => '',
        ),
        'log_fmt_wf' => array(
            'fmt_time'            => '', # 默认Y-m-d H:i:s
            'client_env.ip'       => '',
            'server_env.hostname' => '',
            'request.uri'         => '',
            'request.originalUri' => '',
            'request.controller'  => '',
            'request.action'      => '',
            'request.id'          => '',
            'level'               => '',
            'errno'               => '',
            'trace'               => '',
        ),
        'log_file' => 'common.log',
        'log_path' => $var_path . '/logs',
        'split'    => array(
            'type' => 'file',
            'fmt'  => 'Ymd',
        ),
    ),
);
