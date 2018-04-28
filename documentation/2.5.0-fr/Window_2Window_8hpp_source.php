<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Window.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_9aeeb18f6197238fd33123535246e540.php">Window</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Window/Window.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_WINDOW_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_WINDOW_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Window/ContextSettings.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/Cursor.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/Export.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/GlResource.hpp&gt;</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/VideoMode.hpp&gt;</span></div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/WindowHandle.hpp&gt;</span></div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/WindowStyle.hpp&gt;</span></div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Clock.hpp&gt;</span></div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="preprocessor">#include &lt;SFML/System/NonCopyable.hpp&gt;</span></div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="preprocessor">#include &lt;SFML/System/String.hpp&gt;</span></div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;{</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">namespace </span>priv</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;{</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;    <span class="keyword">class </span>GlContext;</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    <span class="keyword">class </span>WindowImpl;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;}</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="keyword">class </span>Event;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div><div class="line"><a name="l00058"></a><span class="lineno"><a class="line" href="classsf_1_1Window.php">   58</a></span>&#160;<span class="keyword">class </span>SFML_WINDOW_API <a class="code" href="classsf_1_1Window.php">Window</a> : <a class="code" href="classsf_1_1GlResource.php">GlResource</a>, <a class="code" href="classsf_1_1NonCopyable.php">NonCopyable</a></div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;{</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;    <a class="code" href="classsf_1_1Window.php">Window</a>();</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;    <a class="code" href="classsf_1_1Window.php">Window</a>(<a class="code" href="classsf_1_1VideoMode.php">VideoMode</a> mode, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; title, Uint32 style = <a class="code" href="group__window.php#gga97d7ee508bea4507ab40271518c732ffa5597cd420fc461807e4a201c92adea37">Style::Default</a>, <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings = <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>());</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1Window.php">Window</a>(<a class="code" href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">WindowHandle</a> handle, <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings = <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>());</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;    <span class="keyword">virtual</span> ~<a class="code" href="classsf_1_1Window.php">Window</a>();</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;</div><div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;    <span class="keywordtype">void</span> create(<a class="code" href="classsf_1_1VideoMode.php">VideoMode</a> mode, <span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; title, Uint32 style = <a class="code" href="group__window.php#gga97d7ee508bea4507ab40271518c732ffa5597cd420fc461807e4a201c92adea37">Style::Default</a>, <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings = <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>());</div><div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;</div><div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;    <span class="keywordtype">void</span> create(<a class="code" href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">WindowHandle</a> handle, <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; settings = <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>());</div><div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;</div><div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;    <span class="keywordtype">void</span> close();</div><div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;</div><div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;    <span class="keywordtype">bool</span> isOpen() <span class="keyword">const</span>;</div><div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;</div><div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;    <span class="keyword">const</span> <a class="code" href="structsf_1_1ContextSettings.php">ContextSettings</a>&amp; getSettings() <span class="keyword">const</span>;</div><div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;</div><div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;    <span class="keywordtype">bool</span> pollEvent(<a class="code" href="classsf_1_1Event.php">Event</a>&amp; event);</div><div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;</div><div class="line"><a name="l00239"></a><span class="lineno">  239</span>&#160;    <span class="keywordtype">bool</span> waitEvent(<a class="code" href="classsf_1_1Event.php">Event</a>&amp; event);</div><div class="line"><a name="l00240"></a><span class="lineno">  240</span>&#160;</div><div class="line"><a name="l00249"></a><span class="lineno">  249</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2i</a> getPosition() <span class="keyword">const</span>;</div><div class="line"><a name="l00250"></a><span class="lineno">  250</span>&#160;</div><div class="line"><a name="l00263"></a><span class="lineno">  263</span>&#160;    <span class="keywordtype">void</span> setPosition(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2i</a>&amp; position);</div><div class="line"><a name="l00264"></a><span class="lineno">  264</span>&#160;</div><div class="line"><a name="l00276"></a><span class="lineno">  276</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2u</a> getSize() <span class="keyword">const</span>;</div><div class="line"><a name="l00277"></a><span class="lineno">  277</span>&#160;</div><div class="line"><a name="l00286"></a><span class="lineno">  286</span>&#160;    <span class="keywordtype">void</span> setSize(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2u</a>&amp; size);</div><div class="line"><a name="l00287"></a><span class="lineno">  287</span>&#160;</div><div class="line"><a name="l00296"></a><span class="lineno">  296</span>&#160;    <span class="keywordtype">void</span> setTitle(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp; title);</div><div class="line"><a name="l00297"></a><span class="lineno">  297</span>&#160;</div><div class="line"><a name="l00315"></a><span class="lineno">  315</span>&#160;    <span class="keywordtype">void</span> setIcon(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> height, <span class="keyword">const</span> Uint8* pixels);</div><div class="line"><a name="l00316"></a><span class="lineno">  316</span>&#160;</div><div class="line"><a name="l00325"></a><span class="lineno">  325</span>&#160;    <span class="keywordtype">void</span> setVisible(<span class="keywordtype">bool</span> visible);</div><div class="line"><a name="l00326"></a><span class="lineno">  326</span>&#160;</div><div class="line"><a name="l00340"></a><span class="lineno">  340</span>&#160;    <span class="keywordtype">void</span> setVerticalSyncEnabled(<span class="keywordtype">bool</span> enabled);</div><div class="line"><a name="l00341"></a><span class="lineno">  341</span>&#160;</div><div class="line"><a name="l00350"></a><span class="lineno">  350</span>&#160;    <span class="keywordtype">void</span> setMouseCursorVisible(<span class="keywordtype">bool</span> visible);</div><div class="line"><a name="l00351"></a><span class="lineno">  351</span>&#160;</div><div class="line"><a name="l00363"></a><span class="lineno">  363</span>&#160;    <span class="keywordtype">void</span> setMouseCursorGrabbed(<span class="keywordtype">bool</span> grabbed);</div><div class="line"><a name="l00364"></a><span class="lineno">  364</span>&#160;</div><div class="line"><a name="l00382"></a><span class="lineno">  382</span>&#160;    <span class="keywordtype">void</span> setMouseCursor(<span class="keyword">const</span> <a class="code" href="classsf_1_1Cursor.php">Cursor</a>&amp; cursor);</div><div class="line"><a name="l00383"></a><span class="lineno">  383</span>&#160;</div><div class="line"><a name="l00396"></a><span class="lineno">  396</span>&#160;    <span class="keywordtype">void</span> setKeyRepeatEnabled(<span class="keywordtype">bool</span> enabled);</div><div class="line"><a name="l00397"></a><span class="lineno">  397</span>&#160;</div><div class="line"><a name="l00413"></a><span class="lineno">  413</span>&#160;    <span class="keywordtype">void</span> setFramerateLimit(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> limit);</div><div class="line"><a name="l00414"></a><span class="lineno">  414</span>&#160;</div><div class="line"><a name="l00426"></a><span class="lineno">  426</span>&#160;    <span class="keywordtype">void</span> setJoystickThreshold(<span class="keywordtype">float</span> threshold);</div><div class="line"><a name="l00427"></a><span class="lineno">  427</span>&#160;</div><div class="line"><a name="l00444"></a><span class="lineno">  444</span>&#160;    <span class="keywordtype">bool</span> setActive(<span class="keywordtype">bool</span> active = <span class="keyword">true</span>) <span class="keyword">const</span>;</div><div class="line"><a name="l00445"></a><span class="lineno">  445</span>&#160;</div><div class="line"><a name="l00460"></a><span class="lineno">  460</span>&#160;    <span class="keywordtype">void</span> requestFocus();</div><div class="line"><a name="l00461"></a><span class="lineno">  461</span>&#160;</div><div class="line"><a name="l00473"></a><span class="lineno">  473</span>&#160;    <span class="keywordtype">bool</span> hasFocus() <span class="keyword">const</span>;</div><div class="line"><a name="l00474"></a><span class="lineno">  474</span>&#160;</div><div class="line"><a name="l00483"></a><span class="lineno">  483</span>&#160;    <span class="keywordtype">void</span> display();</div><div class="line"><a name="l00484"></a><span class="lineno">  484</span>&#160;</div><div class="line"><a name="l00497"></a><span class="lineno">  497</span>&#160;    <a class="code" href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">WindowHandle</a> getSystemHandle() <span class="keyword">const</span>;</div><div class="line"><a name="l00498"></a><span class="lineno">  498</span>&#160;</div><div class="line"><a name="l00499"></a><span class="lineno">  499</span>&#160;<span class="keyword">protected</span>:</div><div class="line"><a name="l00500"></a><span class="lineno">  500</span>&#160;</div><div class="line"><a name="l00509"></a><span class="lineno">  509</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onCreate();</div><div class="line"><a name="l00510"></a><span class="lineno">  510</span>&#160;</div><div class="line"><a name="l00518"></a><span class="lineno">  518</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onResize();</div><div class="line"><a name="l00519"></a><span class="lineno">  519</span>&#160;</div><div class="line"><a name="l00520"></a><span class="lineno">  520</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00521"></a><span class="lineno">  521</span>&#160;</div><div class="line"><a name="l00534"></a><span class="lineno">  534</span>&#160;    <span class="keywordtype">bool</span> filterEvent(<span class="keyword">const</span> <a class="code" href="classsf_1_1Event.php">Event</a>&amp; event);</div><div class="line"><a name="l00535"></a><span class="lineno">  535</span>&#160;</div><div class="line"><a name="l00540"></a><span class="lineno">  540</span>&#160;    <span class="keywordtype">void</span> initialize();</div><div class="line"><a name="l00541"></a><span class="lineno">  541</span>&#160;</div><div class="line"><a name="l00543"></a><span class="lineno">  543</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00545"></a><span class="lineno">  545</span>&#160;<span class="comment"></span>    priv::WindowImpl* m_impl;           </div><div class="line"><a name="l00546"></a><span class="lineno">  546</span>&#160;    priv::GlContext*  m_context;        </div><div class="line"><a name="l00547"></a><span class="lineno">  547</span>&#160;    <a class="code" href="classsf_1_1Clock.php">Clock</a>             m_clock;          </div><div class="line"><a name="l00548"></a><span class="lineno">  548</span>&#160;    <a class="code" href="classsf_1_1Time.php">Time</a>              m_frameTimeLimit; </div><div class="line"><a name="l00549"></a><span class="lineno">  549</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2u</a>          m_size;           </div><div class="line"><a name="l00550"></a><span class="lineno">  550</span>&#160;};</div><div class="line"><a name="l00551"></a><span class="lineno">  551</span>&#160;</div><div class="line"><a name="l00552"></a><span class="lineno">  552</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00553"></a><span class="lineno">  553</span>&#160;</div><div class="line"><a name="l00554"></a><span class="lineno">  554</span>&#160;</div><div class="line"><a name="l00555"></a><span class="lineno">  555</span>&#160;<span class="preprocessor">#endif // SFML_WINDOW_HPP</span></div><div class="line"><a name="l00556"></a><span class="lineno">  556</span>&#160;</div><div class="line"><a name="l00557"></a><span class="lineno">  557</span>&#160;</div><div class="ttc" id="classsf_1_1String_php"><div class="ttname"><a href="classsf_1_1String.php">sf::String</a></div><div class="ttdoc">Utility string class that automatically handles conversions between types and encodings. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00045">String.hpp:45</a></div></div>
<div class="ttc" id="group__window_php_gaed947028b0698a812cad2f97bfe9caa3"><div class="ttname"><a href="group__window.php#gaed947028b0698a812cad2f97bfe9caa3">sf::WindowHandle</a></div><div class="ttdeci">platform specific WindowHandle</div><div class="ttdoc">Define a low-level window handle type, specific to each platform. </div><div class="ttdef"><b>Definition:</b> <a href="WindowHandle_8hpp_source.php#l00068">WindowHandle.hpp:68</a></div></div>
<div class="ttc" id="classsf_1_1Cursor_php"><div class="ttname"><a href="classsf_1_1Cursor.php">sf::Cursor</a></div><div class="ttdoc">Cursor defines the appearance of a system cursor. </div><div class="ttdef"><b>Definition:</b> <a href="Cursor_8hpp_source.php#l00046">Cursor.hpp:46</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Time_php"><div class="ttname"><a href="classsf_1_1Time.php">sf::Time</a></div><div class="ttdoc">Represents a time value. </div><div class="ttdef"><b>Definition:</b> <a href="Time_8hpp_source.php#l00040">Time.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1GlResource_php"><div class="ttname"><a href="classsf_1_1GlResource.php">sf::GlResource</a></div><div class="ttdoc">Base class for classes that require an OpenGL context. </div><div class="ttdef"><b>Definition:</b> <a href="GlResource_8hpp_source.php#l00046">GlResource.hpp:46</a></div></div>
<div class="ttc" id="classsf_1_1Event_php"><div class="ttname"><a href="classsf_1_1Event.php">sf::Event</a></div><div class="ttdoc">Defines a system event and its parameters. </div><div class="ttdef"><b>Definition:</b> <a href="Event_8hpp_source.php#l00044">Event.hpp:44</a></div></div>
<div class="ttc" id="classsf_1_1Window_php"><div class="ttname"><a href="classsf_1_1Window.php">sf::Window</a></div><div class="ttdoc">Window that serves as a target for OpenGL rendering. </div><div class="ttdef"><b>Definition:</b> <a href="Window_2Window_8hpp_source.php#l00058">Window/Window.hpp:58</a></div></div>
<div class="ttc" id="classsf_1_1NonCopyable_php"><div class="ttname"><a href="classsf_1_1NonCopyable.php">sf::NonCopyable</a></div><div class="ttdoc">Utility class that makes any derived class non-copyable. </div><div class="ttdef"><b>Definition:</b> <a href="NonCopyable_8hpp_source.php#l00041">NonCopyable.hpp:41</a></div></div>
<div class="ttc" id="structsf_1_1ContextSettings_php"><div class="ttname"><a href="structsf_1_1ContextSettings.php">sf::ContextSettings</a></div><div class="ttdoc">Structure defining the settings of the OpenGL context attached to a window. </div><div class="ttdef"><b>Definition:</b> <a href="ContextSettings_8hpp_source.php#l00037">ContextSettings.hpp:37</a></div></div>
<div class="ttc" id="classsf_1_1VideoMode_php"><div class="ttname"><a href="classsf_1_1VideoMode.php">sf::VideoMode</a></div><div class="ttdoc">VideoMode defines a video mode (width, height, bpp) </div><div class="ttdef"><b>Definition:</b> <a href="VideoMode_8hpp_source.php#l00041">VideoMode.hpp:41</a></div></div>
<div class="ttc" id="classsf_1_1Clock_php"><div class="ttname"><a href="classsf_1_1Clock.php">sf::Clock</a></div><div class="ttdoc">Utility class that measures the elapsed time. </div><div class="ttdef"><b>Definition:</b> <a href="Clock_8hpp_source.php#l00041">Clock.hpp:41</a></div></div>
<div class="ttc" id="classsf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2</a></div><div class="ttdoc">Utility template class for manipulating 2-dimensional vectors. </div><div class="ttdef"><b>Definition:</b> <a href="Vector2_8hpp_source.php#l00037">Vector2.hpp:37</a></div></div>
<div class="ttc" id="group__window_php_gga97d7ee508bea4507ab40271518c732ffa5597cd420fc461807e4a201c92adea37"><div class="ttname"><a href="group__window.php#gga97d7ee508bea4507ab40271518c732ffa5597cd420fc461807e4a201c92adea37">sf::Style::Default</a></div><div class="ttdoc">Default window style. </div><div class="ttdef"><b>Definition:</b> <a href="WindowStyle_8hpp_source.php#l00046">WindowStyle.hpp:46</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
