$(document).ready(function(){

	$('#postBtn').click(function(){

		var tweet = $('#tweet').val();

		console.log(tweet);

		$.ajax({
			type: 'POST',
			url: "../post/post.do.php",
			data: {tweet: tweet},
			success: function(result) {
				// if success use the variable result to console log
				console.log(result);
			}
		});

	});

});