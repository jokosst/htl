var scan_doc = {
	base_url: 'http://localhost/cmdtwain/',
	image_base_url: 'http://localhost/cmdtwain/scanned_doc/',
	image_index: 0,
	image_index_order: [],
	image_scanned_data: []
};

var file_name = new Array;

var scan_document = [];

var scan_button = document.getElementById('scan');
var upload_button = document.getElementById('submit_button');

scan_button.addEventListener('click', function(){
	event.preventDefault();
	console.log(scan_button);

	if (false){
		$.ajax({
			type: 'post',
			url: 'http://localhost/cmdtwain/scan_doc.php?callback=?',
			dataType: 'jsonp',
			success:function(data){
				console.log(data);
				file_name[i] = data.file_name;
				i++;

				var image = '<img src="http://localhost/cmdtwain/scanned_doc/'+data.file_name+'" style="cursor: pointer;" width="200px" onclick="show_big_image(this)" onmouseover="show_edit_menu(this)"></img>';
				var image_nav_item = '<img src="http://localhost/cmdtwain/scanned_doc/'+data.file_name+'" class="image_nav_item"></img>';
				
				imageUrl = scan_doc.base_url +'scanned_doc/'+ data.file_name;

				var hidden_input = '<input type="hidden" name="scanned_img[]" value="'+data.base64image+'">';
			    $('#image_load').append(hidden_input);
			    $('#image_load').append(image);
			    $('#image_nav').append();
			},
			error:function(){
				console.log("error");
			}
		});
	}

		$.ajax({
			type: 'post',
			url: scan_doc.base_url + 'scan_doc.php?callback=?',
			dataType: 'jsonp',
			success: function(data) {
				var onclick = 'onclick="show_big_image(this)"',
					delete_image = '<div><span class="delete_image" onclick="delete_image(' + scan_doc.image_index + ')">Hapus</span></div>',
					li_id = 'id="image_' + scan_doc.image_index + '"';

				var image_arr = ['<li image-index="', scan_doc.image_index, '"', li_id, '>', delete_image,'<img src="', scan_doc.image_base_url, data.file_name, '" class="image_show" ', onclick, '>', '</img>', '</li>'];
				var image = image_arr.join("");

				scan_doc.image_scanned_data[scan_doc.image_index] = data.base64image;

			    $('#sortable_image_item').append(image);
				
				var hidden_input = '<input type="hidden" id="scanned_img_' + scan_doc.image_index + '" name="scanned_img[' + scan_doc.image_index + ']" value="'+data.base64image+'">';
			    $('#image_load').append(hidden_input);

				scan_doc.image_index += 1;
			},
			error: function() {
				console.log("error");
			}
		}).error(function(err) {
				console.log(err);
			});

}, false);

upload_button.addEventListener('click', function(){
	if (confirm("Anda yakin akan mengirim data?")){
		$.ajax({
			type: 'post',
			dataType: 'jsonp',
			url: scan_doc.base_url + 'delete.php?callback=?'
		});

		//jika edit surat maka dicek apakah
		var is_edit = $('#is_edit').attr('value');
		var simpan_data = 1;

		if (is_edit === "true"){
			var nomor_agenda = $('#nomor_agenda').val();
			var kode = $('#kode_surat').val();

			$.ajax({
				async: false,
				type: 'post',
				url: 'index.php?handlingfile=cek_nomor_agenda',
				data: {nomor_agenda: nomor_agenda, kode: kode},
				dataType: 'json',
				success: function(data) {
					if (data.surat == 0){
						simpan_data = 1;
					} else {
						simpan_data = 0;
					}
				},
				error: function(data) {
					console.log('error');
				}
			}).error(function(err) {
			console.log(err);
		});
		}

		scan_doc.image_index_order = after_sort_fin();
		$('#urutan_gambar').val(scan_doc.image_index_order);
		
		console.log('simpan_data : ' + simpan_data);
		if (simpan_data) {
			$('#form_arsip_surat').submit();	
		} else {
			alert("Maaf Nomor Agenda yang Anda masukkan telah terpakai!");
		}
	}
}, false);

function show_big_image(event){
	$('#big_image').show('fast');
	var close_button = '<div id="big_image_close" onclick="close_big_image()">[X] Close</div>';
	var img_src= $(event).attr('src');
	var img = '<img src="'+img_src+'" width="60%" style="margin-left:20%;"></img>';
	$('#big_image').html(close_button + img);
}

function close_big_image(){
	$('#big_image').hide();
}

function delete_image(image_index){
	if (confirm('Anda yakin menghapus lampiran berikut?')){
		console.log('hapus');
		var id = '#image_' + image_index;
		$(id).remove();
		console.log($(id));
		scan_doc.image_scanned_data[image_index] = '';
	}	
}