// JavaScript Document for Vintageo

//Countdown
$(function () {
	jQuery('#defaultCountdown').countdown({
	until: new Date(2012, 6 - 1, 26, 0, 0, 0), 
	format: 'DHMS',
	layout: '<div id="vals">'+
				                '<div id="d" class="numbers">{dnn}</div>'+
								'<div id="h_name" class="numbers">days </div>'+
								'<div id="h" class="numbers">{hnn}</div>'+
								'<div id="h_name" class="numbers">hours </div>'+
								'<div id="m" class="numbers">{mnn}</div>'+
								'<div id="m_name" class="numbers">minutes</div>'+
								'<div id="s" class="numbers">{snn}</div>'+
								'<div id="s_name" class="numbers">seconds</div>'+
							    '</div>'
});
});

$(document).ready(function() {	
//Subscribe form
$(function() {
		var v = $("#subform").validate({
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					target: "#result_sub",
					clearForm: true
				});
			}
		});
		
});
});