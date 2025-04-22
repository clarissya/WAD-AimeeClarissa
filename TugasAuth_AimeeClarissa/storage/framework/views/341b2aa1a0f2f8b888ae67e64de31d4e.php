<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Bunga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1 class="mb-4">Tambah Data Bunga</h1>

    <form action="<?php echo e(route('dashboard.store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Bunga</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="mb-3">
        <label for="jenis" class="form-label">Jenis Bunga</label>
        <input type="text" class="form-control" id="jenis" name="jenis" required>
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" required>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="<?php echo e(route('dashboard.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</body>
</html>
<?php /**PATH C:\laragon\www\tugasAimee\resources\views/dashboard/create.blade.php ENDPATH**/ ?>