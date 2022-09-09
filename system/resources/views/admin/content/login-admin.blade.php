<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>VERPESHOP SHOP</title>
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/login.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="login-page">
        <div class="form" action="{{ url('user') }}" method="post">
            <form class="register-form">
                <input type="text" placeholder="name" name="nama" />
                <input type="text" placeholder="username" name="username" />
                <input type="text" placeholder="email address" name="email" />
                <input type="password" placeholder="password" name="password" />
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            @include('admin.utils.notif')
            <form action="{{ url('login') }}" method="post" class="login-form">
                @csrf
                <input type="text" placeholder="email" name="email" />
                <input type="password" placeholder="password" name="password" />
                <button>login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ url('public') }}/assets/js/script.js"></script>

</body>

</html>
