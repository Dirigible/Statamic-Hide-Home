<?php

class Hooks_hide_home extends Hooks
{
  public function control_panel__add_to_head()
  {
    if (URL::getCurrent(false) == '/pages') {
      $css = "<style>.page:first-child { display: none; } .subpages .page:first-child { display: block; }</style>";
      return $css;
    }
  }
}
