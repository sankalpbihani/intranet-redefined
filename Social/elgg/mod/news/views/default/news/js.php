elgg.provide('elgg.news');

elgg.news.init = function() {

  $('.elgg-menu-item-entitymenu-news').each( function(index) {
	var dropdown = $(this).children('ul.elgg-menu').eq(0);
	var width = $(this).width();
	var offset = dropdown.width() - width;
	
	if (offset > 0) {
	  dropdown.css('marginLeft', '-'+offset+'px');
	}
	
  });
  
  $(document).ajaxComplete( function() {
	elgg.news.init();
  });
  
}

elgg.register_hook_handler('init', 'system', elgg.news.init);