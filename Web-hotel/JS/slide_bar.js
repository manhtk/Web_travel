jQuery(document).ready(function($){
	/* People minus-add */
	$('.gmz-number-wrapper').each(function () {
		var timeOut = 0;
		var t = $(this);
		var input = t.find('input');
		var min = input.data('min');
		var max = input.data('max');

		        //Change room value
		        $('input[name="number_room"]', t).change(function () {
		        	var rooms = parseInt($(this).val());
		        	var html   = rooms;
		        	if (typeof rooms == 'number') {
		        		if (rooms < 2) {
		        			html = rooms + ' Room';
		        		} else {
		        			html = rooms + ' Rooms';
		        		}
		        	}
		        	$('.people-inner .room').html(html);
		        });

		        $('input[name="number_room"]', t).trigger('change');

		        //Change adult value
		        $('input[name="number_adult"]', t).change(function () {
		        	var adults = parseInt($(this).val());
		        	var html   = adults;
		        	if (typeof adults == 'number') {
		        		if (adults < 2) {
		        			html = adults + ' Adult';
		        		} else {
		        			html = adults + ' Adults';
		        		}
		        	}
		        	$('.people-inner .adult').html(html);
		        });

		        $('input[name="number_adult"]', t).trigger('change');

		        //Change adult value
		        $('input[name="number_child"]', t).change(function () {
		        	var childs = parseInt($(this).val());
		        	var html   = childs;
		        	if (typeof childs == 'number') {
		        		if (childs < 2) {
		        			html = childs + ' Children';
		        		} else {
		        			html = childs + ' Childrens';
		        		}
		        	}
		        	$('.people-inner .child').html(html);
		        });

		        $('input[name="number_child"]', t).trigger('change');


		        t.find('.control').on("click", function() {

		        	var $button = $(this);
		        	numberButtonFunc($button);

		        });

		        t.find('.control').on("mousedown touchstart", function() {
		        	var $button = $(this);
		        	timeOut = setInterval(function(){
		        		numberButtonFunc($button);
		        	}, 150);
		        }).bind('mouseup mouseleave touchend', function() {
		        	clearInterval(timeOut);
		        });

		        function numberButtonFunc($button){
		        	var oldValue = $button.parent().find(".text input").val();

		        	if ($button.hasClass('add')) {
		        		if (oldValue < max) {
		        			var newVal = parseFloat(oldValue) + 1;
		        		}else{
		        			newVal = max;
		        		}
		        	} else {
		        		if (oldValue > min) {
		        			var newVal = parseFloat(oldValue) - 1;
		        		} else {
		        			newVal = min;
		        		}
		        	}

		        	$button.parent().find(".text input").val(newVal);
		        	$button.parent().find(".text .value").text(newVal);
		        	$('input[name="'+$button.parent().find("input").attr('name')+'"]', '.people-dropdown').trigger('change');
		        }
		    });
	$('.check-like').each(function(){
		    	var parent = $(this);
		    	$('.glyphicon', parent).click(function(){
		    		var t = $(this);
		    		var currentLike = parent.find('.like').text();

		    		parent.toggleClass('open');

		    		if(parent.hasClass('open')){
		    			currentLike++
						parent.find('.like').text(currentLike);
		    		}else{
		    			currentLike--
						parent.find('.like').text(currentLike);
		    		}

		    	});
		    })
});

