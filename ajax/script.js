	$(document).ready(function() {

		function successReviewSent() {
			$("#body").val('');
			$("#name").val('');
			$('.review-success-sent').show();
		}

		$.ajax({
			url: 'ajax/reviews.php',
			cache: false,
			type:"POST",
			dataType: 'html', 
			success:  function(data){
				$('#append-ajax-data').html(data);
			}
		});
 
		$('#ajax-review').submit (function(e) {
			$.ajax({
			url: 'ajax/reviews.php',
			cache: false,
			type:"POST",
			dataType: 'html', 
			data:{ name: $('#name').val(), body: $('#body').val()},
			success:  function(data){
				successReviewSent();
				$('#append-ajax-data').html(data);
			}
		});
			 e.preventDefault();
 
	});
 
});
