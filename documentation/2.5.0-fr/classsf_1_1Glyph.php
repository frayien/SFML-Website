<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Glyph Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Glyph.php">Glyph</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="classsf_1_1Glyph-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Glyph Class Reference<div class="ingroups"><a class="el" href="group__graphics.php">Graphics module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Structure describing a glyph.  
 <a href="classsf_1_1Glyph.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Glyph_8hpp_source.php">Glyph.hpp</a>&gt;</code></p>
<div class="dynheader">
Collaboration diagram for sf::Glyph:</div>
<div class="dyncontent">
<div class="center"><img src="classsf_1_1Glyph__coll__graph.png" border="0" usemap="#sf_1_1Glyph_coll__map" alt="Collaboration graph"/></div>
<map name="sf_1_1Glyph_coll__map" id="sf_1_1Glyph_coll__map">
</map>
<center><span class="legend">[<a href="graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ab15cfc37eb7b40a94b3b3aedf934010b"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Glyph.php#ab15cfc37eb7b40a94b3b3aedf934010b">Glyph</a> ()</td></tr>
<tr class="memdesc:ab15cfc37eb7b40a94b3b3aedf934010b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#ab15cfc37eb7b40a94b3b3aedf934010b">More...</a><br /></td></tr>
<tr class="separator:ab15cfc37eb7b40a94b3b3aedf934010b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:aeac19b97ec11409147191606b784deda"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Glyph.php#aeac19b97ec11409147191606b784deda">advance</a></td></tr>
<tr class="memdesc:aeac19b97ec11409147191606b784deda"><td class="mdescLeft">&#160;</td><td class="mdescRight">Offset to move horizontally to the next character.  <a href="#aeac19b97ec11409147191606b784deda">More...</a><br /></td></tr>
<tr class="separator:aeac19b97ec11409147191606b784deda"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6f3c892093167914adc31e52e5923f4b"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Rect.php">FloatRect</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Glyph.php#a6f3c892093167914adc31e52e5923f4b">bounds</a></td></tr>
<tr class="memdesc:a6f3c892093167914adc31e52e5923f4b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Bounding rectangle of the glyph, in coordinates relative to the baseline.  <a href="#a6f3c892093167914adc31e52e5923f4b">More...</a><br /></td></tr>
<tr class="separator:a6f3c892093167914adc31e52e5923f4b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0d502d326449f8c49011ed91d2805f5b"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Rect.php">IntRect</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Glyph.php#a0d502d326449f8c49011ed91d2805f5b">textureRect</a></td></tr>
<tr class="memdesc:a0d502d326449f8c49011ed91d2805f5b"><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. ">Texture</a> coordinates of the glyph inside the font's texture.  <a href="#a0d502d326449f8c49011ed91d2805f5b">More...</a><br /></td></tr>
<tr class="separator:a0d502d326449f8c49011ed91d2805f5b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Structure describing a glyph. </p>
<p>A glyph is the visual representation of a character.</p>
<p>The <a class="el" href="classsf_1_1Glyph.php" title="Structure describing a glyph. ">sf::Glyph</a> structure provides the information needed to handle the glyph: </p><ul>
<li>its coordinates in the font's texture </li>
<li>its bounding rectangle </li>
<li>the offset to apply to get the starting position of the next glyph</li>
</ul>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Font.php" title="Class for loading and manipulating character fonts. ">sf::Font</a> </dd></dl>

<p class="definition">Definition at line <a class="el" href="Glyph_8hpp_source.php#l00041">41</a> of file <a class="el" href="Glyph_8hpp_source.php">Glyph.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="ab15cfc37eb7b40a94b3b3aedf934010b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab15cfc37eb7b40a94b3b3aedf934010b">&#9670;&nbsp;</a></span>Glyph()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::Glyph::Glyph </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Default constructor. </p>

<p class="definition">Definition at line <a class="el" href="Glyph_8hpp_source.php#l00049">49</a> of file <a class="el" href="Glyph_8hpp_source.php">Glyph.hpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a id="aeac19b97ec11409147191606b784deda"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aeac19b97ec11409147191606b784deda">&#9670;&nbsp;</a></span>advance</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::Glyph::advance</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Offset to move horizontally to the next character. </p>

<p class="definition">Definition at line <a class="el" href="Glyph_8hpp_source.php#l00054">54</a> of file <a class="el" href="Glyph_8hpp_source.php">Glyph.hpp</a>.</p>

</div>
</div>
<a id="a6f3c892093167914adc31e52e5923f4b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6f3c892093167914adc31e52e5923f4b">&#9670;&nbsp;</a></span>bounds</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Rect.php">FloatRect</a> sf::Glyph::bounds</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Bounding rectangle of the glyph, in coordinates relative to the baseline. </p>

<p class="definition">Definition at line <a class="el" href="Glyph_8hpp_source.php#l00055">55</a> of file <a class="el" href="Glyph_8hpp_source.php">Glyph.hpp</a>.</p>

</div>
</div>
<a id="a0d502d326449f8c49011ed91d2805f5b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0d502d326449f8c49011ed91d2805f5b">&#9670;&nbsp;</a></span>textureRect</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Rect.php">IntRect</a> sf::Glyph::textureRect</td>
        </tr>
      </table>
</div><div class="memdoc">

<p><a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. ">Texture</a> coordinates of the glyph inside the font's texture. </p>

<p class="definition">Definition at line <a class="el" href="Glyph_8hpp_source.php#l00056">56</a> of file <a class="el" href="Glyph_8hpp_source.php">Glyph.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Glyph_8hpp_source.php">Glyph.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
