$(function() {
	$('.dangky').click(function(event) {
		/* Act on the event */
		$(this).toggleClass('daonguoc');
		$(this).next().slideToggle();
		// $(this).children().css( "transform", "rotate(180deg)");
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

// date
$(function() {

	$('input[name="datetimes"]').daterangepicker({
		opens:'left',
		"autoApply": true,
		startDate: moment().startOf('hour'),
		endDate: moment().startOf('hour').add(32, 'hour'),
		locale: {
			format: 'M/DD/YYYY'
		}
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