<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Ganymed-Dashboard</title>

    <!-- build:css -->
    <link rel="stylesheet" href="/assets/dashboard/css/styles.css"/>
    <!-- endbuild -->

    <!-- build:livereload -->
    <script src="//localhost:35729/livereload.js"></script>
    <!-- endbuild -->
</head>
<body>

@include('dashboard.partials.navigation')

<div class="content-wrapper content-wrapper--panel">
    <div class="content content--center ">
        @yield('content')
    </div>
</div>

{{ get_flash() }}

<!-- build:js -->
<script type="application/javascript" src="/assets/dashboard/js/app.js"></script>
<!-- endbuild -->
</body>
</html>