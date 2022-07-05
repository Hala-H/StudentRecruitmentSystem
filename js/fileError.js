// JavaScript Document

$(document).ready(function () {
	$('#submit').click(function () {
			if($('#file')[0].files.length === 0)
			{
				// eslint-disable-next-line no-console
				console.log('Import unsuccessful!');
				alert('Import unsuccessful!');
			}
	});
});
