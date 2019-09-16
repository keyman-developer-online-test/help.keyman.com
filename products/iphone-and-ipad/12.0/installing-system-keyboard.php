<?php
  require_once('includes/template.php');
  require_once('includes/session.php');
  
  head([
    'title' => 'Installing the Keyman System Keyboard - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css'],

    'showMenu' => true,
    'embedded' => $embed_ios
  ]);
?>

<?php
$titlePrefix = $embed_ios ? "" : "Keyman for iPhone and iPad:  ";
?>
<h2><?=$titlePrefix?>Installing the Keyman System Keyboard</h2>

<p>
    Step 1) Open the 'Settings' App and go to 'General' > 'Keyboard'
</p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings5.png"); ?>" />
<p>
    Step 2) Touch 'Keyboards'
</p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings6.png"); ?>" />
<p>
    Step 3) Touch 'Add New Keyboard...'
</p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings.png"); ?>" />
<br/><br/>
<p>
    Step 4) Touch 'Keyman' under THIRD-PARTY KEYBOARDS.
</p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings2.png"); ?>" />
<br/><br/>
<p>
    Step 5) Touch 'Keyman - Keyman'.
</p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings3.png"); ?>" />
<br/><br/>
<p>
    Step 6) Turn on the 'Allow Full Access' toggle and confirm.
</p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings4.png"); ?>" />
<br/><br/>
<p>
    Your Keyman keyboards will now be available throughout your entire device. You can switch between Keyman keyboards and the default iOS keyboard layout by touching the globe key of the keyboard whenever you are typing.
</p>
<img src="<?php echo cdn("img/app/12.0/globe.png"); ?>" />

<p>Note: After opening the Keyman system keyboard for the first time in an app, you can turn off the "Allow Full Access" option 
again. You only need to switch it on in the future to update or change your keyboard preferences.</p>

<h2>Help Index</h2>

<?php
$indexName = $embed_ios ? "Getting Started" : "Keyman for iPhone and iPad help home";
?>

<ul>
  <li><a href='index.php<?=$session_query_q?>'><?=$indexName?></a></li>
  <li><a href='switching-between-keyboards.php<?=$session_query_q?>'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php<?=$session_query_q?>'>Uninstalling keyboards</a></li>
  <li><a href='installing-system-keyboard.php<?=$session_query_q?>'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php<?=$session_query_q?>'>Installing fonts</a></li>
  <li><a href='installing-custom-keyboards.php<?=$session_query_q?>'>Installing custom keyboards</a></li>
  <li><a href='using-keyman-browser.php<?=$session_query_q?>'>Using the Keyman Browser</a></li>
</ul>
