<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'stateForKeyboard';
    $param1 = 'keyboardID';
    $methodSyntax1 = sprintf('%s.%s(%s: String)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.stateForKeyboard()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method returns the current state for a keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param1 ?></code></dt>
    <dd>ID of the keyboard.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the keyboard state: <code>downloading</code>, <code>needsDownload</code>, <code>needsUpdate</code>,
    or <code>upToDate</code>.</p>

<h2 id="Description" name="Description">Description</h2>
<p>This syntax can be used for getting the state of a keyboard.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>let kbState = Manager.shared.stateForKeyboard(withID: kb.id)
if kbState == .needsUpdate {
  if !kbIDs.contains(kb.id) {
    kbIDs.insert(kb.id)
    updateQueue!.append(kb)
  }
}
</code></pre>

