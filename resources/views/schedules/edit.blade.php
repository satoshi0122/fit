@extends('layout')

@section('content')
  <h3>{{ $schedule->sei }}様の編集</h3>

<!--$id=$comment->idを書くことで、パラメータとして渡せる-->
  <form action='{{ route('schedules.update',$id=$schedule->id)  }}' method='post'>
    @method('PATCH')
    @csrf
      {{ csrf_field() }}

      <input type="hidden" name="id" value="{{ $schedule->id }}">
      <input type="text" name="sei" value='{{ $schedule->sei }}'><br>
      <input type="text" name="mei" value='{{ $schedule->mei }}'><br><br>
      学年　<select name=SY >
        <option value="{{ $schedule->SY }}">{{ $schedule->SY }}</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select><br>
        <!--requestにいれる-->
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
        <!--  {{ $week_number='w'.$i }}-->
                <th>
                <select name="w{{ $i }}">
                  <option value="{{ $schedule->$week_number }}">{{ $schedule->$week_number }}</option>
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
          備考<br>
        <textarea name="remarks" rows="10" cols="60">{{ $schedule->remarks }}</textarea>
        <p>
          <input type="hidden" value={{ $group_id }} name="group_id"> 
          <input type="hidden" value={{ $tn }} name="tn"> 
          <input type='submit' value='更新' class="btn btn--orange btn-c left btn_margin"><br>
  </form><br>

  <!--削除部分-->
  <form action='{{ route('schedules.destroy',$id=$schedule->id)  }}' method='post'>
    @method('delete')
    @csrf
      {{ csrf_field() }}
          <br>
                  <!--requestにいれる-->
          <input type="hidden" value={{ $group_id }} name="group_id"> 
          <input type="hidden" value={{ $tn }} name="tn"> 
          <input type='submit' value='このデータを削除する'>　※一度押すとすぐに消去されます
  </form><br>

  <p><a href="{{ route('schedules.index',[$group_id,$tn]) }}" class="btn btn--orange btn-c left btn_margin">スケジュール一覧に戻る</a></p><br>
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
