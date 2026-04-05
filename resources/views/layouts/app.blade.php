<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="flex">

  @include('components.sidebar')

  <div class="flex-1 flex flex-col">

    @include('components.header')

    <main class="p-6 flex-1">
      @yield('content')
    </main>

    @include('components.footer')

  </div>

</div>

</body>
</html>