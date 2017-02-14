@include('header2')

<script type="text/javascript">
    function cari(){
      var strcari = $("#txtcari").val();
      var strkatagori = $("#txtkatagori").val(); 
      $('#hasil').empty();

      if(strcari !=""){
        $("#hasil").html()
        $.ajax({
          type:"post",
          url:"{{URL::to('cari')}}",
          data:{"_token": "{{ csrf_token() }}",'strcari': strcari,'strkatagori':strkatagori},
          success: function(data){    
          // #("#hasil").html(data.hasil)      

            console.log(strkatagori);
            $.each(data['hasil'], function(k, v) {
                // For each record in the returned array
                // alert(v.bidang); 
                $('#hasil').append(
                    "<tr>"
                      +"<td>"+v.nomor+"</td>"
                      +"<td>"+v.tentang+"</td>"
                      +"<td>"+v.katagori+"</td>"
                      +"<td>"+v.masalah+"</td>"
                      +"<td>"
                      +"<a href='lihat/" + v.id + "'>"
                      +"<i class='fa fa-share-square-o'>"
                      +"</i>"
                      +"</a>" +"&nbsp;&nbsp;&nbsp;"
                      +"<a href='download/" + v.dokumen + "'>"
                      +"<i class='fa fa-download'>"
                      +"</i>"
                      +"</a>"
                      +"</td>"
                    +"</tr>" );
                
            });

            

          }
        });
      }
    };
</script>
              <!-- Banner -->
                <section id="banner">
                  <div class="content">
                    <header>

                  <!--  <h1>Selamat Datang</h1> -->
                      <p>Semua Produk Hukum</p>
                    </header>
                    <div class="row">
                    <div class="2u 4u$(xsmall)">
                    <div class="select-wrapper">
  <select name="textcari" id="txtcari" onchange="cari()">
<option value="0">Semua Tahun</option>
<option value="2016">2005</option>
<option value="2016">2006</option>
<option value="2016">2007</option>
<option value="2016">2008</option>
<option value="2016">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2013">2014</option>
  <option value="2013">2015</option>
  <option value="2016">2016</option>
  <option value="2016">2017</option>
  <option value="2016">2018</option>
  <option value="2016">2019</option>
  <option value="2016">2020</option>
</select>
</div>
</div>
<div class="3u 6u$(xsmall)">
 <div class="select-wrapper">
<select name="katagori" id="txtkatagori" onchange="cari()">
<option value="0">Semua Katagori</option>
 @foreach($pilih as $dpilih)
 <option value="{{ $dpilih->nama_submenu}}">{{ $dpilih->nama_submenu}}</option>
@endforeach
</select>
</div>
                    </div>
                    </div>
                    <br>

                      <div class="12u">
                    <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NOMOR</th>
                  <th>TENTANG</th>
                  <th>KATEGORI</th>
                  <th>PERIHAL</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody id="hasil">
                @foreach($data as $dview)
                <tr>
                  <td>{{ $dview-> nomor}}</td>
                  <td>{{ $dview-> tentang}}</td>
                  <td>{{ $dview-> katagori}}</td>
                  <td>{{ $dview-> masalah}}</td>
                  <td class="center"><a href="lihat/{{ $dview-> id}}"><i class="fa fa-share-square-o"></i></a>&nbsp;&nbsp;&nbsp;<a href="download/{{ $dview-> dokumen}}"><i class="fa fa-download"></i></a></td>
                </tr>
                @endforeach
                </tbody>
                </tbody>
              </table>
              </div>
                  </div>
                </section>
                </div>
          </div>

        <!-- Sidebar -->
          <div id="sidebar">
            <div class="inner">

@include('menu')
              

              <!-- Footer -->
               
 @include('footer2')



