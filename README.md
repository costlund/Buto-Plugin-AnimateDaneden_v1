# Buto-Plugin-AnimateDaneden_v1

<p>Animate element.
Add class animated and what kind of animation. 
Also add class infinite if necessary.</p>
<ul>
<li><a href="https://daneden.github.io/animate.css/">https://daneden.github.io/animate.css/</a></li>
<li><a href="https://github.com/daneden/animate.css">https://github.com/daneden/animate.css</a></li>
</ul>

<a name="key_0"></a>

## Usage

<p>Do animations via attribute class or Javascript.</p>

<a name="key_0_0"></a>

### Class

<pre><code>&lt;h1 class="animated bounce"&gt;Class&lt;/h1&gt;</code></pre>

<a name="key_0_1"></a>

### Javascript

<pre><code>&lt;h1 id="js"&gt;Javascript&lt;/h1&gt;
&lt;button onclick="PluginAnimateDaneden_v1.animate('js', 'bounce')"&gt;Animate&lt;/button&gt;</code></pre>
<p>If using Javascript on an element concider not to add the class attribute also. This could cause the animation to not work.</p>

<a name="key_0_2"></a>

### Animations

<pre><code>bounce
shake
wobble
bounceInLeft
bounceOutDown
fadeIn
fadeInLeftBig
fadeInUpBig
fadeOutLeft
fadeOutUp
flipOutX
rotateIn
rotateInUpRight
rotateOutUpLeft
rollIn
zoomInLeft
zoomOutDown
slideInDown
slideOutDown
heartBeat
flash
headShake
jello
bounceInRight
bounceOutLeft
fadeInDown
fadeInRight
fadeOut
fadeOutLeftBig
fadeOutUpBig
flipOutY
rotateInDownLeft
rotateOut
rotateOutUpRight
rollOut
zoomInRight
zoomOutLeft
slideInLeft
slideOutLeft
pulse
swing
bounceIn
bounceInUp
bounceOutRight
fadeInDownBig
fadeInRightBig
fadeOutDown
fadeOutRight
flipInX
lightSpeedIn
rotateInDownRight
rotateOutDownLeft
hinge
zoomIn
zoomInUp
zoomOutRight
slideInRight
slideOutRight
rubberBand
tada
bounceInDown
bounceOut
bounceOutUp
fadeInLeft
fadeInUp
fadeOutDownBig
fadeOutRightBig
flipInY
lightSpeedOut
rotateInUpLeft
rotateOutDownRight
jackInTheBox
zoomInDown
zoomOut
zoomOutUp
slideInUp
slideOutUp</code></pre>

<a name="key_1"></a>

## Widgets

<p>Include widget include in head.</p>

<a name="key_1_0"></a>

### widget_include

<pre><code>type: widget
data:
  plugin: animate/daneden_v1
  method: include</code></pre>

