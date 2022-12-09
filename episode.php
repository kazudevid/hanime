<?php
require_once('./php/info.php');
$parts = parse_url($_SERVER['REQUEST_URI']);
$page_url = explode('/', $parts['path']);
$url = $page_url[count($page_url)-1];
//$url = "lr-episode-1-sub-indo";

$getAnime = file_get_contents("$api/getVideo?id=$url");
$getAnime = json_decode($getAnime, true);
$title = $getAnime['title'];
$stream_link = $getAnime['streams'];
$poster_url = $getAnime['poster_url'];
$live3 = $getAnime ['streams']['3']['url'];
$apiplayer = $getAnime ['streams']['2']['url'];
$live1 = $getAnime ['streams']['1']['url'];
?>
<?php
require('./php/info.php');
?>
<!DOCTYPE html>
<html lang=en-US>
   <head data-cast-api-enabled="true">
  <meta charset=utf-8>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="referrer" content="no-referrer">
  <title><?php echo $title ?> Subtitle English | <?=$webName ?></title>
<meta property="og:title" content="<?php echo $title ?> Subtitle English | <?=$webName ?>" />
<meta name="description" content="Watch <?php echo $title ?> stream online in 720p or 1080p HD! Download uncensored hentai with English sub ready for mobile and tablet." />
<meta property="og:locale" content="en_US" />
<meta name="keywords" content="<?php echo $title ?> Subtitle English, download  <?php echo $title ?> Subtitle English, unduh  <?php echo $title ?> Subtitle English, streaming  <?php echo $title ?> Subtitle English, nonton  <?php echo $title ?> Subtitle English, anime  <?php echo $title ?> Subtitle English, download anime  <?php echo $title ?> Subtitle English, unduh anime  <?php echo $title ?> Subtitle English, streaming anime  <?php echo $title ?> Subtitle English, nonton anime  <?php echo $title ?> Subtitle English,  <?php echo $title ?> sub eng, download  <?php echo $title ?> sub eng, unduh  <?php echo $title ?> sub eng, streaming  <?php echo $title ?> sub eng, nonton  <?php echo $title ?> sub eng, anime  <?php echo $title ?> sub eng, download anime  <?php echo $title ?> sub eng, unduh anime  <?php echo $title ?> sub eng, streaming anime  <?php echo $title ?> sub eng, nonton anime  <?php echo $title ?> sub eng,  <?php echo $title ?> <?php echo $title ?> takarir english, download  <?php echo $title ?> <?php echo $title ?> takarir english, unduh  <?php echo $title ?> <?php echo $title ?> takarir english, streaming  <?php echo $title ?> <?php echo $title ?> takarir english, nonton  <?php echo $title ?> <?php echo $title ?> takarir english, anime  <?php echo $title ?> <?php echo $title ?> takarir english, download anime  <?php echo $title ?> <?php echo $title ?> takarir english, unduh anime  <?php echo $title ?> <?php echo $title ?> takarir english, streaming anime  <?php echo $title ?> <?php echo $title ?> takarir english, nonton anime  <?php echo $title ?> <?php echo $title ?> takarir english,  <?php echo $title ?> <?php echo $title ?> takarir english, download  <?php echo $title ?> <?php echo $title ?> takarir english, unduh  <?php echo $title ?> <?php echo $title ?> takarir english, streaming  <?php echo $title ?> <?php echo $title ?> takarir english, nonton  <?php echo $title ?> <?php echo $title ?> takarir english, anime  <?php echo $title ?> <?php echo $title ?> takarir english, download anime  <?php echo $title ?> <?php echo $title ?> takarir english, unduh anime  <?php echo $title ?> <?php echo $title ?> takarir english, streaming anime  <?php echo $title ?> <?php echo $title ?> takarir english, nonton anime  <?php echo $title ?> <?php echo $title ?> takarir english,  <?php echo $title ?> <?php echo $title ?> subtitle english, download  <?php echo $title ?> <?php echo $title ?> subtitle english, unduh  <?php echo $title ?> <?php echo $title ?> subtitle english, streaming  <?php echo $title ?> <?php echo $title ?> subtitle english, nonton  <?php echo $title ?> <?php echo $title ?> subtitle english, anime  <?php echo $title ?> <?php echo $title ?> subtitle english, download anime  <?php echo $title ?> <?php echo $title ?> subtitle english, unduh anime  <?php echo $title ?> <?php echo $title ?> subtitle english, streaming anime  <?php echo $title ?> <?php echo $title ?> subtitle english, nonton anime  <?php echo $title ?> <?php echo $title ?> subtitle english">
<meta name="robots" content="index, follow">
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $title ?> Subtitle English | <?=$webName ?>" />
<meta property="og:description" content="Watch <?php echo $title ?> stream online in 720p or 1080p HD! Download uncensored hentai with English sub ready for mobile and tablet." />
<meta property="og:url" content="<?=$webUrl ?>/video/<?=$url ?>" />
<meta property="og:image" content="<?=$poster_url ?>" />
<meta property="og:site_name" content="<?=$webDomain ?>" />
<meta property="og:image:alt" content="<?php echo $title ?> Subtitle English | <?=$webName ?>" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?=$webUrl ?>/video/<?=$url ?>">
<meta property="og:title" content="<?php echo $title ?> Subtitle English | <?=$webName ?>">
<meta property="og:description" content="Watch <?php echo $title ?> stream online in 720p or 1080p HD! Download uncensored hentai with English sub ready for mobile and tablet.">
<meta property="og:image" content="<?=$poster_url ?>">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?=$webUrl ?>/video/<?=$url ?>">
<meta property="twitter:title" content="<?php echo $title ?> Subtitle English | <?=$webName ?>">
<meta property="twitter:description" content="Watch <?php echo $title ?> stream online in 720p or 1080p HD! Download uncensored hentai with English sub ready for mobile and tablet.">
<meta property="twitter:image" content="<?=$poster_url ?>">
  <meta name="google-site-verification" content="<?=$google ?>" />
  <meta name="msvalidate.01" content="<?=$bing ?>" />
