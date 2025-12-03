$(function(){
	$('#startDrawingForm .btn-start').click(function(e){
		e.preventDefault();
		
		$(this).prop('disabled', true);
		$(this).addClass('loader');
		startDrawinig();
	});
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