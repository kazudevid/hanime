<?php
include('./php/info.php');

header('Content-type: application/xml');

echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";

$json = file_get_contents("$api/getLanding/trending");
$brand = json_decode($json, true);
$brand = $brand["results"];
foreach($brand as $recentRelease) 
{  
    echo "<url>";
    echo "<loc>https://{$_SERVER['SERVER_NAME']}/video/".$recentRelease['slug']."</loc>";
    echo "<changefreq>hourly</changefreq>";
    echo "<priority>1.0</priority>";
    echo "</url>";
}

echo "</urlset>";

?>