function PluginAnimateDaneden_v1(){
  this.animate = function(id, animation){
    var element =  document.getElementById(id);
    element.classList.add('animated', animation);
    element.addEventListener('animationend', function() { 
      element.classList.remove('animated', animation);
    });
  }
}
var PluginAnimateDaneden_v1 = new PluginAnimateDaneden_v1();
