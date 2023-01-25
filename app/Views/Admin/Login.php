<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Air Hexa</title>

    <link href="/bootstrap5/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form id="loginForm">
            <img class="mb-4" src="/img/favicon.ico" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

            <p class="mt-5 text-muted"><a href="/">Go back to website</a></p>
            <p class="mt-2 mb-3 text-muted">Air Hexa Air Solutions &copy; <?= date('Y') ?></p>
        </form>
    </main>

    <!-- <script src="/bootstrap5/js/bootstrap.bundle.min.js"></script> -->
    <script src="/js/vendor/jquery-3.6.3.min.js"></script>
    <script src="/js/vendor/sweetalert2@11.js"></script>
    <script>
        function alert(title = 'Success', icon = 'success', message, otherOptions = []) {
            return Swal.fire({
                title: title,
                icon: icon,
                text: message,
                ...otherOptions
            });
        }
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            console.log(Array.from(formData));
            // return;  
            $.ajax({
                url: '',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    try {
                        const resp = JSON.parse(response);
                        resp ? window.location.href = '/admin' : alert('Error', 'error', 'Unable to login, Please check your credentials.');
                    } catch (error) {
                        alert('Error', 'error', error);
                    }
                },
                error: function(error) {
                    console.log(error)
                    alert('Error', 'error', error);
                }
            })
        })
    </script>

</body>

</html>