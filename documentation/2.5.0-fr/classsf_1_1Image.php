<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Image Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Image.php">Image</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1Image-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Image Class Reference<div class="ingroups"><a class="el" href="group__graphics.php">Graphics module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Class for loading, manipulating and saving images.  
 <a href="classsf_1_1Image.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Image_8hpp_source.php">Image.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:abb4caf3cb167b613345ebe36fc883f12"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#abb4caf3cb167b613345ebe36fc883f12">Image</a> ()</td></tr>
<tr class="memdesc:abb4caf3cb167b613345ebe36fc883f12"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#abb4caf3cb167b613345ebe36fc883f12">More...</a><br /></td></tr>
<tr class="separator:abb4caf3cb167b613345ebe36fc883f12"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0ba22a38e6c96e3b37dd88198046de83"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#a0ba22a38e6c96e3b37dd88198046de83">~Image</a> ()</td></tr>
<tr class="memdesc:a0ba22a38e6c96e3b37dd88198046de83"><td class="mdescLeft">&#160;</td><td class="mdescRight">Destructor.  <a href="#a0ba22a38e6c96e3b37dd88198046de83">More...</a><br /></td></tr>
<tr class="separator:a0ba22a38e6c96e3b37dd88198046de83"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2a67930e2fd9ad97cf004e918cf5832b"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#a2a67930e2fd9ad97cf004e918cf5832b">create</a> (unsigned int width, unsigned int height, const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;color=<a class="el" href="classsf_1_1Color.php">Color</a>(0, 0, 0))</td></tr>
<tr class="memdesc:a2a67930e2fd9ad97cf004e918cf5832b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create the image and fill it with a unique color.  <a href="#a2a67930e2fd9ad97cf004e918cf5832b">More...</a><br /></td></tr>
<tr class="separator:a2a67930e2fd9ad97cf004e918cf5832b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1c2b960ea12bdbb29e80934ce5268ebf"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#a1c2b960ea12bdbb29e80934ce5268ebf">create</a> (unsigned int width, unsigned int height, const Uint8 *pixels)</td></tr>
<tr class="memdesc:a1c2b960ea12bdbb29e80934ce5268ebf"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create the image from an array of pixels.  <a href="#a1c2b960ea12bdbb29e80934ce5268ebf">More...</a><br /></td></tr>
<tr class="separator:a1c2b960ea12bdbb29e80934ce5268ebf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9e4f2aa8e36d0cabde5ed5a4ef80290b"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#a9e4f2aa8e36d0cabde5ed5a4ef80290b">loadFromFile</a> (const std::string &amp;filename)</td></tr>
<tr class="memdesc:a9e4f2aa8e36d0cabde5ed5a4ef80290b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Load the image from a file on disk.  <a href="#a9e4f2aa8e36d0cabde5ed5a4ef80290b">More...</a><br /></td></tr>
<tr class="separator:a9e4f2aa8e36d0cabde5ed5a4ef80290b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aaa6c7afa5851a51cec6ab438faa7354c"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#aaa6c7afa5851a51cec6ab438faa7354c">loadFromMemory</a> (const void *data, std::size_t size)</td></tr>
<tr class="memdesc:aaa6c7afa5851a51cec6ab438faa7354c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Load the image from a file in memory.  <a href="#aaa6c7afa5851a51cec6ab438faa7354c">More...</a><br /></td></tr>
<tr class="separator:aaa6c7afa5851a51cec6ab438faa7354c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a21122ded0e8368bb06ed3b9acfbfb501"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#a21122ded0e8368bb06ed3b9acfbfb501">loadFromStream</a> (<a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;stream)</td></tr>
<tr class="memdesc:a21122ded0e8368bb06ed3b9acfbfb501"><td class="mdescLeft">&#160;</td><td class="mdescRight">Load the image from a custom stream.  <a href="#a21122ded0e8368bb06ed3b9acfbfb501">More...</a><br /></td></tr>
<tr class="separator:a21122ded0e8368bb06ed3b9acfbfb501"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a51537fb667f47cbe80395cfd7f9e72a4"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#a51537fb667f47cbe80395cfd7f9e72a4">saveToFile</a> (const std::string &amp;filename) const</td></tr>
<tr class="memdesc:a51537fb667f47cbe80395cfd7f9e72a4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Save the image to a file on disk.  <a href="#a51537fb667f47cbe80395cfd7f9e72a4">More...</a><br /></td></tr>
<tr class="separator:a51537fb667f47cbe80395cfd7f9e72a4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a85409951b05369813069ed64393391ce"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Vector2.php">Vector2u</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#a85409951b05369813069ed64393391ce">getSize</a> () const</td></tr>
<tr class="memdesc:a85409951b05369813069ed64393391ce"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the size (width and height) of the image.  <a href="#a85409951b05369813069ed64393391ce">More...</a><br /></td></tr>
<tr class="separator:a85409951b05369813069ed64393391ce"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a22f13f8c242a6b38eb73cc176b37ae34"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#a22f13f8c242a6b38eb73cc176b37ae34">createMaskFromColor</a> (const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;color, Uint8 alpha=0)</td></tr>
<tr class="memdesc:a22f13f8c242a6b38eb73cc176b37ae34"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create a transparency mask from a specified color-key.  <a href="#a22f13f8c242a6b38eb73cc176b37ae34">More...</a><br /></td></tr>
<tr class="separator:a22f13f8c242a6b38eb73cc176b37ae34"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab2fa337c956f85f93377dcb52153a45a"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#ab2fa337c956f85f93377dcb52153a45a">copy</a> (const <a class="el" href="classsf_1_1Image.php">Image</a> &amp;source, unsigned int destX, unsigned int destY, const <a class="el" href="classsf_1_1Rect.php">IntRect</a> &amp;sourceRect=<a class="el" href="classsf_1_1Rect.php">IntRect</a>(0, 0, 0, 0), bool applyAlpha=false)</td></tr>
<tr class="memdesc:ab2fa337c956f85f93377dcb52153a45a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Copy pixels from another image onto this one.  <a href="#ab2fa337c956f85f93377dcb52153a45a">More...</a><br /></td></tr>
<tr class="separator:ab2fa337c956f85f93377dcb52153a45a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9fd329b8cd7d4439e07fb5d3bb2d9744"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#a9fd329b8cd7d4439e07fb5d3bb2d9744">setPixel</a> (unsigned int x, unsigned int y, const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;color)</td></tr>
<tr class="memdesc:a9fd329b8cd7d4439e07fb5d3bb2d9744"><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the color of a pixel.  <a href="#a9fd329b8cd7d4439e07fb5d3bb2d9744">More...</a><br /></td></tr>
<tr class="separator:a9fd329b8cd7d4439e07fb5d3bb2d9744"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:acf278760458433b2c3626a6980388a95"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1Color.php">Color</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#acf278760458433b2c3626a6980388a95">getPixel</a> (unsigned int x, unsigned int y) const</td></tr>
<tr class="memdesc:acf278760458433b2c3626a6980388a95"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the color of a pixel.  <a href="#acf278760458433b2c3626a6980388a95">More...</a><br /></td></tr>
<tr class="separator:acf278760458433b2c3626a6980388a95"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad9562b126fc8d5efcf608166992865c7"><td class="memItemLeft" align="right" valign="top">const Uint8 *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#ad9562b126fc8d5efcf608166992865c7">getPixelsPtr</a> () const</td></tr>
<tr class="memdesc:ad9562b126fc8d5efcf608166992865c7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get a read-only pointer to the array of pixels.  <a href="#ad9562b126fc8d5efcf608166992865c7">More...</a><br /></td></tr>
<tr class="separator:ad9562b126fc8d5efcf608166992865c7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a57168e7bc29190e08bbd6c9c19f4bb2c"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#a57168e7bc29190e08bbd6c9c19f4bb2c">flipHorizontally</a> ()</td></tr>
<tr class="memdesc:a57168e7bc29190e08bbd6c9c19f4bb2c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Flip the image horizontally (left &lt;-&gt; right)  <a href="#a57168e7bc29190e08bbd6c9c19f4bb2c">More...</a><br /></td></tr>
<tr class="separator:a57168e7bc29190e08bbd6c9c19f4bb2c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a78a702a7e49d1de2dec9894da99d279c"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Image.php#a78a702a7e49d1de2dec9894da99d279c">flipVertically</a> ()</td></tr>
<tr class="memdesc:a78a702a7e49d1de2dec9894da99d279c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Flip the image vertically (top &lt;-&gt; bottom)  <a href="#a78a702a7e49d1de2dec9894da99d279c">More...</a><br /></td></tr>
<tr class="separator:a78a702a7e49d1de2dec9894da99d279c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Class for loading, manipulating and saving images. </p>
<p><a class="el" href="classsf_1_1Image.php" title="Class for loading, manipulating and saving images. ">sf::Image</a> is an abstraction to manipulate images as bidimensional arrays of pixels.</p>
<p>The class provides functions to load, read, write and save pixels, as well as many other useful functions.</p>
<p><a class="el" href="classsf_1_1Image.php" title="Class for loading, manipulating and saving images. ">sf::Image</a> can handle a unique internal representation of pixels, which is RGBA 32 bits. This means that a pixel must be composed of 8 bits red, green, blue and alpha channels &ndash; just like a <a class="el" href="classsf_1_1Color.php" title="Utility class for manipulating RGBA colors. ">sf::Color</a>. All the functions that return an array of pixels follow this rule, and all parameters that you pass to <a class="el" href="classsf_1_1Image.php" title="Class for loading, manipulating and saving images. ">sf::Image</a> functions (such as loadFromMemory) must use this representation as well.</p>
<p>A <a class="el" href="classsf_1_1Image.php" title="Class for loading, manipulating and saving images. ">sf::Image</a> can be copied, but it is a heavy resource and if possible you should always use [const] references to pass or return them to avoid useless copies.</p>
<p>Usage example: </p><div class="fragment"><div class="line"><span class="comment">// Load an image file from a file</span></div><div class="line"><a class="code" href="classsf_1_1Image.php">sf::Image</a> background;</div><div class="line"><span class="keywordflow">if</span> (!background.<a class="code" href="classsf_1_1Image.php#a9e4f2aa8e36d0cabde5ed5a4ef80290b">loadFromFile</a>(<span class="stringliteral">&quot;background.jpg&quot;</span>))</div><div class="line">    <span class="keywordflow">return</span> -1;</div><div class="line"></div><div class="line"><span class="comment">// Create a 20x20 image filled with black color</span></div><div class="line"><a class="code" href="classsf_1_1Image.php">sf::Image</a> image;</div><div class="line">image.<a class="code" href="classsf_1_1Image.php#a2a67930e2fd9ad97cf004e918cf5832b">create</a>(20, 20, <a class="code" href="classsf_1_1Color.php#a77c688197b981338f0b19dc58bd2facd">sf::Color::Black</a>);</div><div class="line"></div><div class="line"><span class="comment">// Copy image1 on image2 at position (10, 10)</span></div><div class="line">image.<a class="code" href="classsf_1_1Image.php#ab2fa337c956f85f93377dcb52153a45a">copy</a>(background, 10, 10);</div><div class="line"></div><div class="line"><span class="comment">// Make the top-left pixel transparent</span></div><div class="line"><a class="code" href="classsf_1_1Color.php">sf::Color</a> color = image.<a class="code" href="classsf_1_1Image.php#acf278760458433b2c3626a6980388a95">getPixel</a>(0, 0);</div><div class="line">color.<a class="code" href="classsf_1_1Color.php#a56dbdb47d5f040d9b78ac6a0b8b3a831">a</a> = 0;</div><div class="line">image.<a class="code" href="classsf_1_1Image.php#a9fd329b8cd7d4439e07fb5d3bb2d9744">setPixel</a>(0, 0, color);</div><div class="line"></div><div class="line"><span class="comment">// Save the image to a file</span></div><div class="line"><span class="keywordflow">if</span> (!image.<a class="code" href="classsf_1_1Image.php#a51537fb667f47cbe80395cfd7f9e72a4">saveToFile</a>(<span class="stringliteral">&quot;result.png&quot;</span>))</div><div class="line">    <span class="keywordflow">return</span> -1;</div></div><!-- fragment --><dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Texture.php" title="Image living on the graphics card that can be used for drawing. ">sf::Texture</a> </dd></dl>

