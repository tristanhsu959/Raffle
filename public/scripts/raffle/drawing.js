$(function(){
	$('#startDrawingForm .btn-start').click(function(e){
		e.preventDefault();
		
		$(this).addClass('loader');
		$(this).prop('disabled', true);
		startDrawinig();
	});
	
	let templateHtml = $('script[data-template="userProfile"]').html();
	let userData = { name: "John Doe", email: "john.doe@example.com" };

	let $template = $(templateHtml); // Create a jQuery object from the template
	$template.find('.username').text(userData.name);
	$template.find('.user-email').text(userData.email);

	$('body').append($template);
});

function startDrawinig()
{
	var formData = new FormData($('#startDrawingForm')[0]);
	
	$.ajax({
        url: $('#startDrawingForm').attr('action'),
        type: 'POST',
		data: formData,
        processData: false,
		contentType: false, // Essential for FormData, especially with file uploads
        
		success: function(response) {
			if(response.status)
			{
				
			}
			$('#startDrawingForm .btn-start').removeClass('loader');
		},
        error: function(xhr, status, error) {
            console.error('Error:', error);
                // Handle error response
		}
	});
}