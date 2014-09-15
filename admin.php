<?php
// Chech whether we are indeed included by Piwigo.
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

load_language('plugin.lang', STAT_PATH);

$eml_conf = unserialize($conf['eml']);

$template->assign(
  array(
    'EML_CONTENT' => $eml_conf['content'],
    'EML_ENABLED'  => $eml_conf['enabled'] ? 'checked="checked"' : '' ,
    )
  );

if (isset($_POST['submit']))
{
  $eml_content = stripslashes($_POST['eml_content']);
  
  $eml_conf = array(
    'content' => $eml_content,
    'enabled' => isset($_POST['eml_enabled']),
    );

  $query = '
    UPDATE '.CONFIG_TABLE.'
    SET value = \''.pwg_db_real_escape_string(serialize($eml_conf)).'\'
    WHERE param = \'eml\'
    ;';
  pwg_query($query);

  array_push($page['infos'], l10n('Config saved'));
  $template->assign(
    array(
      'EML_CONTENT' => $eml_content,
      'EML_ENABLED' => isset($_POST['eml_enabled']) ? 'checked="checked"' : '' ,
    )
  );
}


// Add our template to the global template
$template->set_filenames(
 array(
   'plugin_admin_content' => dirname(__FILE__).'/admin.tpl'
 )
);
 
// Assign the template contents to ADMIN_CONTENT
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>