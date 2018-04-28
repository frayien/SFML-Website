<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Time.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_dd2e492ad64d241b969bca3fa8d4cd6d.php">System</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Time.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_TIME_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_TIME_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/System/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;{</div><div class="line"><a name="l00040"></a><span class="lineno"><a class="line" href="classsf_1_1Time.php">   40</a></span>&#160;<span class="keyword">class </span>SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a></div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;{</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;    <a class="code" href="classsf_1_1Time.php">Time</a>();</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;    <span class="keywordtype">float</span> asSeconds() <span class="keyword">const</span>;</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;    Int32 asMilliseconds() <span class="keyword">const</span>;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;    Int64 asMicroseconds() <span class="keyword">const</span>;</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;    <span class="comment">// Static member data</span></div><div class="line"><a name="l00085"></a><span class="lineno"><a class="line" href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0">   85</a></span>&#160;<span class="comment"></span>    <span class="keyword">static</span> <span class="keyword">const</span> <a class="code" href="classsf_1_1Time.php">Time</a> <a class="code" href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0">Zero</a>; </div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;    <span class="keyword">friend</span> SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> seconds(<span class="keywordtype">float</span>);</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;    <span class="keyword">friend</span> SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> milliseconds(Int32);</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;    <span class="keyword">friend</span> SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> microseconds(Int64);</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1Time.php">Time</a>(Int64 microseconds);</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;<span class="comment"></span>    Int64 m_microseconds; </div><div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;};</div><div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;</div><div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> seconds(<span class="keywordtype">float</span> amount);</div><div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> milliseconds(Int32 amount);</div><div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;</div><div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> microseconds(Int64 amount);</div><div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;</div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator ==(<a class="code" href="classsf_1_1Time.php">Time</a> left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;</div><div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator !=(<a class="code" href="classsf_1_1Time.php">Time</a> left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;</div><div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &lt;(<a class="code" href="classsf_1_1Time.php">Time</a> left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;</div><div class="line"><a name="l00197"></a><span class="lineno">  197</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &gt;(<a class="code" href="classsf_1_1Time.php">Time</a> left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00198"></a><span class="lineno">  198</span>&#160;</div><div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &lt;=(<a class="code" href="classsf_1_1Time.php">Time</a> left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;</div><div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;SFML_SYSTEM_API <span class="keywordtype">bool</span> operator &gt;=(<a class="code" href="classsf_1_1Time.php">Time</a> left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;</div><div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> operator -(<a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00233"></a><span class="lineno">  233</span>&#160;</div><div class="line"><a name="l00244"></a><span class="lineno">  244</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> operator +(<a class="code" href="classsf_1_1Time.php">Time</a> left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00245"></a><span class="lineno">  245</span>&#160;</div><div class="line"><a name="l00256"></a><span class="lineno">  256</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a>&amp; operator +=(<a class="code" href="classsf_1_1Time.php">Time</a>&amp; left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00257"></a><span class="lineno">  257</span>&#160;</div><div class="line"><a name="l00268"></a><span class="lineno">  268</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> operator -(<a class="code" href="classsf_1_1Time.php">Time</a> left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00269"></a><span class="lineno">  269</span>&#160;</div><div class="line"><a name="l00280"></a><span class="lineno">  280</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a>&amp; operator -=(<a class="code" href="classsf_1_1Time.php">Time</a>&amp; left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00281"></a><span class="lineno">  281</span>&#160;</div><div class="line"><a name="l00292"></a><span class="lineno">  292</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> operator *(<a class="code" href="classsf_1_1Time.php">Time</a> left, <span class="keywordtype">float</span> right);</div><div class="line"><a name="l00293"></a><span class="lineno">  293</span>&#160;</div><div class="line"><a name="l00304"></a><span class="lineno">  304</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> operator *(<a class="code" href="classsf_1_1Time.php">Time</a> left, Int64 right);</div><div class="line"><a name="l00305"></a><span class="lineno">  305</span>&#160;</div><div class="line"><a name="l00316"></a><span class="lineno">  316</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> operator *(<span class="keywordtype">float</span> left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00317"></a><span class="lineno">  317</span>&#160;</div><div class="line"><a name="l00328"></a><span class="lineno">  328</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> operator *(Int64 left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00329"></a><span class="lineno">  329</span>&#160;</div><div class="line"><a name="l00340"></a><span class="lineno">  340</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a>&amp; operator *=(<a class="code" href="classsf_1_1Time.php">Time</a>&amp; left, <span class="keywordtype">float</span> right);</div><div class="line"><a name="l00341"></a><span class="lineno">  341</span>&#160;</div><div class="line"><a name="l00352"></a><span class="lineno">  352</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a>&amp; operator *=(<a class="code" href="classsf_1_1Time.php">Time</a>&amp; left, Int64 right);</div><div class="line"><a name="l00353"></a><span class="lineno">  353</span>&#160;</div><div class="line"><a name="l00364"></a><span class="lineno">  364</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> operator /(<a class="code" href="classsf_1_1Time.php">Time</a> left, <span class="keywordtype">float</span> right);</div><div class="line"><a name="l00365"></a><span class="lineno">  365</span>&#160;</div><div class="line"><a name="l00376"></a><span class="lineno">  376</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> operator /(<a class="code" href="classsf_1_1Time.php">Time</a> left, Int64 right);</div><div class="line"><a name="l00377"></a><span class="lineno">  377</span>&#160;</div><div class="line"><a name="l00388"></a><span class="lineno">  388</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a>&amp; operator /=(<a class="code" href="classsf_1_1Time.php">Time</a>&amp; left, <span class="keywordtype">float</span> right);</div><div class="line"><a name="l00389"></a><span class="lineno">  389</span>&#160;</div><div class="line"><a name="l00400"></a><span class="lineno">  400</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a>&amp; operator /=(<a class="code" href="classsf_1_1Time.php">Time</a>&amp; left, Int64 right);</div><div class="line"><a name="l00401"></a><span class="lineno">  401</span>&#160;</div><div class="line"><a name="l00412"></a><span class="lineno">  412</span>&#160;SFML_SYSTEM_API <span class="keywordtype">float</span> operator /(<a class="code" href="classsf_1_1Time.php">Time</a> left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00413"></a><span class="lineno">  413</span>&#160;</div><div class="line"><a name="l00424"></a><span class="lineno">  424</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a> operator %(<a class="code" href="classsf_1_1Time.php">Time</a> left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00425"></a><span class="lineno">  425</span>&#160;</div><div class="line"><a name="l00436"></a><span class="lineno">  436</span>&#160;SFML_SYSTEM_API <a class="code" href="classsf_1_1Time.php">Time</a>&amp; operator %=(<a class="code" href="classsf_1_1Time.php">Time</a>&amp; left, <a class="code" href="classsf_1_1Time.php">Time</a> right);</div><div class="line"><a name="l00437"></a><span class="lineno">  437</span>&#160;</div><div class="line"><a name="l00438"></a><span class="lineno">  438</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00439"></a><span class="lineno">  439</span>&#160;</div><div class="line"><a name="l00440"></a><span class="lineno">  440</span>&#160;</div><div class="line"><a name="l00441"></a><span class="lineno">  441</span>&#160;<span class="preprocessor">#endif // SFML_TIME_HPP</span></div><div class="line"><a name="l00442"></a><span class="lineno">  442</span>&#160;</div><div class="line"><a name="l00443"></a><span class="lineno">  443</span>&#160;</div><div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Time_php"><div class="ttname"><a href="classsf_1_1Time.php">sf::Time</a></div><div class="ttdoc">Represents a time value. </div><div class="ttdef"><b>Definition:</b> <a href="Time_8hpp_source.php#l00040">Time.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1Time_php_a8db127b632fa8da21550e7282af11fa0"><div class="ttname"><a href="classsf_1_1Time.php#a8db127b632fa8da21550e7282af11fa0">sf::Time::Zero</a></div><div class="ttdeci">static const Time Zero</div><div class="ttdoc">Predefined &quot;zero&quot; time value. </div><div class="ttdef"><b>Definition:</b> <a href="Time_8hpp_source.php#l00085">Time.hpp:85</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
