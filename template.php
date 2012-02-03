<?php

// The QuickSites layout (can be overridden by dependant themes)
$GLOBALS['quickSites_layout'] = 'a';

// These content types will not display a title in inner.tpl.php
$GLOBALS['no_title_node_types'] = array("qs_events", "qs_people");

// No need to include this in the override version of this file
function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return implode(' &gt; ', $breadcrumb);
  }
}


?>