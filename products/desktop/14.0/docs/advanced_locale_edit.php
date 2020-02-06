<?php
  require_once('includes/template.php');

  head([
    'title' => "The Locale Editor - Translating the Keyman Desktop User Interface"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">The Locale Editor - Translating the Keyman Desktop User Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="advanced_proxy_config.php">Prev</a> </td><th width="60%" align="center">Chapter 4. Advanced Help</th><td width="20%" align="right"> <a accesskey="n" href="advanced_tsf.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="advanced_locale_edit">The Locale Editor - Translating the Keyman Desktop User Interface</h2></div></div></div><p>Localization of the user interface is possible via editing a single XML file called <code class="filename">locale.xml</code>.  The default <code class="filename">locale.xml</code> file is in the folder <code class="filename">[Program Files]\Keyman\Keyman Desktop 10.0\xml\</code>.</p><h3><a name="id562944"></a>Online Locale Editor</h3><p>The recommended method for editing a locale file is to use the Online Editor, available on the
  <a class="ulink" href="http://www.keyman.com/keyman/support/locale/" target="_blank">Keyman Website</a>.</p><h3><a name="id562959"></a>First steps to creating a translation</h3><div class="orderedlist"><ol type="1"><li><p>Find the language code for your translation</p><p>Use the <a class="ulink" href="http://www.loc.gov/standards/iso639-2/" target="_blank">ISO 639-2</a> or <a class="ulink" href="http://www.sil.org/iso639-3/" target="_blank">ISO 639-3</a> language code (we recommend using the            ISO 639-3 codes as many Keyman keyboard layouts support languages not included in ISO 639-2!).</p></li><li><p>Create a folder for the translated locale.xml file and copy the default locale.xml into it</p><p>The folder should be called: <code class="filename">[Program Files]\Keyman\Keyman Desktop 10.0\locale\<strong class="userinput"><code>langcode</code></strong></code></p></li></ol></div><h3><a name="id563026"></a>File Format</h3><p>The file is an XML file, with a few different elements:</p><p>
    </p><div class="itemizedlist"><ul type="disc"><li><p>Entity declarations: these are at the start of the file and define commonly repeated           strings within the locale.xml file itself, for example, the name of the product.</p></li><li><p>Dialog elements: these define the size of a dialog box and, for some dialogs, the elements within the dialog.</p></li><li><p>String elements: every translatable string in the file.</p></li></ul></div><p>
  </p><p>Nearly all strings have identifiers (e.g. SKButtonOK for        the <span class="guibutton">OK</span> button).  We have three different types of strings in the file - plain, HTML and format strings:</p><div class="itemizedlist"><ul type="disc"><li><p>Format strings often include %#:s or %#:d markers that are placeholders for parameters, and should be            included in a translated string.  The order of the markers in the translated string is not important.</p><p>Example: <code class="code">&lt;String Type="FormatString" Id="SKPackageAlreadyInstalled"&gt;A package with the name %0:s is already installed.  Do you want to uninstall it and install the new one?&lt;/String&gt;</code></p></li><li><p>Plain strings must be just that - plain text.  These are all referenced by the XSL templates that           make up the bulk of the Keyman Desktop user interface.  You should not place any HTML tags in these           entries as they will be stripped before display.</p><p>Example: <code class="code">&lt;String Type="PlainText" Id="S_ShortProductName"&gt;Keyman Desktop&lt;/String&lt;</code></p></li><li><p>HTML strings can include tags - there are only a few of these, and they are flagged in the <code class="filename">locale.xml</code> file.  The most obvious of these is in the Welcome screen text.</p><p>Example: <code class="code">&lt;String Type="HTML" Id="S_Splash_Button_Buy" AccessKey="B"&gt;&lt;u&gt;B&lt;/u&gt;uy&lt;/String&gt;</code></p></li></ul></div><p>There is one exception to these formats - the strings on the tray menu do not have identifiers, but        instead use the following format (note that the Caption attribute should not include the &amp;amp; entity).            You can even use these strings to translate the name of keyboard layouts in the tray menu!</p><p>Example:</p><p>
    <code class="code">&lt;String Type="PlainText" Caption="Keyman Configuration..."&gt;localized &amp;amp;text...&lt;/String&gt;</code>
  </p><p>The &amp;amp; entity is used to mark hotkeys in menu items, labels and buttons.  It can be used only       with strings identified as formatted messages (these mostly start with SK) and with the Menu strings.</p><h3><a name="id563084"></a>Hints on editing the file</h3><p>First, edit the file's language information - SKUILanguageName, SKUILanguageNameWithEnglish, and SKLanguageCode.        The SKLanguageCode should be the same as the language code you chose earlier.  You will also see a String with       id SKDefaultLanguageCode.  For Keyman Desktop, this should remain "en" for all translations.  When developing a        custom product using the Keyman Developer Branding Kit, you may change your product's default language, and this       would then entail changing SKDefaultLanguageCode.</p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>Any entries missing from the translated locale.xml will be retrieved from the default file.</p></div><h3><a name="id563141"></a>Editing other files in the XML folder</h3><p>If you find that you need to do more work on the user interface, you can always copy the other files        from the default xml folder into your locale folder, and edit them directly.  Note        that the XSL file for each dialog (e.g. activate.xsl, or keyman.xsl) references other files - these        other files must also be copied to the locale folder: 	  <code class="filename">[Program Files]\Keyman\Keyman Desktop 10.0\locale\<strong class="userinput"><code>langcode</code></strong></code></p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>The format and organisation of these files is complex.  More details are available in the Keyman Developer help files.</p></div><h3><a name="id563142"></a>Related Topics</h3><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="start_locale.php" title="How To - Set the Language for Keyman Desktop Menus">How To - Set the Language for Keyman Desktop Menus</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="advanced_proxy_config.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="advanced.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="advanced_tsf.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Proxy Configuration </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Text Services Framework</td></tr></table></div>
