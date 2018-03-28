<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2012 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */

return array(
    /*
    |--------------------------------------------------------------------------
    | prism相关配置在这里
    |--------------------------------------------------------------------------
    |
    */
    /*
    |--------------------------------------------------------------------------
    | 是否开启prismMode
    |--------------------------------------------------------------------------
    |
    | 如果开启prismMode，api连通通过
    |
    */
    'prismMode' => false,

    /*
    |--------------------------------------------------------------------------
    | 是否将系统消息推送到prism
    |--------------------------------------------------------------------------
    | 如果开启则创建订单，退款等消息会推送到prism
    */
    'prismNotify' => false,

    /*
    |--------------------------------------------------------------------------
    | Prism服务器的Host地址
    |--------------------------------------------------------------------------
    |
    | prism服务器的地址
    |
    */
    'prismHostUrl' => 'http://prism.bryant.onex.software:8080',
    /*
    |--------------------------------------------------------------------------
    | Prism长连接服务生成的socket文件
    |--------------------------------------------------------------------------
    |
    | prism的一个应用：api_provider生成的socket文件,如果配置了这项，则连接prism采用长连接。
    | 这项配置开启前请先确认好prism的api_provider应用已经安装部署好，并且已经工作正常
    |
    */
    'prismSocketFile' => null,
    //'prismSocketFile'=>'unix:///tmp/api_provider.sock'
    /*
    |--------------------------------------------------------------------------
    | Prism管理员的Key和Secret
    |--------------------------------------------------------------------------
    |
    | prism第一次启动时会在命令行显示，如果忘记，在prism后台的用户中心可以看到
    |
    */
    'prismAdminKey' => '5ioviqux',
    'prismAdminSecret' => 'qzafphmi4tppgzncafdb',
    /*
    |--------------------------------------------------------------------------
    | Prism api和应用的提供者的email和密码
    |--------------------------------------------------------------------------
    |
    | api提供者的账号密码，要求账号不存在，否则会报错。
    |
    */
    'prismUserEmail' => 'test@test.cn',
    'prismUserPassword' => 'demo123',
    /*
    |--------------------------------------------------------------------------
    | Prism app的名字
    |--------------------------------------------------------------------------
    |
    | Prism app的名字
    |
    */
    'prismAppName' => 'bbc',
    /*
    |--------------------------------------------------------------------------
    | prismApi映射等级
    |--------------------------------------------------------------------------
    |
    | 多少等级以上的api将会被映射到prism上面
    | 具体等级在apis.php里面配置，api的level字段
    |
    */
    'apiPushLevel' => 70,
    /*
    |--------------------------------------------------------------------------
    | prismApp 映射范围
    |--------------------------------------------------------------------------
    |
    | 哪些类型的app会被映射到prism上面
    | 以前是哪些类型的app会push上去，现在是只push对应的app
    |
    */
    //'appPushArea' => ['service', 'virtual'],
    'appPushArea' => ['sysaftersales', 'systrade', 'sysopen', 'openstandard', 'syslogistics', 'sysitem'],
    /*
    |--------------------------------------------------------------------------
    | Prism对接口流量的控制
    |--------------------------------------------------------------------------
    |
    | limitCount 上次刷新以后的访问数量计数 默认是3000
    | limitSecond 刷新时间 默认是60
    |
    */
    //'limitCount' => 3000,
    //'limitSecond' => 60,

    /*
    |--------------------------------------------------------------------------
    | API暴露在prism上的显示
    |--------------------------------------------------------------------------
    |
    | 如果想app的名称变成中文名字，这里要做配置
    | 'key'=>'value'
    | 'app_id'=>'要显示的内容'
    |
    */
    'prismApiName' => [
        'sysaftersales'=>'售后',
        'systrade'=>'交易',
        'sysitem'=>'商品',
        'sysrate'=>'评价',
        'sysuser'=>'用户',
        'syscategory'=>'品牌类目',
        'sysshop'=>'店铺',
        'syspromotion'=>'促销',
        'ectools'=>'电商工具',
        'sysstat'=>'统计',
        'syslogistics'=>'物流',
        'image'=>'图片',
        'syscontent'=>'文章',
        'sysopen'=>'开放',
        'openstandard'=>'标准对接',
    ],

    /**
    |--------------------------------------------------------------------------
    | 虚拟应用，为了对外发放key
    |--------------------------------------------------------------------------
    |
    | 虚拟应用当且仅当用于开放平台模式下生成连通key和secret时使用
    | 所以，目前不带有队列和API服务逻辑（挤不能成为API提供者）。
    | 后期订单推送可能会走这里。
    |
     */
    'virtualApp' => array(
        array(
            'app_id' => 'openstandard',
            'app_name' => '外部对接标准接入',
            'debug_mode' => 0,
            'app_config' => null,
            'status' => 'active',
            'webpath' => null,
            'description' => "用于在prism端口开放平台，将分配基本权限，具体权限看apis.php里面的api依赖关系",
            'local_ver' => '0.1',
            'remote_ver' => "",
            'author' => "Elrond",
            'author_url' => 'http://www.shopex.cn',
            'author_email' => 'dev@shopex.cn',
            'dbver' => '0.1',
            'remote_config' => '',
            'type' => 'virtual',
            'title' => '标准接入',
        ),
    ),
);
