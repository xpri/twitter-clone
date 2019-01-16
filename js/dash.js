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

				if(result == "ok"){
					location.reload();
				}
			}
		});

	});


	$('.delete-btn').click(function(){

		var postid = $(this).attr("postid");

		console.log(postid);

		$.ajax({
			type: 'POST',
			url: "../post/delete.php",
			data: {postid: postid},
			success: function(result) {
				// if success use the variable result to console log
				console.log(result);

				if(result == "ok"){
					location.reload();
				}
			}
		});

	});

	$('.likeBtn').click(function(){

		var postid = $(this).attr("postid");

		var likeBtn = $(this);

		console.log(postid);

		$.ajax({
			type: 'POST',
			url: "../like/like.do.php",
			data: {postid: postid},
			success: function(result) {
				// if success use the variable result to console log
				console.log(result);

				if(result == "like"){
					likeBtn.removeClass("btn-primary").addClass("btn-warning").empty().append("Unlike");
				}
				else if(result == "unlike"){
					likeBtn.removeClass("btn-warning").addClass("btn-primary").empty().append("Like");	
				}
			}
		});

	});

});