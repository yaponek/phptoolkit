<?php
namespace phptoolkit;
/**
 * This class is designd to provide a clean php methods to construct& design WEbPAGES
 *
 * THIS CLASS PROVIDES SIMPLE PHP METHODS TO USE HTML TAGS
 *
 *  ALL HTML TAGS HAVE 2 Version
 *      Version 1. called directly by the tag name and have 2 commen parameter's
 *                 ->the First parameter take class name
 *                 ->any parameter in between the firt & the last parameter is tag specific
 *                   Example: link for a (anchor) tag
 *                 ->the last parameter take content
 *
 *      Version 2. called by the tag name+Atr Exaple aAtr for a (anchor) tag and have 2 commen parameter's
 *                 ->the First parameter take any html atribute
 *                 ->any parameter in between the firt & the last parameter is tag specific
 *                   Example: link for a (anchor) tag
 *                 ->the last parameter take content
 *
 *  ALL METHODS RETURN A STRING OF HTML STAMENT SO SHULD BE IMPLEMNTED WITH ECHO STATMENT
 *  ALL PARAMETER'S SHULD BE PASSED AS A STRING OR WRAPPED WITH QUOTATION MARK OR AS STRING VARIABLE
 *    EXAMPLE: a('class','link','content');
 *
 * AUTHOR: YARED KASSA
 * EMAIL: yaredk999@gmail.com
 * Copyright (c) 2020 YARED KASSA All Rights Reserved.
 *
 *  ANY ONE WHO GIVE A PROPER ACKNOWLEDGEMENT FOR THE AUTHOR CAN USE THIS FILE
 *
 */

require 'cssres.php';

class Html{

  protected $result;

  public function __construct() {
    $this->result='';
  }

  // THE METHOD BELLOW ARE TO EXECUTE THE THE ACTUAL HTML STRUCTURS

  public function body($class, $content) {
    //  this methods can be used to contain the components of the page with a class [its a body tag synonym]
    return $this->result="<body class='".$class."'>".$content."</body>";
  }

  public function bodyAtr($atr, $content) {
    //  this methods is used to contain the components of the page with any atribute [its a body tag synonym]
    return $this->result = "<body ".$atr.">".$content."</body>";
  }

  public function header($class, $content) {
    //  this methods can be used to create header components of the page with a class [its a header tag synonym]
    return $this->result = "<header class='".$class."'>".$content."</header>";
  }

  public function headerAtr($atr, $content) {
    //  this methods can be used to create header components of the page with any atribute [its a header tag synonym]
    return $this->result = "<header ".$atr.">".$content."</header>";
  }

  public function nav($class, $content) {
    //  this methods can be used to create header components of the page with a class [its a nav tag synonym]
    return $this->result = "<nav class='".$class."'>".$content."</nav>";
  }

  public function navAtr($atr, $content) {
    //  this methods can be used to create header components of the page with any atribute [its a nav tag synonym]
    return $this->result = "<nav ".$atr.">".$content."</nav>";
  }

  public function h($class, $number, $content) {
    //  this methods can be used to create header with a class [its a h tag synonym]
    return $this->result = "<h".$number." class='".$class."'>".$content."</h".$number.">";
  }

  public function hAtr($atr, $number, $content) {
    //  this methods can be used to create a header with atribute with any atribute [its a h tag synonym]
    $this->content = $content;
    return $this->result = "<h".$number." ".$atr.">".$content."</h".$number.">";
  }

  public function strong($class, $content) {
    //  this methods can be used to create bolder text element with a class  [its a strong tag synonym]
    return $this->result = "<strong class='".$class."' >".$content."</strong>";
  }

  public function strongAtr($atr, $content) {
    //  this methods can be used to create bolder text element with any atribute [its a strong tag synonym]
    return $this->result = "<strong ".$atr." >".$content."</strong>";
  }

  public function a($class, $link, $content) {
    //  this methods can be used to create anchor element to add links with a class  [its the a tag synonym]
    return $this->result = "<a class='".$class."' href='".$link."'>".$content."</a>";
  }

  public function aAtr($atr, $link, $content) {
    //  this methods can be used to create anchor element to add links with any atribute [its the a tag synonym]
    return $this->result = "<a ".$atr." href='".$link."'>".$content."</a>";
  }

  public function b($class, $content) {
    //  this methods can be used to make text bolder [its a b tag synonym]
    return $this->result = "<b class='".$class."' >".$content."</b>";
  }

  public function bAtr($atr, $content) {
    //  this methods can be used to make text bolder with any atribute [its a b tag synonym]
    return $this->result = "<b ".$atr." >".$content."</b>";
  }

  public function p($class, $content) {
    //  this methods can be used to create a paragraph element with a class [its a p tag synonym]
    return $this->result = "<p class='".$class."' >".$content."</p>";
  }

  public function pAtr($atr, $content) {
    //  this methods can be used to create a paragraph element with any atribute [its a p tag synonym]
    return $this->result = "<p ".$atr." >".$content."</p>";
  }

  public function form($class, $action, $method, $content) {
    //  this methods can be used to create form component with class, action, method & it take the proper component  [its a form tag synonym]
    return $this->result = "<form  action='".$action."' method='".$method."' class='".$class."' >".$content."</form>";
  }