<meta name="yandex-verification" content="<?=$yandex ?>" />
<link rel="icon" href="<?=$webUrl ?>/assets/img/favicon.png">
<link rel="icon" href="<?=$webUrl ?>/assets/img/favicon.png" rel=icon sizes="32x32" sizes="32x32" />
<link rel="icon" href="<?=$webUrl ?>/assets/img/favicon.png" rel=icon sizes="32x32" sizes="192x192" />
<link rel="apple-touch-icon" href="<?=$webUrl ?>/assets/img/favicon.png" rel=icon sizes="32x32" />
<meta name="msapplication-TileImage" content="<?=$webUrl ?>/assets/img/favicon.png" rel=icon sizes="32x32" />
  <link rel=stylesheet href="https://use.fontawesome.com/releases/v6.1.0/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.0/css/v4-shims.css">
  <link rel="stylesheet" href="<?=$webUrl ?>/jstyle.css">
  <link rel="stylesheet" href="<?=$webUrl ?>/doujin.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="<?=$webUrl ?>/files/js/site.js"></script>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?=$googletag ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?=$googletag ?>');
</script>
</head>
<body>
  <header>
    <h1 id="logo"><a href="<?=$webUrl ?>/home" title="<?=$webName ?>"><img src="<?=$webUrl ?>/assets/img/desunime.png" alt="<?=$webName ?>"></a></h1>
    <nav aria-label="Primary">
      <ul id="primary-menu" class="menu">
        <li class="item nav-item current-menu-item "><a href="<?=$webUrl ?>/home" aria-current="page"><i class="fa fa-home"></i><span>Home</span></a></li><li class="item nav-item "><a href="<?=$webUrl ?>/trending"><i class="fa fa-refresh"></i><span>Trending</span></a></li><li class="item nav-item "><a href="/popular/"><i class="fa fa-star"></i><span>Popular</span></a></li><li class="item nav-item "><a href="<?=$webUrl ?>/genre/"><i class="fa fa-tags"></i><span>Genres</span></a></li>
      </ul>
      <ul>
        <li>
          <a class="login" href="/login/"><i class="fa fa-sign-in-alt"></i> Sign in</a>
        </li>
        <li>
          <a class="register" href="/register/"><i class="fa fa-edit"></i> Register</a>
        </li>
      </ul>
    </nav>
    <div>
      <button type="button" aria-label="Show menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </button>
      <form action="/search/" method="get">
        <input type="text" name="keyword" placeholder="Find anime here..." autocomplete="off" />
      <button type="submit" aria-label="Search">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
      </button>
    </form>
  </div>
