<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex>
{maccms:vod num="50000" paging="yes" order="desc" by="time"}
<sitemap>
<loc>https://{$maccms.site_url}{:mac_url_vod_detail($vo)}</loc>
<lastmod>{$vo.vod_time|date='Y-m-d',###}</lastmod>
</sitemap>
{/maccms:vod}
</sitemapindex>