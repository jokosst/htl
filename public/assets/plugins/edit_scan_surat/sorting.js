$( function() {
	var image_view_place = $( '#show_sort_image' );
	$( '#sortable_image_item' ).sortable({
		stop: function() {
			scan_doc.image_index_order = after_sort_fin();
			console.log(scan_doc.image_index_order);
		}
	});
	
	$( '#sortable_image_item' ).disableSelection(); 
});

function after_sort_fin() {
	var items = $( '#sortable_image_item' ).children(),
		length = items.length,
		image_index_order = [];

	for (var i = 0; i < length; i += 1) {
		image_index_order[i] = $(items[i]).attr('image-index');
	}

	return image_index_order;
}

function change_image_place(image_url, target) {
	var content = '<img src="' + image_url + '" class="image_show_item"></img>';
	target.html(content);
}