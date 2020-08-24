<div class="main" style="margin-top: 20px">

    <div class="left">

        <div class="box">
            <?php if (isset($developer_apps->apps) && count($developer_apps->apps) > 0) : ?>
            <div class="title">
                <h1><?=$developer_apps->devId?></h1>
                <div class="developer-have developer-have-right">All <?=count($developer_apps->apps)?> Apps</div>
            </div>
            <div>
                <?php foreach ($developer_apps->apps as $key => $value):?>
                <dl class="search-dl">
                    <dt><a title="<?=$value->title?>" target="_blank" href="/details/<?=esc($value->appId, 'url')?>"><img title="<?=$value->title?>" src="<?=$value->icon?>"></a></dt>
                    <dd>
                        <p class="search-title"><a title="<?=$value->title?>" target="_blank" href="/details/<?=esc($value->appId)?>"><?=$value->title?></a></p>
                        <div class="stars">
                            <span class="score" title="<?=$value->title?> average rating <?=$value->scoreText?>" style="width:<?php $percent=$value->scoreText*100/5; echo $percent."%"?>"></span>
                        </div>
                        <p><?=$value->summary?></p>
                        <p><a target="_blank" class="more-down" href="/details/<?=esc($value->appId, 'url')?>">Read More</a></p>
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
                <?php foreach (array_splice($popular_apps, 0, 10) as $key => $value):?>
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
        </div>
    </div>
</div>