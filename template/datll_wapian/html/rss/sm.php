<?xml version="1.0" encoding="UTF-8"?>
<urlset>
{maccms:vod num="50000" paging="yes" order="desc" by="time"}
<url>
<loc>https://{$maccms.site_url}{:mac_url_vod_detail($vo)}</loc>
<lastmod>{$vo.vod_time|date='Y-m-d',###}</lastmod>
<changefreq>always</changefreq>
<priority>0.6</priority>
</url>
{/maccms:vod}
</urlset>