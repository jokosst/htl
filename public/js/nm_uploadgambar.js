function previewImage(img){
	var src = img.getAttribute('src');
	var height = screen.height;

	var image = ['<div id="imgTop"><img ', ' src="', src, '"', 'width="50%"></div>'].join('');

	$('#previewImage').css('height',height);
	$('#imageTop').html(image);
	$('#previewImage').show();
	$('#imageTop').show();
}

function previewGambar(evt){
	var files = evt.target.files;
	document.getElementById('list').innerHTML = "";

	$.each(files, function(key, value){
		var reader = new FileReader();


		reader.onload = (function(theFile){
			return function(e){
				var span = document.createElement('span');
				span.innerHTML = ['<div class="blockPreview">','<img onclick="previewImage(this)" class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '" width="100%"/>', "</div>"].join('');
				document.getElementById('list').insertBefore(span, null);
        	};
		})(value);

		reader.readAsDataURL(value);
	});
}

$('#inputLampiran').change(function(evt){
	previewGambar(evt);	
});

$('#previewImage').click(function(){
	$('#previewImage').hide();
	$('#imageTop').hide();
});