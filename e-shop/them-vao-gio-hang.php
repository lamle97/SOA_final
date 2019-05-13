<?php
if(isset($_REQUEST['ModelId'])){
    $_POST['ModelId'] = $_REQUEST['ModelId'];
    $dataRequest =  array('idModel'=>$_POST['ModelId']);
    include_once('function.php');
    $infoModel = json_decode(getModelByID($dataRequest),true);

    $colors = json_decode(getAllColorOfModel($dataRequest),true);
    $Storage_price = json_decode(getAllStorageOfModel($dataRequest),true);
}
?>
<!doctype html>
<html lang="vi">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://cdn.tgdd.vn/v2015/Scripts/desktop/detectie/html5shiv.js"></script>
<script src="https://cdn.tgdd.vn/v2015/Scripts/desktop/detectie/respond.min.js"></script>
<![endif]-->
<head>

    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Giỏ hàng của bạn</title>
    <meta content="INDEX,FOLLOW" name="robots" />
    <meta name="viewport" content="width=device-width" />
    <meta name="copyright" content="Công ty Cổ phần Thế Giới Di Động" />
    <meta name="author" content="Công ty Cổ phần Thế Giới Di Động" />
    <meta http-equiv="audience" content="General" />
    <meta name="resource-type" content="Document" />
    <meta name="distribution" content="Global" />
    <meta name="revisit-after" content="1 days" />
    <meta name="GENERATOR" content="Công ty Cổ phần Thế Giới Di Động" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="publisher" href="https://plus.google.com/+Thegioididongdotcom/posts" />
    <link rel="author" href="https://plus.google.com/+Thegioididongdotcom/posts" />
    <meta property="og:site_name" content="Thegioididong.com" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="fb:pages" content="214993791879039" />
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://cdn.tgdd.vn/">
    <link rel="dns-prefetch" href="https://cdn1.tgdd.vn/">
    <link rel="dns-prefetch" href="https://cdn2.tgdd.vn/">
    <link rel="dns-prefetch" href="https://cdn3.tgdd.vn/">
    <link rel="dns-prefetch" href="https://cdn4.tgdd.vn/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/scss/style.css">
    <style>
        /* 04:25:15 30/11/2018 */*{margin:0;padding:0}body{min-width:1024px;overflow-x:hidden}img{border:0}a{text-decoration:none}ul,ol{list-style:none}.clr{clear:both}p{-webkit-margin-before:0;-webkit-margin-after:0;-webkit-margin-start:0;-webkit-margin-end:0;text-rendering:geometricPrecision}input[type=text],input[type=tel],textarea{-webkit-appearance:none}body,input,button,option,textarea,label,legend,h1,h2,h3,h4,h5,h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{font:14px/18px Helvetica,Arial,'DejaVu Sans','Liberation Sans',Freesans,sans-serif;color:#333;outline:none;zoom:1}header{position:absolute;top:0;min-width:1024px;background:#fed700;width:100%;height:55px}section{max-width:1200px;width:100%;min-width:980px;margin:55px auto 0;position:relative}footer{width:100%;min-width:1024px;margin:0 auto;background:#fff;overflow:hidden;clear:both}.wrap-main{max-width:1200px;min-width:1024px;width:100%;height:55px;background:#000;margin:auto;position:relative;display:block}.logo{float:left;width:165px;display:block;padding:14px 0 11px 5px}.logo a{display:block;overflow:hidden}#search-site{float:left;width:230px;height:35px;margin:10px 10px 0 10px;background:#fff;position:relative;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px}.topinput{float:left;width:162px;margin-left:8px;padding-top:3px;border:0;position:relative;background:#fff;height:30px;text-indent:10px;font-size:13px}.btntop{float:right;width:40px;height:35px;border:0;background:none}nav{width:780px;background:#fed700;margin:0;padding:0;display:table;*display:block;*float:none}nav a{display:table-cell;*float:left;width:75px;height:44px;padding:3px 0 4px;color:#000;background:#fed700;font-size:11px;text-align:center;text-transform:uppercase;position:relative}nav a:hover,nav a.actmenu{background-color:#f5f5f5}nav a.mobile{width:70px}nav a.tablet{width:60px}nav a.laptop{width:60px}nav a.phukien{width:60px}nav a.simcard{width:60px}nav a.ask{width:60px}nav a.gameapp{width:60px}nav a span{display:block;position:absolute;top:9px;width:23px;margin:auto;left:0;right:0;font-size:11px}nav a.cardsim,nav a.utility{text-transform:none;font-size:13px;padding:0;vertical-align:middle;line-height:19px;border-left:1px solid rgba(0,0,0,.1);padding-top:6px}nav a.utility{width:100px}[class^="icontgdd-"],[class*="icontgdd-"],[class^="iconmobile-"],[class*="iconmobile-"]{background-image:url(https://cdn.thegioididong.com/v2015/Content/desktop/images/V4/icondesktop@1x.png?v=001);background-repeat:no-repeat;display:inline-block;height:30px;width:30px;line-height:30px;vertical-align:middle}@media all and (-webkit-min-device-pixel-ratio:1.5){[class^="icontgdd-"],[class*="icontgdd-"],[class^="iconmobile-"],[class*="iconmobile-"]{background-image:url(https://cdn.thegioididong.com/v2015/Content/desktop/images/V4/icondesktop@2x.png?v=001);background-size:500px 100px}}.icontgdd-logo{background-position:0 0;width:156px;height:30px;display:block;margin:auto}.icontgdd-topsearch{background-position:-160px 0;width:20px;height:20px;display:block;margin:1px auto 0}.icontgdd-mobile{background-position:-190px 0;width:16px;height:25px;display:block;margin:2px auto 3px}.icontgdd-tablet{background-position:-209px 0;display:block;margin:0 auto 5px;width:33px;height:22px}.icontgdd-laptop{background-position:-245px 0;display:block;margin:0 auto 5px;width:39px;height:21px}.icontgdd-phukien{background-position:-288px 0;display:block;margin:0 auto 5px;width:22px;height:22px}.icontgdd-maydoitra{background-position:-315px 0;display:block;margin:0 auto 4px;width:34px;height:26px}.icontgdd-simcard{background-position:-355px 0;display:block;margin:0 auto 5px;width:18px;height:23px}.icontgdd-news{background-position:-375px 0;display:block;margin:0 auto 2px;width:29px;height:24px}.icontgdd-ask{background-position:-410px 0;display:block;margin:0 auto 3px;width:25px;height:25px}.icontgdd-gameapp{background-position:-439px 0;display:block;margin:0 auto 5px;height:20px;width:32px}.icontgdd-promo{background-position:-475px 0;display:block;margin:0 auto 3px;width:22px;height:24px}.icontgdd-watch{background-position:-362px -50px;display:block;margin:0 auto 0;width:16px;height:27px}.rowfoot1{display:block;overflow:hidden;width:100%;min-width:1024px;max-width:1200px;margin:0 auto;padding:15px 0}.colfoot{float:left;width:28%;margin:0;position:relative}.collast{width:11%;float:right}.colfoot li{float:none;position:relative;font-size:13px;color:#444}.colfoot li a{display:block;color:#288ad6;font-size:14px;line-height:25px;padding-top:5px}.colfoot li a:hover{color:#666}.colfoot li a.bct,.colfoot li a.dmca-badge{display:inline-block}.colfoot li p{display:block;padding-top:5px;line-height:25px;font-size:14px;color:#666}.colfoot li p a{display:inline;font-weight:600;color:#333;padding:0 5px}.colfoot li.showmore{font-weight:bold}.colfoot li.showmore a:after{content:'';display:inline-block;width:0;height:0;border-top:5px solid #288ad6;border-left:5px solid transparent;border-right:5px solid transparent;margin:0 0 0 5px;position:relative;top:-2px}.colfoot li.showmore a:hover:after{border-top:5px solid #666}.colfoot li.hidden{display:none}.colfoot li a.linkfb{float:left;padding:0 10px 0 0;margin:9px 0 2px;border-right:1px solid #e9e9e9;font-size:12px;line-height:1;color:#288ad6}.colfoot li a.linkyt{float:left;padding:0 0 0 10px;margin:9px 0 2px;font-size:12px;color:#288ad6;line-height:1}.colfoot li a.dmx{display:block;overflow:hidden;clear:both;padding:5px 0}.rowfoot2{width:100%;min-width:980px;overflow:hidden;background:#f8f8f8;padding:10px 0}.rowfoot2 p{display:block;width:100%;margin:auto;font-size:10px;color:#999;text-align:center}.rowfoot2 a{color:#999}.icontgdd-share1{background-position:0 -30px;width:13px;height:13px;margin-right:3px}.icontgdd-share3{background-position:-16px -30px;width:17px;height:13px;margin-right:3px}.icontgdd-dmx{background-position:-36px -30px;width:100px;height:19px}.icontgdd-bct{background-position:0 -50px;width:123px;height:38px}.stickcart{position:fixed;right:70px;bottom:42px;background:#fff;border-radius:40px;box-shadow:0 0 10px 0 rgba(0,0,0,.15);font-size:14px;color:#288ad6;padding:0 10px 0 0;width:130px;z-index:99}.stickcart div{float:left;width:38px;height:38px;border-radius:40px;background:#ffde31;margin:2px 5px 2px 2px}.stickcart span{display:block;padding:4px 0 0;white-space:nowrap}.stickcart strong{display:block;white-space:nowrap}.icontgdd-cartstick{background-position:-265px -30px;width:22px;height:18px;display:block;margin:11px 0 0 6px}[class^="iconlogo-"],[class*="iconlogo-"]{background-image:url(/Content/desktop/images/V4/logosite2018.png);background-repeat:no-repeat;display:inline-block;height:30px;width:30px;line-height:30px;vertical-align:middle}@media(-webkit-min-device-pixel-ratio:1.5){[class^="iconlogo-"],[class*="iconlogo-"]{background-image:url(/Content/desktop/images/V4/logosite2018@2x.png);background-size:517px 20px}}.iconlogo-bhx{background-position:-220px 0;width:110px;height:19px}.iconlogo-dmx{background-position:-109px 0;width:111px;height:19px}.iconlogo-vv{background-position:-330px 0;width:74px;height:19px}.iconlogo-ta{background-position:-409px 0;width:100px;height:19px}.group{display:block;overflow:hidden;clear:both}.group label{display:block;font-size:12px;color:#888;margin-top:10px}.group a{display:block;vertical-align:top;padding-top:0 !important}.breadcrumb{display:block;overflow:hidden;margin:0;background:#fff;line-height:32px;padding-top:5px}.breadcrumb li{display:inline-block;vertical-align:middle;overflow:hidden}.breadcrumb li a{display:inline-block;white-space:nowrap;font-size:14px;color:#288ad6;padding:0 10px 0 0}.breadcrumb span{display:inline-block;font-size:20px;color:#999;padding:2px 5px 0 0;line-height:1}.breadcrumb li h1,.breadcrumb li h2{display:inline-block;font-size:14px;color:#288ad6;font-weight:normal;line-height:32px}.breadcrumb li h1 a{color:#288ad6}.breadcrumb li h2 a{padding-left:2px;color:#288ad6}#back-top{display:none;z-index:99}#back-top span:before{cursor:pointer;background:#fdd504;width:40px;position:fixed;right:20px;bottom:45px;height:40px;text-align:center;line-height:40px;font-size:18px;-webkit-transition:all .2s linear;-moz-transition:all .2s linear;-o-transition:all .2s linear;-transition:all .2s linear;color:#000;content:"▲";opacity:.7;z-index:8;border-radius:5px}#back-top span:hover:before{opacity:1}#dlding,#imgtrack,.none{display:none}.wrap-suggestion{display:block;border:1px solid #e2e2e2;background:#fff;position:absolute;left:0;width:345px;top:45px;z-index:9}.wrap-suggestion:after,.wrap-suggestion:before{bottom:100%;left:80px;border:solid transparent;content:" ";height:0;width:0;position:absolute}.wrap-suggestion:after{border-color:rgba(255,255,255,0);border-bottom-color:#fff;border-width:8px;margin-left:-8px}.wrap-suggestion:before{border-color:rgba(218,218,218,0);border-bottom-color:#dadada;border-width:9px;margin-left:-9px}.wrap-suggestion li{display:block;background:#fff;overflow:hidden;list-style:none;border-bottom:1px dotted #ccc}.wrap-suggestion li:last-child{border-bottom:0}.wrap-suggestion li:hover,.wrapp-producthome .wrap-suggestion li.selected,.wrap-main .wrap-suggestion li.selected{background:#f8f8f8}.wrap-suggestion li a{display:block;overflow:hidden;padding:6px;color:#333;font-size:12px}.wrap-suggestion li a img{float:left;width:50px;height:auto;margin:0 6px 0 0}.wrap-suggestion li a h3{display:block;width:auto;color:#333;font-size:14px;font-weight:700;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.wrap-suggestion li a h6{font-size:12px;color:#e67e22}.wrap-suggestion li a span{float:left;font-size:13px;color:#333}.wrap-suggestion li a span.price{font-size:12px;color:#c70100;float:none}.wrap-suggestion li a label{display:block;font-size:12px;color:#999;padding-left:56px}.wrap-suggestion li a label strong{font-size:12px;color:#d0021b}.wrap-suggestion li.samsung img{display:inline-block;vertical-align:middle;width:80px}.wrap-suggestion li.samsung b{display:inline-block;vertical-align:middle;color:#333}.wrap_rts{overflow:hidden;position:fixed;z-index:11;bottom:0;right:10%}.wrap_rts .pop{display:block;overflow:hidden;position:relative;width:100%;max-width:400px;margin:auto;background:#fff;margin-top:20%;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;border:solid 1px #ccc}.wrap_rts .pop .hdpop{padding:10px 0 10px 10px;border-bottom:solid 1px #ccc;font-size:15px;background:#f89406;color:#fff}.wrap_rts .pop .hdpop .closehd{float:right;color:#fff;border:solid 1px #fff;height:25px;width:25px;border-radius:50%;position:absolute;top:5px;right:10px;font-size:13px;text-align:center;cursor:pointer;font-style:normal;box-sizing:border-box;padding-top:3px}.wrap_rts .pop .if{display:block;padding:10px 10px 0}.wrap_rts .pop .if .price{color:#d0021b}.wrap_rts .pop .ivt{display:block;padding:10px 10px 0;text-align:center}.wrap_rts .pop ul.ol{padding:10px;border-bottom:1px solid #ddd}.wrap_rts .pop ul.ol li .iprn{color:#288ad6}.wrap_rts .pop ul.ol li .iprn:before{content:'•';display:inline-block;vertical-align:middle;font-size:20px;color:#999;margin-right:5px}.wrap_rts .pop ul.ol li .iprp{color:#d0021b;float:right}.wrap_rts .pop ul.rtt{padding:10px;overflow:hidden}.wrap_rts .pop ul.rtt li{text-align:center;float:left;width:33%;color:#288ad6;cursor:pointer}.wrap_rts .pop ul.rtt li img{display:block;width:40px;height:40px;margin:0 auto 10px}.wrap_rts .pop .chsRtUstf{border-radius:5px;border:solid 1px #ccc;overflow:hidden;margin:10px;padding:10px}.wrap_rts .pop .chsRtUstf span{display:block;text-align:center;margin:0 0 10px}.wrap_rts .pop .chsRtUstf a.chbUt{display:block;width:50%;float:left;color:#288ad6;padding:10px 0}.wrap_rts .pop .chsRtUstf a.chbUt i{margin:0 8px}.wrap_rts .pop .chsRtUstf a.chbUt span{display:inline}.wrap_rts .pop .chsRtUstf a.btnRsUs{padding:8px;background:#288ad6;color:#fff;border-radius:5px;text-align:-webkit-center;width:75px;margin:10px auto 0;display:-webkit-box}.wrap_rts .pop .msg{margin:10px 0 20px}.wrap_rts .pop .btnRs{padding:8px;background:#fff;color:#288ad6;border:solid 1px #288ad6;border-radius:5px;text-align:-webkit-center;width:75px;margin:10px auto 0;display:-webkit-box}.wrap_rts .iconmobile-uncheckbox{background-position:-145px -30px;width:16px;height:16px;vertical-align:sub}.wrap_rts .iconmobile-checkbox{background-position:-165px -30px;width:16px;height:16px;vertical-align:sub}.hide{display:none !important}@media screen and (max-width:1220px){.wrap-main{width:1024px}.logo{width:35px}.icontgdd-logo{width:28px}#search-site{width:200px}.topinput{width:152px}nav{width:764px}nav a{font-size:11px}.colfoot li a{padding:0 0 0 5px;line-height:30px}.colfoot{width:26.5%}.collast{width:13%}.colfoot li a.bct{padding:0}.breadcrumb{margin:0 10px}}
        /* 04:25:15 30/11/2018 */.show{display:block}.none{display:none}.note_address,.note_market{background:#fff;border:1px dashed #c10017;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;margin:5px 0 10px 0;padding:10px;font-size:13px;color:#c10017;margin-top:10px}section,body{background:#f0f0f0}.bar-top{display:block;overflow:hidden;width:100%;max-width:600px;margin:auto}.provision{display:block;overflow:hidden;font-size:11px;color:#999;text-align:center;line-height:50px}.provision a{color:#999}.wrap_cart{display:block;width:100%;max-width:600px;margin:auto;background:#fff;border:1px solid #d8d8d8;-moz-box-shadow:0 0 20px rgba(0,0,0,.15);-webkit-box-shadow:0 0 20px rgba(0,0,0,.15);box-shadow:0 0 20px rgba(0,0,0,.15)}.buymore{float:left;overflow:hidden;position:relative;line-height:40px;font-size:14px;color:#288ad6;padding:15px 0 0 15px}.buymore:before,.buymore:after{content:'';width:0;height:0;border-right:7px solid #288ad6;border-top:7px solid transparent;border-bottom:7px solid transparent;position:absolute;left:0;top:28px}.buymore:after{margin-left:2px;border-width:9px;border-right-color:#f0f0f0;top:26px}.yourcart{display:block;overflow:hidden;background:#f0f0f0;text-align:right;color:#333;line-height:40px;padding-top:15px}.listorder{display:block;overflow:visible;background:#fff;clear:both;padding-top:10px}.listorder li{display:block;overflow:visible;border-bottom:1px solid #f5f5f5;margin:10px 30px;padding-bottom:10px;min-height:110px}.listorder li:last-child{margin-bottom:0}.listorder li a{display:block;overflow:hidden}.listorder li img{display:inline-block;width:75px;margin:5px 0 10px}.listorder li .colimg{float:left;overflow:hidden;width:85px;text-align:center}.listorder li .colimg button{display:block;text-align:center;font-size:12px;color:#999;width:40px;border:0;background:#fff;margin:auto;cursor:pointer}.listorder li .colimg button span{float:left;width:12px;height:12px;background:#ccc;border-radius:10px;position:relative;margin-top:3px}.listorder li .colimg button span:before,.listorder li .colimg button span:after{top:2px;left:5px}.listorder li .colimg button span:before{content:'';width:2px;height:8px;background:#fff;position:absolute;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg)}.listorder li .colimg button span:after{content:'';width:2px;height:8px;background:#fff;position:absolute;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg)}.listorder li .colinfo{display:inline-block;overflow:visible;width:450px;padding-left:5px}.listorder li .colinfo a{display:inline-block;font-size:14px;color:#333;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;text-overflow:ellipsis;width:62%}.listorder li .colinfo a:hover{color:#288ad6}.listorder li .colinfo>a{font-weight:bold}.listorder li .colinfo strong{font-weight:normal;font-size:14px;color:#c10017;float:right}.listorder li .colinfo strong span{display:block;font-size:12px;color:#666;text-decoration:line-through}.listorder li .colinfo .saleacc{display:block;overflow:hidden;font-size:12px;color:#c10017;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;text-overflow:ellipsis;width:62%;margin-top:5px;line-height:normal}.cartone .listorder li .promotion{background:#fff}.cartone .listorder li .promotion span{color:#333}.listorder li .promotion span .infoend{display:none}.cartone .listorder li .promotion span:before{color:#999}.listorder li .promotion{background:#fff;padding:5px 0;width:345px;height:auto;margin:0 10px 0 0;display:block;overflow:hidden}.listorder li .promotion .title{display:none}.listorder li .promotion .title label{color:#288ad6;font-size:12px}.listorder li .promotion.many span{display:none}.listorder li .promotion.many .title{display:block;cursor:pointer}.listorder li .promotion.many .title label{cursor:pointer;position:relative}.listorder li .promotion.many .title label:after{content:'';width:0;right:-20px;border-top:6px solid #288ad6;border-left:6px solid transparent;border-right:6px solid transparent;display:inline-block;vertical-align:middle;float:right;position:absolute;top:5px}.listorder li .promotion span{display:block;overflow:hidden;padding-left:10px;color:#333;margin-bottom:5px;font-size:12px}.listorder li .promotion span:before{content:'•';display:inline-block;vertical-align:middle;margin-right:5px;font-size:20px;color:#999;margin:0 3px 0 -10px}.listorder li .promotion span a{display:inline;font-size:12px;color:#288ad6}.listorder li .promotion span *{font-size:12px}.listorder li .promotion ul{display:inline-block;vertical-align:top}.listorder li .promotion ul li{min-height:0;border-bottom:0;padding:0;margin:0}.choosecolor{float:left;position:relative;width:140px;border:1px solid #dfdfdf;background:#fff;border-radius:3px;line-height:32px;font-size:14px;color:#288ad6;padding:0 5px;margin:5px 10px 0 0}.choosecolor span{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:91%;cursor:pointer}.choosecolor:after{content:'';width:0;right:0;border-top:6px solid #288ad6;border-left:6px solid transparent;border-right:6px solid transparent;display:inline-block;vertical-align:middle;margin:13px 5px 0 0;float:right;position:absolute;top:0}.listcolor{display:none;overflow:visible;position:absolute;top:36px;min-width:130px;left:0;z-index:9;background:#fff;border:1px solid #d9d9d9;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;padding:0 10px;-moz-box-shadow:0 10px 10px 0 rgba(0,0,0,.1);-webkit-box-shadow:0 10px 10px 0 rgba(0,0,0,.1);box-shadow:0 10px 10px 0 rgba(0,0,0,.1)}.listcolor:before,.listcolor:after{content:'';position:absolute;bottom:100%;left:50px;width:0;height:0;border-bottom:10px solid #ccc;border-left:10px solid transparent;border-right:10px solid transparent}.listcolor:after{border-width:9px;margin-left:1px;border-bottom-color:#fff}.listorder li .listcolor a{width:auto;margin:0;overflow:visible;padding:7px 0 10px 0;display:block;height:30px;color:#288ad6;border-bottom:1px solid #eee;cursor:pointer;white-space:nowrap}.listorder li .listcolor a:last-child{border:0}.listorder li .listcolor img{width:30px;height:30px;margin:0 0 0 -4px;display:inline-block;vertical-align:middle}.choosenumber{float:right;overflow:hidden;position:relative;width:25%;border:1px solid #dfdfdf;background:#fff;border-radius:3px;line-height:32px;font-size:14px;color:#333;margin:5px 0 5px 0}.abate{float:left;border-right:1px solid #dfdfdf;background:#fff;width:32%;height:32px;position:relative;cursor:pointer;pointer-events:none}.abate:before{content:'';width:12px;height:2px;background:#ccc;display:block;margin:15px auto}.abate.active{pointer-events:auto}.abate.active:before{background:#288ad6}.number{font-size:14px;color:#333;float:left;width:33%;height:32px;text-align:center}.augment{float:right;border-left:1px solid #dfdfdf;background:#fff;width:32%;height:32px;position:relative;cursor:pointer}.augment:before{content:'';width:12px;height:2px;background:#288ad6;display:block;margin:15px auto}.augment:after{content:'';width:2px;height:12px;background:#288ad6;display:block;margin:0 auto;position:absolute;top:10px;left:0;right:0}.augment.disable{pointer-events:none}.augment.disable:before,.augment.disable:after{background:#ccc}.onecolor{float:left;position:relative;width:48%;background:#fff;line-height:32px;font-size:14px;color:#333;margin:5px 0}.onecolor span{color:#999}.area_total{display:block;overflow:hidden;padding:10px 30px 10px;border-bottom:1px solid #d8d8d8;background:#fff}.area_total a{color:#288ad6;display:inline-block;cursor:pointer}.area_total div{display:block;overflow:hidden;font-size:14px;color:#333;line-height:22px}.area_total div span{float:left}.area_total div span:nth-child(2){float:right}.area_total div.total{display:block}.area_total div.total b{float:left}.area_total div.total strong{float:right;font-size:16px;color:#c10017}.textcode{color:#288ad6 !important;cursor:pointer;text-align:right}.inputcode{display:block;overflow:hidden;margin:10px 0}.inputcode input{display:block;width:40%;border:1px solid #d9d9d9;border-radius:4px;padding:9px;height:20px;float:right;margin-right:10px}.inputcode button{float:right;background:#288ad6;border-radius:4px;border:0;height:40px;font-size:14px;color:#fff;width:90px;text-align:center;cursor:pointer}.inputerror,input.error{border-color:#dd4b39 !important}.texterror,label.error{display:inline-block;font-size:12px;color:#dd4b39;margin-bottom:5px}#CouponCode-error{float:right;margin:10px 10px 0 0}label#BillingAddress_DistictId-error{float:right;width:47%}.infouser{display:block;overflow:hidden;background:#fff;padding:0 30px}.infouser.none{display:none}.malefemale{display:block;overflow:hidden;padding:20px 0 0;background:#fff}.malefemale label{float:left;margin-right:30px;cursor:pointer}.icontgdd-opt,.iconmobile-opt{background-position:-380px -30px;width:16px;height:16px;vertical-align:sub}.areainfo{display:block;padding:0}.areainfo.none{display:none}.areainfo input{display:block;padding:9px 0;height:20px;border:1px solid #d9d9d9;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;margin:10px 0 5px;text-indent:10px;width:99.6%}.areainfo .left{float:left;width:49%;margin-bottom:5px}.areainfo .right{float:right;width:49%;margin-bottom:5px}.infoold.infooldemail{padding:0 30px 10px 30px}.infoold{display:block;overflow:hidden;padding:20px 30px 10px 30px;background:#fff}.infoold span{color:#288ad6;display:inline-block;margin-left:10px;vertical-align:top;border-bottom:1px dotted #288ad6;cursor:pointer}.area_other{display:block;overflow:visible;padding:5px 30px 0;background:#fff}.area_other .textnote{display:block;overflow:hidden;margin-bottom:10px}.address{display:inline-block;vertical-align:top;margin-right:10px;color:#288ad6}.address.none{display:none}.address label,.supermarket label{color:#288ad6;cursor:pointer}.address label.choose,.supermarket label.choose{color:#333}.supermarket{display:inline-block;vertical-align:top;color:#288ad6}.choose .icontgdd-opt,.choose .iconmobile-opt{background-position:-400px -30px}.area_address{display:none;overflow:visible;background:#f0f0f0;margin-top:15px;padding:20px 20px 0 20px;position:relative}.area_address.show{display:block}.area_address:before{content:'';position:absolute;bottom:100%;left:65px;width:0;height:0;border-bottom:10px solid #f0f0f0;border-left:10px solid transparent;border-right:10px solid transparent}.area_address.onlyhome{display:block;margin-top:0}.area_address.onlyhome:before{border:none}.boxCompany{overflow:visible;background:#f0f0f0;padding:0 20px 0;position:relative;border-bottom:1px solid #f0f0f0}.citydis{display:block;height:40px;position:relative;margin-bottom:5px}.city{float:left;position:relative;width:42%;border:1px solid #d9d9d9;background:#fff;border-radius:3px;font-size:14px;color:#288ad6;padding:10px 1.5% 6px}.city span{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;display:inline-block;width:88%;cursor:pointer}.city:after{content:'';width:0;right:0;border-top:6px solid #288ad6;border-left:6px solid transparent;border-right:6px solid transparent;display:inline-block;vertical-align:middle;margin:7px 5px 0 0;float:right;position:absolute}.listcity{display:none;overflow:visible;position:absolute;z-index:15;top:43px;left:0;width:300px;background:#fff;border:1px solid #ccc;border-radius:4px;padding-bottom:10px}.listcity:before,.listcity:after{content:'';position:absolute;bottom:100%;left:50px;width:0;height:0;border-bottom:10px solid #ccc;border-left:10px solid transparent;border-right:10px solid transparent}.listcity:after{border-width:9px;margin-left:1px;border-bottom-color:#fff}.listcity aside{float:left;width:50%}.searchlocal{display:block;overflow:hidden;padding:10px 10px 0}.searchlocal div{display:block;border:1px solid #d9d9d9;border-radius:4px;background:#fff;height:34px;position:relative}.searchlocal input{display:block;border:0;background:#fff;padding:5px;height:24px;border-radius:4px;width:90%}.searchlocal .submit{position:absolute;top:0;right:0;padding:8px 10px;background:#fff;border-radius:0 3px 3px 0;border:0;height:34px;cursor:pointer}.icontgdd-search,.iconmobile-search{background-position:-355px -30px;width:16px;height:16px}.checkexist .scroll{display:block;overflow-y:auto;overflow-x:hidden;max-height:220px}.area_address .scroll,.area_market .scroll{float:left;width:100%;max-height:170px;overflow:auto}.listcity a{display:block;padding:10px 10px 0;font-size:14px;color:#288ad6;cursor:pointer}.dist{float:right;position:relative;width:47%;border:1px solid #d9d9d9;background:#fff;border-radius:3px;font-size:14px;color:#288ad6;padding:10px 1.5% 6px}.dist span{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;display:inline-block;width:88%;cursor:pointer}.dist:after{content:'';width:0;right:0;border-top:6px solid #288ad6;border-left:6px solid transparent;border-right:6px solid transparent;display:inline-block;vertical-align:middle;margin:7px 5px 0 0;float:right;position:absolute}.listdist{display:none;overflow:visible;position:absolute;z-index:15;top:43px;right:0;width:300px;background:#fff;border:1px solid #ccc;border-radius:4px;padding-bottom:10px}.listdist:before,.listdist:after{content:'';position:absolute;bottom:100%;right:70px;width:0;height:0;border-bottom:10px solid #ccc;border-left:10px solid transparent;border-right:10px solid transparent}.listdist:after{border-width:9px;margin-right:1px;border-bottom-color:#fff}.listdist a{display:block;padding:10px 10px 0;font-size:14px;color:#288ad6;cursor:pointer}.checkexist .scroll{display:block;overflow-y:auto;overflow-x:hidden;max-height:220px}.listdist aside{float:left;width:50%}.area_market{display:none;overflow:visible;background:#f0f0f0;margin-top:15px;padding:20px;position:relative}.area_market.show{display:block}.area_market:before{content:'';position:absolute;bottom:100%;left:210px;width:0;height:0;border-bottom:10px solid #f0f0f0;border-left:10px solid transparent;border-right:10px solid transparent}.area_market.onlystore{display:block;margin-top:0}.area_market.onlystore:before{border:none}.area_market .listmarket{padding:10px 0}.area_market .areainfo input{margin-top:5px}.searchstore{display:block;overflow:hidden;padding:0;position:relative;border:1px solid #d9d9d9;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px}.searchstore input{display:block;border:0;background:#fff;padding:5px;height:24px;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;width:92%}.searchstore .submit{position:absolute;top:0;right:0;padding:8px 10px;background:#fff;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;border:0;height:34px;cursor:pointer}.listmarket{display:block;overflow:auto;clear:both;max-height:200px}.listmarket li{display:block;overflow:hidden;font-size:14px;color:#333;padding:0 0 10px 20px;cursor:pointer}.listmarket.searchs li.s{display:block}.listmarket.searchs li{display:none}.listmarket.searchs .viewmarket{display:none}.listhours.layer{max-height:160px;overflow:auto}.listhours span.none,.listmarket li.none,.viewmarket.none{display:none}.listmarket li .icontgdd-opt,.listmarket li .iconmobile-opt{margin-left:-20px}.listmarket li.choosemarket .icontgdd-opt,.listmarket li.choosemarket .iconmobile-opt{background-position:-400px -30px}.listmarket li *{cursor:pointer}.listmarket li span{color:#14b61b;font-size:12px;cursor:pointer}.listmarket li .two-7date{color:#e67e22}.viewmarket{display:block;overflow:hidden;position:relative;font-size:14px;color:#288ad6;cursor:pointer}.viewmarket:after{content:'';width:0;right:0;border-top:6px solid #288ad6;border-left:6px solid transparent;border-right:6px solid transparent;display:inline-block;vertical-align:middle;margin:-2px 0 0 5px}.otheradd{display:block;overflow:hidden;position:relative;font-size:14px;color:#288ad6;margin:0 10px 10px 20px;cursor:pointer}.homenumber{display:block;padding:9px 0;height:20px;border:1px solid #d9d9d9;border-radius:4px;margin:5px 0;text-indent:10px;width:99.8%}.timeship{display:block;padding:9px 0;font-size:14px;color:#333;margin:0}.area_market .timeship{padding:0}.timereceive{float:left;padding:9px 0;font-size:14px;color:#333;margin-right:10px}.area_market .date{float:left;position:relative;width:100%;border:1px solid #d9d9d9;background:#fff;border-radius:3px;font-size:14px;color:#333;padding:10px 1.5% 10px;box-sizing:border-box}.area_market .date span{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;color:#288ad6;display:inline}.date{float:left;position:relative;width:42%;border:1px solid #d9d9d9;background:#fff;border-radius:3px;font-size:14px;color:#288ad6;padding:10px 1.5% 6px}.date span{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;display:inline-block;width:88%;cursor:pointer}.date:after{content:'';width:0;right:0;border-top:6px solid #288ad6;border-left:6px solid transparent;border-right:6px solid transparent;display:inline-block;vertical-align:middle;margin:7px 5px 0 0;float:right;position:absolute}.listdate{display:none;overflow:visible;position:absolute;z-index:15;top:43px;left:0;right:0;width:46%;background:#fff;border:1px solid #ccc;border-radius:4px;box-shadow:0 10px 10px 0 rgba(0,0,0,.1)}.listreceive{left:110px}.listdate span{display:block;padding:10px 0;margin:0 10px;font-size:14px;color:#288ad6;border-bottom:1px solid #d9d9d9;cursor:pointer}.listdate span:last-child{border:0}.listdate:before,.listdate:after{content:'';position:absolute;bottom:100%;left:50px;width:0;height:0;border-bottom:10px solid #ccc;border-left:10px solid transparent;border-right:10px solid transparent}.listdate:after{border-width:9px;margin-left:1px;border-bottom-color:#fff}.hours{float:right;position:relative;width:47%;border:1px solid #d9d9d9;background:#fff;border-radius:3px;font-size:14px;color:#288ad6;padding:10px 1.5% 6px}.hours span{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;display:inline-block;width:88%;cursor:pointer}.hours:after{content:'';width:0;right:0;border-top:6px solid #288ad6;border-left:6px solid transparent;border-right:6px solid transparent;display:inline-block;vertical-align:middle;margin:7px 5px 0 0;float:right;position:absolute}.listhours{display:none;overflow:visible;position:absolute;z-index:15;top:43px;right:0;width:50%;background:#fff;border:1px solid #ccc;border-radius:4px;box-shadow:0 10px 10px 0 rgba(0,0,0,.1)}.listhours:before,.listhours:after{content:'';position:absolute;bottom:100%;right:70px;width:0;height:0;border-bottom:10px solid #ccc;border-left:10px solid transparent;border-right:10px solid transparent}.listhours:after{border-width:9px;margin-right:1px;border-bottom-color:#fff}.listhours span{display:block;padding:10px 0;margin:0 10px;font-size:14px;color:#288ad6;border-bottom:1px solid #d9d9d9;cursor:pointer}.listhours span:last-child{border:0}.cathe{display:block;overflow:hidden;font-size:14px;color:#333;padding:10px 0;cursor:pointer}.htkt{display:block;overflow:hidden;font-size:14px;color:#333;padding:10px 0 0;cursor:pointer}.icontgdd-checkbox,.iconmobile-checkbox{background-position:-145px -30px;width:16px;height:16px;vertical-align:sub}.cathe.check .icontgdd-checkbox,.cathe.check .iconmobile-checkbox,.notemoreproduct.check .icontgdd-checkbox,.notemoreproduct.check .iconmobile-checkbox,.htkt.check .icontgdd-checkbox,.htkt.check .iconmobile-checkbox{background-position:-165px -30px}.billvat{display:block;overflow:hidden;margin:0 0 10px 0}.billvat label{display:block;cursor:pointer}.vat.check .icontgdd-checkbox,.vat.check .iconmobile-checkbox{background-position:-165px -30px}.infocompany{display:none;overflow:hidden}.infocompany input:first-child{margin-top:10px}.infocompany input{display:block;padding:9px 0;height:20px;border:1px solid #d9d9d9;border-radius:4px;margin:5px 0;text-indent:10px;width:99%}.infocompany textarea{display:block;padding:9px 0;border:1px solid #d9d9d9;border-radius:4px;margin-top:10px;text-indent:10px;width:99%}.requestother{display:block;padding:9px 0;height:20px;border:1px solid #d9d9d9;border-radius:4px;margin:10px 0;text-indent:10px;width:99.8%}.area_secur{display:block;overflow:hidden;margin:0 30px;background:#fff}.area_secur span{display:block;overflow:hidden;margin:10px 0}.area_secur .capcha{display:inline-block;overflow:hidden;vertical-align:top;width:130px;float:left}.area_secur .changecode{display:block;color:#288ad6;padding:5px 0;cursor:pointer}.area_secur .entercapcha{display:inline-block;overflow:hidden;vertical-align:top;width:30.5%;float:left;margin-left:10px}.area_secur input{display:block;padding:9px 0;border:1px solid #d9d9d9;border-radius:4px;height:20px;text-indent:10px;width:98%;margin-bottom:8px}.payoffline{float:left;overflow:hidden;width:260px;padding:9px 0;margin:10px 0 20px 30px;border-radius:4px;font-size:14px;font-weight:600;line-height:normal;text-transform:uppercase;color:#fff;text-align:center;background:#fd6e1d;background:-webkit-gradient(linear,0% 0%,0% 100%,from(#fd6e1d),to(#f59000));background:-webkit-linear-gradient(top,#f59000,#fd6e1d);background:-moz-linear-gradient(top,#f59000,#fd6e1d);background:-ms-linear-gradient(top,#f59000,#fd6e1d);background:-o-linear-gradient(top,#f59000,#fd6e1d)}.payoffline.full{width:90%}.payoffline span{display:block;font-size:12px;color:#fff;text-transform:none;font-weight:normal}.align{float:none;display:block;margin:10px auto;width:265px}.payonline{float:right;overflow:hidden;margin:10px 30px 20px 0;position:relative;width:260px}.payonline div{display:block;overflow:hidden;cursor:pointer;padding:9px 0;border-radius:4px;font-size:14px;font-weight:600;line-height:normal;text-transform:uppercase;color:#fff;text-align:center;background:#0e74c2;background:-webkit-gradient(linear,0% 0%,0% 100%,from(#0e74c2),to(#288ad6));background:-webkit-linear-gradient(top,#288ad6,#0e74c2);background:-moz-linear-gradient(top,#288ad6,#0e74c2);background:-ms-linear-gradient(top,#288ad6,#0e74c2);background:-o-linear-gradient(top,#288ad6,#0e74c2)}.payonline span{display:block;font-size:12px;color:#fff;text-transform:none;font-weight:normal}.onlinemethod{display:none;text-align:center}.onlinemethod .rechoose{display:block;text-align:center;padding:10px;color:#288ad6}.atm{text-align:center;text-transform:uppercase;margin-right:1px;padding:9px 3px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;font-size:12px;line-height:1.3em;background:#4a90e2;color:#fff;border-color:#2465c7;background:-webkit-gradient(linear,0% 0%,0% 100%,from(#205db6),to(#2a71d8));background:-webkit-linear-gradient(top,#2a71d8,#205db6);background:-moz-linear-gradient(top,#2a71d8,#205db6);background:-ms-linear-gradient(top,#2a71d8,#205db6);background:-o-linear-gradient(top,#2a71d8,#205db6);display:inline-block;vertical-align:middle;width:200px}a{text-decoration:none}.atm span{display:block;text-transform:none;font-size:12px}.visa{text-align:center;text-transform:uppercase;padding:18px 3px 15px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;font-size:12px;line-height:1.3em;background:#0037a0;color:#fff;border-color:#001f5b;background:-webkit-gradient(linear,0% 0%,0% 100%,from(#00308a),to(#0037a0));background:-webkit-linear-gradient(top,#0037a0,#00308a);background:-moz-linear-gradient(top,#0037a0,#00308a);background:-ms-linear-gradient(top,#0037a0,#00308a);background:-o-linear-gradient(top,#0037a0,#00308a);display:inline-block;vertical-align:middle;width:200px}.paytext{display:none;overflow:hidden;padding:10px 0;color:#288ad6;float:none;margin-left:216px;text-align:center;line-height:40px}.paytext:hover{color:#333}.message{color:#f00;text-align:center;margin:2%}.message.first{color:#c00;text-align:center;font-size:13px;border:1px solid #d57e78;background:#ffedec;padding:10px 10px;margin:0;margin-bottom:10px}.itemfull .colimg{float:left;overflow:hidden;width:75px;text-align:center}.itemfull .colinfo{display:block;overflow:visible;font-size:13px;padding:20px}.itemfull{background:#fff;border:1px solid #ccc;-moz-box-shadow:0 1px 1px 0 rgba(0,0,0,.1);-webkit-box-shadow:0 1px 1px 0 rgba(0,0,0,.1);box-shadow:0 1px 1px 0 rgba(0,0,0,.1);-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;margin:10px;padding:10px}.itemfull .colimg button{display:block;text-align:center;font-size:12px;color:#999;width:60px;border:0;background:#fff;margin:auto}.itemfull .colimg button span{float:left;width:12px;height:12px;background:#ccc;border-radius:10px;position:relative;margin-top:3px}.itemfull .colimg button span:before,.itemfull .colimg button span:after{top:2px;left:5px}.itemfull .colimg button span:before{content:'';width:2px;height:8px;background:#fff;position:absolute;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg)}.itemfull .colimg button span:after{content:'';width:2px;height:8px;background:#fff;position:absolute;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg)}.shipping_store.none{display:none}.existEmail{font-size:13px;color:#333;margin-top:5px}.existEmail a{color:#288ad6}.popup-nextpage{background:rgba(0,0,0,.4);cursor:pointer;display:none;height:100%;position:fixed;text-align:center;top:0;width:100%;z-index:10000}.popup-nextpage .helper{display:inline-block;height:100%;vertical-align:middle}.popup-nextpage>div{background-color:#fff;box-shadow:10px 10px 60px #555;display:inline-block;height:auto;max-width:250px;min-height:100px;vertical-align:middle;width:60%;position:relative;border-radius:8px;padding:30px 30px}.popup-nextpage p{font-size:13px;line-height:20px;margin-bottom:20px;margin-top:10px}.popup-nextpage span{font-weight:800;color:#288ad6}.btn-nextpage{padding:5px 20px;border:#288ad6;border-radius:4px;color:#fff;font-size:13px;background:#0e74c2;background:-webkit-gradient(linear,0% 0%,0% 100%,from(#0e74c2),to(#288ad6));background:-webkit-linear-gradient(top,#288ad6,#0e74c2);background:-moz-linear-gradient(top,#288ad6,#0e74c2);background:-o-linear-gradient(top,#288ad6,#0e74c2)}.area_market .proHaNoi{margin-top:10px}.proHaNoi{-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;display:none;padding:10px;border:1px dashed #f6a623;background:#fff4de}.proHaNoi span{display:block;color:#666;margin-left:10px;line-height:20px}.proHaNoi span:before{content:"•";background:none;color:#f6a623;margin-top:0;margin-left:-10px;font-size:20px;float:left}
        /* 04:25:16 30/11/2018 */.htmlloading{}.overlay{display:none;width:100%;height:100%;max-height:100vh;background:rgba(255,255,255,.5);position:absolute;top:0;left:0;z-index:100000;clear:both;text-align:center;overflow:hidden}.loading-cart{display:none;width:100%;height:100%;max-height:100vh;background:rgba(255,255,255,.5);position:fixed;top:0;left:0;z-index:100000;clear:both;text-align:center;overflow:hidden}.loading-cart .csdot,.overlay .csdot{width:8px;height:8px;border:1px solid #288ad6;background:#288ad6;border-radius:50%;float:left;margin:0 2px;-webkit-transform:scale(0);transform:scale(0);-webkit-animation:fx 1000ms ease infinite 0ms;animation:fx 1000ms ease infinite 0ms;box-shadow:0 2px 2px 0 rgba(0,0,0,.1)}.loading-cart .cswrap,.overlay .cswrap{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.csdot:nth-child(2){-webkit-animation:fx 1000ms ease infinite 300ms;animation:fx 1000ms ease infinite 300ms}.csdot:nth-child(3){-webkit-animation:fx 1000ms ease infinite 600ms;animation:fx 1000ms ease infinite 600ms}@-webkit-keyframes fx{50%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{opacity:0}}@keyframes fx{50%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{opacity:0}}
        /* 04:25:15 30/11/2018 */.listorder li .promotion .pro-title{padding:5px 0;margin:0}.listorder li .promotion.webnote .pro-title{padding:10px 0;border-top:1px solid #ddd}.listorder li .promotion .pro-chosse{padding-left:0;cursor:pointer}.listorder li .promotion .pro-title:before,.listorder li .promotion .pro-chosse:before{content:none}.listorder li .promotion .check .icontgdd-opt,.listorder li .promotion .check .iconmobile-opt{background-position:-400px -30px}.listorder .icontgdd-opt,.listorder .iconmobile-opt{margin-right:5px}
    </style>
</head>
<body>

<!--#region popup next page-->
<div class="popup-nextpage">
    <span class="helper"></span>
    <div>
        <p>Bạn sẽ chuyển sang trang thanh toán <b class="payname">123pay</b> trong vòng <span class="countdown-nextpage">5</span> giây nữa</p>
        <button class="btn-nextpage">Chuyển ngay</button>
    </div>
</div>
<!--#endregion--><section id="wrap_cart">
    <div class="bar-top">
        <a href="/" class="buymore">Mua thêm sản phẩm khác</a>
        <div class="yourcart">Giỏ hàng của bạn</div>
    </div>

    <div class="wrap_cart">
        <div class="loading-cart">
            <span class="cswrap">
                <span class="csdot"></span>
                <span class="csdot"></span>
                <span class="csdot"></span>
            </span>
        </div>
        <form id="formtest">
            <input name="__RequestVerificationToken" type="hidden" value="jymFHt0hFx8R7rlYdMmMVOLEX7N2g2_LYP6Zzg25Zpmmoq7a2YLr8nIaSr2KTjiN-CampK2gNcQsPNfBwZk35pDbQ4A1" />

            <input type="hidden" id="showonehour" name="showonehour" value="true" />
            <input type="hidden" id="iscatelaptop" name="iscatelaptop" value="false" />
            <style>
                #showonehour[value=true] ~ .area_other .area_address .onehour {
                    display: block !important;
                }
            </style>
            <div class="detail_cart">
                <script>
                    cart = [{"ProductId":194327,"IsBuy":false,"ProductPrice":8990000.0,"ProductName":"Samsung Galaxy A7 (2018) 128GB","CategoryName":"Điện thoại","BrandName":"Samsung","PriceClient":null,"ProductCode":"0131491001345","ProductNameCode":null,"Quantity":1,"IsShowColor":true,"arrColor":[{"activedDateField":null,"activedUserField":null,"categoryIDField":42,"colorCodeField":"Black","colorIDField":11,"colorNameField":"Đen","createdDateField":null,"createdUserField":null,"deletedDateField":null,"deletedUserField":null,"iconField":"11.jpg","isActivedField":false,"isDeletedField":false,"isExistField":true,"langIDField":null,"pictureField":null,"preOrderPriceField":0.0,"priceField":8990000.0,"productCodeField":"0131491001345","productIDField":194327,"statusField":4,"updatedDateField":null,"updatedUserField":null},{"activedDateField":null,"activedUserField":null,"categoryIDField":42,"colorCodeField":"Blue","colorIDField":4,"colorNameField":"Xanh Dương","createdDateField":null,"createdUserField":null,"deletedDateField":null,"deletedUserField":null,"iconField":"4a.jpg","isActivedField":false,"isDeletedField":false,"isExistField":true,"langIDField":null,"pictureField":null,"preOrderPriceField":0.0,"priceField":8990000.0,"productCodeField":"0131491001346","productIDField":194327,"statusField":4,"updatedDateField":null,"updatedUserField":null}],"CouponCode":null,"LinkImage":"//cdn.tgdd.vn/Products/Images/42/194327/samsung-galaxy-a7-2018-128gb-black-200-180x125.png","RefProductId":0,"IsBuyComBo":false,"ListPromotions":[]}];
                </script>
                <input data-val="true" data-val-number="The field TotalQuantityAll must be a number." data-val-required="The TotalQuantityAll field is required." id="TotalQuantityAll" name="TotalQuantityAll" type="hidden" value="1" />
                <input id="Utms" name="Utms" type="hidden" value="" />
                <input type="hidden" id="showfirtcombo" name="showfirtcombo" value="true" />

                <ul class="listorder">
                    <li class="samsung justadded"  data-value="194327" id="item194327" data-num="4" data-cat="42">
                        <input type="hidden" name="ListNone[0].ProductId" value="194327" />
                        <input type="hidden" name="ListNone[0].IsBuy" value="true" class="isbuy"/>
                        <input type="hidden" name="ListNone[0].ProductPrice" value="8990000" />
                        <input type="hidden" name="ListNone[0].CouponCode" />
                        <input type="hidden" name="ListNone[0].ProductName" value="Samsung Galaxy A7 (2018) 128GB" />
                        <input type="hidden" name="ListNone[0].CategoryName" value="Điện thoại" />
                        <input type="hidden" name="ListNone[0].BrandName" value="Samsung" />
                        <input type="hidden" name="ListNone[0].PriceClient" value="8990000" />
                        <input type="hidden" name="ListNone[0].LinkImage" value="//cdn.tgdd.vn/Products/Images/42/194327/samsung-galaxy-a7-2018-128gb-black-200-180x125.png" />
                        <div class="colimg">
                            <a href="/dtdd/samsung-galaxy-a7-2018-128gb">
                                <img width="55" src="//cdn.tgdd.vn/Products/Images/42/194327/samsung-galaxy-a7-2018-128gb-black-200-180x125.png" /></a>
                            <button type="button" class="delete"><span></span>Xóa</button>
                        </div>
                        <div class="colinfo">

                            <a href=""><?php echo $infoModel["model_name"]; ?></a>

                            <div>
                            </div>

                            <div class="choosecolor">
                                <span>Màu: <?php echo $colors[0]["color"]; ?></span>


                                <div class="listcolor">
                                    <?php
                                    foreach ($colors as $key => $value) { ?>
                                        <a  data-value="<?php echo $value["id_color"]; ?>6" data-name="<?php echo $value["color"]; ?>">
                                            <img width="30" height="30" src="image_Model/<?php echo $value["img"]; ?>.png">
                                            <?php echo $value["color"]; ?>
                                        </a>


                                    <?php
                                    }
                                    ?>

                                </div>


                            </div>
                            <div class="storage" style="width: 50%; float: left" >

                                <select class="form-control" id="storageSelect" onchange="addPrice()">
                                    <?php
                                    foreach ($Storage_price as $key => $value) { ?>
                                        <option value ="<?php echo $value["price"]; ?>"><?php echo $value["storage"]; ?> GB <strong ><?php echo $value["price"]; ?>₫</strong></option>
                                     <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            </br>
                            </br>
                            </br>

                            <div class="product">

                                <div class="product_quantity">
                                    <input id = "product-quantity" type="number" value="1" min="1" onchange="addPriceWithAMount()">
                                </div>
                            </div>
                            <div class="clr"></div>
                            <input type="hidden"  class="hdIsBuyComBo"  name="ListNone[0].IsBuyComBo" value="false" />
                            <style>
                                .listorder li .listcombo.check .iconmobile-checkbox {
                                    background-position: -165px -30px;
                                }



                                .listorder li .listcombo {
                                    overflow: hidden;
                                    background: white;
                                }

                                .listorder li .listcombo .tit {
                                    padding: 10px 0px;
                                    cursor: pointer;
                                }

                                .listorder li .listcombo .tit b {
                                    font-weight: normal;
                                    color: #c10017;
                                }

                                .listorder li .listcombo.check .pitem {
                                    display: block;
                                }

                                .listorder li .listcombo .pitem {
                                    display: none;
                                    border-top: 1px solid #dfdfdf;
                                    padding: 5px 0px;
                                }

                                .listorder li .listcombo a {
                                    margin-bottom: 10px;
                                }

                                .listorder li .listcombo .img {
                                    float: left;
                                    width: 35px;
                                    height: 35px;
                                }

                                .listorder li .listcombo img {
                                    width: 35px;
                                    height: 35px;
                                }

                                .listorder li .listcombo .info {
                                    display: block;
                                    overflow: hidden;
                                    margin-left: 40px;
                                }

                                .listorder li .listcombo .info strong {
                                    margin-right: 0px;
                                    margin-top: 5px;
                                }

                                .listorder li .listcombo h3 {
                                    font-size: 12px;
                                    margin-top: 5px;
                                    color: #333;
                                    float: left;
                                    width: 70%;
                                }

                                .listorder li .listcombo span {
                                    float: right;
                                    font-size: 12px;
                                    color: #666;
                                    width: 20%;
                                    text-align: right;
                                    text-decoration: line-through;
                                }

                                .listorder li .listcombo span + span {
                                    width: 5%;
                                    margin-right: 10px;
                                    text-align: center;
                                }

                                #showfirtcombo[value=true] ~ .listorder li .listcombo .pitem {
                                    display: block;
                                }
                            </style>

                        </div>

                    </li>
                </ul>
                <div class="area_total">
                    <div>
                        <div>
                            <span>Tổng tiền: </span>
                            <span> <div class="product-price" id="price_storage"></div></span>
                        </div>
                        <div class="shipping_home">
                            <div class="total">
                                <b>Cần thanh toán:</b>
                                <strong>8.990.000₫</strong>
                            </div>
                        </div>
                    </div>
                    <div class="boxCouponCode" style="">
                        <div class="textcode">
                            Sử dụng mã giảm giá
                        </div>
                        <div class="inputcode " style="display:none;">
                            <button type="button">Áp dụng</button>
                            <input name="CouponCode" id="CouponCode" placeholder="Nhập mã giảm giá" maxlength="20">
                            <label id="CouponCode-error" class="error" for="CouponCode" style="display: none;"></label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="infouser ">
                <div class="malefemale">
                    <label class="anh "><i class="iconmobile-opt"></i>&nbsp;Anh</label>
                    <label class=""><i class="iconmobile-opt"></i>&nbsp;Chị</label>
                    <input data-val="true" data-val-number="The field iGender must be a number." data-val-required="The iGender field is required." id="BillingAddress_iGender" name="BillingAddress.iGender" type="hidden" value="2" />
                </div>
                <div class="areainfo">
                    <div class="left">
                        <input type="text" class="saveinfo" name="BillingAddress.FullName" placeholder="Họ và tên" maxlength="50"  value=""/>
                    </div>
                    <div class="right">
                        <input type="tel" class="saveinfo" name="BillingAddress.PhoneNumber" placeholder="Số điện thoại" maxlength="11" value=""/>
                    </div>
                    <input type="text" id="BillingAddress_Email" name="BillingAddress.Email" placeholder="Email (Để theo dõi quá trình chuyển hàng)" maxlength="100" value="" class="saveinfo" style="display:none;">
                    <input type="text" class="saveinfo" style="" id="OrderNote" name="OrderNote" placeholder="Yêu cầu khác (không bắt buộc)" maxlength="300">
                </div>
            </div>


            <div class="area_other">
                <div class="textnote"><b>Để được phục vụ nhanh hơn,</b> hãy chọn thêm:</div>

                <h4> Nhận Hàng tại Siêu thị </h4>
                <div class="">
                    <ul class="listmarket">
                        <li>
                            <input type="radio" id="dewey" name="drone" value="dewey">
                            <label for="dewey">Dewey</label>
                            <span class="yes">Có hàng</span>
                        </li>

                        <li>
                            <input type="radio" id="dewey" name="drone" value="dewey">
                            <label for="dewey">Dewey</label>
                            <span class="yes">Có hàng</span>
                        </li>


                    </ul>

                </div>
                <span class="cswrap">
                    <span class="csdot"></span>
                    <span class="csdot"></span>
                    <span class="csdot"></span>
                </span>
                    </div>
                    <div class="citydis">
                        <div class="city"><span data-id="3">TP.Hồ Ch&#237; Minh</span></div>
                        <div class="listcity layer">
                            <div class="searchlocal">
                                <div>
                                    <input name="txtSearch" type="text" placeholder="Nhập tỉnh, thành để tìm nhanh">
                                    <button type="submit" class="submit"><i class="iconmobile-search"></i></button>
                                </div>
                            </div>
                            <div class="scroll">
                                <aside><a data-value='3'>TP.Hồ Chí Minh</a><a data-value='5'>Hà Nội</a><a data-value='9'>Đà Nẵng</a><a data-value='82'>An Giang</a><a data-value='102'>Bà Rịa - Vũng Tàu</a><a data-value='103'>Bắc Giang</a><a data-value='104'>Bắc Kạn</a><a data-value='105'>Bạc Liêu</a><a data-value='106'>Bắc Ninh</a><a data-value='107'>Bến Tre</a><a data-value='108'>Bình Định</a><a data-value='109'>Bình Dương</a><a data-value='110'>Bình Phước</a><a data-value='111'>Bình Thuận</a><a data-value='81'>Cà Mau</a><a data-value='7'>Cần Thơ</a><a data-value='112'>Cao Bằng</a><a data-value='6'>Đắk Lắk</a><a data-value='113'>Đắk Nông</a><a data-value='114'>Điện Biên</a><a data-value='8'>Đồng Nai</a><a data-value='115'>Đồng Tháp</a><a data-value='116'>Gia Lai</a><a data-value='117'>Hà Giang</a><a data-value='118'>Hà Nam</a><a data-value='120'>Hà Tĩnh</a><a data-value='121'>Hải Dương</a><a data-value='101'>Hải Phòng</a><a data-value='122'>Hậu Giang</a><a data-value='123'>Hòa Bình</a><a data-value='124'>Hưng Yên</a></aside><aside><a data-value='125'>Khánh Hòa</a><a data-value='126'>Kiên Giang</a><a data-value='127'>Kon Tum</a><a data-value='128'>Lai Châu</a><a data-value='129'>Lâm Đồng</a><a data-value='130'>Lạng Sơn</a><a data-value='131'>Lào Cai</a><a data-value='132'>Long An</a><a data-value='133'>Nam Định</a><a data-value='134'>Nghệ An</a><a data-value='135'>Ninh Bình</a><a data-value='136'>Ninh Thuận</a><a data-value='137'>Phú Thọ</a><a data-value='138'>Phú Yên</a><a data-value='139'>Quảng Bình</a><a data-value='140'>Quảng Nam</a><a data-value='141'>Quảng Ngãi</a><a data-value='142'>Quảng Ninh</a><a data-value='143'>Quảng Trị</a><a data-value='144'>Sóc Trăng</a><a data-value='145'>Sơn La</a><a data-value='146'>Tây Ninh</a><a data-value='147'>Thái Bình</a><a data-value='148'>Thái Nguyên</a><a data-value='149'>Thanh Hóa</a><a data-value='150'>Thừa Thiên Huế</a><a data-value='151'>Tiền Giang</a><a data-value='152'>Trà Vinh</a><a data-value='153'>Tuyên Quang</a><a data-value='154'>Vĩnh Long</a><a data-value='155'>Vĩnh Phúc</a><a data-value='156'>Yên Bái</a></aside>
                            </div>
                        </div>
                        <div class="dist"><span data-id="0">Chọn quận, huyện</span></div>
                        <div class="listdist layer">
                            <div class="searchlocal">
                                <div>
                                    <input name="txtSearch" type="text" placeholder="Nhập quận, huyện để tìm nhanh">
                                    <button type="submit" class="submit"><i class="iconmobile-search"></i></button>
                                </div>
                            </div>
                            <div class="scroll">
                                <aside><a data-value='16'>Quận 1</a><a data-value='17'>Quận 2</a><a data-value='18'>Quận 3</a><a data-value='19'>Quận 4</a><a data-value='20'>Quận 5</a><a data-value='21'>Quận 6</a><a data-value='22'>Quận 7</a><a data-value='23'>Quận 8</a><a data-value='24'>Quận 9</a><a data-value='25'>Quận 10</a><a data-value='26'>Quận 11</a><a data-value='27'>Quận 12</a></aside><aside><a data-value='30'>Quận Tân Bình</a><a data-value='33'>Quận Tân Phú</a><a data-value='52'>Quận Phú Nhuận</a><a data-value='29'>Quận Gò Vấp</a><a data-value='51'>Quận Bình Thạnh</a><a data-value='28'>Quận Thủ Đức</a><a data-value='31'>Quận Bình Tân</a><a data-value='32'>Huyện Hóc Môn</a><a data-value='34'>Huyện Củ Chi</a><a data-value='35'>Huyện Nhà Bè</a><a data-value='36'>Huyện Bình Chánh</a><a data-value='61'>Huyện Cần Giờ</a></aside>
                            </div>
                        </div>
                    </div>
                    <div class="searchstore">
                        <div>
                            <input name="txtSearch" type="text" placeholder="Nhập tên đường để tìm nhanh siêu thị">
                            <button type="button" class="submit"><i class="iconmobile-search"></i></button>
                        </div>
                    </div>
                    <div class="clr"></div>
                    <div class="proHaNoi"></div>
                    <ul class="listmarket"></ul>
                    <input class="ShipAtStore min1" id="BillingAddress_StoreId" name="BillingAddress.StoreId" type="hidden" value="0" />
                    <input id="BillingAddress_StoreName" name="BillingAddress.StoreName" type="hidden" value="" />
                    <div class="citydis timeship">
                        <div class="date">Thời gian nhận:&nbsp;&nbsp;<span data-id="0">H&#244;m nay 03/12</span></div>
                        <div class="listdate listreceive layer">
                            <span data-value="0" class="in">H&#244;m nay 03/12</span>
                            <span data-value="1" class="in">Ng&#224;y mai 04/12</span>
                            <span data-value="2" class="in">Thứ Tư  05/12</span>

                        </div>
                    </div>
                    <div class="note_market none">
                        <p>Sản phẩm hiện đã <b>tạm hết hàng tại siêu thị này</b>. Thời gian nhận hàng dự kiến sau <b>2 - 7 ngày</b>.</p>
                        <div class="areainfo">
                            <input type="text" style="" name="EmailSecondHome" placeholder="Email (để theo dõi quá trình chuyển hàng)" maxlength="100" value="" class="saveinfo EmailSecond">
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="area_address  ">
                    <div class="overlay">
                <span class="cswrap">
                    <span class="csdot"></span>
                    <span class="csdot"></span>
                    <span class="csdot"></span>
                </span>
                    </div>
                    <div class="firstaddress ">
                        <div class="citydis">
                            <div class="city"><span data-id="3">TP.Hồ Ch&#237; Minh</span></div>
                            <div class="listcity layer">
                                <div class="searchlocal">
                                    <div>
                                        <input type="text" name="txtSearch" placeholder="Nhập tỉnh, thành để tìm nhanh">
                                        <button type="button" class="submit"><i class="iconmobile-search"></i></button>
                                    </div>
                                </div>
                                <div class="scroll">
                                    <aside><a data-value='3'>TP.Hồ Chí Minh</a><a data-value='5'>Hà Nội</a><a data-value='9'>Đà Nẵng</a><a data-value='82'>An Giang</a><a data-value='102'>Bà Rịa - Vũng Tàu</a><a data-value='103'>Bắc Giang</a><a data-value='104'>Bắc Kạn</a><a data-value='105'>Bạc Liêu</a><a data-value='106'>Bắc Ninh</a><a data-value='107'>Bến Tre</a><a data-value='108'>Bình Định</a><a data-value='109'>Bình Dương</a><a data-value='110'>Bình Phước</a><a data-value='111'>Bình Thuận</a><a data-value='81'>Cà Mau</a><a data-value='7'>Cần Thơ</a><a data-value='112'>Cao Bằng</a><a data-value='6'>Đắk Lắk</a><a data-value='113'>Đắk Nông</a><a data-value='114'>Điện Biên</a><a data-value='8'>Đồng Nai</a><a data-value='115'>Đồng Tháp</a><a data-value='116'>Gia Lai</a><a data-value='117'>Hà Giang</a><a data-value='118'>Hà Nam</a><a data-value='120'>Hà Tĩnh</a><a data-value='121'>Hải Dương</a><a data-value='101'>Hải Phòng</a><a data-value='122'>Hậu Giang</a><a data-value='123'>Hòa Bình</a><a data-value='124'>Hưng Yên</a></aside><aside><a data-value='125'>Khánh Hòa</a><a data-value='126'>Kiên Giang</a><a data-value='127'>Kon Tum</a><a data-value='128'>Lai Châu</a><a data-value='129'>Lâm Đồng</a><a data-value='130'>Lạng Sơn</a><a data-value='131'>Lào Cai</a><a data-value='132'>Long An</a><a data-value='133'>Nam Định</a><a data-value='134'>Nghệ An</a><a data-value='135'>Ninh Bình</a><a data-value='136'>Ninh Thuận</a><a data-value='137'>Phú Thọ</a><a data-value='138'>Phú Yên</a><a data-value='139'>Quảng Bình</a><a data-value='140'>Quảng Nam</a><a data-value='141'>Quảng Ngãi</a><a data-value='142'>Quảng Ninh</a><a data-value='143'>Quảng Trị</a><a data-value='144'>Sóc Trăng</a><a data-value='145'>Sơn La</a><a data-value='146'>Tây Ninh</a><a data-value='147'>Thái Bình</a><a data-value='148'>Thái Nguyên</a><a data-value='149'>Thanh Hóa</a><a data-value='150'>Thừa Thiên Huế</a><a data-value='151'>Tiền Giang</a><a data-value='152'>Trà Vinh</a><a data-value='153'>Tuyên Quang</a><a data-value='154'>Vĩnh Long</a><a data-value='155'>Vĩnh Phúc</a><a data-value='156'>Yên Bái</a></aside>
                                </div>
                            </div>
                            <div class="dist"><span data-id="0">Chọn quận, huyện</span></div>
                            <div class="listdist layer">
                                <div class="searchlocal">
                                    <div>
                                        <input name="txtSearch" type="text" placeholder="Nhập quận, huyện để tìm nhanh">
                                        <button type="submit" class="submit"><i class="iconmobile-search"></i></button>
                                    </div>
                                </div>
                                <div class="scroll">
                                    <aside><a class='n1' data-stock='1' data-value='16'>Quận 1</a><a class='n1' data-stock='1' data-value='17'>Quận 2</a><a class='n1' data-stock='1' data-value='18'>Quận 3</a><a class='n1' data-stock='1' data-value='19'>Quận 4</a><a class='n1' data-stock='1' data-value='20'>Quận 5</a><a class='n1' data-stock='1' data-value='21'>Quận 6</a><a class='n1' data-stock='1' data-value='22'>Quận 7</a><a class='n1' data-stock='1' data-value='23'>Quận 8</a><a class='n1' data-stock='1' data-value='24'>Quận 9</a><a class='n1' data-stock='1' data-value='25'>Quận 10</a><a class='n1' data-stock='1' data-value='26'>Quận 11</a><a class='n1' data-stock='1' data-value='27'>Quận 12</a></aside><aside><a class='n1' data-stock='1' data-value='30'>Quận Tân Bình</a><a class='n1' data-stock='1' data-value='33'>Quận Tân Phú</a><a class='n1' data-stock='1' data-value='52'>Quận Phú Nhuận</a><a class='n1' data-stock='1' data-value='29'>Quận Gò Vấp</a><a class='n1' data-stock='1' data-value='51'>Quận Bình Thạnh</a><a class='n1' data-stock='1' data-value='28'>Quận Thủ Đức</a><a class='n1' data-stock='1' data-value='31'>Quận Bình Tân</a><a class='n1' data-stock='1' data-value='32'>Huyện Hóc Môn</a><a class='n1' data-stock='1' data-value='34'>Huyện Củ Chi</a><a class='n1' data-stock='1' data-value='35'>Huyện Nhà Bè</a><a class='n1' data-stock='1' data-value='36'>Huyện Bình Chánh</a><a class='n1' data-stock='1' data-value='61'>Huyện Cần Giờ</a></aside>                        </div>
                            </div>
                        </div>
                        <input data-val="true" data-val-number="The field ProvinceId must be a number." data-val-required="The ProvinceId field is required." id="BillingAddress_ProvinceId" name="BillingAddress.ProvinceId" type="hidden" value="3" />
                        <input data-val="true" data-val-number="The field DistictId must be a number." data-val-required="The DistictId field is required." id="BillingAddress_DistictId" name="BillingAddress.DistictId" type="hidden" value="0" />
                        <input type="text" placeholder="Số nhà, tên đường, phường / xã" id="BillingAddress_Address" name="BillingAddress.Address" maxlength="200" class="ShipAtHome homenumber saveinfo" value="" />
                    </div>
                    <div class="proHaNoi"></div>
                    <div class="note_address none">
                        <p></p>
                        <div class="areainfo">
                            <input type="text" style="" name="EmailSecondHome" placeholder="Email (để theo dõi quá trình chuyển hàng)" maxlength="100" value="" class="saveinfo EmailSecond">
                        </div>
                    </div>

                    <div class="showtimeship_address">
                        <div class="timeship">Thời gian giao:</div>
                        <div class="citydis">

                            <div class="date"><span data-id="0">H&#244;m nay 03/12</span></div>
                            <div class="listdate layer">
                                <span data-value="0" onclick="ChangeHours(this)"  class="in  ">H&#244;m nay 03/12</span>
                                <span data-value="1" onclick="ChangeHours(this)" class="in" >Ng&#224;y mai 04/12</span>

                                <span data-value="2" onclick="ChangeHours(this)">Thứ Tư  05/12</span>

                                <input data-val="true" data-val-number="The field ShipDay must be a number." data-val-required="The ShipDay field is required." id="BillingAddress_ShipDay" name="BillingAddress.ShipDay" type="hidden" value="0" />
                            </div>

                            <div class="hours"><span>Trước 15 giờ</span></div>
                            <div class="listhours layer">
                                <span data-value="9" class="  today none" ><text>Trước 9 giờ</text></span>
                                <span data-value="10" class="  today none" ><text>Trước 10 giờ</text></span>
                                <span data-value="11" class="  today none" ><text>Trước 11 giờ</text></span>
                                <span data-value="12" class="  today none" ><text>Trước 12 giờ</text></span>
                                <span data-value="13" class="  today none" ><text>Trước 13 giờ</text></span>
                                <span data-value="14" class="  today none" ><text>Trước 14 giờ</text></span>
                                <span data-value="15" class=" ahour " selected><text class='c'>Trước 15 giờ</text><text class='h' style='display:none;'>Giao hàng trong 1 giờ</text></span>
                                <span data-value="16" class="  " ><text>Trước 16 giờ</text></span>
                                <span data-value="17" class="  " ><text>Trước 17 giờ</text></span>
                                <span data-value="18" class="  " ><text>Trước 18 giờ</text></span>
                                <span data-value="19" class="  " ><text>Trước 19 giờ</text></span>
                                <span data-value="20" class="hcm  " ><text>Trước 20 giờ</text></span>
                                <span data-value="21" class="hcm  " ><text>Trước 21 giờ</text></span>
                                <span data-value="22" class="hcm  " ><text>Trước 22 giờ</text></span>
                                <input data-val="true" data-val-number="The field ShipHour must be a number." data-val-required="The ShipHour field is required." id="BillingAddress_ShipHour" name="BillingAddress.ShipHour" type="hidden" value="15" />
                            </div>
                        </div>
                    </div>
                    <input data-val="true" data-val-number="The field IsTechSupportShiper must be a number." data-val-required="The IsTechSupportShiper field is required." id="IsTechSupportShiper" name="IsTechSupportShiper" type="hidden" value="0" />                <div class="clr"></div>
                    <label class="htkt "><i class="iconmobile-checkbox"></i>&nbsp;Yêu cầu nhân viên hỗ trợ kỹ thuật đi giao hàng</label>
                    <div class="clr"></div>
                    <label class="cathe"><i class="iconmobile-checkbox"></i>&nbsp;Cà thẻ khi nhận hàng</label>
                    <div class="clr"></div>
                </div>
                <div class="boxCompany none">
                    <div class="billvat">
                        <label class="vat"><i class="iconmobile-checkbox"></i>&nbsp;Xuất hóa đơn công ty</label>
                        <div class="infocompany">
                            <input class="input IsCompany" id="CompanyInfo_CompanyName" maxlength="200" name="CompanyInfo.CompanyName" placeholder="Tên công ty" type="text" value="" />
                            <input class="input IsCompany" id="CompanyInfo_CompanyAddress" maxlength="200" name="CompanyInfo.CompanyAddress" placeholder="Địa chỉ" type="text" value="" />
                            <input class="input IsCompany" id="CompanyInfo_CompanyTaxno" maxlength="20" name="CompanyInfo.CompanyTaxno" placeholder="Mã số thuế" type="text" value="" />
                        </div>
                    </div>

                </div>
            </div>
            <input id="IsShipAtHome" name="IsShipAtHome" type="hidden" value="false" />
            <input id="IsShipAtStore" name="IsShipAtStore" type="hidden" value="false" />
            <input id="IsTechSupportShiper" name="IsTechSupportShiper" type="hidden" value="0" />

            <div class="area_secur captcha " style="display:none;">
                <span>Để tiếp tục đặt hàng, vui lòng nhập mã bảo mật</span>
                <div class="capcha">
                    <img width="130" height="40" src="/aj/orderv4/getcaptchaimage?prefix=166072924" class="imgcaptcha" >
                    <div class="changecode" onclick="$('img.imgcaptcha').attr('src','/aj/orderv4/getcaptchaimage?prefix='+Math.random())">Đổi mã khác</div>
                </div>
                <div class="entercapcha">
                    <input class="inputcode" name="Captcha" type="tel" maxlength="4" placeholder="Nhập mã bảo mật">
                </div>
            </div>

            <div class="message"></div>
            <div class="choosepayment">
                <a href="javascript:void(0)" class="payoffline">Thanh toán khi nhận hàng<span>Xem hàng trước, không mua không sao</span></a>
                <div class="payonline">
                    <div>
                        Thanh toán online<span>Bằng thẻ ATM, Visa, Master</span>
                    </div>
                </div>
            </div>
            <div class="onlinemethod">
                <a href="javascript:void(0)" class="atm">Dùng thẻ ATM<span>Có internet Banking</span></a>
                <a href="javascript:void(0)" class="visa">Dùng thẻ Visa, MASTER</a>
                <a class="rechoose" href="javascript:;">Chọn lại hình thức thanh toán</a>
            </div>
            <div class="clr"></div>
            <div class="zalopay">

                <p>
                    <img width="66" src="/Content/desktop/images/V4/cart/ZaloPay/ZaloPay-Text@2x.png">
                    Giảm ngay 50% tối đa <b>250.000đ</b> khi thanh toán qua ZaloPay cho khách hàng mới <a href="https://www.thegioididong.com/tin-tuc/dung-zalopay-thanh-toan-tai-tgdd-giam-ngay-50-cho-don-hang-1120237" target="_blank">Click xem chi tiết</a>
                </p>
                <a href="javascript:void(0)" title="Thanh toán ngay" class="zalo">THANH TOÁN NGAY</a>
            </div>
            <style>
                .zalopay {
                    background: #f3fbff;
                    border: 1px solid #5daeda;
                    -moz-border-radius: 4px;
                    -webkit-border-radius: 4px;
                    border-radius: 4px;
                    padding: 6px 10px;
                    margin: 0px 30px 20px 30px;
                }

                .zalopay img {
                    display: inline-block;
                    margin-right: 5px;
                    vertical-align: middle;
                }

                .zalopay p {
                    display: inline-block;
                    width: 70%;
                    vertical-align: middle;
                }

                .zalopay p b {
                    color: #c10017;
                }

                .zalopay p a {
                    color: #288ad6;
                }

                .zalopay a.zalo {
                    background: #39b54a;
                    -moz-border-radius: 4px;
                    -webkit-border-radius: 4px;
                    border-radius: 4px;
                    padding: 7px 10px;
                    color: #fff;
                    width: 120px;
                    display: inline-block;
                    font-size: 12px;
                    vertical-align: middle;
                    border: 1px solid #36a645;
                    text-align: center;
                }
            </style>

            <div class="clr"></div>
            <input id="PaymentMethod" name="PaymentMethod" type="hidden" value="0" />
            <input id="IsStock" name="IsStock" type="hidden" value="true" />
            <input id="TrackTest" name="TrackTest" type="hidden" value="" />
            <input id="IsStockHome" name="IsStockHome" type="hidden" value="true" />
            <input id="BillingAddress_ProvinceName" name="BillingAddress.ProvinceName" type="hidden" value="" />
            <input id="BillingAddress_DistictName" name="BillingAddress.DistictName" type="hidden" value="" />
        </form>
    </div>
    <p class="provision">Bằng cách đặt hàng, bạn đồng ý với <a href="/tos" target="_blank">Điều khoản sử dụng</a> của Thegioididong</p>
</section>


<header>
    <div class="wrap-main">
        <a class="logo" title="Về trang chủ Thegioididong.com" href="/">
            <i class="icontgdd-logo"></i>
        </a>
        <form id="search-site" action="/tim-kiem" method="get" onsubmit="return submitSearchForm();" autocomplete="off">
            <input class="topinput" id="search-keyword" name="key" type="text" aria-label="Bạn tìm gì..." placeholder="Bạn tìm gì..." autocomplete="off" onkeyup="SuggestSearch(event,this, 0);" maxlength="50" />
            <button class="btntop" type="submit" aria-label="tìm kiếm"><i class="icontgdd-topsearch"></i></button>
        </form>
        <nav>
            <a href="/dtdd" class="mobile" title="Điện thoại di động, smartphone">
                <i class="icontgdd-mobile"></i>Điện thoại
            </a>
            <a href="/may-tinh-bang" class="tablet" title="Máy tính bảng, tablet">
                <i class="icontgdd-tablet"></i>Tablet
            </a>
            <a href="/laptop" class="laptop" title="Máy tính xách tay, Laptop">
                <i class="icontgdd-laptop"></i>Laptop
            </a>
            <a href="/phu-kien" class="phukien" title="Phụ kiện điện thoại di động, phụ kiện tablet, phụ kiện lapto">
                <i class="icontgdd-phukien"></i>Phụ kiện
            </a>
            <a href="/dong-ho-thong-minh" class="smartwatch" title="Đồng hồ thông minh">
                <i class="icontgdd-watch"></i>Đồng hồ
            </a>
            <a href="/may-doi-tra" class="maydoitra" title="Máy cũ giá rẻ, máy đổi trả thegioididong">
                <i class="icontgdd-maydoitra"></i><span>Máy</span>Cũ giá rẻ
            </a>
            <a href="/tin-tuc" class="news" title="Tin công nghệ">
                <i class="icontgdd-news"></i><span>Tin</span>Công Nghệ
            </a>
            <a href="/hoi-dap" class="ask" title="Hỏi đáp">
                <i class="icontgdd-ask"></i>Hỏi đáp
            </a>
            <a href="/sim-so-dep" class="cardsim">
                Sim số<br />
                Thẻ cào
            </a>
            <a href="/tien-ich/thanh-toan-tra-gop?" class="utility">
                Đóng tiền điện,<br />
                nước, trả góp
            </a>
        </nav>
    </div>
    <div class="clr"></div>
</header>
<p id="back-top">
    <a href="#top" title="Về Đầu Trang"><span></span></a>
</p>

<script src="https://cdn.tgdd.vn/v2015/Scripts/desktop/V4/order/vnn_cart.min.v201811300430.js"></script>

<script>
    function ChangeHours(t) {
        ganew_sendEvent(eventCategory, eventAction.click, eventLabel.shipatHomeclickDay);
        var id = $(t).attr('data-value');
        $("#BillingAddress_ShipDay").val(id);
        if ($("#BillingAddress_ShipDay").val() !== "0") {
            $('.today').css("display", "block");

            $('.showtimeship_address .listhours span .c').show();
            $('.showtimeship_address .listhours span .h').hide();
        }
        else {
            $('.today').css("display", "none");
            if ($('#showonehour').val() == "true") {
                $('.showtimeship_address .listhours span .c').hide();
                if ($('#iscatelaptop').val() == "true")
                    $('.showtimeship_address .listhours span .h').html('Giao hàng trong 90 phút');
                else
                    $('.showtimeship_address .listhours span .h').html('Giao hàng trong 1 giờ');
                $('.showtimeship_address .listhours span .h').show();
            }
        }
        InitDataTime();
        $('.area_address .date span').text($(t).text());
        $('.area_address .date span').attr('data-id', id);
        $('.listdate').hide();
        $('.listhours').show();
        if ($('.area_address .citydis .listhours span:visible').length > 0)
            $('.area_address .citydis .listhours span:visible')[0].click();
        else {
            if ($('#IsShipAtHome').val() != "false" && $('#IsShipAtStore').val() != "false") {
                $('.showtimeship_address .listdate span:nth-child(2)').click();
            }
        }
    }
</script>



<script>
    //<!--#region GA -->
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://cdn.tgdd.vn/v2015/Scripts/analytics.js', 'ga');
    ga('create', 'UA-918185-25', 'auto', { 'siteSpeedSampleRate': 10 });
    //<!--#endregion -->


    window.onload = function(){
        ga('send', 'pageview');
        //<!-- #regionGoogle Tag Manager -->
        setTimeout(
            function () {
                (function (w, d, s, l, i) {
                    w[l] = w[l] || []; w[l].push({
                        'gtm.start':
                            new Date().getTime(), event: 'gtm.js'
                    }); var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                        '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-WKQZL8');
            }
            , 3000);
        //<!--#endregion -->
    };



    ga("require", "ec");
    ganew_viewOrder();


    //<!--#region TGDD TRACKING -->
    var mysessionid = 'udxlxr1wrwo0wudz1mj0n42c';
    var g_version = '201812030132';
    var tgddctr_urlroot = '//www.thegioididong.com/tracking';
    //<!--#endregion -->
    var rooturl = '.thegioididong.com';
    var isMobile = false;
</script>
<!--#region CrazyEgg -->

<!--#endregion -->

<!--#region Hotjar -->

<!--#endregion -->
<div id="dlding">Đang xử lý, vui lòng đợi trong giây lát...</div>
</body>
</html>

<script>
    function addPrice() {
        var x = document.getElementById("storageSelect").value;
        document.getElementById("price_storage").innerHTML =  x + " VND";
    }

    function addPriceWithAMount() {
        var priceSelect = document.getElementById("storageSelect").value;
        var quantity = document.getElementById("product-quantity").value;
        document.getElementById("price_storage").innerHTML =  priceSelect*quantity + " VND";
    }
</script>