$(function(){
	$('#form_search').submit(function(){
		var site = $('#search_site').val();
		var url = '';
		var keyword = encodeURIComponent ($('#search_keyword').val());
		switch( site )
		{
			case 'baidu':
				url = 'http://www.baidu.com/s?wd=' + keyword;
				break;
			case 'google':
				url = 'http://www.tmd123.com/search/?q=' + keyword;
				break;
			case 'baigoogledu':
				url = 'http://www.baigoogledu.com/s.php?hl=zh-CN&q=' + keyword;
				break;
		}
		window.open(url);
		return false;
	});
	//$('#download_tab a:first').tab('show');
	$('#download_tab a').hover(function (e) { 
        e.preventDefault();//阻止a链接的跳转行为 
        $(this).tab('show');//显示当前选中的链接及关联的content 
    }) 
})