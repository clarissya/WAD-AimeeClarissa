<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Mythical Creature</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1 class="mb-4">Add Mythical Creature</h1>

    <form action="{{ route('dashboard.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Mythical Creature Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="origin" class="form-label">Origin</label>
        <input type="text" class="form-control" id="origin" name="origin" required>
      </div>
      <div class="mb-3">
        <label for="power_level" class="form-label">Power Level</label>
        <input type="number" class="form-control" id="power_level" name="power_level" required>
      </div>
      <div class="mb-3">
        <label for="element" class="form-label">Element</label>
        <input type="text" class="form-control" id="element" name="element" required>
      </div>
      <button type="submit" class="btn btn-success">Save</button>
      <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</body>
</html>
