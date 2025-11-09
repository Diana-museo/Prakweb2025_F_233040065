<div class="container mt-5">
    <h3 class="mb-3">Tambah Data Pengguna</h3>

    <form action="<?= BASEURL; ?>/user/simpan" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= BASEURL; ?>/user" class="btn btn-secondary">Kembali</a>
    </form>
</div>
