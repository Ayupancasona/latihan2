
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title> CRUD </title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Mahasiswa - <strong>EDIT DATA</strong> 
                </div>
                <div class="card-body">
                    <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
  
 
    @foreach($mahasiswa as $m)
    <form action="/mahasiswa/update" method="post">
        {{ csrf_field() }}


        <input type="hidden" name="id" value="{{ $m->id }}"> <br/>

        <div class="form-group">
        <label>NIM</label>
         <input class="form-control" type="text" required="required" name="nim" value="{{ $m->nim }}"> 
         </div>

          <div class="form-group">
            <label>Nama</label>
        <input class="form-control" type="text" required="required" name="nama" value="{{ $m->nama }}"></div> <br/>

        <div class="form-group">
        <label>Jurusan</label>
        <input class="form-control" type="text" required="required" name="jurusan" value="{{ $m->jurusan }}"></div> <br/>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
    @endforeach
        
</body>
</html>