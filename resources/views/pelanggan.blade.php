<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel </title>

    <style>
            html, body {
                background-color: #D8BFD8;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</head>
<body >
    <center>
        <h2>Daftar Pelanggan</h2>
    </center>
	
   
    
        <div class="content">
            <!-- Remove This Before You Start -->
            
            <hr>
            <form action="{{ route('kontak.store') }}" method="post">
             
            <div class="form-group">
                    <label for="id">id:</label>
                    <input type="int" class="form-control" id="id" name="id">
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="no_telepon">No Hp:</label>
                    <input type="int" class="form-control" id="no_telepon" name="no_telepon">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
              
 
        <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
            </form>
        </div>
        <!-- /.content -->
   
        
</body>
</html>