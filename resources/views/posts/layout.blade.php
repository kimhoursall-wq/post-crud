<!doctype html>
<html>
<head>
  <meta charset="utf-8"><title>Post CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
  <h1 class="mb-4">Posts</h1>
  @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
  @yield('content')
</body>
</html>
