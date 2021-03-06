<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- build:css -->
    <link rel="stylesheet" href="/assets/dashboard/css/styles.css"/>
    <!-- endbuild -->

    <!-- build:livereload -->
    <script src="//localhost:35729/livereload.js"></script>
    <!-- endbuild -->
</head>
<body>

<div class="content content--center">
    <form class="login form t--shadow-z1" action="/login" method="post">

        <h1 class="form__heading">Sign In</h1>

        @if($session->hasErrors())
            <div class="errors">
                <ul>
                    @foreach($session->getErrors() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="input-group">
            <input class="input-group__input" type="text" name="email" required="" />
            <span class="input-group__bar"></span>
            <label class="input-group__label">Email</label>
        </div>

        <div class="input-group input-group--last">
            <input class="input-group__input" type="password" name="password" required="" />
            <span class="input-group__bar"></span>
            <label class="input-group__label">Password</label>
        </div>

        <button class="button ripple">
            Submit
        </button>
    </form>
</div>

{{ get_flash() }}

<!-- build:js -->
<script type="application/javascript" src="/assets/dashboard/js/app.js"></script>
<!-- endbuild -->
</body>
</html>