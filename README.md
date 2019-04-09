# Buto-Plugin-AnimateDaneden_v1

Animate element.
Add class animated and what kind of animation. Also add class infinite if necessary.

## Class

Add class animated and name of animation to an element. (not span tags?)

### Infinite
Add class infinite for constant animation.


https://daneden.github.io/animate.css/

https://github.com/daneden/animate.css


## Widget
Include in head.
```
type: widget
data:
  plugin: animate/daneden_v1
  method: include
```

## Class
```
<h1 class="animated bounce">Class</h1>
```


## Javascript
```
<h1 id="js">Javascript</h1>
<button onclick="PluginAnimateDaneden_v1.animate('js', 'bounce')">Animate</button>
```


## Animations

```
bounce
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
slideOutUp
```

