<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CV Dina Alimvia')</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        /* === GLOBAL === */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #eef2f7;
            margin: 0;
            padding: 0;
            color: #333;
            scroll-behavior: smooth;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 2.5fr;
            max-width: 1100px;
            margin: 50px auto;
            background: #fff;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            border-radius: 15px;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }

        /* === SIDEBAR === */
        .sidebar {
            background-color: #1d3557;
            color: #fff;
            padding: 30px;
            text-align: center;
        }

        .sidebar img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 4px solid #457b9d;
            margin-bottom: 10px;
            transition: transform 0.3s ease;
        }

        .sidebar img:hover {
            transform: scale(1.1);
        }

        .sidebar h2 {
            margin-bottom: 10px;
            color: #a8dadc;
        }

        .sidebar p, .sidebar a {
            color: #f1faee;
            font-size: 14px;
            text-decoration: none;
        }

        .sidebar hr {
            border: 0;
            border-top: 1px solid #457b9d;
            margin: 15px 0;
        }

        .sidebar h3 {
            text-align: left;
            margin-top: 20px;
            color: #f1faee;
        }

        .sidebar ul {
            list-style-type: none;
            padding-left: 0;
            text-align: left;
        }

        .sidebar ul li {
            margin: 5px 0;
        }

        /* === SKILL BAR === */
        .skills {
            text-align: left;
        }

        .skill {
            margin-bottom: 15px;
        }

        .skill p {
            margin: 0 0 5px;
            font-weight: 500;
            color: #f1faee;
        }

        .skill-bar {
            background: #a8dadc;
            border-radius: 10px;
            overflow: hidden;
            height: 8px;
            position: relative;
        }

        .skill-bar span {
            display: block;
            height: 100%;
            background: linear-gradient(90deg, #007bff, #5c6bc0);
            width: 0;
            border-radius: 10px;
            animation: grow 1.5s forwards;
            animation-delay: 0.2s;
        }

        @keyframes grow {
            from { width: 0; }
            to { width: var(--width); }
        }

        /* === CONTENT === */
        .content {
            padding: 50px 60px;
            background: linear-gradient(180deg, #ffffff, #f8fbff);
        }

        section {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px 30px;
            margin-bottom: 30px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            border-left: 5px solid #007bff33;
            opacity: 0;
            transform: translateY(25px);
            transition: all 0.8s ease;
        }

        section.visible {
            opacity: 1;
            transform: translateY(0);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.08);
        }

        /* === GRADIENT TITLE EFFECT === */
        h2 {
            font-weight: 600;
            background: linear-gradient(90deg, #007bff, #5c6bc0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
            position: relative;
            margin-bottom: 20px;
        }

        h2::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #007bff, #5c6bc0);
            border-radius: 5px;
            animation: underline 1s forwards;
        }

        @keyframes underline {
            from { width: 0; }
            to { width: 100%; }
        }

        section p {
            color: #444;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        /* === TABLE === */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            transition: all 0.3s ease;
        }

        th, td {
            padding: 10px 12px;
            text-align: left;
            border-bottom: 1px solid #eaeaea;
        }

        th {
            color: #1d3557;
            font-weight: 600;
        }

        tr:hover {
            background-color: #f0f7ff;
            transform: scale(1.01);
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.05);
        }

        /* === FOOTER === */
        footer {
            text-align: center;
            background: #f8f9fa;
            color: #777;
            padding: 15px;
            font-size: 14px;
        }

        /* === ANIMATIONS === */
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-15px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <div class="container">
        @include('partials.nav')

        <div class="content">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')

    <script>
        // Animasi fade-in saat scroll
        const sections = document.querySelectorAll("section");
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        }, { threshold: 0.1 });
        sections.forEach(section => observer.observe(section));
    </script>
</body>
</html>
