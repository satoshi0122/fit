<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=chrome">
  <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"-->
  <title>FIT隊</title>
  <style>
    * {
    padding:0;
    margin:0; 
    }
    html{
    padding:0;
    margin:0; 
    }
    body{
    /*横幅と上限の設定*/
    max-width: 800px;
    margin: 0 auto;
    background-color:gainsboro;
    }
    .inbody{
      background-color: white;
      box-shadow: 4px 4px 4px;
    }
    header{
    height:48px ;
    background-color: rgb(111, 154, 235);
    /*cornflowerblue*/
    }
    .title_name{
    color:black;
    background-color:;
    float: left;
    padding:12px;/*文字の縦　24px?*/
    }
    .inquiry{
    color: black;
    float: right;
    padding: 12px;
    
    background-color:;
    }
    footer{
    padding: 16px;
    background-color: rgb(111, 154, 235);
    } 
  
    .content_div{
      margin:5%;
    }
    h3{
      padding: 1rem 2rem;
      border-top: 6px double #000;
      border-bottom: 6px double #000;
      margin-bottom: 3%;
      font-family: sans-serif;
    }
    .groupName{
    max-width: 100%;
    background-color:gray;
    background-image:url("img/kousya.png");
    padding: 10px;
    margin-bottom: 20px;
    height:200px;
    background-size: cover;
    background-position: center center;
    }
    .groupName h1{
    margin: 0 auto;
    text-align: center;
    padding-top:50px;
    font-size:60px;
    text-shadow:5px 5px 5px white;
    }
    .margin2{
      margin: 2%;
    }
    
    .btn_margin{
      margin:0 5% 3% 0;
    }
    .left{
    float:left;
    }
    .right{
      float:right;
    }
      .float{
      display: flex;
      }
      @media (max-width:670px){
        .float{
        flex-direction: column;}
    }
    .red{
      color:red;
    }
    a{
      text-decoration:none;
      border-radius: 12px;
    }
    .hover:hover{
      color:gray;
    }
    a.btn--orange {
    color: #000;
    background-color: #7bdff2;
    }
    a.btn--orange:hover {
      color: #000;
      background: #9BF9CC;
    }
    a.btn-c {
      font-size: 1rem;
      position: relative;
      padding: 0.5rem 1rem 0.5rem 0.6rem;
    }
    a.btn-c i.fa {
      margin-right: 0.3rem;
    }
    input {
      color: #000;
      background-color: #7bdff2;
      border-radius: 12px;
      font-size: 1rem;
      position: relative;
      padding: 0.5rem 1rem 0.5rem 0.6rem;
      border: 0;
    }
    input:hover {
    background-color: #9BF9CC;
    }
    input:active {
    /* 押されたとき */
    background-image: linear-gradient(180deg, #68d3db, #e5f4fc);
    }
</style>
</head>
<body>
  <div class="inbody">


<header class="">
  <p>
      <a class="title_name" >空きコマ管理</a>
  </p>
  <p>
      <!--a href="div_box/question.html" class="inquiry">質問箱</a-->
      <a href="https://www.fit.ac.jp/gakusei/bukatsu/fittai" class="inquiry hover" target="_blank" rel="noopener noreferrer">公式HP</a>
      @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a  class="inquiry hover" href="{{ route('operations.create') }}">管理画面</a>
                    @else
                        <a  class="inquiry hover" href="{{ route('login') }}">ログイン</a>

                        <!--@if (Route::has('register'))
                            <a class="inquiry" href="{{ route('register') }}">Register</a>
                        @endif-->
                    @endauth
                </div>
            @endif
    </p>
</header>


  <div class="content_div">
    
    @yield('content')

  </div>
  
  <footer><a>福岡工業大学 FIT隊</a><br><a> 制作者　情報工学科　後藤哲志</a></footer>
  </div><!--inbody-->
</body>
</html>

