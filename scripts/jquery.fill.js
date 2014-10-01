
/*

Fill Image To Container

*/

;(function( $ ) {

	function FillImage(element, options){
		this.element = $(element);
		this.container = this.element.parent();
		this.init();
	}
	
	FillImage.prototype = {
		init:function(args){
			$.window.resize(jQuery.proxy(this, "fill"));
			this.element.imagesLoaded(jQuery.proxy(this, "fill"));
			this.fill();
		},
		
		fill: function(event){
			Utils.maxscreenContainer(this.element, this.container, true);
		}
	}
	
	$.fn.fill = function(options) {
		
		return this.each(function() {
      		var fillImage = new FillImage(this, options);
    	});

	};
	
})( jQuery );// JavaScript Document