<p class="definition">Definition at line <a class="el" href="Image_8hpp_source.php#l00046">46</a> of file <a class="el" href="Image_8hpp_source.php">Image.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="abb4caf3cb167b613345ebe36fc883f12"></a>
<h2 class="memtitle"><span class="permalink"><a href="#abb4caf3cb167b613345ebe36fc883f12">&#9670;&nbsp;</a></span>Image()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Image::Image </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>Creates an empty image. </p>

</div>
</div>
<a id="a0ba22a38e6c96e3b37dd88198046de83"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0ba22a38e6c96e3b37dd88198046de83">&#9670;&nbsp;</a></span>~Image()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Image::~Image </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Destructor. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="ab2fa337c956f85f93377dcb52153a45a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab2fa337c956f85f93377dcb52153a45a">&#9670;&nbsp;</a></span>copy()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Image::copy </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Image.php">Image</a> &amp;&#160;</td>
          <td class="paramname"><em>source</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>destX</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>destY</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Rect.php">IntRect</a> &amp;&#160;</td>
          <td class="paramname"><em>sourceRect</em> = <code><a class="el" href="classsf_1_1Rect.php">IntRect</a>(0,&#160;0,&#160;0,&#160;0)</code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>applyAlpha</em> = <code>false</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Copy pixels from another image onto this one. </p>
<p>This function does a slow pixel copy and should not be used intensively. It can be used to prepare a complex static image from several others, but if you need this kind of feature in real-time you'd better use <a class="el" href="classsf_1_1RenderTexture.php" title="Target for off-screen 2D rendering into a texture. ">sf::RenderTexture</a>.</p>
<p>If <em>sourceRect</em> is empty, the whole image is copied. If <em>applyAlpha</em> is set to true, the transparency of source pixels is applied. If it is false, the pixels are copied unchanged with their alpha value.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">source</td><td>Source image to copy </td></tr>
    <tr><td class="paramname">destX</td><td>X coordinate of the destination position </td></tr>
    <tr><td class="paramname">destY</td><td>Y coordinate of the destination position </td></tr>
    <tr><td class="paramname">sourceRect</td><td>Sub-rectangle of the source image to copy </td></tr>
    <tr><td class="paramname">applyAlpha</td><td>Should the copy take into account the source transparency? </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a2a67930e2fd9ad97cf004e918cf5832b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a2a67930e2fd9ad97cf004e918cf5832b">&#9670;&nbsp;</a></span>create() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Image::create </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>width</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>height</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>color</em> = <code><a class="el" href="classsf_1_1Color.php">Color</a>(0,&#160;0,&#160;0)</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Create the image and fill it with a unique color. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">width</td><td>Width of the image </td></tr>
    <tr><td class="paramname">height</td><td>Height of the image </td></tr>
    <tr><td class="paramname">color</td><td>Fill color </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a1c2b960ea12bdbb29e80934ce5268ebf"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1c2b960ea12bdbb29e80934ce5268ebf">&#9670;&nbsp;</a></span>create() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Image::create </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>width</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>height</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const Uint8 *&#160;</td>
          <td class="paramname"><em>pixels</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Create the image from an array of pixels. </p>
<p>The <em>pixel</em> array is assumed to contain 32-bits RGBA pixels, and have the given <em>width</em> and <em>height</em>. If not, this is an undefined behavior. If <em>pixels</em> is null, an empty image is created.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">width</td><td>Width of the image </td></tr>
    <tr><td class="paramname">height</td><td>Height of the image </td></tr>
    <tr><td class="paramname">pixels</td><td>Array of pixels to copy to the image </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a22f13f8c242a6b38eb73cc176b37ae34"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a22f13f8c242a6b38eb73cc176b37ae34">&#9670;&nbsp;</a></span>createMaskFromColor()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Image::createMaskFromColor </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>color</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Uint8&#160;</td>
          <td class="paramname"><em>alpha</em> = <code>0</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Create a transparency mask from a specified color-key. </p>
<p>This function sets the alpha value of every pixel matching the given color to <em>alpha</em> (0 by default), so that they become transparent.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">color</td><td><a class="el" href="classsf_1_1Color.php" title="Utility class for manipulating RGBA colors. ">Color</a> to make transparent </td></tr>
    <tr><td class="paramname">alpha</td><td>Alpha value to assign to transparent pixels </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a57168e7bc29190e08bbd6c9c19f4bb2c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a57168e7bc29190e08bbd6c9c19f4bb2c">&#9670;&nbsp;</a></span>flipHorizontally()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Image::flipHorizontally </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Flip the image horizontally (left &lt;-&gt; right) </p>

</div>
</div>
<a id="a78a702a7e49d1de2dec9894da99d279c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a78a702a7e49d1de2dec9894da99d279c">&#9670;&nbsp;</a></span>flipVertically()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Image::flipVertically </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Flip the image vertically (top &lt;-&gt; bottom) </p>

</div>
</div>
<a id="acf278760458433b2c3626a6980388a95"></a>
<h2 class="memtitle"><span class="permalink"><a href="#acf278760458433b2c3626a6980388a95">&#9670;&nbsp;</a></span>getPixel()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Color.php">Color</a> sf::Image::getPixel </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>x</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>y</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the color of a pixel. </p>
<p>This function doesn't check the validity of the pixel coordinates, using out-of-range values will result in an undefined behavior.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">x</td><td>X coordinate of pixel to get </td></tr>
    <tr><td class="paramname">y</td><td>Y coordinate of pixel to get</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd><a class="el" href="classsf_1_1Color.php" title="Utility class for manipulating RGBA colors. ">Color</a> of the pixel at coordinates (x, y)</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Image.php#a9fd329b8cd7d4439e07fb5d3bb2d9744" title="Change the color of a pixel. ">setPixel</a> </dd></dl>

</div>
</div>
<a id="ad9562b126fc8d5efcf608166992865c7"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad9562b126fc8d5efcf608166992865c7">&#9670;&nbsp;</a></span>getPixelsPtr()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const Uint8* sf::Image::getPixelsPtr </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get a read-only pointer to the array of pixels. </p>
<p>The returned value points to an array of RGBA pixels made of 8 bits integers components. The size of the array is width * height * 4 (<a class="el" href="classsf_1_1Image.php#a85409951b05369813069ed64393391ce" title="Return the size (width and height) of the image. ">getSize()</a>.x * <a class="el" href="classsf_1_1Image.php#a85409951b05369813069ed64393391ce" title="Return the size (width and height) of the image. ">getSize()</a>.y * 4). Warning: the returned pointer may become invalid if you modify the image, so you should never store it for too long. If the image is empty, a null pointer is returned.</p>
<dl class="section return"><dt>Returns</dt><dd>Read-only pointer to the array of pixels </dd></dl>

</div>
</div>
<a id="a85409951b05369813069ed64393391ce"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a85409951b05369813069ed64393391ce">&#9670;&nbsp;</a></span>getSize()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1Vector2.php">Vector2u</a> sf::Image::getSize </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Return the size (width and height) of the image. </p>
<dl class="section return"><dt>Returns</dt><dd>Size of the image, in pixels </dd></dl>

</div>
</div>
<a id="a9e4f2aa8e36d0cabde5ed5a4ef80290b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9e4f2aa8e36d0cabde5ed5a4ef80290b">&#9670;&nbsp;</a></span>loadFromFile()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Image::loadFromFile </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Load the image from a file on disk. </p>
<p>The supported image formats are bmp, png, tga, jpg, gif, psd, hdr and pic. Some format options are not supported, like progressive jpeg. If this function fails, the image is left unchanged.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Path of the image file to load</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if loading was successful</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Image.php#aaa6c7afa5851a51cec6ab438faa7354c" title="Load the image from a file in memory. ">loadFromMemory</a>, <a class="el" href="classsf_1_1Image.php#a21122ded0e8368bb06ed3b9acfbfb501" title="Load the image from a custom stream. ">loadFromStream</a>, <a class="el" href="classsf_1_1Image.php#a51537fb667f47cbe80395cfd7f9e72a4" title="Save the image to a file on disk. ">saveToFile</a> </dd></dl>

</div>
</div>
<a id="aaa6c7afa5851a51cec6ab438faa7354c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aaa6c7afa5851a51cec6ab438faa7354c">&#9670;&nbsp;</a></span>loadFromMemory()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Image::loadFromMemory </td>
          <td>(</td>
          <td class="paramtype">const void *&#160;</td>
          <td class="paramname"><em>data</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>size</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Load the image from a file in memory. </p>
<p>The supported image formats are bmp, png, tga, jpg, gif, psd, hdr and pic. Some format options are not supported, like progressive jpeg. If this function fails, the image is left unchanged.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">data</td><td>Pointer to the file data in memory </td></tr>
    <tr><td class="paramname">size</td><td>Size of the data to load, in bytes</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if loading was successful</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Image.php#a9e4f2aa8e36d0cabde5ed5a4ef80290b" title="Load the image from a file on disk. ">loadFromFile</a>, <a class="el" href="classsf_1_1Image.php#a21122ded0e8368bb06ed3b9acfbfb501" title="Load the image from a custom stream. ">loadFromStream</a> </dd></dl>

</div>
</div>
<a id="a21122ded0e8368bb06ed3b9acfbfb501"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a21122ded0e8368bb06ed3b9acfbfb501">&#9670;&nbsp;</a></span>loadFromStream()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Image::loadFromStream </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1InputStream.php">InputStream</a> &amp;&#160;</td>
          <td class="paramname"><em>stream</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Load the image from a custom stream. </p>
<p>The supported image formats are bmp, png, tga, jpg, gif, psd, hdr and pic. Some format options are not supported, like progressive jpeg. If this function fails, the image is left unchanged.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">stream</td><td>Source stream to read from</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if loading was successful</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Image.php#a9e4f2aa8e36d0cabde5ed5a4ef80290b" title="Load the image from a file on disk. ">loadFromFile</a>, <a class="el" href="classsf_1_1Image.php#aaa6c7afa5851a51cec6ab438faa7354c" title="Load the image from a file in memory. ">loadFromMemory</a> </dd></dl>

</div>
</div>
<a id="a51537fb667f47cbe80395cfd7f9e72a4"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a51537fb667f47cbe80395cfd7f9e72a4">&#9670;&nbsp;</a></span>saveToFile()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::Image::saveToFile </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Save the image to a file on disk. </p>
<p>The format of the image is automatically deduced from the extension. The supported image formats are bmp, png, tga and jpg. The destination file is overwritten if it already exists. This function fails if the image is empty.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">filename</td><td>Path of the file to save</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if saving was successful</dd></dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Image.php#a2a67930e2fd9ad97cf004e918cf5832b" title="Create the image and fill it with a unique color. ">create</a>, <a class="el" href="classsf_1_1Image.php#a9e4f2aa8e36d0cabde5ed5a4ef80290b" title="Load the image from a file on disk. ">loadFromFile</a>, <a class="el" href="classsf_1_1Image.php#aaa6c7afa5851a51cec6ab438faa7354c" title="Load the image from a file in memory. ">loadFromMemory</a> </dd></dl>

</div>
</div>
<a id="a9fd329b8cd7d4439e07fb5d3bb2d9744"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9fd329b8cd7d4439e07fb5d3bb2d9744">&#9670;&nbsp;</a></span>setPixel()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Image::setPixel </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>x</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>y</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1Color.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>color</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Change the color of a pixel. </p>
<p>This function doesn't check the validity of the pixel coordinates, using out-of-range values will result in an undefined behavior.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">x</td><td>X coordinate of pixel to change </td></tr>
    <tr><td class="paramname">y</td><td>Y coordinate of pixel to change </td></tr>
    <tr><td class="paramname">color</td><td>New color of the pixel</td></tr>
  </table>
  </dd>
</dl>
<dl class="section see"><dt>See also</dt><dd><a class="el" href="classsf_1_1Image.php#acf278760458433b2c3626a6980388a95" title="Get the color of a pixel. ">getPixel</a> </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Image_8hpp_source.php">Image.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
