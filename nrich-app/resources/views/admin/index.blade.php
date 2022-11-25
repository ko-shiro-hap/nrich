<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>管理画面</h1>

        @if (session('login_msg'))
            <div class="alert alert-success">
                {{ session('login_msg') }}
            </div>
        @endif

        @if (Auth::guard('administrators')->check())
            <div>ユーザーID {{ Auth::guard('administrators')->user()->user_id }}でログイン中</div>
        @endif

        <ul>
            <li>ログイン状態: {{ Auth::check() }}</li>
            <li>管理者（Administrator）ログイン状態: {{ Auth::guard('administrators')->check() }}</li>
            {{-- <li>会員（members） ログイン状態: {{ Auth::guard('members')->check() }}</li> --}}
        </ul>

        <table class="table">
            <tr>
                <th>サークル名</th>
                <th>画像</th>
            </tr>
            <tr>
                <td>{{ $circle->name }}</td>
                <td>
                    <img src="{{ asset('images/circle/' . $circle->hero_image) }}" alt="メイン画像" width="100"
                        height="80">
                </td>
                <td>
                    <a href="{{ route('admin.edit', $circle->id) }}">編集する</a>
                </td>
            </tr>
        </table>

        <div>
            <a href="/admin/logout">ログアウト</a>
        </div>
    </div>

</body>

</html>
