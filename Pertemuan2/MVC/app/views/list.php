<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4">
        <h3>Daftar Pengguna</h3>

        <a href="<?= BASEURL; ?>/user/tambah" class="btn btn-primary mb-3">Tambah User</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['users'] as $user) : ?>
                    <tr>
                        <td><?= htmlspecialchars($user['name']); ?></td>
                        <td><?= htmlspecialchars($user['email']); ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/user/detail/<?= $user['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                            <a href="<?= BASEURL; ?>/user/edit/<?= $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= BASEURL; ?>/user/hapus/<?= $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>