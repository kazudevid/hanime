<?php
include('./php/info.php');

header('Content-type: application/xml');

echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";  ?>
<url>
<loc>https://<?=$_SERVER['SERVER_NAME']?>/</loc>
<changefreq>hourly</changefreq>
<priority>1.0</priority>
</url>
<url>
<loc>https://<?=$_SERVER['SERVER_NAME']?>/home</loc>
<changefreq>hourly</changefreq>
<priority>1.0</priority>
</url>
<url>
<loc>https://<?=$_SERVER['SERVER_NAME']?>/trending</loc>
<changefreq>hourly</changefreq>
<priority>1.0</priority>
</url>
</urlset>