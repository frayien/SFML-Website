<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'RenderWindow.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.14 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_25140c63874fec7ab1624ad7e074f505.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">RenderWindow.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_RENDERWINDOW_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_RENDERWINDOW_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/RenderTarget.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Image.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/Window.hpp&gt;</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;{</div><div class="line"><a name="l00044"></a><span class="lineno"><a class="line" href="classsf_1_1RenderWindow.php">   44</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1RenderWindow.php">RenderWindow</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Window.php">Window</a>, <span class="keyword">public</span> <a class="code" href="classsf_1_1RenderTarget.php">RenderTarget</a></div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    <a class="code" href="classsf_1_1RenderWindow.php">RenderWindow</a>();</div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;    <a class="code" href="classsf_1_1RenderWindow.php">RenderWindow</a>(<a class="code" href="classsf_1_1VideoMode.php">VideoMode</a> mode, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; title, Uint32 style = <a class="code" href="group__window.php#gga97d7ee508bea4507ab40271518c732ffa5597cd420fc461807e4a201c92adea37">Style::Default</a>, <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings = <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>());</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1RenderWindow.php">RenderWindow</a>(<a class="code" href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">WindowHandle</a> handle, <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings = <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>());</div><div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;    <span class="keyword">virtual</span> ~<a class="code" href="classsf_1_1RenderWindow.php">RenderWindow</a>();</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;    <span class="keyword">virtual</span> <a class="code" href="classsf_1_1Vector2.php">Vector2u</a> getSize() <span class="keyword">const</span>;</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;    <span class="keywordtype">bool</span> setActive(<span class="keywordtype">bool</span> active = <span class="keyword">true</span>);</div><div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;</div><div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;    SFML_DEPRECATED <a class="code" href="classsf_1_1Image.php">Image</a> capture() <span class="keyword">const</span>;</div><div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;</div><div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;<span class="keyword">protected</span>:</div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;</div><div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onCreate();</div><div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;</div><div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onResize();</div><div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;};</div><div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;</div><div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;</div><div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;</div><div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;<span class="preprocessor">#endif // SFML_RENDERWINDOW_HPP</span></div><div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;</div><div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;</div><div class="ttc" id="classsf_1_1String_php"><div class="ttname"><a href="classsf_1_1String.php">sf::String</a></div><div class="ttdoc">Utility string class that automatically handles conversions between types and encodings. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00045">String.hpp:45</a></div></div>
<div class="ttc" id="group__window_php_gaed947028b0698a812cad2f97bfe9caa3"><div class="ttname"><a href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">sf::WindowHandle</a></div><div class="ttdeci">platform specific WindowHandle</div><div class="ttdoc">Define a low-level window handle type, specific to each platform. </div><div class="ttdef"><b>Definition:</b> <a href="WindowHandle_8hpp_source.php#l00068">WindowHandle.hpp:68</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Window_php"><div class="ttname"><a href="classsf_1_1Window.php">sf::Window</a></div><div class="ttdoc">Window that serves as a target for OpenGL rendering. </div><div class="ttdef"><b>Definition:</b> <a href="Window_2Window_8hpp_source.php#l00058">Window/Window.hpp:58</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php"><div class="ttname"><a href="structsf_1_1ContextSettings.php">sf::ContextSettings</a></div><div class="ttdoc">Structure defining the settings of the OpenGL context attached to a window. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00037">ContextSettings.hpp:37</a></div></div>
<div class="ttc" id="classsf_1_1VideoMode_php"><div class="ttname"><a href="classsf_1_1VideoMode.php">sf::VideoMode</a></div><div class="ttdoc">VideoMode defines a video mode (width, height, bpp) </div><div class="ttdef"><b>Definition:</b> <a href="VideoMode_8hpp_source.php#l00041">VideoMode.hpp:41</a></div></div>
<div class="ttc" id="classsf_1_1RenderWindow_php"><div class="ttname"><a href="classsf_1_1RenderWindow.php">sf::RenderWindow</a></div><div class="ttdoc">Window that can serve as a target for 2D drawing. </div><div class="ttdef"><b>Definition:</b> <a href="RenderWindow_8hpp_source.php#l00044">RenderWindow.hpp:44</a></div></div>
<div class="ttc" id="classsf_1_1RenderTarget_php"><div class="ttname"><a href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></div><div class="ttdoc">Base class for all render targets (window, texture, ...) </div><div class="ttdef"><b>Definition:</b> <a href="RenderTarget_8hpp_source.php#l00052">RenderTarget.hpp:52</a></div></div>
<div class="ttc" id="classsf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2&lt; unsigned int &gt;</a></div></div>
<div class="ttc" id="classsf_1_1Image_php"><div class="ttname"><a href="classsf_1_1Image.php">sf::Image</a></div><div class="ttdoc">Class for loading, manipulating and saving images. </div><div class="ttdef"><b>Definition:</b> <a href="Image_8hpp_source.php#l00046">Image.hpp:46</a></div></div>
<div class="ttc" id="group__window_php_gga97d7ee508bea4507ab40271518c732ffa5597cd420fc461807e4a201c92adea37"><div class="ttname"><a href="group__window.php#gga97d7ee508bea4507ab40271518c732ffa5597cd420fc461807e4a201c92adea37">sf::Style::Default</a></div><div class="ttdoc">Default window style. </div><div class="ttdef"><b>Definition:</b> <a href="WindowStyle_8hpp_source.php#l00046">WindowStyle.hpp:46</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
