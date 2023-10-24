<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Prestasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>Tambah Data Prestasi</h1>
    
   <div class="card" style="margin:20px;";></div>
   <div class="card-body">
    <form action=/prestasi method="POST">
      @csrf
    
        <label>NISN</label></br>
        <input type="text" name="nisn" id="nisn" class="form-control"></br>
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Kelas</label></br>
        <select name="kelas" class="form-control">
                          <option value="">Pilih Kelas</option>
                          <option value="7A" >7A</option>
                          <option value="7B" >7B</option>
                          <option value="8A" >8A</option>
                          <option value="8B" >8B</option>
                          <option value="9A" >9A</option>
                          <option value="9B" >9B</option>
                        </select></br>

        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" class="form-control"></br>
        <label>Prestasi</label></br>
        <input type="text" name="prestasi" id="prestasi" class="form-control"></br>
        <label>Tingkat</label></br>
        <select name="kelas" class="form-control">
                          <option value="">Pilih Tingkat</option>
                          <option value="Kota" >Kota</option>
                          <option value="Provinsi" >Provinsi</option>
                          <option value="Nasional" >Nasional</option>
                          <option value="Internasional" >Internasional</option>
                        </select></br>
        <label for="date">Tanggal</label>
        <input type="date" name="date" id="date" class="form-control"></br>

        <div class="d-flex justify-content-center mb-4">
                            <button type="submit" class="ml-2 btn btn-primary">Daftarkan</button>
        </div>
    </form>
   </div>

</body>
</html>