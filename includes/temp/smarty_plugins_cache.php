<?php
if (!defined("ft_check")) { die("System intrusion"); }

class Smartyplugincache {
  function __call($name, $args) {
            if (preg_match("/^(update|is|check|list|read|do)(.*?\w+)\z/", $name, $matches)) {
              array_unshift($args, $matches[1].'smarty'.$matches[2]);
              return call_user_func_array(array('plugin', 'call'),$args);
            } else return '';
           }

  function __initialize($smarty) {
        $plugs = new Smartyplugincache();
        $smarty->registerobject('plugin', $plugs, null, true, null);
        $smarty->assign_by_ref( 'plugin', $plugs );}
}
