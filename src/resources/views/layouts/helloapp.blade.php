<html>
    <head>
        <title>@yield('title')</title>
        <style>
            body {
                font-family: 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, 'メイリオ', sans-serif;
                background: #f4f6fa;
                color: #333;
                margin: 0;
                padding: 0;
                min-height: 100vh;
            }
            header {
                background: linear-gradient(90deg, #4f8cff 0%, #6ed6ff 100%);
                color: #fff;
                padding: 2rem 2rem 1rem 2rem;
                text-align: left;
                box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            }
            h1 {
                font-size: 2.5rem;
                margin: 0 0 0.5rem 0;
                letter-spacing: -2px;
                font-weight: 700;
            }
            .container {
                max-width: 800px;
                margin: 2rem auto;
                background: #fff;
                border-radius: 12px;
                box-shadow: 0 4px 24px rgba(0,0,0,0.07);
                padding: 2rem 2.5rem 2.5rem 2.5rem;
            }
            ul {
                font-size: 1rem;
                padding-left: 1.2rem;
            }
            .menutitle {
                font-size: 1.1rem;
                font-weight: bold;
                margin: 0 0 0.5rem 0;
                color: #4f8cff;
            }
            hr {
                margin: 2rem 0;
                border: none;
                border-top: 1px solid #e0e0e0;
            }
            .content {
                margin: 1.5rem 0;
            }
            .footer {
                text-align: right;
                font-size: 0.9rem;
                margin: 2rem 0 0 0;
                color: #aaa;
                border-top: 1px solid #e0e0e0;
                padding-top: 1rem;
            }
            a {
                color: #4f8cff;
                text-decoration: none;
                transition: color 0.2s;
            }
            a:hover {
                color: #0056b3;
                text-decoration: underline;
            }
            button, input[type="submit"] {
                background: #4f8cff;
                color: #fff;
                border: none;
                border-radius: 4px;
                padding: 0.5rem 1.2rem;
                font-size: 1rem;
                cursor: pointer;
                margin: 0.2rem 0.5rem 0.2rem 0;
                transition: background 0.2s;
            }
            button:hover, input[type="submit"]:hover {
                background: #0056b3;
            }
            input, textarea {
                border: 1px solid #ccc;
                border-radius: 4px;
                padding: 0.5rem;
                font-size: 1rem;
                width: 100%;
                margin-bottom: 1rem;
                box-sizing: border-box;
            }
            label {
                font-weight: 600;
                margin-bottom: 0.3rem;
                display: block;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>@yield('title')</h1>
        </header>
        <div class="container">
            @section('menubar')
                <h2 class="menutitle">※メニュー</h2>
                <ul>
                    <li>@show</li>
                </ul>
            @show
            <hr>
            <div class="content">
                @yield('content')
            </div>
            <div class="footer">
                @yield('footer')
            </div>
        </div>
    </body>
</html>