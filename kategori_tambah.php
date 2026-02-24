<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="POST">
                <?php
                    if(isset($_POST['submit'])) {
                    $kategori = strtolower($_POST['kategori']);
                    // Cek apakah kategori sudah ada
                    $cek = mysqli_query($koneksi, "SELECT * FROM kategori WHERE Lower(kategori)='$kategori'");
                    $check = mysqli_num_rows($cek);
                    if($check > 0) {
                        echo '<script> alert("Kategori sudah ada"); </script>';
                        return false;
                    } else{
                        $query = mysqli_query($koneksi, "INSERT INTO kategori VALUES (NULL, '$kategori')");
                            if($query) {
                                echo '<script> alert("Data berhasil disimpan");
                                location.href="?page=kategori";</script>';  
                            } else {
                                echo '<script> alert("Data gagal disimpan"); </script>';   
                            }
                    }
                }
                ?> 

                <!-- Form Group -->
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Nama Kategori</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="kategori"
                            placeholder="Masukkan nama kategori" required>
                    </div>
                </div>

                <!-- Button Area -->
                <div class="row">
                    <div class="col-md-9 offset-md-3">

                        <button type="submit" class="btn btn-primary" name="submit" value="submit">
                            Simpan
                        </button>

                        <button type="reset" class="btn btn-secondary">
                            Reset
                        </button>

                        <a href="?page=kategori" class="btn btn-danger">
                            Kembali
                        </a>

                    </div>
                </div>

            </form>
        </div>
    </div>

</div>
