<?php

function not_root(){
  return false;
}

function show($page){
  $templateDir = "app/view/templates";
  $pageDir = "app/view/pages";

  if($page == '404' || !is_file("$pageDir/$page.html")){
    include('$templateDir/404.php');
    return;
  }

  include("$templateDir/header.php");
  include("$pageDir/$page.html");
  include("$templateDir/footer.php");
}

$page = $_GET['page'];

if(!isset($page))
  $page = "about";

if(not_root())
  $page = '404';

show($page);
