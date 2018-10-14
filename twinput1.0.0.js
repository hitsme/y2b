(function($){
	var isIE;
	$.fn.tw_input_placeholder = function(option){
		isIE = (navigator.appName == 'Microsoft Internet Explorer');
		var opt = $.extend({
			speed: 100,
			delay: 1000,
			keywords: ['keywords'],
		}, (option||{}));
		if(typeof opt.keywords=='string'){
			opt.keywords = [opt.keywords];
		}
		return this.each(function(){
			var input = $(this);
			var input_element = input.get(0);
			var keywordsx, inputx, keywords;
			//var input = input;
			function st(){
				keywordsx = inputx = 0;
				keywords = opt.keywords[keywordsx];
				input.show();
				tw();
			}
			input.focus(function(){
				if(!isIE){
				$(input).attr("placeholder",'');
				}else{
					input.val("")
				}
				var ti = $.data(input_element, 'tw_input');
				if(ti){
					clearTimeout(ti);
					$.data(input_element, 'tw_input', false);
				}else{
					$(this).select();
				}
			});
			input.blur(function(){
				if(input.val()==''){st();}
			});
			function tw(){
				if(!isIE){
					$(input).attr("placeholder",keywords.substring(0, inputx++)+'|');
				}else{
					input.val(keywords.substring(0, inputx++)+'|');
				}
				if(inputx > keywords.length){
					$.data(input_element, 'tw_input', setTimeout(function(){
						if(++keywordsx >= opt.keywords.length){keywordsx=0;}
						keywords = opt.keywords[keywordsx];
						inputx = 0;
						tw();
					}, opt.delay));
				}else{
					$.data(input_element, 'tw_input', setTimeout(tw, opt.speed));
				}
			}
			if(!input.val()){st();}
		});
	}
})(jQuery);
