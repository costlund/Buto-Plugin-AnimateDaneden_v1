<?php
class PluginAnimateDaneden_v1{
  public static function widget_include($data){
    $element = array();
    $element[] = wfDocument::createHtmlElement('link', null, array('href' => '/plugin/animate/daneden_v1/animate.min.css', 'rel' => 'stylesheet'));
    wfPlugin::enable('include/js');
    $element[] = wfDocument::createWidget('include/js', 'include', array('src' => '/plugin/animate/daneden_v1/PluginAnimateDaneden_v1.js'));
    wfDocument::renderElement($element);
  }
}
