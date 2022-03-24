<div class="calendar">
  <style>/*calendar専用css*/
  .calendar{
    width: 40%;
    margin:0px 5%;
  }
  @media (max-width:670px){
  .calendar{
    width: 90%;
    margin:0px 5%;}
  }
  .sun{
    color:red;
  } 
  .sat{
    color:blue;
  }
  </style>
  <table class="">
    <?php //関数定義
        $now_date       = date("Y-m-d"); //現在の日付("2021-09-10")などで任意の日付
        $start_date     = date("Y-m-01", strtotime($now_date));   //開始の年月日
        $start_week     = date("w",      strtotime($start_date)); //開始の曜日の数字
        $end_date       = date("Y-m-t",  strtotime($now_date));   //終了の年月日
        $end_week       = date("w",      strtotime($end_date));   //終了の曜日の数字
        $end_date_num   = date("t",      strtotime($now_date));   //終了の日 ?>

      <tr> <!--年月表示-->
        <?= date("Y年m月"); ?>
      </tr>
      <tr>
        <th class="sun">日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th class="sat">土</th>
      </tr>
            <!-- 日程表示-->
      <tr>
      <?php //空きの表示
      for($i=0;$i<=$start_week-1;++$i){//$i=1;$i<=$start_week;これやとダメやった
        echo "<td></td>";
      }
      $day=1; //日数
      for($day;$day<=$end_date_num;++$day){
      $md=$day+$i;
        if($md%7==0){//土曜日折り返し
          echo "<td class=\"sat\">".$day."<td></tr><tr>";
        }elseif($md%7==1){
          echo "<td class=\"sun\">".$day."</td>";
        }else{
          echo "<td>".$day."</td>";
        }
      } //空きの表示
      for($e=0;$e<=6-$end_week;++$e){//
        echo "<td></td>";
      }?>
      </tr>
  </table>
  <a href="https://1drv.ms/x/s!AqPgmYZC6cjKgqxnB93PNdjnyY1UNQ?e=dKX4lV" target="_blank" rel="noopener noreferrer">年間スケジュールはこちら</a>
  </div><!--calender-->