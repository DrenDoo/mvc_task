<?php

    Config::set("site_name", "Dren_Test_Site");

    Config::set('languages', array('ru','en'));

    // Routes. Route name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_'
));

Config::set('default_route','default');
Config::set('default_language','ru');
Config::set('default_controller','home');
Config::set('default_action','index');

Config::set('db.host','localhost');
Config::set('db.user','root');
Config::set('db.password','');
Config::set('db.db_name','mvs');

Config::set('salt','348fu3fn39r88347gbnjk3rgnjkfe');