  public function formAtr($atr, $action, $method, $content) {
    //  this methods can be used to create form component with atribute, action, method & it take the proper component  [its a form tag synonym]
    return $this->result = "<form  action='".$action."' method='".$method."' ".$atr." >".$content."</form>";
  }

  public function img($class, $res, $alt) {
    //  this methods can be used to create image component with atribute and class [its a img tag synonym]
    return $this->result = "<img class='".$class."' src='".$res."' alt='".$alt."' />";
  }

  public function imgAtr($atr, $res, $alt) {
    //  this methods can be used to create image component with atribute [its a img tag synonym]
    return $this->result = "<img src='".$res."' alt='".$alt."' ".$atr." />";
  }

  public function ul($class, $content) {
    //  this methods can be used to create unsorted list for list elemnt with a class  [its a ul tag synonym]
    return $this->result = "<ul class='".$class."' >".$content."</ul>";
  }

  public function ulAtr($atr, $content) {
    //  this methods can be used to create unsorted list for list elemnt with any atribute  [its a ul tag synonym]
    return $this->result = "<ul ".$atr." >".$content."</ul>";
  }

  public function ol($class, $content) {
    //  this methods can be used to create sorted list for list elemnt with a class  [its a ol tag synonym]
    return $this->result = "<ol class='".$class."' >".$content."</ol>";
  }

  public function olAtr($atr, $content) {
    //  this methods can be used to create sorted list for list elemnt with any atribute  [its a ol tag synonym]
    return $this->result = "<ol ".$atr." >".$content."</ol>";
  }

  public function li($class, $content) {
    //  this methods can be used to create list elemnt with a class  [its a li tag synonym]
    return $this->result = "<li class='".$class."' >".$content."</li>";
  }

  public function liAtr($atr, $content) {
    //  this methods can be used to create list elemnt with any atribute  [its a li tag synonym]
    return $this->result = "<li ".$atr." >".$content."</li>";
  }

  public function label($class, $content) {
    //  this methods can be used to create a label elemnt with class  [its a label tag synonym]
    return $this->result = "<span class='label ".$class."'>".$content."</span>";
  }

  public function labelAtr($atr, $content) {
    //  this methods can be used to create a label elemnt with any atribute  [its a label tag synonym]
    return $this->result = "<span ".$atr." >".$content."</span>";
  }

  public function span($class, $content) {
    //  this method provide class customizable span  [its a span tag synonym]
    return $this->result = "<span class='".$class."' >".$content."</span>";
  }

  public function spanAtr($atr, $content) {
    //  this method can be used to provide customizable span with atribute  [its a span tag synonym]
    return $this->result = "<span ".$atr." >".$content."</span>";
  }

  public function footer($class, $content) {
    //  this method provide class customisable footer with class
    return $this->result = "<footer class='".$class."' >".$content."</footer>";
  }

  public function footerAtr($atr, $content) {
    //  this method provide class customisable footer with atribute
    return $this->result = "<footer ".$atr." >".$content."</footer>";
  }

  public function small($class, $content) {
    //  this method provide fully customisable small with class
    return $this->result = "<small class='".$class."' >".$content."</small>";
  }

  public function smallAtr($atr, $content) {
    //  this method provide fully customisable small with atribute
    return $this->result = "<small ".$atr." >".$content."</small>";
  }

  public function aside($class ,$content) {
    //  this method provide fully customisable aside with span
    return $this->result = "<aside class='".$class."'>".$content."</aside>";
  }

  public function asideAtr($atr ,$content) {
    //  this method provide fully customisable aside with atribute
    return $this->result = "<aside ".$atr." >".$content."</aside>";
  }

  public function section($class ,$content) {
    //  this method provide fully customisable section with class
    return $this->result = "<section class='".$class."'>".$content."</section>";
  }

  public function sectionAtr($atr ,$content) {
    //  this method provide fully customisable section with atribute
    return $this->result = "<section ".$atr.">".$content."</section>";
  }

  public function input($class, $type, $pHolder) {
    //  this method provide fully customisable input with class
    return $this->result = "<input type='".$type."' class='".$class."' placeholder='".$pHolder."' />";
  }

  public function inputAtr($atr, $type, $pHolder) {
    //  this method provide fully customisable input with atribute
    return $this->result = "<input type='".$type."' ".$atr." placeholder='".$pHolder."' />";
  }

  public function btn($class, $text) {
    //  this method provide fully customisable button with class
    return $this->result = "<button class='btn ".$class."' >".$text."</button>";
  }

  public function btnAtr($atr, $text) {
    //  this method provide fully customisable button with atribute
    return $this->result = "<button ".$atr." >".$text."</button>";
  }

  public function div($class, $content) {
    //  this method provide fully customisable div with class
    return $this->result = "<div class='".$class."'>".$content."</div>";
  }

  public function divAtr($atr, $content) {
    //  this method provide fully customisable div with atribute
    return $this->result = "<div ".$atr.">".$content."</div>";
  }

  public function __destruct() {
  }

}
