@extends('base')
@section('content')

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <br><br>
        <h2 class="text-center text-uppercase text-secondary mb-0">Agendakan Kegiatan</h2>
        
        </br>
</br>
</br>

</br>
        <form action="{{ route('kegiatan.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Judul Kegiatan:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
                <div class="form-group">
                   <label for="jenisbencana">Jenis Kegiatan:</label>
                   <select id="jenis" name="jenis" class="form-control">
                       <option value="Pelatihan">Pelatihan</option>
                       <option value="Seminar">Seminar</option>
                       <option value="Sosialisasi">Sosialisasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Tanggal:</label>
                    <input type="date" class="form-control" id="usr" name="tanggal">
                </div>
                 <div class="form-group">
                    <label for="nama">Waktu:</label>
                    <input type="time" class="form-control" id="usr" name="waktu">
                </div>
                <div class="form-group">
                    <label for="nama">Lokasi kegiatan:</label>
                    <input type="text" class="form-control" id="usr" name="loc">
                </div>
                <div class="form-group">
                    <label for="nama">Deskripsi Tambahan:</label>
                    <input type="text" class="form-control" id="usr" name="desc">
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
