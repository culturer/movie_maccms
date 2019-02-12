<div class="foornav" style="padding: 5px 0;">
    <div class="swiper-wrapper">
        <a href="/"  class="menu-itema swiper-slide"><span><img src="{$maccms.path_tpl}images/index.png"/>首页</span></a>
        {maccms:type ids="parent" order="asc" by="sort" mid="1" }
        <a href="{:mac_url_type($vo)}" class="swiper-slide" ><span><img src="{$maccms.path_tpl}images/video.png"/>{$vo.type_name}</span></a>
        {/maccms:type}
    </div>
</div>

<footer class="footer">
<div class="branding branding-black">
	<div class="container" style="text-align: center;">
		<h2> {$maccms.site_name}- 海量高清VIP视频免费观看       如有想看的视频没有的可联系我添加</h2>
						<a target="blank" class="gobtn" href="/">联系站长</a>	
			</div>
</div>
<p style="padding: 0 4px;">免责声明:本站所有视频均来自互联网收集而来，版权归原创者所有，如果侵犯了你的权益，请通知我们，我们会及时删除侵权内容，谢谢合作！<br/>&copy; 2017 - <?= date('Y', time()) ?> <a href="/">{$maccms.site_name}</a>&nbsp; <a href="https://www.miitbeian.gov.cn">{$maccms.site_icp}</a><br/></p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.foornav', {
        slidesPerView: 6,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
