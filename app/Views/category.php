<div class="main" style="padding-top:20px;">
    <div class="left floatr">

        <div class="box">
            <div class="title tlong">

                Showing 1 of <?=count($category)?> categories

                <div class="sorting">
                    <div>Sort by:</div>
                    <ul class="sorting">
                        <li><a href="?sort=downloads" class="">Downloads</a></li>
                        <li><a href="?sort=update" class="">Latest Update</a></li>
                        <li><a href="?sort=rating" class="">Rating</a></li>
                    </ul>
                </div>

            </div>

            <ul class="category-template" id="pagedata">

                <?php foreach (array_slice($category_apps, 0, 36) as $key => $value):?>
                <li class="reglist" id="<?=$value->appId?>">
                    <div class="category-template-img">
                        <a title="<?=$value->title?>" href="/details/<?=esc($value->appId, 'url')?>">
                        <img class="lazy" src="<?=$value->icon?>" style="display: inline;">
                        </a>
                    </div>
                    <div class="category-template-title">
                        <a title="<?=$value->title?>" href="/details/<?=esc($value->appId, 'url')?>"><?=$value->title?></a>
                    </div>
                    <div class="stars" style="margin: 0 auto;">
                        <span title="<?=$value->title?> average rating <?=$value->scoreText?>" style="width:<?php $percent=$value->scoreText*100/5; echo $percent."%"?>"></span>
                    </div>
                    <div class="category-template-down">
                        <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                    </div>
                </li>
                <?php endforeach;?>
            </ul>
        </div>

        <a class="loadmores" onClick="loadmore(this)">Show More</a>


    </div>
    <div class="right floatl" id="nav-kanan">
        <div class="box">
            <div class="title menu_head2">Categories</div>
            <div class="menu_list">
                <p class="menu_head1"> <a title="hot android game apk" href="/games"><i class="category-icon-g"></i> Games</a></p>
                <div>
                    <ul class="index-category cicon">
                        <?php foreach ($category as $key => $value):?>
                        <li><a href="/categories/<?=esc($value['slug'], 'url')?>"><i class="<?=$value['icon']?>"></i><?=$value['title']?></a></li>
                        <?php endforeach;?>
                    </ul>
                    <div class="clear"></div>
                </div>
                <p class="menu_head1" style="margin-bottom:0px;border-top:1px solid #eee;"><a title="hot android app apk" href="/apps"><i class="category-icon-a"></i> Apps</a></p>
                <div>
                    <ul class="index-category cicon">
                        <?php foreach ($category as $key => $value):?>
                            <li><a href="/categories/<?=esc($value['slug'], 'url')?>"><i class="<?=$value['icon']?>"></i><?=$value['title']?></a></li>
                        <?php endforeach;?>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>

    </div>
</div>