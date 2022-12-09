<!DOCTYPE html>
<html>
<head>
  <meta name="exoclick-site-verification" content="c517a17c38b0788e10343c7f825871fb">
  <meta charset=utf-8>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title>Desuplayer</title>
<style type="text/css">
*{margin:0;padding:0}#arsipin{position:absolute;width:100%!important;height:100%!important}
.jw-button-color:hover,.jw-toggle,.jw-toggle:hover,
.jw-open,.jw-progress{color:#008fee!important;}.jw-active-option{background-color:#008fee!important;}
.jw-progress{background:#008fee!important;}.jw-skin-seven .jw-toggle.jw-off{color:#fff!important}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="//content.jwplatform.com/libraries/zgIRUsiD.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script></head>
<body>
<div id="arsipin" class="arsipin"></div>
<script>
var hash = window.location.hash;
var temp = (window.location.href+(hash?"#"+hash:"")).split("?")[1].split("&");
var params = {}, pk = "", pks = ["v", "a", "t"];
for (var i=0; i<temp.length; i++) {
    var _ = temp[i].split("="), k = _[0], v = _[1];
    if (pks.indexOf(k) == -1) {
      params[pk] += "&"+decodeURIComponent(k)+(v == undefined?"":"="+decodeURIComponent(v));
      continue;
    }
    params[k] = decodeURIComponent(v);
    for (var j=2; j<_.length; j++) {
      params[k] += "="+decodeURIComponent(_[j]);
    }
    pk = k;
}
var temp = document.cookie.split("; ");
var cookie = {}
for (var i=0; i<temp.length; i++) {
    var _ = temp[i].split("="), k = _[0], v = _[1];
    cookie[k] = decodeURIComponent(v);
}

var vurl = params["v"].split("/");
for (var i=3; i<vurl.length; i++) {
  vurl[i] = encodeURIComponent(vurl[i]);
}
vurl = vurl.join("/");
document.title = encodeURIComponent(params["t"])||document.title;

var p = jwplayer("arsipin"), cfg = {
    id: "player",
    sources: [{"file":vurl}],
    controls: true,
    image: "",
    title: ""||params["t"],
    displaytitle: true,
    width: "100%",
    height: "100%",
    aspectratio: "16:9",
    fullscreen: "true",
    autostart: params["a"]==1?true:false,
    preload: "none",
    playbackRateControls: [0.5, 1, 1.25, 1.5, 2, 4],
    skin: {
        name: "glow",
    },
    ga: {
        label: "title"
    },
    /*tracks: [{
        file: "",
        kind: "thumbnails"
    }]*/
advertising: {
			      client: "vast",
			      tag: "",
			      skipoffset: 5
			    }
		    };
p.setup(cfg);

setTimeout(function() {
  document.querySelector('div[aria-label="Playback rates"]').style.display = "none";
  var cpr = document.createElement("div");
  cpr.style.display = "inline-block";
  cpr.style.color = "white";
  cpr.style.fontSize = "0.8em";
  cpr.innerHTML = document.querySelector('div[aria-label="Playback rates"] li.jw-active-option').textContent;
  cpr.addEventListener("click", function(){
    var index = -1;
    for (var i=0; i<cfg.playbackRateControls.length; i++) {
      if (p.getPlaybackRate() == cfg.playbackRateControls[i]) {
        break;
      }
    }
    i = (i+1)%cfg.playbackRateControls.length;
    p.setPlaybackRate(cfg.playbackRateControls[i]);
    cpr.innerHTML = (cfg.playbackRateControls[i])+"x";
  });
  var tar = document.querySelector('div[aria-label="Playback rates"]');
  tar.parentNode.insertBefore(cpr, tar);
}, 1000);

p.setVolume(cookie["volume"]||p.getVolume());
p.on("volume", function(e){
    document.cookie = `volume=${p.getVolume()};`;
});
p.setPlaybackRate(parseFloat(cookie["pr"])||p.getPlaybackRate());
p.on("playbackRateChanged", function(e){
    document.cookie = `pr=${p.getPlaybackRate()};`;
});
</script>
<!-- Cloudflare Web Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "3b050856ac81438daae4bfe61f20feb8"}'></script><!-- End Cloudflare Web Analytics -->
<style>
.box_item_ads_popup{position:fixed;z-index:999;left:0;margin:0 auto;text-align:center;right:0;width:500px;height:340px}.box_item_ads_popup img{max-width:350px;max-height:350px}.box_item_ads_popup .close-button{width:30%;margin:auto;padding:6px 10px;background:red;font-size:11px;color:#fff;}
@media only screen and (max-width:980px){.box_item_ads_popup img{max-width:300px;max-height:250px}.box_item_ads_popup{width:450px;height:280px}}
.box_item_ads .ads-460{width:calc(50% - 0px)}.box_item_ads .ads-460 img,.box_item_ads .ads-720 img{height:70px}.box_item_ads,.box_item_ads .ads-460,.box_item_ads .ads-720{margin-bottom:0;margin-top:0}.box_item_ads .ads-720{display:block}.box_item_ads{margin-bottom:5px;display:block}.box_item_ads.box_item_ads_popup img{max-width:460px;max-height:280px}.box_item_ads_popup{width:460px;height:280px}}
@media only screen and (max-width:480px){.box_item_ads_popup img{max-width:280px;max-height:170px}.box_item_ads_popup{width:335px;height:234px}}
@media only screen and (max-width:425px){.box_item_ads_popup img{max-width:250px;max-height:140px}.box_item_ads_popup{width:335px;height:234px}}
@media only screen and (max-width:320px){.box_item_ads_popup img{max-width:210px;max-height:120px}.box_item_ads_popup{width:335px;height:234px}}</style>
<script>$(document).ready(function(){
$('div.close-button').click(function(eve){
    eve.preventDefault();
            $(this).parents('div.box_item_ads_popup').fadeOut('fast');
        });
});</script>
<div class="box_item_ads_popup" style="display: flex;justify-content: center;align-items: center;background: transparent;height: 100%;"><div><a href="mailto:adshuntersekai@gmail.com" target="_blank" rel="nofollow"> <img src="https://desuplayer.pages.dev/pasang-iklan.jpg" rel="nofollow" alt="Anitoki" title="MAIN POKER ONLINE DAPAT VIVO V21 | KDSLOTS"></a><div class="close-button">Close Ads</div></div>
</body>
</html>