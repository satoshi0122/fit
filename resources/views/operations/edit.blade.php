@extends('layout')

@section('content')
  <h3>スケージュール コメント編集</h3><br>

<!--$id=$comment->idを書くことで、パラメータとして渡せる-->
  <form action='{{ route('operations.update',$id=$comment->id)  }}' method='post'>
    @method('PATCH')
    @csrf
      {{ csrf_field() }}

          コメント：<input type='text' name='comment_body' value='{{ $comment->comment_body }}'><br>
          <input type='submit' value='更新'>
  </form>

  <br><a href="{{ route('operations.create', [$comment->id]) }}" class="btn btn--orange btn-c left btn_margin">管理画面に戻る</a><br><br><br>

  <form action='{{ route('operations.destroy',$id=$comment->id)  }}' method='post'>
    @method('delete')
    @csrf
      {{ csrf_field() }}

          <input type='submit' value='このスケジュールを消去する'>　※一度押すとすぐに消去されます
  </form>
@endsection
