<?php
class PluginSelectSelect2_4_1_0{
  public function widget_include($data){
    wfPlugin::includeonce('include/js');
    $element = new PluginWfYml(__DIR__.'/element/'.__FUNCTION__.'.yml');
    wfDocument::renderElement($element);
  }
}