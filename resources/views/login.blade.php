<html>

<head>
    <title>Login/Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="container">
        <div>
            <h2>Login</h2>
            <form method="POST" action="login">
                @csrf
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="button">Login</button>
            </form>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div>
            <h2>Register</h2>
            @if(Session::get('status'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{Session::get('status')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            @endif
            <form method="POST" action="register">
                @csrf
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="button">Register</button>
            </form>
        </div>
    </div>
</body>

</html>