<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Portal')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            color: #111;
            -webkit-font-smoothing:antialiased;
        }
        nav {
            border-bottom: 1px solid #eee;
            padding: 0.75rem 1.25rem;
            background: #fff;
        }
        .nav-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }
        nav h1 { font-size: 1.125rem; font-weight:700; color:#000; }
        nav ul { list-style:none; display:flex; gap:1rem; }
        nav a { color:#000; text-decoration:none; font-weight:500; opacity:0.9 }
        nav a:hover { text-decoration:underline; opacity:1 }

        .container { max-width:1200px; margin:2rem auto; padding:0 1.25rem; }
        .card { background:#fff; border-radius:6px; padding:1.25rem; box-shadow:0 1px 0 rgba(0,0,0,0.04); }
        h2 { font-size:1.25rem; margin-bottom:0.5rem; color:#000; }

        /* Minimalist buttons */
        .btn { display:inline-block; padding:0.5rem 0.9rem; border-radius:4px; font-size:0.95rem; text-decoration:none; cursor:pointer; border:1px solid #111; background:#fff; color:#111 }
        .btn:hover { background:#fafafa }
        .btn-primary { background:#111; color:#fff; border-color:#111 }
        .btn-primary:hover { background:#000 }
        .btn-outline { background:transparent }

        table { width:100%; border-collapse:collapse; margin-top:1rem }
        table th, table td { padding:0.75rem 0.5rem; text-align:left; border-bottom:1px solid #f0f0f0 }
        table th { font-weight:700; color:#111; font-size:0.95rem }
        table tr:hover { background:#fafafa }

        .actions { display:flex; gap:0.5rem; align-items:center }
        .action-btn { font-size:0.875rem; padding:0.375rem 0.6rem; border-radius:4px; border:1px solid #111; background:#fff; color:#111; text-decoration:none }
        .action-btn:hover { background:#fafafa }

        .page-header { display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem }
        .page-title { font-size:1.25rem; font-weight:700; color:#000 }
    </style>
</head>
<body>
    <nav>
        <h1>Student Portal</h1>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('students.index') }}">Students</a></li>
            <li><a href="{{ route('students.create') }}">Add Student</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="page-header">
            <div class="page-title">@yield('title', 'Page')</div>
            <div class="header-actions">@yield('header-actions')</div>
        </div>

        @yield('content')
    </div>
</body>
</html>