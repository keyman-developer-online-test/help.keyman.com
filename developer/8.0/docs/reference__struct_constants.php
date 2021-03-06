<?php
  require_once('includes/template.php');

  head([
    'title' => "Named Constants"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Named Constants</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__struct_comments.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference__struct_groups.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference__struct_constants">Named Constants</h4></div></div></div><p>
        Named constants allow you to use a descriptive name for a character, instead of its code.  To define a named constant,
        use <code class="code">store(<em class="parameter"><code>name</code></em>) <em class="parameter"><code>code</code></em></code>.  When you wish to refer to the code, use <code class="code">$<em class="parameter"><code>name</code></em></code>.
      </p><p>
        The dollar referencing can only be used with named constants.  You cannot use it for stores that have more than one character
        in them, or for keys or other non-character stores.  Named constants are supported for characters above plane 0.
  </p><p>
    Named constants can also be loaded from a file with the <a class="link" href="reference_includecodes.php" title="includecodes system store">store(&amp;includecodes) statement</a>.
    For instance, the Unicode Character Names can be used by referencing unicodedata.txt.
  </p><h5><a name="id661069"></a>Example</h5><pre class="programlisting">
store(CCedilla) U+00E7
+ [RALT K_C] &gt; $CCedilla
      </pre><h5><a name="id660885"></a>Versions</h5><p>Named constants were introduced in Keyman 6.0.</p><h5><a name="id661227"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference_outs.php" title="outs statement">outs statement</a></p></li><li><p><a class="xref" href="reference_store.php" title="store statement">store statement</a></p></li><li><p><a class="xref" href="reference_includecodes.php" title="includecodes system store">includecodes system store</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__struct_comments.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference__struct_groups.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Comments </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Using Groups</td></tr></table></div>
