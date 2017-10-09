<?php

$schema['keys'] = array(
    'id' => array('type' => 'int(11)', 'Null'=>'NO', 'Key'=>'PRI', 'Extra'=>'auto_increment'),
    'name' => array('type' => 'text'),
    'userid' => array('type' => 'int(11)'),
    'deviceid' => arrat('type' => 'int(11)'),
    'expire' => array('type' => 'datetime'),
    'created' => array('type' => 'datetime'),
    'value' => array('type' => 'text'),
    'acl' => array('type' => 'text'),
    'keytype' => array('type' => 'varchar(10)')
);
