<?php

function not_root(){
  return false;
}

function show($page){
  $templateDir = "app/view/templates";
  $pageDir = "app/view/pages";
  global $pageTitle;

  if ($page == "fatworm") {
    include("$pageDir/fatworm.php");
    return;
  }

  if($page == '404' || !is_file("$pageDir/$page.html")){
    include("$templateDir/404.php");
    return;
  }

  $title = $pageTitle[$page];

  include("$templateDir/header.php");
  include("$pageDir/$page.html");
  include("$templateDir/footer.php");
}

function action($action) {
  $actionDir = "app/actions";
  if(!is_file("$actionDir/$action.php")) {
    include("$templateDir/404.php");
  }
  else
    include("$actionDir/$action.php");
}

$page = $_GET['page'];
$action = $_GET['action'];

if(!isset($page) && !isset($action))
  $page = "about";

if($page)
  show($page);
else
  action($action);
