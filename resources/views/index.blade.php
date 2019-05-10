@include('header')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('tambahdata')}}" method="POST">
          @csrf
  <fieldset>
    <legend> </legend>
    <div class="form-group">
      <label >Judul Buku</label>
      <input type="text" class="form-control" id="judul" placeholder="Judul Buku "> 
    </div>
    <div class="form-group">
      <label >Penerbit</label>
      <input type="text" class="form-control" id="penerbit" placeholder="Penerbit"> 
    </div>
    <div class="form-group">
      <label >Tahun Terbit</label>
      <input type="text" class="form-control" id="tahun_terbit" placeholder="Tahun Terbit"> 
    </div>
    <div class="form-group">
      <label >Pengarang</label>
      <input type="text" class="form-control" id="pengarang" placeholder="Pengarang"> 
    </div>
    </fieldset>
    <input type="submit" name="Submit">
    <!--button type="submit" class="btn btn-primary">Submit</button-->
  </fieldset>
</form>
      </div>
    </div>
  </div> 