<div class="clear" style="height:0px;"></div>
<div class="footer" id="footer">
    <div class="footer-list">
        <div class="main">
            <div class="list">
                <p>TRENDING APPS</p>
                <ul>
                    <?php foreach (array_slice($popular_apps, 0, 10) as $key => $value): ?>
                    <li><a title="<?=$value->title;?>" href="/details/<?=esc($value->appId, 'url');?>"><?=$value->title;?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="list">
                <p>LATEST GAMES</p>
                <ul>
                    <?php foreach (array_slice($popular_games, 0, 10) as $key => $value): ?>
                        <li><a title="<?=$value->title;?>" href="/details/<?=esc($value->appId, 'url');?>"><?=$value->title;?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="list">
                <p>TOP ANDROID APPS</p>
                <ul>
                    <?php foreach (array_slice($popular_apps, 0, 10) as $key => $value): ?>
                        <li><a title="<?=$value->title;?>" href="/details/<?=esc($value->appId, 'url');?>"><?=$value->title;?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="list">
                <p>GROSSING APPS</p>
                <ul>
                    <?php foreach (array_slice($popular_games, 0, 10) as $key => $value): ?>
                        <li><a title="<?=$value->title;?>" href="/details/<?=esc($value->appId, 'url');?>"><?=$value->title;?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="copyright">
        Copyright © <?=date("Y")?> SmartPlay - All rights reserved.
        | <a href="/dmca-disclaimer" rel="nofollow">DMCA Disclaimer</a>
        | <a href="/privacy-police" rel="nofollow">Privacy Policy</a>
        | <a href="/term-of-use" rel="nofollow">Term of Use</a>. Powered By MerciPro. 

       <span style="float: right;"></span> 
    </div>
</div>

<script src="<?php echo base_url()?>/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>/js/global.js"></script>
<script src="<?php echo base_url()?>/js/lang.js"></script>
<script src="<?php echo base_url()?>/js/jquery.slider.min.js"></script>
<script src="<?php echo base_url()?>/js/lazyload.min.js"></script>
<script src="<?php echo base_url()?>/js/popup.js"></script>

<script type="text/javascript">
    $$.initPage();
    $$.initIndex();
    $$.initDetails();
    $$.initVersions();

    function loadmore(a){
        $.ajax({
            type : "POST",
            url : "/loadmore/",
            data : "cat="+$(a).attr('cat')+"&cat1="+$(a).attr('cat1')+"&sort="+$(a).attr('sort')+"&page="+$('.reglist').last().attr('id'),
            beforeSend : function(){
            $('.loadmores').html('Please Wait ...');
            },
            success : function(even){
                $("#new-data").replaceWith(even);
                
                if(even.indexOf('<need/>') == -1){
                $(".loadmores").remove();
                }else{
                $(".loadmores").replaceWith(' <a class="loadmores" cat="'+$(a).attr('cat')+'" cat1="'+$(a).attr('cat1')+'" sort="'+$(a).attr('sort')+'" page="'+$('.reglist:last').attr('id')+'" onClick="loadmore(this)">Show More</a>');
                }
                
            }
        });
    }

    function reqUpdate(a){
        $.ajax({
            type : "POST",
            url : "",
            data : "packid="+a,
            success : function(even){
                alert("Success. Please Wait a Few Hour, We will procces.");
            }
        });
        return false;
    }

    function search_more(a){
        $.ajax({
            type : "POST",
            url : "/search_more/",
            data : "keyword="+$(a).attr("keyword")+"&last_id="+$(".search-dl:last").attr('id'),
            beforeSend : function(){
            $('.loadmores').html('Please Wait ...');
            },
            success : function(even){
                $("#load_here").replaceWith(even);
                
                if(even.indexOf('<need/>') == -1){
                $(".loadmores").remove();
                }else{
                $(".loadmores").replaceWith('<a class="loadmores" onClick="search_more(this)" keyword="'+$(a).attr("keyword")+'" href="javascript:void(0)">Show More</a>');
                }
                
            }
        });
        return false;
    }

    function go_search(key){
        $("#slugy").val(slugify($(key).val()));
        $("#slug1").val(slugify($(key).val()));
    }
    function conf_search(){
        window.location = "/search/"+$("#slugy").val();
        return false;
    }
    
    function slugify(text)
            {
                return text.toString().toLowerCase()
                        .replace(/\s+/g, '-')           // Replace spaces with -
                        .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                        .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                        .replace(/^-+/, '')
                        .replace(/\-+$/, '');
            }
    function auto_pub(a,b,c){
        $.ajax({
            type : "POST",
            url : "/webmaster/auto-update",
            data : "list-pack-id="+a+"&date_post="+c+"&del",
            beforeSend : function(){
                
            }, 
            success : function(event){
               console.log("success");
            }
        });
        return false;
    }

    function analitic_data(){
            $.ajax({
            type : "POST",
            url : "",
            data : "analitic=true",
            beforeSend : function(){
                
            }, 
            success : function(event){
               console.log("success");
            }
        });
        return false;
    }

    function update_start(){
        analitic_data();


<?php if(isset($_POST['download'])){ ?>

var counter = 10;
    var interval = setInterval(function() {
    counter--;
    // Display 'counter' wherever you want to display it.
    if (counter == 0) {
        $("#tex-please").html("Data Ready to Download");
        download_now("featured");
        clearInterval(interval);

    }else{
        $("#tex-please").html("Download Start in "+counter+" s");
    }
}, 1000);

<?php } ?>
}
<?php if(isset($_POST['download'])){ ?>
function show_dial(){
    $("#download-btn").fadeIn();
    $("#not-load-btn").hide();
}
function download_now(a){
    $.ajax({
        type:"POST",
        url : "",
        data : "start_download="+a+"&package_name_app=PlayStore",
        beforeSend : function(){
            $("#lodink-"+a).show();
        },
        success : function(even){
            if(even.indexOf('<notf/>') !== -1){
            $("#dl-"+a).html("Not Found");
            $("#dl-"+a).css({
                "background" : "#be1e1e",
                "color" : "#fff"
            });
            }else{
            $("#lodink-"+a).hide();
            $("#cdn-load").html("<iframe style='display:none;' src='"+even+"'></iframe>");
            $("#lodink-"+a).fadeOut();
            }
        }
    });
}
<?php } ?>

</script>


</body>
</html>