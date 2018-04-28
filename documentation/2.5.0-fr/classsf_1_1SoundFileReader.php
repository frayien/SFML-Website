<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SoundFileReader Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SoundFileReader.php">SoundFileReader</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Classes</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1SoundFileReader-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::SoundFileReader Class Reference<span class="mlabels"><span class="mlabel">abstract</span></span><div class="ingroups"><a class="el" href="group__audio.php">Audio module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Abstract base class for sound file decoding.  
 <a href="classsf_1_1SoundFileReader.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="SoundFileReader_8hpp_source.php">SoundFileReader.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1SoundFileReader_1_1Info.php">Info</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Structure holding the audio properties of a sound file.  <a href="structsf_1_1SoundFileReader_1_1Info.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a34163297f302d15818c76b54f815acc8"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileReader.php#a34163297f302d15818c76b54f815acc8">~SoundFileReader</a> ()</td></tr>
<tr class="memdesc:a34163297f302d15818c76b54f815acc8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Virtual destructor.  <a href="#a34163297f302d15818c76b54f815acc8">More...</a><br /></td></tr>
<tr class="separator:a34163297f302d15818c76b54f815acc8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa1d2fee2ba8f359c833ab74590d55935"><td class="memItemLeft" align="right" valign="top">virtual bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileReader.php#aa1d2fee2ba8f359c833ab74590d55935">open</a> (<a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;stream, <a class="el" href="structsf_1_1SoundFileReader_1_1Info.php">Info</a> &amp;info)=0</td></tr>
<tr class="memdesc:aa1d2fee2ba8f359c833ab74590d55935"><td class="mdescLeft">&#160;</td><td class="mdescRight">Open a sound file for reading.  <a href="#aa1d2fee2ba8f359c833ab74590d55935">More...</a><br /></td></tr>
<tr class="separator:aa1d2fee2ba8f359c833ab74590d55935"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1e18ade5ffe882bdfa20a2ebe7e2b015"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileReader.php#a1e18ade5ffe882bdfa20a2ebe7e2b015">seek</a> (Uint64 sampleOffset)=0</td></tr>
<tr class="memdesc:a1e18ade5ffe882bdfa20a2ebe7e2b015"><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the current read position to the given sample offset.  <a href="#a1e18ade5ffe882bdfa20a2ebe7e2b015">More...</a><br /></td></tr>
<tr class="separator:a1e18ade5ffe882bdfa20a2ebe7e2b015"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3b7d86769ea07e24e7b0f0486bed7591"><td class="memItemLeft" align="right" valign="top">virtual Uint64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SoundFileReader.php#a3b7d86769ea07e24e7b0f0486bed7591">read</a> (Int16 *samples, Uint64 maxCount)=0</td></tr>
<tr class="memdesc:a3b7d86769ea07e24e7b0f0486bed7591"><td class="mdescLeft">&#160;</td><td class="mdescRight">Read audio samples from the open file.  <a href="#a3b7d86769ea07e24e7b0f0486bed7591">More...</a><br /></td></tr>
<tr class="separator:a3b7d86769ea07e24e7b0f0486bed7591"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Abstract base class for sound file decoding. </p>
<p>This class allows users to read audio file formats not natively supported by SFML, and thus extend the set of supported readable audio formats.</p>
<p>A valid sound file reader must override the open, seek and write functions, as well as providing a static check function; the latter is used by SFML to find a suitable writer for a given input file.</p>
<p>To register a new reader, use the <a class="el" href="classsf_1_1SoundFileFactory.php#aeee396bfdbb6ac24c57e5c73c30ec105" title="Register a new reader. ">sf::SoundFileFactory::registerReader</a> template function.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="keyword">class </span>MySoundFileReader : <span class="keyword">public</span> <a class="code" href="classsf_1_1SoundFileReader.php">sf::SoundFileReader</a></div><div class="line">{</div><div class="line"><span class="keyword">public</span>:</div><div class="line"></div><div class="line">    <span class="keyword">static</span> <span class="keywordtype">bool</span> check(<a class="code" href="classsf_1_1InputStream.php">sf::InputStream</a>&amp; stream)</div><div class="line">    {</div><div class="line">        <span class="comment">// typically, read the first few header bytes and check fields that identify the format</span></div><div class="line">        <span class="comment">// return true if the reader can handle the format</span></div><div class="line">    }</div><div class="line"></div><div class="line">    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> <a class="code" href="classsf_1_1SoundFileReader.php#aa1d2fee2ba8f359c833ab74590d55935">open</a>(<a class="code" href="classsf_1_1InputStream.php">sf::InputStream</a>&amp; stream, Info&amp; info)</div><div class="line">    {</div><div class="line">        <span class="comment">// read the sound file header and fill the sound attributes</span></div><div class="line">        <span class="comment">// (channel count, sample count and sample rate)</span></div><div class="line">        <span class="comment">// return true on success</span></div><div class="line">    }</div><div class="line"></div><div class="line">    <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="classsf_1_1SoundFileReader.php#a1e18ade5ffe882bdfa20a2ebe7e2b015">seek</a>(sf::Uint64 sampleOffset)</div><div class="line">    {</div><div class="line">        <span class="comment">// advance to the sampleOffset-th sample from the beginning of the sound</span></div><div class="line">    }</div><div class="line"></div><div class="line">    <span class="keyword">virtual</span> sf::Uint64 <a class="code" href="classsf_1_1SoundFileReader.php#a3b7d86769ea07e24e7b0f0486bed7591">read</a>(sf::Int16* samples, sf::Uint64 maxCount)</div><div class="line">    {</div><div class="line">        <span class="comment">// read up to &#39;maxCount&#39; samples into the &#39;samples&#39; array,</span></div><div class="line">        <span class="comment">// convert them (for example from normalized float) if they are not stored</span></div><div class="line">        <span class="comment">// as 16-bits signed integers in the file</span></div><div class="line">        <span class="comment">// return the actual number of samples read</span></div><div class="line">    }</div><div class="line">};</div><div class="line"></div><div class="line">sf::SoundFileFactory::registerReader&lt;MySoundFileReader&gt;();</div></div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1InputSoundFile.php" title="Provide read access to sound files. ">sf::InputSoundFile</a>, <a class="el" href="classsf_1_1SoundFileFactory.php" title="Manages and instantiates sound file readers and writers. ">sf::SoundFileFactory</a>, <a class="el" href="classsf_1_1SoundFileWriter.php" title="Abstract base class for sound file encoding. ">sf::SoundFileWriter</a> </dd></dl>

<p class="definition">Definition at line <a class="el" href="SoundFileReader_8hpp_source.php#l00043">43</a> of file <a class="el" href="SoundFileReader_8hpp_source.php">SoundFileReader.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a34163297f302d15818c76b54f815acc8"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a34163297f302d15818c76b54f815acc8">&#9670;&nbsp;</a></span>~SoundFileReader()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual sf::SoundFileReader::~SoundFileReader </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Virtual destructor. </p>

<p class="definition">Definition at line <a class="el" href="SoundFileReader_8hpp_source.php#l00062">62</a> of file <a class="el" href="SoundFileReader_8hpp_source.php">SoundFileReader.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="aa1d2fee2ba8f359c833ab74590d55935"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa1d2fee2ba8f359c833ab74590d55935">&#9670;&nbsp;</a></span>open()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual bool sf::SoundFileReader::open </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;&#160;</td>
          <td class="paramname"><em>stream</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="structsf_1_1SoundFileReader_1_1Info.php">Info</a> &amp;&#160;</td>
          <td class="paramname"><em>info</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Open a sound file for reading. </p>
<p>The provided stream reference is valid as long as the <a class="el" href="classsf_1_1SoundFileReader.php" title="Abstract base class for sound file decoding. ">SoundFileReader</a> is alive, so it is safe to use/store it during the whole lifetime of the reader.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">stream</td><td>Source stream to read from </td></tr>
    <tr><td class="paramname">info</td><td>Structure to fill with the properties of the loaded sound</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the file was successfully opened </dd></dl>

</div>
</div>
<a id="a3b7d86769ea07e24e7b0f0486bed7591"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3b7d86769ea07e24e7b0f0486bed7591">&#9670;&nbsp;</a></span>read()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual Uint64 sf::SoundFileReader::read </td>
          <td>(</td>
          <td class="paramtype">Int16 *&#160;</td>
          <td class="paramname"><em>samples</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint64&#160;</td>
          <td class="paramname"><em>maxCount</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Read audio samples from the open file. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">samples</td><td>Pointer to the sample array to fill </td></tr>
    <tr><td class="paramname">maxCount</td><td>Maximum number of samples to read</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Number of samples actually read (may be less than <em>maxCount</em>) </dd></dl>

</div>
</div>
<a id="a1e18ade5ffe882bdfa20a2ebe7e2b015"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1e18ade5ffe882bdfa20a2ebe7e2b015">&#9670;&nbsp;</a></span>seek()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual void sf::SoundFileReader::seek </td>
          <td>(</td>
          <td class="paramtype">Uint64&#160;</td>
          <td class="paramname"><em>sampleOffset</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Change the current read position to the given sample offset. </p>
<p>The sample offset takes the channels into account. If you have a time offset instead, you can easily find the corresponding sample offset with the following formula: <code>timeInSeconds * sampleRate * channelCount</code> If the given offset exceeds to total number of samples, this function must jump to the end of the file.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">sampleOffset</td><td>Index of the sample to jump to, relative to the beginning </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="SoundFileReader_8hpp_source.php">SoundFileReader.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
