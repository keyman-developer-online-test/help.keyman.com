<?php
  require_once('includes/template.php');

  head([
    'title' => "New File Dialog"
  ]);
?>

<h1>New File Dialog</h1>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmNew.png') ?>" alt="New File dialog" /></p>

<p>Creates a new file, and optionally adds it to the current project.</p>

<h2>Keyboard</h2>

<p>Creates a new keyboard source file. This file will be opened in an Keyboard Editor window.</p>

<h2>Package</h2>

<p>Creates a new keyboard package. A keyboard package contains one or more keyboard files, and can optionally contain other associated
files such as documentation.</p>

<h2>Branding</h2>

<p>Creates a new branding file. A branding file customises the Keyman Engine or Keyman Desktop user interface. (Requires Branding Pack)</p>

<h2>Distribution</h2>

<p>Creates a new installer for Windows. (Requires Branding Pack)</p>

<h2>Text file</h2>

<p>Creates a new text file.</p>

<h2>HTML file</h2>

<p>Creates a new HTML file.</p>

<h2>XML file</h2>

<p>Creates a new XML file.</p>
