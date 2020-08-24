<div class="main page-q" data-type="pkg" data-pkg="<?=$app_detail->appId?>" style=" margin-top:20px;" itemscope="" itemtype="http://schema.org/MobileApplication">

    <div class="left" style="height: auto !important;">

        <div class="box">
            <div class="title bread-crumbs"><a href="/">Home</a> » <a href="/categories/<?= esc(strtolower($app_detail->genreId), 'url'); ?>"> <?=$app_detail->genre?> </a> » <span><?=$app_detail->title?></span>
                <span style="float: right;">
                    <a href="#share" onClick="window.open('https://www.facebook.com/sharer/sharer.php?u=#','share','toolbar=0,status=0,width=550,height=400')"><img src="/img/fbb.png" height="33" width="33" style="border-radius: 5px;"></a>
                    <a href="#share" onClick="window.open('https://twitter.com/home?status=<?php echo "TikTok";?> <?php echo "#";?>','share','toolbar=0,status=0,width=550,height=400')"><img src="/img/tww.png" height="33" width="33" style="border-radius: 5px;"></a>
                    <a href="#share" onClick="window.open('https://plus.google.com/share?url=<?php echo "#";?>','share','toolbar=0,status=0,width=550,height=400')"><img src="/img/gpp.png" height="33" width="33" style="border-radius: 5px;"></a>
                </span>
            </div>

            <dl class="ny-dl ny-dl-n">
                <dt>
                    <div class="icon"><img title="<?=$app_detail->title?>" alt="<?=$app_detail->title?>" srcset="<?=$app_detail->icon?>" src="/img/big.svg"></div>
                </dt>
                <dd>
                    <div class="title-like">
                        <h1><?=$app_detail->title?></h1>
                    </div>
                    <div class="details-sdk"><span itemprop="version"><?=$app_detail->version?> </span>for Android</div>

                    <div class="details-rating">
                        <div class="stars" title="average: <?=$app_detail->scoreText?> out of 5">
                            <span class="score" style="width:<?php $percent=$app_detail->scoreText*100/5; echo $percent.'%'?>"></span>
                        </div>

                        <div class="rating-info">
                            <span class="rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                <span class="average" itemprop="ratingValue"><?=$app_detail->scoreText?></span>
                                <meta itemprop="ratingCount" content="<?=$app_detail->ratings?>">
                                <meta itemprop="bestRating" content="5">
                                <meta itemprop="worstRating" content="1">
                            </span>
                            <span class="details-delimiter"> | </span>
                            <a href="#comment" class="details-to-bottom" data-type="reviews"><?=$app_detail->ratings?> Reviews</a>
                            <span class="details-delimiter"> | </span>
                            <a href="#comment" class="details-to-bottom" data-type="posts"><?=$app_detail->priceText?></a>
                        </div>
                    </div>

                    <div class="details-author">
                        <p itemprop="publisher">
                            <a title="Get more from <?=$app_detail->title?>" href="/developers/<?= esc($app_detail->developer, 'url'); ?>"><?=$app_detail->developer?></a>
                        </p>
                    </div>

                    <div class="ny-down">
                        <a class=" da" title="<?="Download ".$app_detail->title." APK"?>" href="<?=$downloadLink?>" target="_blank">Download APK<span class="fsize">(<span><?=$app_detail->size?></span>)</span></a>
                        <span itemscope="" itemprop="offers" itemtype="https://schema.org/Offer"><meta itemprop="price" content="<?=$app_detail->price?>"><meta itemprop="priceCurrency" content="<?=$app_detail->currency?>"></span>
                        <a rel="nofollow" title="<?=$app_detail->title." Safe verified"?>" data-fancybox="" data-type="iframe" href="/" class="safe popsafe-open"><img alt="<?=$app_detail->title." Safe verified"?>" src="/img/icon-verified_v2.png" width="16"></a>
                    </div>
                </dd>
            </dl>

            <div class="aegon-link">
                <a class="dl-ref" dl-ref="detail" rel="nofollow" title="Using SmartPlay App to upgrade <?=$app_detail->title?>, install apk, fast, free and save your internet data." href="/">
                    <img src="/img/logo.png" width="24" height="24">Using SmartPlay App to upgrade <strong><?=$app_detail->title?></strong>, install apk, fast, free and save your internet data.
                </a>
            </div>

            <div class="describe">
                <div class="describe-line"></div>
                <div class="describe-img">
                    <div id="slide-box">
                        <div class="det-pic-out">
                            <ul class="pa det-pic-list" style="left: 0px;">
                                <li class="amagnificpopup">
                                    <?php foreach ($app_detail->screenshots as $screenshot):?>
                                    <a class="mpopup" data-fancybox="<?=$app_detail->appId?>" style="" target="_blank" href="<?=$screenshot?>" title="<?=$app_detail->title." Poster"?>">
                                        <img alt="<?=$app_detail->title." Poster"?>" srcset="<?=$screenshot?>" src="<?=$screenshot?>" height="355">
                                    </a>
                                    <?php endforeach;?>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0)" class="det-pic-control" id="prev" go=""></a>
                        <a href="javascript:void(0)" class="det-pic-control go" id="next" go=""></a>
                    </div>
                </div>
                <div class="describe-line"></div>


                <div id="describe">
                    <div class="description">
                        <h2>The description of <?=$app_detail->title?></h2>
                        <div class="content" itemprop="description">
                            <?=$app_detail->description?>
                        </div>
                    </div>
                </div>

                <div class="showmore_trigger" style="display: block;">
                    <div class="show-more-end"></div>
                    <span>Show More</span>
                </div>

                <script type="text/javascript">var description_translation = '';</script>

                <div class="describe-line"></div>
                <div class="describe-whatnew" id="whatsnew">
                    <h2><?=$app_detail->title?> <?=$app_detail->version?> Update</h2>
                    <div><?=$app_detail->recentChanges?></div>
                </div>

            </div>
            <div class="clear"></div>

            <div class="describe-line"></div>
            <div class="additional">
                <h2>Additional Information</h2>
                <ul>
                    <li>
                        <p><strong>Category:</strong></p>
                        <p><a title="Download more <?=$app_detail->genre?> apps" href="/categories/<?=esc(strtolower($app_detail->genreId), 'url')?>"><span><?=$app_detail->priceText?></span> <span><?=$app_detail->genre?> APP</span></a></p>
                        <meta itemprop="applicationCategory" content="<?=$app_detail->genre?>">
                    </li>
                    <li>
                        <p><strong>Latest Version:</strong></p>
                        <p><?=$app_detail->version?><a title="Request <?=$app_detail->title?> Update" rel="nofollow" class="requestupdate ga" ga="requpdate|click|<?=$app_detail->appId?>" target="_blank" href="https://www.facebook.com/SmartPlay"><img alt="Request <?=$app_detail->title?> Update" src="/img/requestupdate.png" width="16" height="16"></a></p>
                    </li>
                    <li>
                        <p><strong>Publish Date:</strong></p>
                        <p itemprop="datePublished"><?=date('Y-m-d', strtotime($app_detail->released))?></p>
                    </li>


                    <li>
                        <p><strong>Available on:</strong></p>

                        <p><a class="ga" ga="get_it_on|click|<?=$app_detail->appId?>" title="Get <?=$app_detail->title?> on Google Play" rel="nofollow" href="<?=$app_detail->playstoreUrl?>" target="_blank"><img alt="Get <?=$app_detail->title?> on Google Play" src="/img/gp_logo.png" height="16"></a></p>

                    </li>

                    <li>
                        <p><strong>Requirements:</strong></p>
                        <p><?=$app_detail->androidVersionText?></p>

                        <meta itemprop="operatingSystem" content="ANDROID">

                    </li>
                    <li>
                        <p><strong>Report:</strong></p>
                        <p><a rel="nofollow" href="/report-content.html" target="_blank">Flag as inappropriate</a></p>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>



        <div class="box" style="overflow: hidden; padding-bottom: 20px">
            <div style="color: #555; text-align: center; padding-top: 10px;">Advertisement</div>
            <div style="margin: 0 15px;">
                <!-- AD HERE -->
            </div>
        </div>


        <?php if (isset($similar_apps) && count($similar_apps) > 0) : ?>

            <div class="box">
                <div class="title">
                    <div class="smalltit">Similar to <?=$app_detail->title?></div>
                    <div class="more"><a title="Get similar apps to <?=$app_detail->title?>" href="/similar/<?=esc($app_detail->appId, 'url')?>">More »</a></div>
                </div>

                <ul class="top-list">
                    <?php foreach (array_slice($similar_apps, 0, 9) as $key => $value):?>
                        <li class="w33">
                            <dl>
                                <dt><a title="<?=$value->title?>" href="/details/<?=esc($value->appId, 'url')?>"><img alt="<?=$value->title?>" data-srcset="<?=$value->icon?>" data-original="<?=$value->icon?>" src="/img/big.svg" class="loaded" srcset="<?=$value->icon?>" data-was-processed="true"></a></dt>
                                <dd class="title-dd"> <a title="<?=$value->title?>" href="/details/<?=esc($value->appId, 'url')?>"><?=$value->title?></a></dd>
                                <dd>
                                    <div class="stars">
                                        <span class="score" title="<?=$value->title?> average rating <?=$value->scoreText?>" style="width:<?php $percent=$value->scoreText*100/5; echo $percent."%"?>"></span>
                                    </div>
                                </dd>
                                <dd><?=$value->developer?></dd>
                                <dd class="down">
                                    <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                                </dd>
                            </dl>
                        </li>
                    <?php endforeach;?>
                </ul>

                <div class="clear"></div>
            </div>

        <?php endif;?>

        <?php if (isset($developer_apps->apps) && count($developer_apps->apps) > 0) : ?>

        <div class="box">
            <div class="title">
                <div class="smalltit">More From <?=$app_detail->developer?></div>
                <div class="more"><a title="Get more from <?=$app_detail->developer?>" href="/developers/<?=esc($app_detail->developer, 'url')?>">More »</a></div>
            </div>

            <ul class="top-list">
                <?php foreach (array_slice($developer_apps->apps, 0, 6) as $key => $value):?>
                <li class="w33">
                    <dl>
                        <dt><a title="<?=$value->title?>" href="/details/<?=esc($value->appId, 'url')?>"><img alt="<?=$value->title?>" data-srcset="<?=$value->icon?>" data-original="<?=$value->icon?>" src="/img/big.svg" class="loaded" srcset="<?=$value->icon?>" data-was-processed="true"></a></dt>
                        <dd class="title-dd"> <a title="<?=$value->title?>" href="/details/<?=esc($value->appId, 'url')?>"><?=$value->title?></a></dd>
                        <dd>
                            <div class="stars">
                                <span class="score" title="<?=$value->title?> average rating <?=$value->scoreText?>" style="width:<?php $percent=$value->scoreText*100/5; echo $percent."%"?>"></span>
                            </div>
                        </dd>
                        <dd><?=$value->developer?></dd>
                        <dd class="down">
                            <a rel="nofollow" target="_blank" class="" title="Download <?=$value->title?>" href="https://apkpure.com/<?=strtolower(str_replace(' ', '-', str_replace(':', '', str_replace(',', '', str_replace('&', '', str_replace('-', '', str_replace('(','', str_replace(')','', str_replace('[', '', str_replace(']','', $value->title))))))))))?>/<?=$value->appId?>/download?from=details">Download APK</a>
                        </dd>
                    </dl>
                </li>
                <?php endforeach;?>
            </ul>

            <div class="clear"></div>
        </div>

        <?php endif;?>

        <div class="box cmt-wrap" id="comment">
            <div class="cmt-container" style="display: block;">

                <div>
                    <div class="title">
                        <div class="smalltit">Review</div>
                    </div>


                    <div class="cmt-rating-cont">
                        <div class="cmt-rating">
                            <div class="cmt-rating-l">
                                <div class="cmt-rating-score"><?=$app_detail->scoreText?></div>
                                <div class="cmt-rating-info">
                                    <div>Total Reviews:<span class="cmt-rating-total" data-total="<?=$app_detail->ratings?>"><?=$app_detail->ratings?></span></div>
                                </div>
                            </div>

                            <div class="cmt-rating-r">
                                <div class="cmt-rating-item">
                                    <span class="cmt-rating-tit">5<i></i></span>
                                    <span class="cmt-rating-per cmt-rating-5" style="width:<?php $percent=$app_detail->histogram->{"5"}*100/$app_detail->ratings; echo $percent."%"?>"></span>
                                    <span class="cmt-rating-t5" data-total="<?=$app_detail->histogram->{"5"}?>" data-ct="true"><?=$app_detail->histogram->{"5"}?></span>
                                </div>
                                <div class="cmt-rating-item">
                                    <span class="cmt-rating-tit">4<i></i></span>
                                    <span class="cmt-rating-per cmt-rating-4" style="width:<?php $percent=$app_detail->histogram->{"4"}*100/$app_detail->ratings; echo $percent."%"?>"></span>
                                    <span class="cmt-rating-t4" data-total="<?=$app_detail->histogram->{"4"}?>" data-ct="true"><?=$app_detail->histogram->{"4"}?></span>
                                </div>
                                <div class="cmt-rating-item">
                                    <span class="cmt-rating-tit">3<i></i></span>
                                    <span class="cmt-rating-per cmt-rating-3" style="width:<?php $percent=$app_detail->histogram->{"3"}*100/$app_detail->ratings; echo $percent."%"?>"></span>
                                    <span class="cmt-rating-t3" data-total="<?=$app_detail->histogram->{"3"}?>" data-ct="true"><?=$app_detail->histogram->{"3"}?></span>
                                </div>
                                <div class="cmt-rating-item">
                                    <span class="cmt-rating-tit">2<i></i></span>
                                    <span class="cmt-rating-per cmt-rating-2" style="width:<?php $percent=$app_detail->histogram->{"2"}*100/$app_detail->ratings; echo $percent."%"?>"></span>
                                    <span class="cmt-rating-t2" data-total="<?=$app_detail->histogram->{"2"}?>" data-ct="true"><?=$app_detail->histogram->{"2"}?></span>
                                </div>
                                <div class="cmt-rating-item">
                                    <span class="cmt-rating-tit">1<i></i></span>
                                    <span class="cmt-rating-per cmt-rating-1" style="width:<?php $percent=$app_detail->histogram->{"1"}*100/$app_detail->ratings; echo $percent."%"?>"></span>
                                    <span class="cmt-rating-t1" data-total="<?=$app_detail->histogram->{"1"}?>" data-ct="true"><?=$app_detail->histogram->{"1"}?></span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <?php if (isset($reviews) && count($reviews) > 0) : ?>

                <div class="box" style="padding: 15px;">
                    <ul class="top-list">
                        <?php foreach (array_slice($reviews, 0, 10) as $key => $value):?>
                        <li class="w100" style="width: 100%">
                            <dl>
                                <dt>
                                    <a title="<?=$value->userName?>" href="#">
                                        <img alt="<?=$value->userName?>" src="<?=$value->userImage?>" width="50px" style="display: inline; border-radius: 50%;">
                                    </a>
                                </dt>
                                <dd class="title-dd">
                                    <a title="<?=$value->userName?>" href="#">
                                        <?=$value->userName?>
                                        <small style="float: right;"><?=date('F d, Y H:i:s', strtotime($value->date))?></small>
                                    </a>
                                </dd>

                                <dd>
                                    <div class="stars">
                                        <span title="<?=$value->title?> average rating <?=$value->scoreText?>" style="width:<?php $percent=$value->scoreText*100/5; echo $percent."%"?>"></span>
                                    </div>
                                </dd>

                                <dd><?=$value->text?></dd>
                            </dl>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>

                <?php endif;?>

            </div>
        </div>

    </div>
    <div class="right" style="height: auto !important;">

        <div class="box">

            <dl class="right_apkpure">
                <dt><a class="dl-ref" dl-ref="home" title="SmartPlay APK" href="/"><img srcset="/img/logo.png" src="/img/logo.png"></a></dt>
                <dd class="title-dd">
                    <a class="dl-ref" dl-ref="home" title="SmartPlay APK" href="/">
                        SmartPlay
                        <i class="istar"></i> <scan class="sstar">3.8</scan>
                    </a>
                </dd>
                <dd class="des-dd"><p class="tit">Using SmartPlay App</p><p class="des">Faster, free and saving data!</p></dd>
                <div class="down">

                    <a class="dl-ref" dl-ref="home" title="Download SmartPlay latest version apk" href="/">Download v3.17.11 <span class="fsize">(<span>8.2 MB</span>)</span></a>

                </div>
            </dl>

            <div class="bd" style="padding: 5px;">
                <table width="100%">
                    <tbody><tr>
                        <td style="text-align: center;padding: 5px;"><a rel="nofollow" target="_blank" style="color:#666" href=""><img src="/img/fbb.png" width="30"><br>Facebook</a></td>
                        <td style="text-align: center;padding: 5px;"><a rel="nofollow" target="_blank" style="color:#666" href=""> <img src="/img/tww.png" width="30"><br>Twitter</a></td>
                        <td style="text-align: center;padding: 5px;"><a rel="nofollow" target="_blank" style="color:#666" href=""> <img src="/img/gpp.png" width="30"><br>Google+</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="box">
            <div class="title">
                <div class="tit">Trending</div>
                <div class="more"><a href="/apps">More »</a></div>
            </div>
            <ul class="index-left-ul index-left-ul-s">
                <?php foreach (array_slice($popular_apps, 0, 10) as $key => $value):?>
                <li>
                    <a href="/details/<?=esc($value->appId, 'url')?>" title="<?=$value->title?>">
                        <div class="app-icon"><img alt="<?=$value->title?>" data-srcset="<?=$value->icon?>" data-original="<?=$value->icon?>" src="/img/big.svg" class="loaded" srcset="<?=$value->icon?>" data-was-processed="true"></div>
                        <div class="app-text">
                            <p class="app-text-title mt-3"><?=$value->title?></p>
                            <p><?=$value->version?></p>
                            <p class="app-text-developer"><?=$value->developer?></p>

                        </div>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
        

        <div class="box">
            <div class="title">
                <div class="tit">Popular Apps In Last 24 Hours</div>
            </div>
            <ul class="day_list">
                <?php foreach (array_slice($popular_apps, 0, 10) as $key => $value):?>
                <li>
                    <div class="day_list_number"><?=$key+1?></div>
                    <dl>
                        <dt><a title="<?=$value->title?>" href="/details/<?=esc($value->appId, 'url')?>"><img alt="<?=$value->title?>" data-srcset="<?=$value->icon?>" data-original="<?=$value->icon?>" src="/img/big.svg" class="loaded" srcset="<?=$value->icon?>" data-was-processed="true"></a></dt>
                        <dd class="title-dd"><a title="<?=$value->title?>" href="/details/<?=esc($value->appId, 'url')?>"><?=$value->title?></a></dd>
                        <dd><?=$value->version?></dd>
                        <dd><?=$value->genre?></dd>
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