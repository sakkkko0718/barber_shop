<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg" style="background-color: #6f2f38;">
    <div class="container-fluid">
      <a class="navbar-brand" style="color: #cdc984;" href="/top">Ducati</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" style="color: #ffffff;" href="/top">トップ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: #ffffff;" href="/contents">施術メニュー</a>
          </li>
          <li class="nav-item">
            {{-- トップページの末尾へ移動 --}}
            <a class="nav-link" style="color: #ffffff;" href="/top#access">アクセス</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/top">トップ</a></li>
              <li><a class="dropdown-item" href="/contents">施術メニュー</a></li>
              <li><a class="dropdown-item" href="/top#access">アクセス</a></li>
            </ul>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>
  <div class="content" style="margin: 30px">
    @yield('content')
  </div>
</body>

<style>
      /* 予約画面のページ確認 */
      .positionOfThePage {
        max-width: 600px;
        margin: 0 auto;
    }
    .pageNow {
        display: flex;
        width: 100%;
    }
    .pageArrow {
        top: 25%;
        margin: 30px;
    }
    .pageNowDetail {
        margin: 30px;
        text-align: center;
    }
    .pageNowDetail p {
      margin-top: 10px;
    }

    .content {
      font: #242022;
    }

</style>