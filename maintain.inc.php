<?php

function plugin_activate()
{
}

function plugin_install()
{
  $eml_conf = array(
    'content' => '',
    'enabled' => false,
  );
  
  $query = '
    INSERT INTO '.CONFIG_TABLE.' (param,value,comment)
    VALUES (
      \'eml\',
      \''.pwg_db_real_escape_string(serialize($eml_conf)).'\',
      \'Parameters of Extend Notification Link plugin\'
    )
    ;';
  pwg_query($query);
}

function plugin_uninstall()
{
  $query = '
    DELETE FROM '.CONFIG_TABLE.'
    WHERE param=\'eml\'
  ;';
  pwg_query($query);
}
?>
