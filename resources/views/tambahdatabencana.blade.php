@extends('base')
@section('content')

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <br><br>
        
        <h2 class="text-center text-uppercase text-secondary mb-0" >Tambah Data Bencana</h2>
        
        </br>
</br>
</br>
<?php
$kecamatan = DB::table('daerahs')->get();
?>
</br>
        <form action="{{ route('bencana.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Judul laporan:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
                <div class="form-group">
                   <label for="jenisbencana">Jenis Bencana:</label>
                   <select id="jenis" name="jenis" class="form-control">
                       <option value="Banjir">Banjir</option>
                       <option value="Tsunami">Tsunami</option>
                       <option value="Gempa Bumi">Gempa Bumi</option>
                       <option value="Gunung Meletus">Gunung Meletus</option>
                       <option value="Kebakaran">Kebakaran</option>
                       <option value="Tanah Longsor">Tanah Longsor</option>
                      <option value="Puting Beliung">Puting Beliung</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Kecamatan:</label>
                    <select name="daerah" class="form-control">
                      @foreach($kecamatan as $kec)
                      <option value="{{ $kec->id_daerah }}">{{ $kec->kecamatan }}</option>
                      @endforeach
                    </select>
                </div>
                
                 <div class="form-group">
                    <label for="nama">Skala:</label>
                    <input type="text" class="form-control" id="usr" name="skala">
                </div>
                <div class="form-group">
                    <label for="nama">Perkiraan relawan yang dibutuhkan:</label>
                    <input type="number" class="form-control" id="usr" name="jml_rel">
                </div>
                <div class="form-group">
                    <label for="nama">Deskripsi tambahan:</label>
                    <input type="text" class="form-control" id="usr" name="deskripsi">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Kirim ke FKKRS</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>

            </form>
      </div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    
   


    <script src="{{asset('js/lokasi.js')}}"></script>

  </body>

</html>
