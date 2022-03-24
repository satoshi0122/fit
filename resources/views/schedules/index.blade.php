
@extends('layout')

@section('content')
  <h3>{{ $tn.'.'.$comment->comment_body }}</h3><br>


  <div class="float">
    <a href="{{ route('schedules.create',[$group_id,$tn]) }}" class="btn btn--orange btn-c left btn_margin">自分のスケジュールを入力する</a>
    <a href="{{ route('index') }}" class="btn btn--orange btn-c left btn_margin">グループ一覧に戻る</a>
  
  </div>


    <table class="bbb fff">
      <tr> <!--曜日表示-->
         <th>月</th><th>火</th><th>水</th><th>木</th><th>金</th>
      </tr>
      <tr> <!--横-->

  @for($i=1;$i<26;$i++)
         <!--{{ $wn='w'.$i }}-->
      <th>
        @foreach($schedules as $schedule)

          @if($group_id==$schedule->group_id)

            @if($schedule->$wn==1)
              <a class="fff">{{ $schedule->sei.' ' }}</a>
            @endif

          @endif

        @endforeach

        @foreach($schedules as $schedule)

          @if($group_id==$schedule->group_id)

              @if($schedule->$wn==3)
                <a class="red">{{ $schedule->sei.' ' }}</a>
             @endif
      
          @endif

        @endforeach


      </th>
      
                  @if($i%5==0)
                    </tr>
                  @endif
      
       @endfor
      </table>
    <h4>●参加可能な方</h4>
    <h4 class="red">●参加できるかわからない方</h4>

  <br>
  <h3>スケジュール入力者一覧</h3>
  <table>
    <tr>
      <td>学年</td><td>名前</td><td>　　　　　</td><td>備考</td>
    </tr>

  @foreach($schedules as $schedule)
    @if($group_id==$schedule->group_id)
      <tr>
          <td> {{ $schedule->SY.'年 '}}</td>
          <td> {{ $schedule->sei.' '.$schedule->mei.'　　' }}</td>
          <td><a href="{{ route('schedules.edit',[$group_id,$tn,$id=$schedule->id]) }}" class="btn btn--orange btn-c left btn_margin">編集</a></td>
          
          <td>{{ $schedule->remarks }}</td>    
      </tr>
        @endif
  @endforeach
  </table>
    
<style>
  table{
  border-collapse: collapse;
  border-spacing: 0;
  
  }
  .bbb{
    border: 2px  solid;
  }
  .fff{
    font-family:"sans-serif";
  }
  table th,table td{
  padding: 4px 8px;
  text-align: center;
  }
  table th{
    border: 0.5px  solid;
  }
  table th:nth-child(odd){
  background-color: ;
  }

  table tr:nth-child(odd){
  background-color: #eee
  }
</style>
    
@endsection
