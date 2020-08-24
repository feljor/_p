
<div class="main" style="padding-top:20px;">

    <div class="left">
        
        <div class="box">
            <div class="index_banner">

                <div class="thd">
                    <ul>
                        <?php foreach ($banner as $key => $value): ?>
                        <li style="display: list-item"><?=$value->title;?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="hd">
                    <ul>
                        <?php foreach ($banner as $key => $value): ?>
                        <li style="border-radius: 100%" class="on"></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="bd">
                    <div class="tempWrap" style="overflow: hidden; position: relative; width: auto;">
                        <ul style="width: 4250px; left: -3400px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                            <?php foreach ($banner as $key => $value): ?>
                            <li style="float: left; width: 850px;">
                                <a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>">
                                    <img src="<?=$value->headerImage;?>" style="height:478px">
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <a class="prev" href="javascript:void(0)"></a>
                <a class="next" href="javascript:void(0)"></a>
            </div>
        </div>
    </div>

    <div class="right">
       <div class="box" style="margin-bottom: 12px;">
        <div class="title">
                Follow PlayStore
            </div>
            <div class="bd" style="padding: 5px;">
                <table width="100%">
                    <tr>
                        <td style="text-align: center;padding: 5px;"><a rel="nofollow" target="_blank" style="color:#666" href=""><img src="img/fbb.png" width="30"><br>Facebook</a></td>
                        <td style="text-align: center;padding: 5px;"><a rel="nofollow" target="_blank" style="color:#666" href=""> <img src="img/tww.png" width="30"><br>Twitter</a></td>
                        <td style="text-align: center;padding: 5px;"><a rel="nofollow" target="_blank" style="color:#666" href=""> <img src="img/gpp.png" width="30"><br>Google+</a></td>
                    </tr>
                </table>
                 
                    
                    
            </div>
       </div>

    </div>

    
    <div class="right">
        <div class="box index_tab index_r_tab">
            <div class="title">
                <ul class="thd">
                    <li><a title="Hot Games" href="/games">Hot »</a></li>
                    <li style="display: list-item"><a title="Hot Apps" href="/apps">Hot »</a></li>
                </ul>
                <ul class="hd hdr">
                    <li class="on"><a href="javascript:void(0)" title="Hot Games">Games</a></li>
                    <li><a href="javascript:void(0)" title="Hot Apps">Apps</a></li>
                </ul>
            </div>
            <div class="bd">
                <ul class="day_list">
                    <?php foreach (array_splice($popular_games, 0, 12) as $key => $value): ?>
                    <li>
                        <div class="day_list_number"><?= $key+1; ?></div>
                        <dl>
                            <dt><a title="<?=$value->title;?>" href="/details/<?=esc($value->appId, 'url');?>">
                                    <img alt="<?=$value->title;?>" data-original="<?=$value->icon;?>" src="img/big.svg"></a></dt>
                            <dd class="title-dd">
                                <a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><?=$value->title;?></a></dd>
                            <dd><?=$value->version;?></dd>
                            <dd><?=$value->developer;?></dd>
                            <dd class="down">
                                <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                            </dd>
                        </dl>
                    </li>
                    <?php endforeach;?>
                    
                    
                    <div class="day_list_more"><a href="/games">More »</a></div>
                </ul>
                <ul class="day_list" style="display: list-item;">
                    <?php foreach (array_splice($popular_apps, 0, 12) as $key => $value): ?>
                    <li>
                        <div class="day_list_number"><?=($key+1)?></div>
                        <dl>
                            <dt><a title="<?=$value->title;?>" href="/details/<?=esc($value->appId, 'url');?>">
                                    <img alt="<?=$value->title;?>" data-original="<?=$value->icon;?>" src="img/big.svg"></a></dt>
                            <dd class="title-dd">
                                <a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><?=$value->title;?></a></dd>
                            <dd><?=$value->version;?></dd>
                            <dd><?=$value->developer;?></dd>
                            <dd class="down">
                                <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                            </dd>
                        </dl>
                    </li>
                    <?php endforeach;?>
                    
                    <div class="day_list_more"><a href="/apps">More »</a></div>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="left">

        <div class="box index_tab">
            <div class="title">
                <ul class="thd">
                    <li style="display: list-item;"><a href="javascript:void(0)">Popular Games In Last 24 Hours »</a> </li>
                    <li style="display: none;"><a href="javascript:void(0)">Popular Apps In Last 24 Hours »</a></li>
                </ul>
                <ul class="hd hdl">
                    <li class="on"><a href="javascript:void(0)" title="Popular Games In Last 24 Hours">Games</a></li>
                    <li class=""><a href="javascript:void(0)" title="Popular Apps In Last 24 Hours">Apps</a></li>
                </ul>
            </div>

            <div class="bd">

                <ul class="top-list sublist" style="display: block;">
                    <?php foreach (array_splice($popular_games, 0, 12) as $key => $value): ?>
                    <li class="w33">
                        <dl>
                            <dt><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><img alt="<?=$value->title;?>" data-srcset="<?=$value->icon;?>" data-original="<?=$value->icon;?>" src="img/big.svg" class="loaded" srcset="<?=$value->icon;?>" data-was-processed="true"></a></dt>
                            <dd class="title-dd"><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><?=$value->title;?></a></dd>

                            <dd>
                                <div class="stars"><span class="score" title="<?=$value->title;?> average rating <?=$value->scoreText;?> " style="width:<?php $percent=$value->scoreText*100/5; echo $percent."%";?>"></span></div>
                            </dd>

                            <dd><?=$value->genre;?></dd>

                            <dd class="down">
                                <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                            </dd>
                        </dl>
                    </li>
                    <?php endforeach;?>
                </ul>

                <ul class="top-list sublist" style="display: none;">
                    <?php foreach (array_splice($popular_apps, 0, 12) as $key => $value): ?>
                        <li class="w33">
                            <dl>
                                <dt><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><img alt="<?=$value->title;?>" data-srcset="<?=$value->icon;?>" data-original="<?=$value->icon;?>" src="img/big.svg" class="loaded" srcset="<?=$value->icon;?>" data-was-processed="true"></a></dt>
                                <dd class="title-dd"><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><?=$value->title;?></a></dd>

                                <dd>
                                    <div class="stars"><span class="score" title="<?=$value->title;?> average rating <?=$value->scoreText;?>" style="width:<?php $percent=$value->scoreText*100/5; echo $percent."%";?>"></span></div>
                                </dd>

                                <dd><?=$value->genre;?></dd>

                                <dd class="down">
                                    <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                                </dd>
                            </dl>
                        </li>
                    <?php endforeach;?>
                </ul>

            </div>
        </div>

        <div class="box index_tab">
            <div class="title">
                <ul class="thd">
                    <li><a href="/games">Games »</a> </li>
                    <li style="display: list-item"><a href="/apps">Apps »</a></li>
                </ul>
                <ul class="hd hdl">
                    <li class="on"><a href="javascript:void(0)" title="Games">Games</a></li>
                    <li><a href="javascript:void(0)" title="Apps">Apps</a></li>
                </ul>
            </div>
            <div class="bd">
                <ul class="top-list sublist">
                    <?php foreach (array_splice($popular_games, 0, 12) as $key => $value): ?>
                    <li class="w33">
                        <dl>
                            <dt><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><img alt="<?=$value->title;?>" data-original="<?=$value->icon;?>" src="img/big.svg" style="display: inline;"></a></dt>
                            <dd class="title-dd"><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><?=$value->title;?></a></dd>
                            <dd>
                                <div class="stars"><span title="<?=$value->title;?> average rating <?=$value->scoreText;?>" style="width:82%"></span></div>
                            </dd>
        
                            <dd><?=$value->developer;?></dd>
                            <dd class="down">
                                <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                            </dd>
                        </dl>
                    </li>
                    <?php endforeach;?>
                </ul>

                <ul class="top-list sublist">
                    <?php foreach (array_splice($popular_apps, 0, 12) as $key => $value): ?>
                    <li class="w33">
                        <dl>
                            <dt><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><img alt="<?=$value->title;?>" data-original="<?=$value->icon;?>" src="img/big.svg" style="display: inline;"></a></dt>
                            <dd class="title-dd"><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><?=$value->title;?></a></dd>
                            <dd>
                                <div class="stars"><span title="<?=$value->title;?> average rating <?=$value->scoreText;?>" style="width:82%"></span></div>
                            </dd>
        
                            <dd><?=$value->developer;?></dd>
                            <dd class="down">
                                <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                            </dd>
                        </dl>
                    </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
  
        <div class="box index_tab">
            <div class="title">
                <ul class="thd">
                    <li><a href="/games">Update Games »</a></li>
                    <li style="display: list-item"><a href="/apps">Update Apps »</a></li>
                </ul>
                <ul class="hd hdl">
                    <li class="on"><a href="javascript:void(0)" title="Update Games">Games</a></li>
                    <li><a href="javascript:void(0)" title="Update Apps">Apps</a></li>
                </ul>
            </div>
            <div class="bd">
                <ul class="top-list sublist">
                    <?php foreach (array_splice($popular_games, 0, 12) as $key => $value): ?>
                    <li class="w33">
                        <dl>
                            <dt><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><img alt="<?=$value->title;?>" data-original="<?=$value->icon;?>" src="img/big.svg" style="display: inline;"></a></dt>
                            <dd class="title-dd"><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><?=$value->title;?></a></dd>
                            <dd>
                                <div class="stars"><span title="<?=$value->title;?> average rating <?=$value->scoreText;?>" style="width:82%"></span></div>
                            </dd>
        
                            <dd><?=$value->developer;?></dd>
                            <dd class="down">
                                <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                            </dd>
                        </dl>
                    </li>
                    <?php endforeach; ?>

                </ul>
                 <ul class="top-list sublist">
                     <?php foreach (array_splice($popular_apps, 0, 12) as $key => $value): ?>
                     <li class="w33">
                         <dl>
                             <dt><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><img alt="<?=$value->title;?>" data-original="<?=$value->icon;?>" src="img/big.svg" style="display: inline;"></a></dt>
                             <dd class="title-dd"><a title="<?=$value->title;?>" href="/details/<?= esc($value->appId, 'url'); ?>"><?=$value->title;?></a></dd>
                             <dd>
                                 <div class="stars"><span title="<?=$value->title;?> average rating <?=$value->scoreText;?>" style="width:82%"></span></div>
                             </dd>
        
                             <dd><?=$value->developer;?></dd>
                             <dd class="down">
                                 <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                             </dd>
                         </dl>
                     </li>
                     <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
   
</div>