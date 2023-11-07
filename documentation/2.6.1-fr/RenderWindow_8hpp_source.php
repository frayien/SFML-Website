<?php
    $version = '2.6.1'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'RenderWindow.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.9.8 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
var searchBox = new SearchBox("searchBox", "search/",'.php');
/* @license-end */
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="topics.php"><span>Topics</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <span id="MSearchSelect"                onmouseover="return searchBox.OnSearchSelectShow()"                onmouseout="return searchBox.OnSearchSelectHide()">&#160;</span>
          <input type="text" id="MSearchField" value="" placeholder="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.svg" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
$(document).ready(function() { init_codefold(0); });
/* @license-end */
</script>
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<div id="MSearchResults">
<div class="SRPage">
<div id="SRIndex">
<div id="SRResults"></div>
<div class="SRStatus" id="Loading">Loading...</div>
<div class="SRStatus" id="Searching">Searching...</div>
<div class="SRStatus" id="NoMatches">No Matches</div>
</div>
</div>
</div>
</div>

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_25140c63874fec7ab1624ad7e074f505.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle"><div class="title">RenderWindow.hpp</div></div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a id="l00001" name="l00001"></a><span class="lineno">    1</span> </div>
<div class="line"><a id="l00002" name="l00002"></a><span class="lineno">    2</span><span class="comment">//</span></div>
<div class="line"><a id="l00003" name="l00003"></a><span class="lineno">    3</span><span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a id="l00004" name="l00004"></a><span class="lineno">    4</span><span class="comment">// Copyright (C) 2007-2023 Laurent Gomila (laurent@sfml-dev.org)</span></div>
<div class="line"><a id="l00005" name="l00005"></a><span class="lineno">    5</span><span class="comment">//</span></div>
<div class="line"><a id="l00006" name="l00006"></a><span class="lineno">    6</span><span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a id="l00007" name="l00007"></a><span class="lineno">    7</span><span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a id="l00008" name="l00008"></a><span class="lineno">    8</span><span class="comment">//</span></div>
<div class="line"><a id="l00009" name="l00009"></a><span class="lineno">    9</span><span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a id="l00010" name="l00010"></a><span class="lineno">   10</span><span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a id="l00011" name="l00011"></a><span class="lineno">   11</span><span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a id="l00012" name="l00012"></a><span class="lineno">   12</span><span class="comment">//</span></div>
<div class="line"><a id="l00013" name="l00013"></a><span class="lineno">   13</span><span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a id="l00014" name="l00014"></a><span class="lineno">   14</span><span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a id="l00015" name="l00015"></a><span class="lineno">   15</span><span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a id="l00016" name="l00016"></a><span class="lineno">   16</span><span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a id="l00017" name="l00017"></a><span class="lineno">   17</span><span class="comment">//</span></div>
<div class="line"><a id="l00018" name="l00018"></a><span class="lineno">   18</span><span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a id="l00019" name="l00019"></a><span class="lineno">   19</span><span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a id="l00020" name="l00020"></a><span class="lineno">   20</span><span class="comment">//</span></div>
<div class="line"><a id="l00021" name="l00021"></a><span class="lineno">   21</span><span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a id="l00022" name="l00022"></a><span class="lineno">   22</span><span class="comment">//</span></div>
<div class="line"><a id="l00024" name="l00024"></a><span class="lineno">   24</span> </div>
<div class="line"><a id="l00025" name="l00025"></a><span class="lineno">   25</span><span class="preprocessor">#ifndef SFML_RENDERWINDOW_HPP</span></div>
<div class="line"><a id="l00026" name="l00026"></a><span class="lineno">   26</span><span class="preprocessor">#define SFML_RENDERWINDOW_HPP</span></div>
<div class="line"><a id="l00027" name="l00027"></a><span class="lineno">   27</span> </div>
<div class="line"><a id="l00029" name="l00029"></a><span class="lineno">   29</span><span class="comment">// Headers</span></div>
<div class="line"><a id="l00031" name="l00031"></a><span class="lineno">   31</span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div>
<div class="line"><a id="l00032" name="l00032"></a><span class="lineno">   32</span><span class="preprocessor">#include &lt;SFML/Graphics/RenderTarget.hpp&gt;</span></div>
<div class="line"><a id="l00033" name="l00033"></a><span class="lineno">   33</span><span class="preprocessor">#include &lt;SFML/Graphics/Image.hpp&gt;</span></div>
<div class="line"><a id="l00034" name="l00034"></a><span class="lineno">   34</span><span class="preprocessor">#include &lt;SFML/Window/Window.hpp&gt;</span></div>
<div class="line"><a id="l00035" name="l00035"></a><span class="lineno">   35</span><span class="preprocessor">#include &lt;string&gt;</span></div>
<div class="line"><a id="l00036" name="l00036"></a><span class="lineno">   36</span> </div>
<div class="line"><a id="l00037" name="l00037"></a><span class="lineno">   37</span> </div>
<div class="line"><a id="l00038" name="l00038"></a><span class="lineno">   38</span><span class="keyword">namespace </span>sf</div>
<div class="line"><a id="l00039" name="l00039"></a><span class="lineno">   39</span>{</div>
<div class="foldopen" id="foldopen00044" data-start="{" data-end="};">
<div class="line"><a id="l00044" name="l00044"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php">   44</a></span><span class="keyword">class </span>SFML_GRAPHICS_API <a class="code hl_class" href="classsf_1_1RenderWindow.php">RenderWindow</a> : <span class="keyword">public</span> <a class="code hl_class" href="classsf_1_1Window.php">Window</a>, <span class="keyword">public</span> <a class="code hl_class" href="classsf_1_1RenderTarget.php">RenderTarget</a></div>
<div class="line"><a id="l00045" name="l00045"></a><span class="lineno">   45</span>{</div>
<div class="line"><a id="l00046" name="l00046"></a><span class="lineno">   46</span><span class="keyword">public</span>:</div>
<div class="line"><a id="l00047" name="l00047"></a><span class="lineno">   47</span> </div>
<div class="line"><a id="l00055" name="l00055"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php#a839bbf336bdcafb084dafc3076fc9021">   55</a></span>    <a class="code hl_function" href="classsf_1_1RenderWindow.php#a839bbf336bdcafb084dafc3076fc9021">RenderWindow</a>();</div>
<div class="line"><a id="l00056" name="l00056"></a><span class="lineno">   56</span> </div>
<div class="line"><a id="l00076" name="l00076"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php#aebef983e01f677bf5a66cefc4d547647">   76</a></span>    <a class="code hl_function" href="classsf_1_1RenderWindow.php#aebef983e01f677bf5a66cefc4d547647">RenderWindow</a>(<a class="code hl_class" href="classsf_1_1VideoMode.php">VideoMode</a> mode, <span class="keyword">const</span> <a class="code hl_class" href="classsf_1_1String.php">String</a>&amp; title, Uint32 style = Style::Default, <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings = <a class="code hl_class" href="structsf_1_1ContextSettings.php">ContextSettings</a>());</div>
<div class="line"><a id="l00077" name="l00077"></a><span class="lineno">   77</span> </div>
<div class="line"><a id="l00094" name="l00094"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php#a25c0af7d515e710b6eebc9c6be952aa5">   94</a></span>    <span class="keyword">explicit</span> <a class="code hl_function" href="classsf_1_1RenderWindow.php#a25c0af7d515e710b6eebc9c6be952aa5">RenderWindow</a>(WindowHandle handle, <span class="keyword">const</span> <a class="code hl_class" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings = <a class="code hl_class" href="structsf_1_1ContextSettings.php">ContextSettings</a>());</div>
<div class="line"><a id="l00095" name="l00095"></a><span class="lineno">   95</span> </div>
<div class="line"><a id="l00102" name="l00102"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php#a3407e36bfc1752d723140438a825365c">  102</a></span>    <span class="keyword">virtual</span> <a class="code hl_function" href="classsf_1_1RenderWindow.php#a3407e36bfc1752d723140438a825365c">~RenderWindow</a>();</div>
<div class="line"><a id="l00103" name="l00103"></a><span class="lineno">  103</span> </div>
<div class="line"><a id="l00113" name="l00113"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php#ae3eacf93661c8068fca7a78d57dc7e14">  113</a></span>    <span class="keyword">virtual</span> <a class="code hl_class" href="classsf_1_1Vector2.php">Vector2u</a> <a class="code hl_function" href="classsf_1_1RenderWindow.php#ae3eacf93661c8068fca7a78d57dc7e14">getSize</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00114" name="l00114"></a><span class="lineno">  114</span> </div>
<div class="line"><a id="l00115" name="l00115"></a><span class="lineno">  115</span> </div>
<div class="line"><a id="l00124" name="l00124"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php#ad943b4797fe6e1d609f12ce413b6a093">  124</a></span>    <span class="keyword">virtual</span> <span class="keywordtype">bool</span> <a class="code hl_function" href="classsf_1_1RenderWindow.php#ad943b4797fe6e1d609f12ce413b6a093">isSrgb</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00125" name="l00125"></a><span class="lineno">  125</span> </div>
<div class="line"><a id="l00142" name="l00142"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php#aee6c53eced675e885931eb3e91f11155">  142</a></span>    <span class="keywordtype">bool</span> <a class="code hl_function" href="classsf_1_1RenderWindow.php#aee6c53eced675e885931eb3e91f11155">setActive</a>(<span class="keywordtype">bool</span> active = <span class="keyword">true</span>);</div>
<div class="line"><a id="l00143" name="l00143"></a><span class="lineno">  143</span> </div>
<div class="line"><a id="l00169" name="l00169"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php#a5a784b8a09bf4a8bc97ef9e0a8957c35">  169</a></span>    SFML_DEPRECATED <a class="code hl_class" href="classsf_1_1Image.php">Image</a> <a class="code hl_function" href="classsf_1_1RenderWindow.php#a5a784b8a09bf4a8bc97ef9e0a8957c35">capture</a>() <span class="keyword">const</span>;</div>
<div class="line"><a id="l00170" name="l00170"></a><span class="lineno">  170</span> </div>
<div class="line"><a id="l00171" name="l00171"></a><span class="lineno">  171</span><span class="keyword">protected</span>:</div>
<div class="line"><a id="l00172" name="l00172"></a><span class="lineno">  172</span> </div>
<div class="line"><a id="l00181" name="l00181"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php#a5bef0040b0fa87bed9fbd459c980d53a">  181</a></span>    <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1RenderWindow.php#a5bef0040b0fa87bed9fbd459c980d53a">onCreate</a>();</div>
<div class="line"><a id="l00182" name="l00182"></a><span class="lineno">  182</span> </div>
<div class="line"><a id="l00190" name="l00190"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php#a5c85fe482313562d33ffd24a194b6fef">  190</a></span>    <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code hl_function" href="classsf_1_1RenderWindow.php#a5c85fe482313562d33ffd24a194b6fef">onResize</a>();</div>
<div class="line"><a id="l00191" name="l00191"></a><span class="lineno">  191</span> </div>
<div class="line"><a id="l00192" name="l00192"></a><span class="lineno">  192</span><span class="keyword">private</span>:</div>
<div class="line"><a id="l00193" name="l00193"></a><span class="lineno">  193</span> </div>
<div class="line"><a id="l00195" name="l00195"></a><span class="lineno">  195</span>    <span class="comment">// Member data</span></div>
<div class="line"><a id="l00197" name="l00197"></a><span class="lineno">  197</span>    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> m_defaultFrameBuffer; </div>
<div class="line"><a id="l00198" name="l00198"></a><span class="lineno">  198</span>};</div>
</div>
<div class="line"><a id="l00199" name="l00199"></a><span class="lineno">  199</span> </div>
<div class="line"><a id="l00200" name="l00200"></a><span class="lineno">  200</span>} <span class="comment">// namespace sf</span></div>
<div class="line"><a id="l00201" name="l00201"></a><span class="lineno">  201</span> </div>
<div class="line"><a id="l00202" name="l00202"></a><span class="lineno">  202</span> </div>
<div class="line"><a id="l00203" name="l00203"></a><span class="lineno">  203</span><span class="preprocessor">#endif </span><span class="comment">// SFML_RENDERWINDOW_HPP</span></div>
<div class="line"><a id="l00204" name="l00204"></a><span class="lineno">  204</span> </div>
<div class="line"><a id="l00205" name="l00205"></a><span class="lineno">  205</span> </div>
<div class="ttc" id="aclasssf_1_1Image_php"><div class="ttname"><a href="classsf_1_1Image.php">sf::Image</a></div><div class="ttdoc">Class for loading, manipulating and saving images.</div><div class="ttdef"><b>Definition</b> <a href="Image_8hpp_source.php#l00046">Image.hpp:47</a></div></div>
<div class="ttc" id="aclasssf_1_1RenderTarget_php"><div class="ttname"><a href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></div><div class="ttdoc">Base class for all render targets (window, texture, ...)</div><div class="ttdef"><b>Definition</b> <a href="RenderTarget_8hpp_source.php#l00052">RenderTarget.hpp:53</a></div></div>
<div class="ttc" id="aclasssf_1_1RenderWindow_php"><div class="ttname"><a href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></div><div class="ttdoc">Window that can serve as a target for 2D drawing.</div><div class="ttdef"><b>Definition</b> <a href="RenderWindow_8hpp_source.php#l00044">RenderWindow.hpp:45</a></div></div>
<div class="ttc" id="aclasssf_1_1RenderWindow_php_a25c0af7d515e710b6eebc9c6be952aa5"><div class="ttname"><a href="classsf_1_1RenderWindow.php#a25c0af7d515e710b6eebc9c6be952aa5">sf::RenderWindow::RenderWindow</a></div><div class="ttdeci">RenderWindow(WindowHandle handle, const ContextSettings &amp;settings=ContextSettings())</div><div class="ttdoc">Construct the window from an existing control.</div></div>
<div class="ttc" id="aclasssf_1_1RenderWindow_php_a3407e36bfc1752d723140438a825365c"><div class="ttname"><a href="classsf_1_1RenderWindow.php#a3407e36bfc1752d723140438a825365c">sf::RenderWindow::~RenderWindow</a></div><div class="ttdeci">virtual ~RenderWindow()</div><div class="ttdoc">Destructor.</div></div>
<div class="ttc" id="aclasssf_1_1RenderWindow_php_a5a784b8a09bf4a8bc97ef9e0a8957c35"><div class="ttname"><a href="classsf_1_1RenderWindow.php#a5a784b8a09bf4a8bc97ef9e0a8957c35">sf::RenderWindow::capture</a></div><div class="ttdeci">Image capture() const</div><div class="ttdoc">Copy the current contents of the window to an image.</div></div>
<div class="ttc" id="aclasssf_1_1RenderWindow_php_a5bef0040b0fa87bed9fbd459c980d53a"><div class="ttname"><a href="classsf_1_1RenderWindow.php#a5bef0040b0fa87bed9fbd459c980d53a">sf::RenderWindow::onCreate</a></div><div class="ttdeci">virtual void onCreate()</div><div class="ttdoc">Function called after the window has been created.</div></div>
<div class="ttc" id="aclasssf_1_1RenderWindow_php_a5c85fe482313562d33ffd24a194b6fef"><div class="ttname"><a href="classsf_1_1RenderWindow.php#a5c85fe482313562d33ffd24a194b6fef">sf::RenderWindow::onResize</a></div><div class="ttdeci">virtual void onResize()</div><div class="ttdoc">Function called after the window has been resized.</div></div>
<div class="ttc" id="aclasssf_1_1RenderWindow_php_a839bbf336bdcafb084dafc3076fc9021"><div class="ttname"><a href="classsf_1_1RenderWindow.php#a839bbf336bdcafb084dafc3076fc9021">sf::RenderWindow::RenderWindow</a></div><div class="ttdeci">RenderWindow()</div><div class="ttdoc">Default constructor.</div></div>
<div class="ttc" id="aclasssf_1_1RenderWindow_php_ad943b4797fe6e1d609f12ce413b6a093"><div class="ttname"><a href="classsf_1_1RenderWindow.php#ad943b4797fe6e1d609f12ce413b6a093">sf::RenderWindow::isSrgb</a></div><div class="ttdeci">virtual bool isSrgb() const</div><div class="ttdoc">Tell if the window will use sRGB encoding when drawing on it.</div></div>
<div class="ttc" id="aclasssf_1_1RenderWindow_php_ae3eacf93661c8068fca7a78d57dc7e14"><div class="ttname"><a href="classsf_1_1RenderWindow.php#ae3eacf93661c8068fca7a78d57dc7e14">sf::RenderWindow::getSize</a></div><div class="ttdeci">virtual Vector2u getSize() const</div><div class="ttdoc">Get the size of the rendering region of the window.</div></div>
<div class="ttc" id="aclasssf_1_1RenderWindow_php_aebef983e01f677bf5a66cefc4d547647"><div class="ttname"><a href="classsf_1_1RenderWindow.php#aebef983e01f677bf5a66cefc4d547647">sf::RenderWindow::RenderWindow</a></div><div class="ttdeci">RenderWindow(VideoMode mode, const String &amp;title, Uint32 style=Style::Default, const ContextSettings &amp;settings=ContextSettings())</div><div class="ttdoc">Construct a new window.</div></div>
<div class="ttc" id="aclasssf_1_1RenderWindow_php_aee6c53eced675e885931eb3e91f11155"><div class="ttname"><a href="classsf_1_1RenderWindow.php#aee6c53eced675e885931eb3e91f11155">sf::RenderWindow::setActive</a></div><div class="ttdeci">bool setActive(bool active=true)</div><div class="ttdoc">Activate or deactivate the window as the current target for OpenGL rendering.</div></div>
<div class="ttc" id="aclasssf_1_1String_php"><div class="ttname"><a href="classsf_1_1String.php">sf::String</a></div><div class="ttdoc">Utility string class that automatically handles conversions between types and encodings.</div><div class="ttdef"><b>Definition</b> <a href="String_8hpp_source.php#l00045">String.hpp:46</a></div></div>
<div class="ttc" id="aclasssf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2&lt; unsigned int &gt;</a></div></div>
<div class="ttc" id="aclasssf_1_1VideoMode_php"><div class="ttname"><a href="classsf_1_1VideoMode.php">sf::VideoMode</a></div><div class="ttdoc">VideoMode defines a video mode (width, height, bpp)</div><div class="ttdef"><b>Definition</b> <a href="VideoMode_8hpp_source.php#l00041">VideoMode.hpp:42</a></div></div>
<div class="ttc" id="aclasssf_1_1Window_php"><div class="ttname"><a href="classsf_1_1Window.php">sf::Window</a></div><div class="ttdoc">Window that serves as a target for OpenGL rendering.</div><div class="ttdef"><b>Definition</b> <a href="Window_2Window_8hpp_source.php#l00049">Window/Window.hpp:50</a></div></div>
<div class="ttc" id="astructsf_1_1ContextSettings_php"><div class="ttname"><a href="structsf_1_1ContextSettings.php">sf::ContextSettings</a></div><div class="ttdoc">Structure defining the settings of the OpenGL context attached to a window.</div><div class="ttdef"><b>Definition</b> <a href="ContextSettings_8hpp_source.php#l00037">ContextSettings.hpp:38</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>