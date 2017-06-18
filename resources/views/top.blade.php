@extends('layout.main')


@section('content')

<div class="hero">
  <div id="banner" class="container">
    <div class="col-md-5 col-sm-12"> <img class="banner-img img-responsive" src="img/iphone_03.png"> </div>
    <div class="col-md-7 col-sm-12">
      <div class="banner-text">
        <h1>今日映画一緒に<span>見に行かない？</span></h1>
        <p>誰も見つからないそんな時、「matchmovie」で解決。</p>

       
        <!-- <form method="post" action="" name="subscribeform" id="subscribeform">
          <input type="text" name="email" placeholder="メールアドレス" id="subemail">
          <input type="submit" name="send" value="Entry" id="subsubmit" class="btn2">
        </form> -->
        

        <ul class="actions actions-centered">
                  <li><a href="#" class="btn style1 big">Facebookで登録</a></li>
                  <li><a href="#" class="btn style2 big">メールアドレスで登録</a></li>
                </ul>
      </div>
      <!-- banner text section--> 
      
    </div>
  </div>
  </div>
  
</section>

<section id="overview" class="section overview">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h2 class="section-title">見たい映画があるが<span>一緒に行く人がいない!!</span></h2>
        <p class="section-intro">見たい映画があるが一緒に行く人がいない!!一人で行くのも気が引けるし...誰しもそんなときがあるかと思います。そんな時「matchmovie」を使えば一緒に行く人を探すことができます。</p>
      </div>
      <div class="col-md-12 text-center overview-video center-block">
      <img src="img/hikki.png" class="img-responsive">
        <!-- <iframe src="https://www.youtube.com/embed/FwREIIKCzYw" frameborder="0" allowfullscreen > </iframe> -->
      </div>
    </div>
    

  </div>
</section>

<div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">見たい映画行ける日程を登録しておけば自動でマッチング♪</h2>
                    <p class="lead">web上から見たい映画を登録しておけば、同じ興味を持った人と「matchmovie」が間に入りマッチングを行います。プロフィールを充実しておけば、マッチング度合いも向上します。 </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/01.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">相手が見つかったらその場メッセージ♪</h2>
                    <p class="lead">見たい映画が同じで印象が良かった相手とマッチングした後はメッセージ機能にて日程の調整、希望会場など決めて頂きます。 </p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/02.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">あとは映画を予約して完了!!</h2>
                    <p class="lead">予約が完了すればあとは当日を待つだけ。もちろんジャストタイミングでマッチングすることも!!是非、みたい映画がマッチしている相手を誘って映画を見てみて♪</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/3.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>


 
</section>


<section id="download" class="section subscribe">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h2>Coming Soon <span>...</span></h2>
        <p>アプリは現在開発中の為少々お待ちください。</p>
        <div  class="banner-btn"> <a href="#"><img src="img/apple-store-btn.png"></a> <a href="#" class="banner-btn"><img src="img/google-store-btn.png"></a></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center subscribe-form">
        <h3 class="subscribe-title">WEB版の事前登録はこちらから</h3>
        <!-- subscribe form -->
        <form method="post" action="" name="subscribeform" id="subscribeform">
          <input type="text" name="email" placeholder="メールアドレス" id="subemail" />
          <input type="submit" name="send" value="Entry" id="subsubmit" class="btn2" />
        </form>
        <!-- subscribe message -->
        <div id="mesaj"></div>
        <!-- subscribe message --> 
      </div>
      <!-- subscribe form --> 
    </div>
  </div>
</section>


@endsection


