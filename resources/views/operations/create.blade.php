@extends('layout')

@section('content')
  <p class="btn_margin">ようこそ、{{ Auth::user()->name }}　様</p>
  <h3>管理画面</h3><br>
 
<table>
  <tr>
    <td></td>
    <td>コメント</td>
    <td>　　　　　</td>
  </tr>
  <?php $i=1; ?>
@foreach($comments as $comment) 
  
  <tr>
      <td><?= $i.'．';?></td>
      <td>{{ $comment->comment_body }}</td>
      <td><a href="{{ $comment->id }}" class="btn btn--orange btn-c left btn_margin">編集</a></td>
  
  </tr>
  <?php ++$i; ?>
@endforeach
</table>
<br>
<h3>スケジュ――ルの追加</h3>
<p>例.【ツアー前期スケジュール】や【編集班　4/25~29】に、【F隊４月スケジュール】など、企画のグループと期間など、わかりやすいコメントをご入力ください</p>
<form method="post" action="{{ route('operations.store') }}">
  {{ csrf_field() }}
    <input type="text" name="comment_body" placeholder="コメントをご入力ください" required>
  </p><br>
  <p>
    <input type="submit" value="作成">
  </p>
</form><br>

<a href="{{ route('index') }}" class="btn btn--orange btn-c left btn_margin">グループ一覧に戻る</a><br>
  
<br><br>
<div class="" aria-labelledby="navbarDropdown">
  <a class="" href="{{ route('logout') }}"
     onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
      {{ __('ログアウト') }}
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</div>
<?php
//echo $comment[0]->comment_body;
//echo $comments[0];
//$array=$comments[0];
//echo $array["id"];
//echo $array["comment_body"];

//var_dump($comments);
?>
<style>
  table{
  border-collapse: collapse;
  border-spacing: 0;
  }

  table th,table td{
  padding: 4px 8px;
  text-align: center;
  }

  table tr:nth-child(odd){
  background-color: #eee
  }
</style>
 
@endsection
