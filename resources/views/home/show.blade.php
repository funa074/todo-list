<header>
  <h1>詳細ページ</h1>
</header>
<main>

  <table>
    <tr>
      <th>ID</th>
      <td>{{ $post['id'] }}</td>
    </tr>
    <tr>
      <th>タイトル</th>
      <td>{{ $post['title'] }}</td>
    </tr>
    <tr>
      <th>作成日時</th>
      <td>{{ $post['created_at'] }}</td>
    </tr>
    <tr>
      <th>更新日時</th>
      <td>{{ $post['updated_at'] }}</td>
    </tr>
  </table>
  <br>
  <br>
  <a href="/hello" class="btn">ホームへ</a>
</main>
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">