@extends('layout')

@section('content')
  <h3>{{ $comment->comment_body }}</h2>

<?php  /*
$week()=['','','','','' ,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',]*/
?>

<br>

<form method="post" action="{{route('schedules.store')  }}">
  {{ csrf_field() }}
  <p> <input type="text" name="sei" placeholder="性" required> <br><input type="text" name="mei" placeholder="名" required></p> <br>

  学年　<select name=SY>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>

  </select><br>
  <!--お前らじゃ意味ねーわ   いやいるくね？requestにいれないかんくね？-->
 <input type="hidden" value={{ $group_id }} name="group_id"> 
 <input type="hidden" value={{ $tn }} name="tn"> 
 
 <div class=" margin2">
  <p>時間割に当てはまる数字を入力してください</p>
  <p>1:空きコマ・参加可能</p>
  <p>2:授業・参加できない</p>
  <p>3:わからない(バイトや用事など)</p>
  <p></p>
  <p></p>
  <p></p>
</div>

 <table class="left">
  <tr><th>■</th></tr><tr><th>1</th></tr><tr><th>2</th></tr><tr><th>3</th></tr><tr><th>4</th></tr><tr><th>5</th></tr>
  </table>
  <table class="">
    <tr> <!--曜日表示-->
       <th>月</th><th>火</th><th>水</th><th>木</th><th>金</th>
    </tr>


    <tr> <!--横-->
    @for($i=1;$i<26;$i++)
    
        <th>
          <select name="w{{ $i }}">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>

          </select>
        </th>
        
        @if($i%5==0)
          </tr>
        @endif
    
     @endfor
    </table>
    
    <p>備考</p>
  <textarea name="remarks" rows="10" cols="55"  placeholder="月火はバイトがあり、５限は基本毎週参加できるかわかりません。など"></textarea>
  <p>
    <input type="submit" value="登録">
  </p>
</form><br>
  <p><a href="{{ route('schedules.index',[$group_id,$tn]) }}" class="btn btn--orange btn-c left btn_margin">スケジュール一覧に戻る</a></p><br>
<style>
  * {
padding:0;
margin:0; }

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




<?php //名簿一覧的な

//'　fir1:'.$schedule->fri1.'　'.$schedule->remarks.
/*
foreach($schedules as $schedule){
  if($schedule->id==2){
  echo '<br><br>'.$schedule->id.'：'.$schedule->sei.'<br>';
  }}
var_dump($schedules[2]->mei);
echo $schedules[0].'<br><br>';

foreach($schedules[0] as $schedule[0]){
  echo $schedule;}
*/
?>



@endsection
