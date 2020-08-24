<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta itemprop="name" content=">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="" />
        <meta property="og:description"   content="" />
        <meta content='follow, all' name='Googlebot-Image'/>
        <meta content='all, index, follow' name='yahoobot'/>
        <meta content='all, index, follow' name='bingbot'/>
        <meta content='follow, all' name='alexabot'/>
        <meta content='follow, all' name='msnbot'/>
        <meta content='Global' name='Distribution'/>
        <meta content='global' name='target'/>
        <meta content='never' name='expires'/>
        <meta content='always' name='revisit'/>
        <meta content='general' name='rating'/>
        <meta content='all' name='audience'/>
        <meta content='follow, all' name='Slurp'/>
        <meta content='follow, all' name='ZyBorg'/>
        <meta content='follow, all' name='Scooter'/>
        <meta content='ALL' name='SPIDERS'/>
        <meta content='ALL' name='WEBCRAWLERS'/>
        <meta content='en' name='language'/>
        <meta content='10' name='pagerank?'/>
        <meta content='no-cache' http-equiv='cache-control'/>
        <meta content='no-cache' http-equiv='pragma'/>
        <meta content='Google, Aeiwi, Alexa, AllTheWeb, AltaVista, AOL Netfind, Anzwers, Canada, DirectHit, EuroSeek, Excite, Overture, Go, HotBot. InfoMak, Kanoodle, Lycos, MasterSite, National Directory, Northern Light, SearchIt, SimpleSearch, WebsMostLinked, WebTop, What-U-Seek, AOL, Yahoo, WebCrawler, Infoseek, Excite, Magellan, LookSmart, CNET, Googlebot' name='search engines'/>

<!--
        <link rel="canonical" href="<?/*=getPermalink()->documentUrl()*/?>" />
        <link rel="alternate" href="<?/*=getPermalink()->documentUrl()*/?>" hreflang="x-default" />
        <link rel="alternate" href="<?/*=getPermalink()->documentUrl()*/?>" hreflang="en" />
        <link rel="alternate" href="<?/*=getPermalink()->documentUrl()*/?>" hreflang="pt" />
        <link rel="alternate" href="<?/*=getPermalink()->documentUrl()*/?>" hreflang="zh-CN" />
        <link rel="alternate" href="<?/*=getPermalink()->documentUrl()*/?>" hreflang="id" />
        <link rel="alternate" href="<?/*=getPermalink()->documentUrl()*/?>" media="only screen and (max-width: 640px)" />


-->

	<link rel="shortcut icon" href="">
    <link rel="stylesheet" href="/css/popup.css">
    <link rel="stylesheet" href="/css/comment.css">
    <script data-ad-client="ca-pub-8903769694937368" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<?php
    require_once("sheet/css.php");
    require_once("sheet/css3.php");
    require_once("sheet/css4.php");
    require_once("sheet/css2.php");
    ?>
</head>
<body onLoad="">

<div class="header">
    <div class="head">
        <div class="logo" style="position: relative;">
            <a title="" href="/"><img alt="" src="/img/logo-desk.png" srcset="" width="150"></a>
        </div>
        <div class="top-menu">
            <ul class="nav_menu">
              <li class="nav_menu-item">
                    <div class="top-search">
                        <form class="formsearch" method="post" action="/search" onSubmit="">
                            <div class="search-left">
                                <input class="autocomplete" onkeyup="" autocomplete="off" type="text" name="q" id="q" size="40" placeholder="Search..." required="">
                                <input autocomplete="off" id="slugy" value="" style="display: none;">
                            </div>
                            <div class="search-right"><input class="si" type="submit" value=""></div>
                        </form>
                    </div>
                </li>
               
                <li class="nav_menu-item"><a title="hot android app apk" href="/apps" class="nav-a"><i class="icon-apps"></i> APPS</a></li>
                <li class="nav_menu-item"><a title="hot android game apk" href="/games" class="nav-g"><i class="icon-games"></i> GAMES</a></li>
                 <li class="nav_menu-item"><a href="javascript:void(0)" class="nav-t"><i class="icon-other"></i> DICOVER</a>
                    <ul class="nav_submenu" style="width: 1000px;margin-left: -560px">
                        <li class="nav_submenu-item">
                            <div class="menu_list">
                                <div class="menu_body">
                                	 <ul class="index-category index-category-b cicon" >
                                         <?php foreach ($category as $key => $value): ?>
                                         <li style="width: 20%;float: left;background: transparent;"><a href="/categories/<?=esc($value['slug'], 'url') ?>"><i class="<?= $value['icon']; ?>"></i><?= $value['title']; ?></a></li>
                                         <?php endforeach;?>
                                     </ul>
                                 
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

