<html>

<head>
    <title>Hello</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 50pt;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }
    </style>
</head>

<body>
    <h1>Blade/Index</h1>
    <p>&#064;forディレクティブの例</p>
    <ol>
        @for ($i = 0; $i < count($data); $i++)
        @if( $i % 2==1 )
            @continue
        @elseif($i <=10)
            <li>No. {{ $data[$i] }}</li>
        @else
            @break
        @endif
        @endfor
    </ol>
    <p>&#064;$loopの例</p>
    <ol>
        @foreach ($data as $item)
        @if( $loop->first)
        <p>-- start --</p>
        @endif
            <li>No. {{$loop->iteration}}. {{ $item }}</li>
        @if( $loop->last)
        <p>-- end --</p>
        @endif
        @endforeach
</body>

</html>