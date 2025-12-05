$(function(){
	//Initial
	$('.winner-list').html('');
	$('#startDrawingForm .btn-start').click(function(e){
		e.preventDefault();
		
		$(this).addClass('loader');
		$(this).prop('disabled', true);
		startDrawinig();
	});
});

function startDrawinig()
{
	let formData = new FormData($('#startDrawingForm')[0]);
	
	$.ajax({
        url: $('#startDrawingForm').attr('action'),
        type: 'POST',
		data: formData,
        processData: false,
		contentType: false, // Essential for FormData, especially with file uploads
        
		success: function(response) {
			
			if(response.status)
			{	
				$.each(response.data, function(key, winner){
					let duration = parseFloat(key/2.5);
					let winnerTemplate = `
						<li class="winner active" style="animation-delay: ${duration}s;">
							<div class="department">${winner.Department}</div>
							<div class="info">
								<span class="id-num">${winner.EmployeeNo}</span>
								<span class="name">${winner.Name}</span>
							</div>
						</li>`;
					
					let offset = $('.winner-list').find('.winner').last().offset();
					let pos = (offset && key >= 6) ? offset.top : 0;
					
					$('html, body').animate({ scrollTop:pos}, 'slow', function(winnerTemplate){
						$('.winner-list').append(winnerTemplate);
					});
			
					$('.winner-list').append(winnerTemplate);
					$('.actionbar .right .quantity .winner-count').text(parseInt(key) + 1);
				});
			}
			else
				console.error(response.msg);
			
			$('#startDrawingForm .btn-start').removeClass('loader').hide();
			$('.btn-viewer').addClass('active');
		},
        error: function(xhr, status, error) {
            console.error('Error:', error);
		}
	});
}