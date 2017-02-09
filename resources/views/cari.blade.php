 @foreach($hasil as $data)
	<tr>
	  <td>{{ $data-> nomor}}</td>
	  <td>{{ $data-> tentang}}</td>
	  <td>{{ $data-> katagori}}</td>
	  <td>{{ $data-> masalah}}</td>
	  <td class="center"><a href="lihat/{{ $data-> id}}"><i class="fa fa-share-square-o"></i></a>&nbsp;&nbsp;&nbsp;<a href="download/{{ $data-> dokumen}}"><i class="fa fa-download"></i></a></td>
	</tr>
@endforeach

                