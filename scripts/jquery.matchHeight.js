
/*

Match Height plugin
Forces a matched height of selector elements within parent

*/

;(function( $ ) {

	function MatchHeights(element, settings){
		this.element = $(element);
		
		this.defaults = {
			minHeight: 200,
			maxHeight: 10000,
			selector: ".col",
			matchFirstElement: false
		};

		
		this.options = $.extend(this.defaults, settings);
		
		this.init();
	}
	
	MatchHeights.prototype = {
		init:function(args){
			
			this.elements = $(this.options.selector, this.element);
			this.total = this.elements.length;
			
			$.window.resize(jQuery.proxy(this, "correctHeights"));
			this.correctHeights();
		},
		
		correctHeights: function(event){
			this.elements.css({height: "auto"});
			this.newHeight = 0;
			for(var i = 0; i<this.total; i++){
				var _ht = this.elements.eq(i).outerHeight();
				trace(_ht + " :: ")
				if(_ht > this.newHeight){
					this.newHeight = Math.max(_ht, this.options.minHeight);
					
				}
				if(this.options.matchFirstElement && i == 0) break;
			}
			this.elements.height(this.newHeight);
		}
	}
	
	$.fn.matchHeight = function(settings) {
		return this.each(function() {
      		var matchHeights = new MatchHeights(this, settings);
    	});

	};
	
})( jQuery );// JavaScript Document