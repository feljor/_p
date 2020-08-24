<div class="main" style="margin-top: 20px">

    <div class="left">

        <div class="box">
            <?php if (isset($search_results) && count($search_results) > 0) : ?>
                <div class="search-results">
                    <div class="search-bg">
                        <form action="/search" method="post" class="formsearch">
                        <span class="text-box">
                            <input class="autocomplete" autocomplete="off" title="Enter App Name, Package Name, Package ID" name="q" type="text" value="<?=$query?>" placeholder="<?=$query?>" required="">
                        </span>
                            <span class="text-btn" title="Search APK">
                            <input class="si" type="submit" value="">
                        </span>
                        </form>
                    </div>
                </div>

            <div class="title">
                <h1> <?=count($search_results)?> Apps found for: (<?=$query?>)</h1>
            </div>

            <div>
                <?php foreach ($search_results as $key => $value):?>
                <dl class="search-dl">
                    <dt><a title="<?=$value->title?>" href="/details/<?=esc($value->appId, 'url')?>"><img title="<?=$value->title?>" src="<?=$value->icon?>"></a></dt>
                    <dd>
                        <p class="search-title"><a title="<?=$value->title?>" href="/details/<?=esc($value->appId)?>"><?=$value->title?></a></p>
                        <div class="stars">
                            <span class="score" title="<?=$value->title?> average rating <?=$value->scoreText?>" style="width:<?php $percent=$value->scoreText*100/5; echo $percent."%"?>"></span>
                        </div>
                        <p>Developer: <a title="<?=$value->title?>" href="/developers/<?=esc($value->developer, 'url')?>"><?=$value->developer?></a> </p>
                        <p><a class="more-down" href="/details/<?=esc($value->appId, 'url')?>">Read More</a></p>
                    </dd>
                </dl>
                <?php endforeach;?>
            </div>
            <?php endif;?>
        </div>

    </div>

    <div class="right">
        <div class="box">
            <div class="title">
                <div class="tit">Popular Apps In Last 24 Hours</div>
            </div>
            <ul class="day_list">
                <?php foreach ($popular_apps as $key => $value):?>
                    <li>
                        <div class="day_list_number"><?=$key+1?></div>
                        <dl>
                            <dt><a title="<?=$value->title?>" href="/details/<?=esc($value->appId, 'url')?>"><img alt="<?=$value->title?>" data-srcset="<?=$value->icon?>" data-original="<?=$value->icon?>" src="/img/big.svg" class="loaded" srcset="<?=$value->icon?>" data-was-processed="true"></a></dt>
                            <dd class="title-dd"><a title="<?=$value->title?>" href="/details/<?=esc($value->appId, 'url')?>"><?=$value->title?></a></dd>
                            <dd><?=$value->genre?></dd>
                            <dd><?=$value->version?></dd>
                            <dd class="down">
                                <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                            </dd>
                        </dl>
                    </li>
                <?php endforeach;?>

                <div class="day_list_more"><a href="/apps">More »</a></div>

            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>