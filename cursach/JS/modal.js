$(document).ready(function(){
	$('.basket').click(function() {
		$('#openModal').css('display','block');
		$('#openModal').css('pointer-events','auto');
		$('.modal').css('opacity','1')
	})
	$('#close').click(function() {
		$('#openModal').css('display','none');
		$('#openModal').css('pointer-events','none');
	})
});