</header>
</section>
<div class="row">
  <main id="archive">
    <div class="wrapper">
      <div class="video-content">
        <div id="overplay" style="display: none;">
          <div class="chain" align="center">
          </div>
        </div>
        <div id="embed_holder" class="lowvid"><div class="player-embed" id="mzd-player">
<iframe src='/player?v=<?=$apiplayer ?>&image=<?=$poster_url ?>' frameborder='0' allowfullscreen width='100%' height='526'></iframe>
</div>
</div></div>
      <?php
      require_once('./php/info.php');
      $parts = parse_url($_SERVER['REQUEST_URI']);
      $page_url = explode('/', $parts['path']);
      $url = $page_url[count($page_url)-1];
      //$url = "lr-episode-1-sub-indo";

      $getInfo = file_get_contents("$api/getInfo?id=$url");
      $getInfo = json_decode($getInfo, true);
      $poster = $getInfo['poster'];
      $description = $getInfo['description'];
      $brand = $getInfo['info']['brand'];
      $links = $getInfo['slug'];
      $released = $getInfo['info']['released_date'];
      $uploaded_date = $getInfo['info']['uploaded_date'];
      $views = $getInfo['views'];
      ?>
      <aside>
        <figure class="thumbnail">
          <a class="permalink" href="/video/<?=$links ?>">
            <img alt="Thumbnail for <?=$title ?>" title="<?=$title ?>" src="<?php echo $poster ?>" loading="lazy">
          </a>
          <div class="favorite" id="Favorite">
            <span title="Add to Favorite">
              <span class="favorites"><i class="fico fa fa-heart" aria-hidden="true"></i> Add Favorite</span>
            </div>
          </figure>
        </aside>
        <section class="metadata">
          <h1 class="title"><?=$title ?></h1>
          <table>
            <tbody>
              <tr class="magazines">
                <td><i class="fa fa-flag"></i> Country</td>
                <td>
                  <span>Japan</span>
                </td>
              </tr>
              <tr class="parodies">
                <td><i class="fa fa-user"></i> Director</td>
                <td>
                  <span><?php echo $brand ?></span>
                </td>
              </tr>
              <tr class="pages">
                <td><i class="fa fa-calendar"></i> Released</td>
                <td>
                  <?php echo $released ?></td>
              </tr>
              <tr class="pages">
                <td><i class="fa fa-eye"></i> View</td>
                <td><?php echo $views ?></td>
              </tr>
              <tr class="created createdAt">
                <td><i class="fa fa-calendar"></i> Upload Date</td>
                <td data-unix="1668310626"><?php echo $uploaded_date ?></td>
              </tr>
            </tbody>
          </table>
          <div class="tags">
            <?php foreach ($getInfo['tags'] as $genre) {
              ?><a href="/genre/<?=$genre ?>/<?=$genre ?>" title="<?=$genre ?>" rel="tag"> <i class="fa fa-folder"></i> <?=$genre?><?php
              } ?></a>
          </div>
          <div class="pb-2">
            <p>
              <strong>Description:</strong><br><?php echo $description ?></p>
              </div>
        </section>
      </div>
      <section class="feed related" id="archives">
        <header>
          <h3 class="widget-title">You May Also Like:</h3>
        </header>
        <div class="entries">
          <?php
          $json = file_get_contents("$api/getLanding/trending");
          $brand = json_decode($json, true);
          $brand = $brand["results"];
          ?>
          <?php foreach ($brand as $recentRelease) :
          ?>
          <article class='entry' data-tags='<?=$recentRelease ["name"] ?>'>
            <a href='/video/<?=$recentRelease ["slug"] ?>' title='<?=$recentRelease ["name"] ?>'>
              <figure class='thumbnail'>
                <div class='ply'>
                  <i class='fa fa-play'></i>
                </div>
                <img alt='<?=$recentRelease ["name"] ?>' title='<?=$recentRelease ["name"] ?>' src='<?=$recentRelease ["cover_url"] ?>' loading='lazy' />
              <span class='type'><i class='fa fa-eye'></i> <?=$recentRelease ["views"] ?></span>
            </figure>
            <div class='metadata'>
              <h3 class='title'>
                <span><?=$recentRelease ["name"] ?></span>
              </h3>
            </a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<?php
require('./foot.php');
?>