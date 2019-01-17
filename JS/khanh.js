$(function() {
	$('.dangky').click(function(event) {
		/* Act on the event */
		$(this).toggleClass('daonguoc');
		$(this).next().slideToggle();
	});

});
$('.slide .control a').click(function()
{
	var id= $(this).attr('data-id');
	var margin_left=-870*(id-1);
	$ (' .slide .list-img .wrap').css('margin-left',margin_left+'px');
})
;

$(document).ready(function(){
	$('.chodeformdangki').slideUp();
	var stt=0;
	$("img .slide").each(function(){
		if($(this).is(':visible'))
			stt=$(this).attr("stt");
	});
	$("#next").click(function()
	{
		next= ++stt;
		$(" img .slide").hide();
		$(" img .slide").eq(next).show();
	});
});

//from chạy
$(function() {
	$('.people-inner').click(function(event) {
		/* Act on the event */
		$(this).toggleClass('daonguoc');
		$(this).next().slideToggle();
	});

});
$(document).ready(function(){
	$('.extras').slideUp();
	var stt=0;
	$("img .slide").each(function(){
		if($(this).is(':visible'))
			stt=$(this).attr("stt");
	});
	$("#next").click(function()
	{
		next= ++stt;
		$(" img .slide").hide();
		$(" img .slide").eq(next).show();
	});
});
//hết form chạy
// more
$(function() {
	$('.more').click(function(event) {
		/* Act on the event */
		$(this).toggleClass('daonguoc');
		$(this).next().slideToggle();
	});

});
$(document).ready(function(){
	$('.formdebook').slideUp();
	var stt=0;
	$("img .slide").each(function(){
		if($(this).is(':visible'))
			stt=$(this).attr("stt");
	});
	$("#next").click(function()
	{
		next= ++stt;
		$(" img .slide").hide();
		$(" img .slide").eq(next).show();
	});
});
// end more
// dịch chuyển form
$(window).scroll(function () {
    if ($(window).scrollTop() >= 611) {
        $('.widgets').addClass('fixed');
    } 
    if ($(window).scrollTop() >= 2700) {
        $('.widgets').removeClass('fixed');
    }
     if ($(window).scrollTop() < 611) {
        $('.widgets').removeClass('fixed');
    }
});
// end dịch chuyển
// chọn ngày
$(function() {

	$('input[name="datetimes"]').daterangepicker({
		singleDatePicker: true,
		opens:'left',
		"autoApply": true,
		startDate: moment().startOf('hour'),
		endDate: moment().startOf('hour').add(32, 'hour'),
		locale: {
			format: 'M/DD/YYYY'
		}
	});
});
// end chọn ngày


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
	$('.people-inner').click(function(){
				var t = $(this);
				t.parent().find('.formdebook').slideToggle();
			});
	// check
	// $('.check-icon').each(function())
	// {
	// 	var parent = $(this);
	// 	$('.dangky', parent).click(function()
	// 	{
	// 		var t= $(this);
	// 		parent.toggleClass('open');
	// 		if (parent.hasClass('open'))
	// 		{
	// 			$('.more').click(function(){
	// 			var t = $(this);
	// 			t.parent().find('.formdebook').slideToggle();
	// 		});
	// 		}
	// 	});
	// });
	// end
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


$(document).ready(function(){
      $('.menu1').click(function(){
      $('nav').toggleClass('open'); 
      });
      $('.fa.fa-angle-left').click(function(){
    //      var t = $(this);

        // t.parent().find('ul').next().slideToggle();
      $('nav').removeClass('open'); });
    })

// chọn ngày theo từng bên
$(function() {

	$('input[name="startday"]').daterangepicker({
		singleDatePicker: true,
		opens:'left',
		"autoApply": true,
		startDate: moment().startOf('hour'),
		endDate: moment().startOf('hour').add(32, 'hour'),
		locale: {
			format: 'M/DD/YYYY'
		}
	});
});
$(function() {

	$('input[name="endday"]').daterangepicker({
		singleDatePicker: true,
		opens:'left',
		"autoApply": true,
		startDate: moment().startOf('hour'),
		endDate: moment().startOf('hour').add(32, 'hour'),
		locale: {
			format: 'M/DD/YYYY'
		}
	});
});