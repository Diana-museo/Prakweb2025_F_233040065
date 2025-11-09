<div class="container mt-5">
    <h3 class="mb-3">Edit Data Pengguna</h3>

    <form action="<?= BASEURL; ?>/user/update" method="post">
        <!-- ID disembunyikan karena tidak boleh diubah -->
        <input type="hidden" name="id" value="<?= $data['user']['id']; ?>">

        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name"
                value="<?= htmlspecialchars($data['user']['name']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email"
                value="<?= htmlspecialchars($data['user']['email']); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= BASEURL; ?>/user" class="btn btn-secondary">Batal</a>
    </form>
</div>
