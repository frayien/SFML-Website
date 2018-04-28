<?php
    $version = '2.5.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'VertexBuffer.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_25140c63874fec7ab1624ad7e074f505.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">VertexBuffer.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2018 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_VERTEXBUFFER_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_VERTEXBUFFER_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/PrimitiveType.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Drawable.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/GlResource.hpp&gt;</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>RenderTarget;</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">class </span>Vertex;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div><div class="line"><a name="l00046"></a><span class="lineno"><a class="line" href="classsf_1_1VertexBuffer.php">   46</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1Drawable.php">Drawable</a>, <span class="keyword">private</span> <a class="code" href="classsf_1_1GlResource.php">GlResource</a></div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;{</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div><div class="line"><a name="l00060"></a><span class="lineno"><a class="line" href="classsf_1_1VertexBuffer.php#a3a531528684e63ecb45edd51282f5cb7">   60</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="classsf_1_1VertexBuffer.php#a3a531528684e63ecb45edd51282f5cb7">Usage</a></div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    {</div><div class="line"><a name="l00062"></a><span class="lineno"><a class="line" href="classsf_1_1VertexBuffer.php#a3a531528684e63ecb45edd51282f5cb7aeed06a391698772af58a9cfdff77deaf">   62</a></span>&#160;        <a class="code" href="classsf_1_1VertexBuffer.php#a3a531528684e63ecb45edd51282f5cb7aeed06a391698772af58a9cfdff77deaf">Stream</a>,  </div><div class="line"><a name="l00063"></a><span class="lineno"><a class="line" href="classsf_1_1VertexBuffer.php#a3a531528684e63ecb45edd51282f5cb7a13365282a5933ecd9cc6a3ef39ba58f7">   63</a></span>&#160;        <a class="code" href="classsf_1_1VertexBuffer.php#a3a531528684e63ecb45edd51282f5cb7a13365282a5933ecd9cc6a3ef39ba58f7">Dynamic</a>, </div><div class="line"><a name="l00064"></a><span class="lineno"><a class="line" href="classsf_1_1VertexBuffer.php#a3a531528684e63ecb45edd51282f5cb7a041ab564f6cd1b6775bd0ebff06b6d7e">   64</a></span>&#160;        Static   </div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    };</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;    <a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>();</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>(<a class="code" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a> type);</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>(Usage usage);</div><div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;    <a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>(<a class="code" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a> type, Usage usage);</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;    <a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>&amp; copy);</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;    ~<a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>();</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;</div><div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;    <span class="keywordtype">bool</span> create(std::size_t vertexCount);</div><div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;</div><div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;    std::size_t getVertexCount() <span class="keyword">const</span>;</div><div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;</div><div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;    <span class="keywordtype">bool</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vertex.php">Vertex</a>* vertices);</div><div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;</div><div class="line"><a name="l00198"></a><span class="lineno">  198</span>&#160;    <span class="keywordtype">bool</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Vertex.php">Vertex</a>* vertices, std::size_t vertexCount, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> offset);</div><div class="line"><a name="l00199"></a><span class="lineno">  199</span>&#160;</div><div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;    <span class="keywordtype">bool</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>&amp; vertexBuffer);</div><div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;</div><div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;    <a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>&amp; operator =(<span class="keyword">const</span> <a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>&amp; right);</div><div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;</div><div class="line"><a name="l00226"></a><span class="lineno">  226</span>&#160;    <span class="keywordtype">void</span> swap(<a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>&amp; right);</div><div class="line"><a name="l00227"></a><span class="lineno">  227</span>&#160;</div><div class="line"><a name="l00238"></a><span class="lineno">  238</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getNativeHandle() <span class="keyword">const</span>;</div><div class="line"><a name="l00239"></a><span class="lineno">  239</span>&#160;</div><div class="line"><a name="l00251"></a><span class="lineno">  251</span>&#160;    <span class="keywordtype">void</span> setPrimitiveType(<a class="code" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a> type);</div><div class="line"><a name="l00252"></a><span class="lineno">  252</span>&#160;</div><div class="line"><a name="l00259"></a><span class="lineno">  259</span>&#160;    <a class="code" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a> getPrimitiveType() <span class="keyword">const</span>;</div><div class="line"><a name="l00260"></a><span class="lineno">  260</span>&#160;</div><div class="line"><a name="l00276"></a><span class="lineno">  276</span>&#160;    <span class="keywordtype">void</span> setUsage(Usage usage);</div><div class="line"><a name="l00277"></a><span class="lineno">  277</span>&#160;</div><div class="line"><a name="l00284"></a><span class="lineno">  284</span>&#160;    Usage getUsage() <span class="keyword">const</span>;</div><div class="line"><a name="l00285"></a><span class="lineno">  285</span>&#160;</div><div class="line"><a name="l00307"></a><span class="lineno">  307</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">void</span> bind(<span class="keyword">const</span> <a class="code" href="classsf_1_1VertexBuffer.php">VertexBuffer</a>* vertexBuffer);</div><div class="line"><a name="l00308"></a><span class="lineno">  308</span>&#160;</div><div class="line"><a name="l00319"></a><span class="lineno">  319</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">bool</span> isAvailable();</div><div class="line"><a name="l00320"></a><span class="lineno">  320</span>&#160;</div><div class="line"><a name="l00321"></a><span class="lineno">  321</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00322"></a><span class="lineno">  322</span>&#160;</div><div class="line"><a name="l00330"></a><span class="lineno">  330</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> draw(<a class="code" href="classsf_1_1RenderTarget.php">RenderTarget</a>&amp; target, <a class="code" href="classsf_1_1RenderStates.php">RenderStates</a> states) <span class="keyword">const</span>;</div><div class="line"><a name="l00331"></a><span class="lineno">  331</span>&#160;</div><div class="line"><a name="l00332"></a><span class="lineno">  332</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00333"></a><span class="lineno">  333</span>&#160;</div><div class="line"><a name="l00335"></a><span class="lineno">  335</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00337"></a><span class="lineno">  337</span>&#160;<span class="comment"></span>    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>  m_buffer;        </div><div class="line"><a name="l00338"></a><span class="lineno">  338</span>&#160;    std::size_t   m_size;          </div><div class="line"><a name="l00339"></a><span class="lineno">  339</span>&#160;    <a class="code" href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">PrimitiveType</a> m_primitiveType; </div><div class="line"><a name="l00340"></a><span class="lineno">  340</span>&#160;    Usage         m_usage;         </div><div class="line"><a name="l00341"></a><span class="lineno">  341</span>&#160;};</div><div class="line"><a name="l00342"></a><span class="lineno">  342</span>&#160;</div><div class="line"><a name="l00343"></a><span class="lineno">  343</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00344"></a><span class="lineno">  344</span>&#160;</div><div class="line"><a name="l00345"></a><span class="lineno">  345</span>&#160;</div><div class="line"><a name="l00346"></a><span class="lineno">  346</span>&#160;<span class="preprocessor">#endif // SFML_VERTEXBUFFER_HPP</span></div><div class="line"><a name="l00347"></a><span class="lineno">  347</span>&#160;</div><div class="line"><a name="l00348"></a><span class="lineno">  348</span>&#160;</div><div class="ttc" id="classsf_1_1VertexBuffer_php_a3a531528684e63ecb45edd51282f5cb7aeed06a391698772af58a9cfdff77deaf"><div class="ttname"><a href="classsf_1_1VertexBuffer.php#a3a531528684e63ecb45edd51282f5cb7aeed06a391698772af58a9cfdff77deaf">sf::VertexBuffer::Stream</a></div><div class="ttdoc">Constantly changing data. </div><div class="ttdef"><b>Definition:</b> <a href="VertexBuffer_8hpp_source.php#l00062">VertexBuffer.hpp:62</a></div></div>
