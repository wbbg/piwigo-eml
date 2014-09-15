<!-- Show the title of the plugin -->
<div class="titlePage">
 <h2>{'Extend Mail Link'|@translate}</h2>
</div>
 
<!-- Show content in a nice box -->
<fieldset>
 <legend>{'Configuration'|@translate}</legend>

<form action="" method="post" name="form">
  <p>{'Extension Sting'|translate}</p>
  <p><textarea name="eml_content" id="eml_content" rows="3" cols="80">{$EML_CONTENT}</textarea></p>
  <ul style="!important;list-style-type:none;">
    <li><label><input type="checkbox" name="eml_enabled" {$EML_ENABLED} /> {'Enabled'|translate}</label></li>
  </ul>
  <p><input class="submit" type="submit" name="submit" value="{'Submit'|translate}"/></p>
</form>

</fieldset>