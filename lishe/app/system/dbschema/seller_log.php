<?php
return array(
    'columns' => array(
        'log_id' => array(
            'type' => 'number',
            'required' => true,
            'autoincrement' => true,
        ),
        'seller_userid' => array(
            'type' => 'number',
            'required' => true,
            'comment' => app::get('system')->_('店员id'),
            'label' => app::get('system')->_('店员id'),
            'searchtype' => 'has',
            'filtertype' => 'yes',
            'filterdefault' => true,
        ),
        'seller_username' => array(
            'type' => 'string',
            'length' => '50',
            'required' => true,
            'comment' => app::get('system')->_('店员用户名'),
            'label' => app::get('system')->_('店员用户名'),
            'searchtype' => 'has',
            'filtertype' => 'yes',
            'filterdefault' => true,
            'width' => 70,
            'in_list' => true,
            'default_in_list' => true,
        ),
        'shop_id' => array(
            'type' => 'number',
            'required' => true,
            'comment' => app::get('system')->_('店铺id'),
            'label' => app::get('system')->_('店铺id'),
            'searchtype' => 'has',
            'filtertype' => 'yes',
            'filterdefault' => true,
        ),
        'created_time' => array(
            'type' => 'time',
            'required' => true,
            'comment' => app::get('system')->_('操作时间'),
            'label' => app::get('system')->_('操作时间'),
            'filtertype' => 'yes',
            'filterdefault' => true,
            'width' => 120,
            'in_list' => true,
            'default_in_list' => true,
        ),
        'memo' => array(
            'type' => 'text',
            'comment' => app::get('system')->_('操作内容'),
            'label' => app::get('system')->_('操作内容'),
            'width' => 200,
            'in_list' => true,
            'default_in_list' => true,
        ),
        'router' => array(
            'type' => 'string',
            'length' => '50',
            'comment' => app::get('system')->_('操作路由'),
            'label' => app::get('system')->_('操作路由'),
            'width' => 110,
            'in_list' => true,
       ),
       'ip' => array(
            'type' => 'string',
            'length' => '15',
            'comment' => app::get('system')->_('IP'),
            'label' => app::get('system')->_('IP'),
            'width' => 100,
            'in_list' => true,
            'default_in_list' => true,
       ),
    ),
    'primary' => 'log_id',
    'index' => array(
        'ind_createdtime' => ['columns' => ['created_time']],
        'ind_adminusername' => ['columns' => ['seller_username']],
    ),
    'comment' => app::get('system')->_('店铺人员操作日志表'),
);
