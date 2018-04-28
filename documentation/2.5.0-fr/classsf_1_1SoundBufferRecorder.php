<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SoundBufferRecorder Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="inherits.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SoundBufferRecorder.php">SoundBufferRecorder</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="classsf_1_1SoundBufferRecorder-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::SoundBufferRecorder Class Reference<div class="ingroups"><a class="el" href="group__audio.php">Audio module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Specialized <a class="el" href="classsf_1_1SoundRecorder.php" title="Abstract base class for capturing sound data. ">SoundRecorder</a> which stores the captured audio data into a sound buffer.  
 <a href="classsf_1_1SoundBufferRecorder.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="SoundBufferRecorder_8hpp_source.php">SoundBufferRecorder.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::SoundBufferRecorder:</div>
<div class="dyncontent">
<div class="center"><img src="classsf_1_1SoundBufferRecorder__inherit__graph.png" border="0" usemap="#sf_1_1SoundBufferRecorder_inherit__map" alt="Inheritance graph"/></div>
<map name="sf_1_1SoundBufferRecorder_inherit__map" id="sf_1_1SoundBufferRecorder_inherit__map">
</map>
<center><span class="legend">[<a href="graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for sf::SoundBufferRecorder:</div>
<div class="dyncontent">
<div class="center"><img src="classsf_1_1SoundBufferRecorder__coll__graph.png" border="0" usemap="#sf_1_1SoundBufferRecorder_coll__map" alt="Collaboration graph"/></div>
<map name="sf_1_1SoundBufferRecorder_coll__map" id="sf_1_1SoundBufferRecorder_coll__map">
</map>
<center><span class="legend">[<a href="graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a350f7f885ccfd12b4c6c120c23695637"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBufferRecorder.php#a350f7f885ccfd12b4c6c120c23695637">~SoundBufferRecorder</a> ()</td></tr>
<tr class="memdesc:a350f7f885ccfd12b4c6c120c23695637"><td class="mdescLeft">&#160;</td><td class="mdescRight">destructor  <a href="#a350f7f885ccfd12b4c6c120c23695637">More...</a><br /></td></tr>
<tr class="separator:a350f7f885ccfd12b4c6c120c23695637"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa3a8d7a612cb885ed2f58bb86aa24acb"><td class="memItemLeft" align="right" valign="top">const <a class="el" href="classsf_1_1SoundBuffer.php">SoundBuffer</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBufferRecorder.php#aa3a8d7a612cb885ed2f58bb86aa24acb">getBuffer</a> () const</td></tr>
<tr class="memdesc:aa3a8d7a612cb885ed2f58bb86aa24acb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the sound buffer containing the captured audio data.  <a href="#aa3a8d7a612cb885ed2f58bb86aa24acb">More...</a><br /></td></tr>
<tr class="separator:aa3a8d7a612cb885ed2f58bb86aa24acb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a715f0fd2f228c83d79aaedca562ae51f"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a715f0fd2f228c83d79aaedca562ae51f">start</a> (unsigned int sampleRate=44100)</td></tr>
<tr class="memdesc:a715f0fd2f228c83d79aaedca562ae51f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Start the capture.  <a href="#a715f0fd2f228c83d79aaedca562ae51f">More...</a><br /></td></tr>
<tr class="separator:a715f0fd2f228c83d79aaedca562ae51f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8d9c8346aa9aa409cfed4a1101159c4c"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a8d9c8346aa9aa409cfed4a1101159c4c">stop</a> ()</td></tr>
<tr class="memdesc:a8d9c8346aa9aa409cfed4a1101159c4c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Stop the capture.  <a href="#a8d9c8346aa9aa409cfed4a1101159c4c">More...</a><br /></td></tr>
<tr class="separator:a8d9c8346aa9aa409cfed4a1101159c4c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aed292c297a3e0d627db4eb5c18f58c44"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#aed292c297a3e0d627db4eb5c18f58c44">getSampleRate</a> () const</td></tr>
<tr class="memdesc:aed292c297a3e0d627db4eb5c18f58c44"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the sample rate.  <a href="#aed292c297a3e0d627db4eb5c18f58c44">More...</a><br /></td></tr>
<tr class="separator:aed292c297a3e0d627db4eb5c18f58c44"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8eb3e473292c16e874322815836d3cd3"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a8eb3e473292c16e874322815836d3cd3">setDevice</a> (const std::string &amp;name)</td></tr>
<tr class="memdesc:a8eb3e473292c16e874322815836d3cd3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the audio capture device.  <a href="#a8eb3e473292c16e874322815836d3cd3">More...</a><br /></td></tr>
<tr class="separator:a8eb3e473292c16e874322815836d3cd3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab16cd53c6884cbf3380c017cee72ba81"><td class="memItemLeft" align="right" valign="top">const std::string &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#ab16cd53c6884cbf3380c017cee72ba81">getDevice</a> () const</td></tr>
<tr class="memdesc:ab16cd53c6884cbf3380c017cee72ba81"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the name of the current audio capture device.  <a href="#ab16cd53c6884cbf3380c017cee72ba81">More...</a><br /></td></tr>
<tr class="separator:ab16cd53c6884cbf3380c017cee72ba81"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae4e22ba67d12a74966eb05fad55a317c"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#ae4e22ba67d12a74966eb05fad55a317c">setChannelCount</a> (unsigned int channelCount)</td></tr>
<tr class="memdesc:ae4e22ba67d12a74966eb05fad55a317c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the channel count of the audio capture device.  <a href="#ae4e22ba67d12a74966eb05fad55a317c">More...</a><br /></td></tr>
<tr class="separator:ae4e22ba67d12a74966eb05fad55a317c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a610e98e7a73b316ce26b7c55234f86e9"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a610e98e7a73b316ce26b7c55234f86e9">getChannelCount</a> () const</td></tr>
<tr class="memdesc:a610e98e7a73b316ce26b7c55234f86e9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the number of channels used by this recorder.  <a href="#a610e98e7a73b316ce26b7c55234f86e9">More...</a><br /></td></tr>
<tr class="separator:a610e98e7a73b316ce26b7c55234f86e9"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a26198c5c11efcd61f426f326fe314afe"><td class="memItemLeft" align="right" valign="top">static std::vector&lt; std::string &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a26198c5c11efcd61f426f326fe314afe">getAvailableDevices</a> ()</td></tr>
<tr class="memdesc:a26198c5c11efcd61f426f326fe314afe"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get a list of the names of all available audio capture devices.  <a href="#a26198c5c11efcd61f426f326fe314afe">More...</a><br /></td></tr>
<tr class="separator:a26198c5c11efcd61f426f326fe314afe"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad1d450a80642dab4b632999d72a1bf23"><td class="memItemLeft" align="right" valign="top">static std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#ad1d450a80642dab4b632999d72a1bf23">getDefaultDevice</a> ()</td></tr>
<tr class="memdesc:ad1d450a80642dab4b632999d72a1bf23"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the name of the default audio capture device.  <a href="#ad1d450a80642dab4b632999d72a1bf23">More...</a><br /></td></tr>
<tr class="separator:ad1d450a80642dab4b632999d72a1bf23"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aab2bd0fee9e48d6cfd449b1cb078ce5a"><td class="memItemLeft" align="right" valign="top">static bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#aab2bd0fee9e48d6cfd449b1cb078ce5a">isAvailable</a> ()</td></tr>
<tr class="memdesc:aab2bd0fee9e48d6cfd449b1cb078ce5a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check if the system supports audio capture.  <a href="#aab2bd0fee9e48d6cfd449b1cb078ce5a">More...</a><br /></td></tr>
<tr class="separator:aab2bd0fee9e48d6cfd449b1cb078ce5a"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:a531a7445fc8a48eaf9fc039c83f17c6f"><td class="memItemLeft" align="right" valign="top">virtual bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBufferRecorder.php#a531a7445fc8a48eaf9fc039c83f17c6f">onStart</a> ()</td></tr>
<tr class="memdesc:a531a7445fc8a48eaf9fc039c83f17c6f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Start capturing audio data.  <a href="#a531a7445fc8a48eaf9fc039c83f17c6f">More...</a><br /></td></tr>
<tr class="separator:a531a7445fc8a48eaf9fc039c83f17c6f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9ceb94de14632ae8c1b78faf603b4767"><td class="memItemLeft" align="right" valign="top">virtual bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBufferRecorder.php#a9ceb94de14632ae8c1b78faf603b4767">onProcessSamples</a> (const Int16 *samples, std::size_t sampleCount)</td></tr>
<tr class="memdesc:a9ceb94de14632ae8c1b78faf603b4767"><td class="mdescLeft">&#160;</td><td class="mdescRight">Process a new chunk of recorded samples.  <a href="#a9ceb94de14632ae8c1b78faf603b4767">More...</a><br /></td></tr>
<tr class="separator:a9ceb94de14632ae8c1b78faf603b4767"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab8e53849312413431873a5869d509f1e"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundBufferRecorder.php#ab8e53849312413431873a5869d509f1e">onStop</a> ()</td></tr>
<tr class="memdesc:ab8e53849312413431873a5869d509f1e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Stop capturing audio data.  <a href="#ab8e53849312413431873a5869d509f1e">More...</a><br /></td></tr>
<tr class="separator:ab8e53849312413431873a5869d509f1e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a85b7fb8a86c08b5084f8f142767bccf6"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundRecorder.php#a85b7fb8a86c08b5084f8f142767bccf6">setProcessingInterval</a> (<a class="el" href="classsf_1_1Time.php">Time</a> interval)</td></tr>
<tr class="memdesc:a85b7fb8a86c08b5084f8f142767bccf6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the processing interval.  <a href="#a85b7fb8a86c08b5084f8f142767bccf6">More...</a><br /></td></tr>
<tr class="separator:a85b7fb8a86c08b5084f8f142767bccf6"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Specialized <a class="el" href="classsf_1_1SoundRecorder.php" title="Abstract base class for capturing sound data. ">SoundRecorder</a> which stores the captured audio data into a sound buffer. </p>
<p><a class="el" href="classsf_1_1SoundBufferRecorder.php" title="Specialized SoundRecorder which stores the captured audio data into a sound buffer. ">sf::SoundBufferRecorder</a> allows to access a recorded sound through a <a class="el" href="classsf_1_1SoundBuffer.php" title="Storage for audio samples defining a sound. ">sf::SoundBuffer</a>, so that it can be played, saved to a file, etc.</p>
<p>It has the same simple interface as its base class (<a class="el" href="classsf_1_1SoundRecorder.php#a715f0fd2f228c83d79aaedca562ae51f" title="Start the capture. ">start()</a>, <a class="el" href="classsf_1_1SoundRecorder.php#a8d9c8346aa9aa409cfed4a1101159c4c" title="Stop the capture. ">stop()</a>) and adds a function to retrieve the recorded sound buffer (<a class="el" href="classsf_1_1SoundBufferRecorder.php#aa3a8d7a612cb885ed2f58bb86aa24acb" title="Get the sound buffer containing the captured audio data. ">getBuffer()</a>).</p>
<p>As usual, don't forget to call the <a class="el" href="classsf_1_1SoundRecorder.php#aab2bd0fee9e48d6cfd449b1cb078ce5a" title="Check if the system supports audio capture. ">isAvailable()</a> function before using this class (see <a class="el" href="classsf_1_1SoundRecorder.php" title="Abstract base class for capturing sound data. ">sf::SoundRecorder</a> for more details about this).</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="keywordflow">if</span> (<a class="code" href="classsf_1_1SoundRecorder.php#aab2bd0fee9e48d6cfd449b1cb078ce5a">sf::SoundBufferRecorder::isAvailable</a>())</div><div class="line">{</div><div class="line">    <span class="comment">// Record some audio data</span></div><div class="line">    <a class="code" href="classsf_1_1SoundBufferRecorder.php">sf::SoundBufferRecorder</a> recorder;</div><div class="line">    recorder.<a class="code" href="classsf_1_1SoundRecorder.php#a715f0fd2f228c83d79aaedca562ae51f">start</a>();</div><div class="line">    ...</div><div class="line">    recorder.<a class="code" href="classsf_1_1SoundRecorder.php#a8d9c8346aa9aa409cfed4a1101159c4c">stop</a>();</div><div class="line"></div><div class="line">    <span class="comment">// Get the buffer containing the captured audio data</span></div><div class="line">    <span class="keyword">const</span> <a class="code" href="classsf_1_1SoundBuffer.php">sf::SoundBuffer</a>&amp; buffer = recorder.<a class="code" href="classsf_1_1SoundBufferRecorder.php#aa3a8d7a612cb885ed2f58bb86aa24acb">getBuffer</a>();</div><div class="line"></div><div class="line">    <span class="comment">// Save it to a file (for example...)</span></div><div class="line">    buffer.<a class="code" href="classsf_1_1SoundBuffer.php#aade64260c6375580a085314a30be007e">saveToFile</a>(<span class="stringliteral">&quot;my_record.ogg&quot;</span>);</div><div class="line">}</div></div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundRecorder.php" title="Abstract base class for capturing sound data. ">sf::SoundRecorder</a> </dd></dl>

<p class="definition">Definition at line <a class="el" href="SoundBufferRecorder_8hpp_source.php#l00044">44</a> of file <a class="el" href="SoundBufferRecorder_8hpp_source.php">SoundBufferRecorder.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a350f7f885ccfd12b4c6c120c23695637"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a350f7f885ccfd12b4c6c120c23695637">&#9670;&nbsp;</a></span>~SoundBufferRecorder()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::SoundBufferRecorder::~SoundBufferRecorder </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>destructor </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a26198c5c11efcd61f426f326fe314afe"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a26198c5c11efcd61f426f326fe314afe">&#9670;&nbsp;</a></span>getAvailableDevices()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static std::vector&lt;std::string&gt; sf::SoundRecorder::getAvailableDevices </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get a list of the names of all available audio capture devices. </p>
<p>This function returns a vector of strings, containing the names of all available audio capture devices.</p>
<dl class="section return"><dt>Returns</dt><dd>A vector of strings containing the names </dd></dl>

</div>
</div>
<a id="aa3a8d7a612cb885ed2f58bb86aa24acb"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa3a8d7a612cb885ed2f58bb86aa24acb">&#9670;&nbsp;</a></span>getBuffer()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const <a class="el" href="classsf_1_1SoundBuffer.php">SoundBuffer</a>&amp; sf::SoundBufferRecorder::getBuffer </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the sound buffer containing the captured audio data. </p>
<p>The sound buffer is valid only after the capture has ended. This function provides a read-only access to the internal sound buffer, but it can be copied if you need to make any modification to it.</p>
<dl class="section return"><dt>Returns</dt><dd>Read-only access to the sound buffer </dd></dl>

</div>
</div>
<a id="a610e98e7a73b316ce26b7c55234f86e9"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a610e98e7a73b316ce26b7c55234f86e9">&#9670;&nbsp;</a></span>getChannelCount()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::SoundRecorder::getChannelCount </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the number of channels used by this recorder. </p>
<p>Currently only mono and stereo are supported, so the value is either 1 (for mono) or 2 (for stereo).</p>
<dl class="section return"><dt>Returns</dt><dd>Number of channels</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundRecorder.php#ae4e22ba67d12a74966eb05fad55a317c" title="Set the channel count of the audio capture device. ">setChannelCount</a> </dd></dl>

</div>
</div>
<a id="ad1d450a80642dab4b632999d72a1bf23"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad1d450a80642dab4b632999d72a1bf23">&#9670;&nbsp;</a></span>getDefaultDevice()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static std::string sf::SoundRecorder::getDefaultDevice </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the name of the default audio capture device. </p>
<p>This function returns the name of the default audio capture device. If none is available, an empty string is returned.</p>
<dl class="section return"><dt>Returns</dt><dd>The name of the default audio capture device </dd></dl>

</div>
</div>
<a id="ab16cd53c6884cbf3380c017cee72ba81"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab16cd53c6884cbf3380c017cee72ba81">&#9670;&nbsp;</a></span>getDevice()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const std::string&amp; sf::SoundRecorder::getDevice </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the name of the current audio capture device. </p>
<dl class="section return"><dt>Returns</dt><dd>The name of the current audio capture device </dd></dl>

</div>
</div>
<a id="aed292c297a3e0d627db4eb5c18f58c44"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aed292c297a3e0d627db4eb5c18f58c44">&#9670;&nbsp;</a></span>getSampleRate()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::SoundRecorder::getSampleRate </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the sample rate. </p>
<p>The sample rate defines the number of audio samples captured per second. The higher, the better the quality (for example, 44100 samples/sec is CD quality).</p>
<dl class="section return"><dt>Returns</dt><dd>Sample rate, in samples per second </dd></dl>

</div>
</div>
<a id="aab2bd0fee9e48d6cfd449b1cb078ce5a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aab2bd0fee9e48d6cfd449b1cb078ce5a">&#9670;&nbsp;</a></span>isAvailable()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static bool sf::SoundRecorder::isAvailable </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Check if the system supports audio capture. </p>
<p>This function should always be called before using the audio capture features. If it returns false, then any attempt to use <a class="el" href="classsf_1_1SoundRecorder.php" title="Abstract base class for capturing sound data. ">sf::SoundRecorder</a> or one of its derived classes will fail.</p>
<dl class="section return"><dt>Returns</dt><dd>True if audio capture is supported, false otherwise </dd></dl>

</div>
</div>
<a id="a9ceb94de14632ae8c1b78faf603b4767"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9ceb94de14632ae8c1b78faf603b4767">&#9670;&nbsp;</a></span>onProcessSamples()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual bool sf::SoundBufferRecorder::onProcessSamples </td>
          <td>(</td>
          <td class="paramtype">const Int16 *&#160;</td>
          <td class="paramname"><em>samples</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>sampleCount</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Process a new chunk of recorded samples. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">samples</td><td>Pointer to the new chunk of recorded samples </td></tr>
    <tr><td class="paramname">sampleCount</td><td>Number of samples pointed by <em>samples</em> </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True to continue the capture, or false to stop it </dd></dl>

<p>Implements <a class="el" href="classsf_1_1SoundRecorder.php#a2670124cbe7a87c7e46b4840807f4fd7">sf::SoundRecorder</a>.</p>

</div>
</div>
<a id="a531a7445fc8a48eaf9fc039c83f17c6f"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a531a7445fc8a48eaf9fc039c83f17c6f">&#9670;&nbsp;</a></span>onStart()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual bool sf::SoundBufferRecorder::onStart </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Start capturing audio data. </p>
<dl class="section return"><dt>Returns</dt><dd>True to start the capture, or false to abort it </dd></dl>

<p>Reimplemented from <a class="el" href="classsf_1_1SoundRecorder.php#a7af418fb036201d3f85745bef78ce77f">sf::SoundRecorder</a>.</p>

</div>
</div>
<a id="ab8e53849312413431873a5869d509f1e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab8e53849312413431873a5869d509f1e">&#9670;&nbsp;</a></span>onStop()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual void sf::SoundBufferRecorder::onStop </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Stop capturing audio data. </p>

<p>Reimplemented from <a class="el" href="classsf_1_1SoundRecorder.php#aefc36138ca1e96c658301280e4a31b64">sf::SoundRecorder</a>.</p>

</div>
</div>
<a id="ae4e22ba67d12a74966eb05fad55a317c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae4e22ba67d12a74966eb05fad55a317c">&#9670;&nbsp;</a></span>setChannelCount()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundRecorder::setChannelCount </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>channelCount</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Set the channel count of the audio capture device. </p>
<p>This method allows you to specify the number of channels used for recording. Currently only 16-bit mono and 16-bit stereo are supported.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">channelCount</td><td>Number of channels. Currently only mono (1) and stereo (2) are supported.</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundRecorder.php#a610e98e7a73b316ce26b7c55234f86e9" title="Get the number of channels used by this recorder. ">getChannelCount</a> </dd></dl>

</div>
</div>
<a id="a8eb3e473292c16e874322815836d3cd3"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8eb3e473292c16e874322815836d3cd3">&#9670;&nbsp;</a></span>setDevice()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SoundRecorder::setDevice </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>name</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Set the audio capture device. </p>
<p>This function sets the audio capture device to the device with the given <em>name</em>. It can be called on the fly (i.e: while recording). If you do so while recording and opening the device fails, it stops the recording.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">name</td><td>The name of the audio capture device</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True, if it was able to set the requested device</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundRecorder.php#a26198c5c11efcd61f426f326fe314afe" title="Get a list of the names of all available audio capture devices. ">getAvailableDevices</a>, <a class="el" href="classsf_1_1SoundRecorder.php#ad1d450a80642dab4b632999d72a1bf23" title="Get the name of the default audio capture device. ">getDefaultDevice</a> </dd></dl>

</div>
</div>
<a id="a85b7fb8a86c08b5084f8f142767bccf6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a85b7fb8a86c08b5084f8f142767bccf6">&#9670;&nbsp;</a></span>setProcessingInterval()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundRecorder::setProcessingInterval </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Time.php">Time</a>&#160;</td>
          <td class="paramname"><em>interval</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Set the processing interval. </p>
<p>The processing interval controls the period between calls to the onProcessSamples function. You may want to use a small interval if you want to process the recorded data in real time, for example.</p>
<p>Note: this is only a hint, the actual period may vary. So don't rely on this parameter to implement precise timing.</p>
<p>The default processing interval is 100 ms.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">interval</td><td>Processing interval </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a715f0fd2f228c83d79aaedca562ae51f"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a715f0fd2f228c83d79aaedca562ae51f">&#9670;&nbsp;</a></span>start()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SoundRecorder::start </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>sampleRate</em> = <code>44100</code></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Start the capture. </p>
<p>The <em>sampleRate</em> parameter defines the number of audio samples captured per second. The higher, the better the quality (for example, 44100 samples/sec is CD quality). This function uses its own thread so that it doesn't block the rest of the program while the capture runs. Please note that only one capture can happen at the same time. You can select which capture device will be used, by passing the name to the <a class="el" href="classsf_1_1SoundRecorder.php#a8eb3e473292c16e874322815836d3cd3" title="Set the audio capture device. ">setDevice()</a> method. If none was selected before, the default capture device will be used. You can get a list of the names of all available capture devices by calling <a class="el" href="classsf_1_1SoundRecorder.php#a26198c5c11efcd61f426f326fe314afe" title="Get a list of the names of all available audio capture devices. ">getAvailableDevices()</a>.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">sampleRate</td><td>Desired capture rate, in number of samples per second</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True, if start of capture was successful</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundRecorder.php#a8d9c8346aa9aa409cfed4a1101159c4c" title="Stop the capture. ">stop</a>, <a class="el" href="classsf_1_1SoundRecorder.php#a26198c5c11efcd61f426f326fe314afe" title="Get a list of the names of all available audio capture devices. ">getAvailableDevices</a> </dd></dl>

</div>
</div>
<a id="a8d9c8346aa9aa409cfed4a1101159c4c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8d9c8346aa9aa409cfed4a1101159c4c">&#9670;&nbsp;</a></span>stop()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SoundRecorder::stop </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inherited</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Stop the capture. </p>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1SoundRecorder.php#a715f0fd2f228c83d79aaedca562ae51f" title="Start the capture. ">start</a> </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="SoundBufferRecorder_8hpp_source.php">SoundBufferRecorder.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
