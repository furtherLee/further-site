<html>
  <head>
    <title>Site of Li Shijian</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="<?php echo CSS_BASE."site.css";?>"/>
  </head>
  <body id="lee-site" class="home blog highlander-enabled highlander-light">
    <header id="sidebar">
      <div>
	<h1>Site of Li Shijian</h1>
      </div>
      <nav id="access" role="navigation" class="desc">
	<div class="menu-main-container">
	  <ul>
	    <li><a href="<?php echo HOME_BASE."?page=about";?>">About Me</a></li>
	    <li><a href="<?php echo HOME_BASE."?page=projects";?>">Projects</a></li>
	    <li><a href="<?php echo HOME_BASE."?page=tools";?>">Tools</a></li>
	    <li><a href="<?php echo HOME_BASE."?page=books";?>">Books</a></li>
	  </ul>
	</div>
      </nav>
      <div class="bar">
	<p class="buttons">
	  <a href="<?php echo HOME_BASE.'feed/?page='.$page;?>" class="button feed" title="RSS">RSS Feed</a>
	  <span id="buttontext"></span>
	</p>
      </div>
    </header>
    <div class="block block-fork">
      <a href="https://github.com/furtherLee/">
	<img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub">
      </a>
    </div>
    <div class="posts">
      <div class="post type-post hentry status-publish format-link">
	<div class="postbody link">
	  <h1 class="entry-title"><?php echo $title;?></h1>
	  <section class="content">
	
