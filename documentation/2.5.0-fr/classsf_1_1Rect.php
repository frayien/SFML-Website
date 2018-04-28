<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Rect&lt; T &gt; Class Template Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Rect.php">Rect</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="#related">Related Functions</a> &#124;
<a href="classsf_1_1Rect-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Rect&lt; T &gt; Class Template Reference<div class="ingroups"><a class="el" href="group__graphics.php">Graphics module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Utility class for manipulating 2D axis aligned rectangles.  
 <a href="classsf_1_1Rect.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Rect_8hpp_source.php">Rect.hpp</a>&gt;</code></p>
<div class="dynheader">
Collaboration diagram for sf::Rect&lt; T &gt;:</div>
<div class="dyncontent">
<div class="center"><img src="classsf_1_1Rect__coll__graph.png" border="0" usemap="#sf_1_1Rect_3_01T_01_4_coll__map" alt="Collaboration graph"/></div>
<map name="sf_1_1Rect_3_01T_01_4_coll__map" id="sf_1_1Rect_3_01T_01_4_coll__map">
</map>
<center><span class="legend">[<a href="graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a0f87ebaef9722a6222fd2e04ce8efb37"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#a0f87ebaef9722a6222fd2e04ce8efb37">Rect</a> ()</td></tr>
<tr class="memdesc:a0f87ebaef9722a6222fd2e04ce8efb37"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a0f87ebaef9722a6222fd2e04ce8efb37">More...</a><br /></td></tr>
<tr class="separator:a0f87ebaef9722a6222fd2e04ce8efb37"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a15cdbc5a1aed3a8fc7be1bd5004f19f9"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#a15cdbc5a1aed3a8fc7be1bd5004f19f9">Rect</a> (T rectLeft, T rectTop, T rectWidth, T rectHeight)</td></tr>
<tr class="memdesc:a15cdbc5a1aed3a8fc7be1bd5004f19f9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the rectangle from its coordinates.  <a href="#a15cdbc5a1aed3a8fc7be1bd5004f19f9">More...</a><br /></td></tr>
<tr class="separator:a15cdbc5a1aed3a8fc7be1bd5004f19f9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a27fdf85caa6d12caeeff78913cc59936"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#a27fdf85caa6d12caeeff78913cc59936">Rect</a> (const <a class="el" href="classsf_1_1Vector2.php">Vector2</a>&lt; T &gt; &amp;position, const <a class="el" href="classsf_1_1Vector2.php">Vector2</a>&lt; T &gt; &amp;size)</td></tr>
<tr class="memdesc:a27fdf85caa6d12caeeff78913cc59936"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the rectangle from position and size.  <a href="#a27fdf85caa6d12caeeff78913cc59936">More...</a><br /></td></tr>
<tr class="separator:a27fdf85caa6d12caeeff78913cc59936"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6fff2bb7e93677839461a66bc2957de0"><td class="memTemplParams" colspan="2">template&lt;typename U &gt; </td></tr>
<tr class="memitem:a6fff2bb7e93677839461a66bc2957de0"><td class="memTemplItemLeft" align="right" valign="top">&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#a6fff2bb7e93677839461a66bc2957de0">Rect</a> (const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; U &gt; &amp;rectangle)</td></tr>
<tr class="memdesc:a6fff2bb7e93677839461a66bc2957de0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the rectangle from another type of rectangle.  <a href="#a6fff2bb7e93677839461a66bc2957de0">More...</a><br /></td></tr>
<tr class="separator:a6fff2bb7e93677839461a66bc2957de0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a910b998c92756157e1407e1363f93212"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#a910b998c92756157e1407e1363f93212">contains</a> (T x, T y) const</td></tr>
<tr class="memdesc:a910b998c92756157e1407e1363f93212"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check if a point is inside the rectangle's area.  <a href="#a910b998c92756157e1407e1363f93212">More...</a><br /></td></tr>
<tr class="separator:a910b998c92756157e1407e1363f93212"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a45c77c073a7a4d9232218ab2838f41bb"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#a45c77c073a7a4d9232218ab2838f41bb">contains</a> (const <a class="el" href="classsf_1_1Vector2.php">Vector2</a>&lt; T &gt; &amp;point) const</td></tr>
<tr class="memdesc:a45c77c073a7a4d9232218ab2838f41bb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check if a point is inside the rectangle's area.  <a href="#a45c77c073a7a4d9232218ab2838f41bb">More...</a><br /></td></tr>
<tr class="separator:a45c77c073a7a4d9232218ab2838f41bb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac77531698f39203e4bbe023097bb6a13"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#ac77531698f39203e4bbe023097bb6a13">intersects</a> (const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;rectangle) const</td></tr>
<tr class="memdesc:ac77531698f39203e4bbe023097bb6a13"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check the intersection between two rectangles.  <a href="#ac77531698f39203e4bbe023097bb6a13">More...</a><br /></td></tr>
<tr class="separator:ac77531698f39203e4bbe023097bb6a13"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad512c4a1127279e2d7464d0ace62500d"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#ad512c4a1127279e2d7464d0ace62500d">intersects</a> (const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;rectangle, <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;intersection) const</td></tr>
<tr class="memdesc:ad512c4a1127279e2d7464d0ace62500d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check the intersection between two rectangles.  <a href="#ad512c4a1127279e2d7464d0ace62500d">More...</a><br /></td></tr>
<tr class="separator:ad512c4a1127279e2d7464d0ace62500d"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:aa49960fa465103d9cb7069ceb25c7c32"><td class="memItemLeft" align="right" valign="top">T&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#aa49960fa465103d9cb7069ceb25c7c32">left</a></td></tr>
<tr class="memdesc:aa49960fa465103d9cb7069ceb25c7c32"><td class="mdescLeft">&#160;</td><td class="mdescRight">Left coordinate of the rectangle.  <a href="#aa49960fa465103d9cb7069ceb25c7c32">More...</a><br /></td></tr>
<tr class="separator:aa49960fa465103d9cb7069ceb25c7c32"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abd3d3a2d0ad211ef0082bd0aa1a5c0e3"><td class="memItemLeft" align="right" valign="top">T&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#abd3d3a2d0ad211ef0082bd0aa1a5c0e3">top</a></td></tr>
<tr class="memdesc:abd3d3a2d0ad211ef0082bd0aa1a5c0e3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Top coordinate of the rectangle.  <a href="#abd3d3a2d0ad211ef0082bd0aa1a5c0e3">More...</a><br /></td></tr>
<tr class="separator:abd3d3a2d0ad211ef0082bd0aa1a5c0e3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4dd5b9d4333bebbc51bd309298fd500f"><td class="memItemLeft" align="right" valign="top">T&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#a4dd5b9d4333bebbc51bd309298fd500f">width</a></td></tr>
<tr class="memdesc:a4dd5b9d4333bebbc51bd309298fd500f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Width of the rectangle.  <a href="#a4dd5b9d4333bebbc51bd309298fd500f">More...</a><br /></td></tr>
<tr class="separator:a4dd5b9d4333bebbc51bd309298fd500f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6fa0fc7de1636d78cae1a1b54eef95cd"><td class="memItemLeft" align="right" valign="top">T&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#a6fa0fc7de1636d78cae1a1b54eef95cd">height</a></td></tr>
<tr class="memdesc:a6fa0fc7de1636d78cae1a1b54eef95cd"><td class="mdescLeft">&#160;</td><td class="mdescRight">Height of the rectangle.  <a href="#a6fa0fc7de1636d78cae1a1b54eef95cd">More...</a><br /></td></tr>
<tr class="separator:a6fa0fc7de1636d78cae1a1b54eef95cd"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="related"></a>
Related Functions</h2></td></tr>
<tr><td class="ititle" colspan="2"><p>(Note that these are not member functions.) </p>
</td></tr>
<tr class="memitem:ab3488b5dbd0e587c4d7cb80605affc46"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:ab3488b5dbd0e587c4d7cb80605affc46"><td class="memTemplItemLeft" align="right" valign="top">bool&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#ab3488b5dbd0e587c4d7cb80605affc46">operator==</a> (const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;<a class="el" href="classsf_1_1Rect.php#aa49960fa465103d9cb7069ceb25c7c32">left</a>, const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;right)</td></tr>
<tr class="memdesc:ab3488b5dbd0e587c4d7cb80605affc46"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of binary operator ==.  <a href="#ab3488b5dbd0e587c4d7cb80605affc46">More...</a><br /></td></tr>
<tr class="separator:ab3488b5dbd0e587c4d7cb80605affc46"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a03fc4c105687b7d0f07b6b4ed4b45581"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a03fc4c105687b7d0f07b6b4ed4b45581"><td class="memTemplItemLeft" align="right" valign="top">bool&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="classsf_1_1Rect.php#a03fc4c105687b7d0f07b6b4ed4b45581">operator!=</a> (const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;<a class="el" href="classsf_1_1Rect.php#aa49960fa465103d9cb7069ceb25c7c32">left</a>, const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;right)</td></tr>
<tr class="memdesc:a03fc4c105687b7d0f07b6b4ed4b45581"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of binary operator !=.  <a href="#a03fc4c105687b7d0f07b6b4ed4b45581">More...</a><br /></td></tr>
<tr class="separator:a03fc4c105687b7d0f07b6b4ed4b45581"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><h3>template&lt;typename T&gt;<br />
class sf::Rect&lt; T &gt;</h3>

<p>Utility class for manipulating 2D axis aligned rectangles. </p>
<p>A rectangle is defined by its top-left corner and its size.</p>
<p>It is a very simple class defined for convenience, so its member variables (left, top, width and height) are public and can be accessed directly, just like the vector classes (<a class="el" href="classsf_1_1Vector2.php" title="Utility template class for manipulating 2-dimensional vectors. ">Vector2</a> and <a class="el" href="classsf_1_1Vector3.php" title="Utility template class for manipulating 3-dimensional vectors. ">Vector3</a>).</p>
<p>To keep things simple, <a class="el" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles. ">sf::Rect</a> doesn't define functions to emulate the properties that are not directly members (such as right, bottom, center, etc.), it rather only provides intersection functions.</p>
<p><a class="el" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles. ">sf::Rect</a> uses the usual rules for its boundaries: </p><ul>
<li>The left and top edges are included in the rectangle's area </li>
<li>The right (left + width) and bottom (top + height) edges are excluded from the rectangle's area</li>
</ul>
<p>This means that sf::IntRect(0, 0, 1, 1) and sf::IntRect(1, 1, 1, 1) don't intersect.</p>
<p><a class="el" href="classsf_1_1Rect.php" title="Utility class for manipulating 2D axis aligned rectangles. ">sf::Rect</a> is a template and may be used with any numeric type, but for simplicity the instantiations used by SFML are typedef'd: </p><ul>
<li>sf::Rect&lt;int&gt; is sf::IntRect </li>
<li>sf::Rect&lt;float&gt; is sf::FloatRect</li>
</ul>
<p>So that you don't have to care about the template syntax.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// Define a rectangle, located at (0, 0) with a size of 20x5</span></div><div class="line"><a class="code" href="classsf_1_1Rect.php">sf::IntRect</a> r1(0, 0, 20, 5);</div><div class="line"></div><div class="line"><span class="comment">// Define another rectangle, located at (4, 2) with a size of 18x10</span></div><div class="line"><a class="code" href="classsf_1_1Vector2.php">sf::Vector2i</a> position(4, 2);</div><div class="line"><a class="code" href="classsf_1_1Vector2.php">sf::Vector2i</a> size(18, 10);</div><div class="line"><a class="code" href="classsf_1_1Rect.php">sf::IntRect</a> r2(position, size);</div><div class="line"></div><div class="line"><span class="comment">// Test intersections with the point (3, 1)</span></div><div class="line"><span class="keywordtype">bool</span> b1 = r1.contains(3, 1); <span class="comment">// true</span></div><div class="line"><span class="keywordtype">bool</span> b2 = r2.contains(3, 1); <span class="comment">// false</span></div><div class="line"></div><div class="line"><span class="comment">// Test the intersection between r1 and r2</span></div><div class="line"><a class="code" href="classsf_1_1Rect.php">sf::IntRect</a> result;</div><div class="line"><span class="keywordtype">bool</span> b3 = r1.<a class="code" href="classsf_1_1Rect.php#ac77531698f39203e4bbe023097bb6a13">intersects</a>(r2, result); <span class="comment">// true</span></div><div class="line"><span class="comment">// result == (4, 2, 16, 3)</span></div></div><!-- fragment --> 
<p class="definition">Definition at line <a class="el" href="Rect_8hpp_source.php#l00042">42</a> of file <a class="el" href="Rect_8hpp_source.php">Rect.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a0f87ebaef9722a6222fd2e04ce8efb37"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0f87ebaef9722a6222fd2e04ce8efb37">&#9670;&nbsp;</a></span>Rect() <span class="overload">[1/4]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::<a class="el" href="classsf_1_1Rect.php">Rect</a> </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>Creates an empty rectangle (it is equivalent to calling Rect(0, 0, 0, 0)). </p>

</div>
</div>
<a id="a15cdbc5a1aed3a8fc7be1bd5004f19f9"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a15cdbc5a1aed3a8fc7be1bd5004f19f9">&#9670;&nbsp;</a></span>Rect() <span class="overload">[2/4]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::<a class="el" href="classsf_1_1Rect.php">Rect</a> </td>
          <td>(</td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>rectLeft</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>rectTop</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>rectWidth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>rectHeight</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the rectangle from its coordinates. </p>
<p>Be careful, the last two parameters are the width and height, not the right and bottom coordinates!</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">rectLeft</td><td>Left coordinate of the rectangle </td></tr>
    <tr><td class="paramname">rectTop</td><td>Top coordinate of the rectangle </td></tr>
    <tr><td class="paramname">rectWidth</td><td>Width of the rectangle </td></tr>
    <tr><td class="paramname">rectHeight</td><td>Height of the rectangle </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a27fdf85caa6d12caeeff78913cc59936"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a27fdf85caa6d12caeeff78913cc59936">&#9670;&nbsp;</a></span>Rect() <span class="overload">[3/4]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::<a class="el" href="classsf_1_1Rect.php">Rect</a> </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>position</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>size</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the rectangle from position and size. </p>
<p>Be careful, the last parameter is the size, not the bottom-right corner!</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">position</td><td>Position of the top-left corner of the rectangle </td></tr>
    <tr><td class="paramname">size</td><td>Size of the rectangle </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a6fff2bb7e93677839461a66bc2957de0"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6fff2bb7e93677839461a66bc2957de0">&#9670;&nbsp;</a></span>Rect() <span class="overload">[4/4]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
<div class="memtemplate">
template&lt;typename U &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::<a class="el" href="classsf_1_1Rect.php">Rect</a> </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; U &gt; &amp;&#160;</td>
          <td class="paramname"><em>rectangle</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">explicit</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Construct the rectangle from another type of rectangle. </p>
<p>This constructor doesn't replace the copy constructor, it's called only when U != T. A call to this constructor will fail to compile if U is not convertible to T.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">rectangle</td><td>Rectangle to convert </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a910b998c92756157e1407e1363f93212"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a910b998c92756157e1407e1363f93212">&#9670;&nbsp;</a></span>contains() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">bool <a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::contains </td>
          <td>(</td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>x</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>y</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Check if a point is inside the rectangle's area. </p>
<p>This check is non-inclusive. If the point lies on the edge of the rectangle, this function will return false.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">x</td><td>X coordinate of the point to test </td></tr>
    <tr><td class="paramname">y</td><td>Y coordinate of the point to test</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the point is inside, false otherwise</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Rect.php#ac77531698f39203e4bbe023097bb6a13" title="Check the intersection between two rectangles. ">intersects</a> </dd></dl>

</div>
</div>
<a id="a45c77c073a7a4d9232218ab2838f41bb"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a45c77c073a7a4d9232218ab2838f41bb">&#9670;&nbsp;</a></span>contains() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">bool <a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::contains </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Vector2.php">Vector2</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>point</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Check if a point is inside the rectangle's area. </p>
<p>This check is non-inclusive. If the point lies on the edge of the rectangle, this function will return false.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">point</td><td>Point to test</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if the point is inside, false otherwise</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Rect.php#ac77531698f39203e4bbe023097bb6a13" title="Check the intersection between two rectangles. ">intersects</a> </dd></dl>

</div>
</div>
<a id="ac77531698f39203e4bbe023097bb6a13"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac77531698f39203e4bbe023097bb6a13">&#9670;&nbsp;</a></span>intersects() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">bool <a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::intersects </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>rectangle</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Check the intersection between two rectangles. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">rectangle</td><td>Rectangle to test</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if rectangles overlap, false otherwise</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Rect.php#a910b998c92756157e1407e1363f93212" title="Check if a point is inside the rectangle&#39;s area. ">contains</a> </dd></dl>

</div>
</div>
<a id="ad512c4a1127279e2d7464d0ace62500d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad512c4a1127279e2d7464d0ace62500d">&#9670;&nbsp;</a></span>intersects() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">bool <a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::intersects </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>rectangle</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>intersection</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Check the intersection between two rectangles. </p>
<p>This overload returns the overlapped rectangle in the <em>intersection</em> parameter.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">rectangle</td><td>Rectangle to test </td></tr>
    <tr><td class="paramname">intersection</td><td>Rectangle to be filled with the intersection</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if rectangles overlap, false otherwise</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Rect.php#a910b998c92756157e1407e1363f93212" title="Check if a point is inside the rectangle&#39;s area. ">contains</a> </dd></dl>

</div>
</div>
<h2 class="groupheader">Friends And Related Function Documentation</h2>
<a id="a03fc4c105687b7d0f07b6b4ed4b45581"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a03fc4c105687b7d0f07b6b4ed4b45581">&#9670;&nbsp;</a></span>operator!=()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator!= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>right</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">related</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of binary operator !=. </p>
<p>This operator compares strict difference between two rectangles.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">left</td><td>Left operand (a rectangle) </td></tr>
    <tr><td class="paramname">right</td><td>Right operand (a rectangle)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if <em>left</em> is not equal to <em>right</em> </dd></dl>

</div>
</div>
<a id="ab3488b5dbd0e587c4d7cb80605affc46"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab3488b5dbd0e587c4d7cb80605affc46">&#9670;&nbsp;</a></span>operator==()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator== </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Rect.php">Rect</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>right</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">related</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of binary operator ==. </p>
<p>This operator compares strict equality between two rectangles.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">left</td><td>Left operand (a rectangle) </td></tr>
    <tr><td class="paramname">right</td><td>Right operand (a rectangle)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if <em>left</em> is equal to <em>right</em> </dd></dl>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a id="a6fa0fc7de1636d78cae1a1b54eef95cd"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6fa0fc7de1636d78cae1a1b54eef95cd">&#9670;&nbsp;</a></span>height</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">T <a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::height</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Height of the rectangle. </p>

<p class="definition">Definition at line <a class="el" href="Rect_8hpp_source.php#l00160">160</a> of file <a class="el" href="Rect_8hpp_source.php">Rect.hpp</a>.</p>

</div>
</div>
<a id="aa49960fa465103d9cb7069ceb25c7c32"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa49960fa465103d9cb7069ceb25c7c32">&#9670;&nbsp;</a></span>left</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">T <a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::left</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Left coordinate of the rectangle. </p>

<p class="definition">Definition at line <a class="el" href="Rect_8hpp_source.php#l00157">157</a> of file <a class="el" href="Rect_8hpp_source.php">Rect.hpp</a>.</p>

</div>
</div>
<a id="abd3d3a2d0ad211ef0082bd0aa1a5c0e3"></a>
<h2 class="memtitle"><span class="permalink"><a href="#abd3d3a2d0ad211ef0082bd0aa1a5c0e3">&#9670;&nbsp;</a></span>top</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">T <a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::top</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Top coordinate of the rectangle. </p>

<p class="definition">Definition at line <a class="el" href="Rect_8hpp_source.php#l00158">158</a> of file <a class="el" href="Rect_8hpp_source.php">Rect.hpp</a>.</p>

</div>
</div>
<a id="a4dd5b9d4333bebbc51bd309298fd500f"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4dd5b9d4333bebbc51bd309298fd500f">&#9670;&nbsp;</a></span>width</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">T <a class="el" href="classsf_1_1Rect.php">sf::Rect</a>&lt; T &gt;::width</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Width of the rectangle. </p>

<p class="definition">Definition at line <a class="el" href="Rect_8hpp_source.php#l00159">159</a> of file <a class="el" href="Rect_8hpp_source.php">Rect.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Rect_8hpp_source.php">Rect.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
