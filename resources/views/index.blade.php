@extends('layout')

@section('content')
 <h3>グループ一覧</h3>
<?php $i=1; ?>
<h4>スケジュールを入力するグループを選んでください</h4>
<table>
 @foreach($comments as $comment) 
  <tr>
      <td class="fs">{{ $i.'．' }}</td>
      <td class="fs"><a href="{{ route('schedules.index',[$comment->id,$i])}}">
        {{ $comment->comment_body }}</a></td>
  </tr>




<?php ++$i; ?>
@endforeach
</table>
<style>
  .fs{
    font-size:22px;
  }
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