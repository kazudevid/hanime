<?php
header('Content-type: application/xml');

echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<sitemapindex xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";
?>
<sitemap>
    <loc>https://<?=$_SERVER['SERVER_NAME']?>/all-anime.xml.gz</loc>
  </sitemap>
  <sitemap>
    <loc>https://<?=$_SERVER['SERVER_NAME']?>/sitemap-misc.xml</loc>
  </sitemap>
    <sitemap>
    <loc>https://<?=$_SERVER['SERVER_NAME']?>/recent-sitemap.xml</loc>
  </sitemap>
  <sitemap>
    <loc>https://<?=$_SERVER['SERVER_NAME']?>/video-sitemap.xml</loc>
  </sitemap>
  <sitemap>
    <loc>https://<?=$_SERVER['SERVER_NAME']?>/newest-sitemap.xml</loc>
  </sitemap>
</sitemapindex>