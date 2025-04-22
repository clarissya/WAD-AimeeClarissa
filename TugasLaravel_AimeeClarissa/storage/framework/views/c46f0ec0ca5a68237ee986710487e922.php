<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mythical Creatures</title>
    <style>
        table {
            width: 60%;
            margin: 30px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color:lightcoral;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center; font-family: 'Courier New', Courier, monospace;">Mythical Creature List</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Origin</th>
                <th>Power Level</th>
                <th>Element</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $creatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $creature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($creature->name); ?></td>
                    <td><?php echo e($creature->origin); ?></td>
                    <td><?php echo e($creature->power_level); ?></td>
                    <td><?php echo e($creature->element); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
<?php /**PATH C:\WAD\tugasWAD\resources\views/mythical_creatures/index.blade.php ENDPATH**/ ?>