<div class="ttc" id="group__graphics_php_ga5ee56ac1339984909610713096283b1b"><div class="ttname"><a href="group__graphics.php#ga5ee56ac1339984909610713096283b1b">sf::PrimitiveType</a></div><div class="ttdeci">PrimitiveType</div><div class="ttdoc">Types of primitives that a sf::VertexArray can render. </div><div class="ttdef"><b>Definition:</b> <a href="PrimitiveType_8hpp_source.php#l00039">PrimitiveType.hpp:39</a></div></div>
<div class="ttc" id="classsf_1_1Vertex_php"><div class="ttname"><a href="classsf_1_1Vertex.php">sf::Vertex</a></div><div class="ttdoc">Define a point with color and texture coordinates. </div><div class="ttdef"><b>Definition:</b> <a href="Vertex_8hpp_source.php#l00042">Vertex.hpp:42</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1GlResource_php"><div class="ttname"><a href="classsf_1_1GlResource.php">sf::GlResource</a></div><div class="ttdoc">Base class for classes that require an OpenGL context. </div><div class="ttdef"><b>Definition:</b> <a href="GlResource_8hpp_source.php#l00046">GlResource.hpp:46</a></div></div>
<div class="ttc" id="classsf_1_1RenderStates_php"><div class="ttname"><a href="classsf_1_1RenderStates.php">sf::RenderStates</a></div><div class="ttdoc">Define the states used for drawing to a RenderTarget. </div><div class="ttdef"><b>Definition:</b> <a href="RenderStates_8hpp_source.php#l00045">RenderStates.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1VertexBuffer_php_a3a531528684e63ecb45edd51282f5cb7"><div class="ttname"><a href="classsf_1_1VertexBuffer.php#a3a531528684e63ecb45edd51282f5cb7">sf::VertexBuffer::Usage</a></div><div class="ttdeci">Usage</div><div class="ttdoc">Usage specifiers. </div><div class="ttdef"><b>Definition:</b> <a href="VertexBuffer_8hpp_source.php#l00060">VertexBuffer.hpp:60</a></div></div>
<div class="ttc" id="classsf_1_1Drawable_php"><div class="ttname"><a href="classsf_1_1Drawable.php">sf::Drawable</a></div><div class="ttdoc">Abstract base class for objects that can be drawn to a render target. </div><div class="ttdef"><b>Definition:</b> <a href="Drawable_8hpp_source.php#l00044">Drawable.hpp:44</a></div></div>
<div class="ttc" id="classsf_1_1VertexBuffer_php"><div class="ttname"><a href="classsf_1_1VertexBuffer.php">sf::VertexBuffer</a></div><div class="ttdoc">Vertex buffer storage for one or more 2D primitives. </div><div class="ttdef"><b>Definition:</b> <a href="VertexBuffer_8hpp_source.php#l00046">VertexBuffer.hpp:46</a></div></div>
<div class="ttc" id="classsf_1_1VertexBuffer_php_a3a531528684e63ecb45edd51282f5cb7a13365282a5933ecd9cc6a3ef39ba58f7"><div class="ttname"><a href="classsf_1_1VertexBuffer.php#a3a531528684e63ecb45edd51282f5cb7a13365282a5933ecd9cc6a3ef39ba58f7">sf::VertexBuffer::Dynamic</a></div><div class="ttdoc">Occasionally changing data. </div><div class="ttdef"><b>Definition:</b> <a href="VertexBuffer_8hpp_source.php#l00063">VertexBuffer.hpp:63</a></div></div>
<div class="ttc" id="classsf_1_1RenderTarget_php"><div class="ttname"><a href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></div><div class="ttdoc">Base class for all render targets (window, texture, ...) </div><div class="ttdef"><b>Definition:</b> <a href="RenderTarget_8hpp_source.php#l00052">RenderTarget.hpp:52</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
