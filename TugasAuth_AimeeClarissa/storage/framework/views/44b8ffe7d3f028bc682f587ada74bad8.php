<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Bunga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mythical Creature Dashboard</a>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <span class="nav-link text-white">
              <?php echo e(Auth::user()->name); ?>

            </span>
          </li>
          <li class="nav-item">
            <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline">
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-link nav-link text-white" style="text-decoration: none;">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-5">
    <h1 class="mb-4">Mythical Creature List</h1>

    <a href="<?php echo e(route('dashboard.create')); ?>" class="btn btn-primary mb-3">Add Creature</a>

    <?php if(session('success')): ?>
      <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
    <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Origin</th>
                    <th>Power Level</th>
                    <th>Element</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $Creature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Creature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($Creature->name); ?></td>
                        <td><?php echo e($Creature->origin); ?></td>
                        <td><?php echo e($Creature->power_level); ?></td>
                        <td><?php echo e($Creature->element); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="text-center">No Mythical Creature data available.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
    </table>
  </div>
</body>
</html>
<?php /**PATH D:\Documents\Downloads\tugasAimee\resources\views/dashboard/index.blade.php ENDPATH**/ ?>