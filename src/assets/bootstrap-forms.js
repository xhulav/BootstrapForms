$(function(){

// FILE INPUT
	// show file input dialog
	$('.btn-uploader').on('click', function() {
		var id = '#' + $(this).attr('id');
		$(id.substring(0, id.length - 3)).trigger('click');
	});

	// show filename as button label
	$('input.attached-to-button').on('change', function(){
		var id = '#' + $(this).attr('id') + 'Btn';
		var files = $(this).prop('files');
		var filename = '';
		for (var i = 0; i < files.length; i++) {
			filename += files[i]['name'];
			if (filename.length > 25) {
				filename = filename.substring(0, 24).trim() + '...';
				break;
			}
			if (i + 1 < files.length) {		// do not add delimiter after last file
				filename += ', ';
			}
		}

		if ($(id).is('input')) {
			$(id).val(filename);
		} else {
			$(id).html(filename);
		}

		if(files.length > 0) {
			var file = files[0];



		}
	});

});

