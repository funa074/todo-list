<header>
  <h1>タスク管理</h1>
  <a href="/hello/new/" class="btn-new btn">
    タスク追加
  </a>
</header>

<main>

  <div class="task-items">
    @foreach ($posts as $post)

    <div class="task">
      <div class="task-text">
        <a href="/hello/{{ $post -> id }}" class="btn-text">
          {{ $post->title }}
        </a>
      </div>
      <div class="task-btn">
        <a href="/hello/edit/{{ $post->id }}" class="btn-edit btn">
          編集
        </a>
        <a href="/hello/delete/{{ $post->id }}" class="btn-delete btn">
          削除
        </a>
      </div>
    </div>


    <!-- <br> -->

    @endforeach
  </div>
</main>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">