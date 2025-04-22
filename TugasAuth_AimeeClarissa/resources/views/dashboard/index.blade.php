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
              {{ Auth::user()->name }}
            </span>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
              @csrf
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

    <a href="{{ route('dashboard.create') }}" class="btn btn-primary mb-3">Add Creature</a>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

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
                @forelse ($Creature as $Creature)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $Creature->name }}</td>
                        <td>{{ $Creature->origin }}</td>
                        <td>{{ $Creature->power_level }}</td>
                        <td>{{ $Creature->element }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No Mythical Creature data available.</td>
                    </tr>
                @endforelse
            </tbody>
    </table>
  </div>
</body>
</html>
