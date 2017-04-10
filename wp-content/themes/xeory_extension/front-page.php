<?php get_header(); ?>

<div id="main_visual">
  <div class="wrap">
    <h2><?php echo nl2br(get_option('top_catchcopy'));?>全く新しい法的遺言書。</h2>
    <p><?php echo nl2br(get_option('top_description'));?>大切な人のためにできること</p>
        <div class="start">
            <p class="d_btn"><a href="http://localhost/wordpress/function/" class="btn">始める</a></p>
        </div>

  </div><!-- .wrap -->
</div>

<div id="content">

<div id="main">
  <div class="main-inner">


<!-- 下と重複させてメリットに -->
<div id="popular_post_content" class="front-loop">

<h2>新しい遺言書の形です。</h2>


<div class="wrap">
<div class="clearfix boxA">
  <div class="test">
    <h2 class=midashi> 家族を守る
    </h2>
    <i class="fa fa-child fa-5x"></i> <!-- fa-usersもあり -->
    <h1>お子さんや配偶者がずっと安心して暮らせるように。</h1>
  </div>
  <div class="test">
    <h2 class=midashi> 財産を守る
    </h2>
    <i class="fa fa-home fa-5x"></i>
    <h1>あなたが気付いた財産がきちんと望まれる形で愛する人たちの手に渡るように。</h1>
  </div>
  <div class="test">
    <h2 class=midashi> 時間とお金を節約
    </h2>
    <i class="fa fa-clock-o  fa-5x"></i> <!-- fa-jpyもアリ -->
    <h1>10分以内に完了します。知識はいりません。今日始めましょう。</h1>
  </div> <!-- /test -->
  </div> <!-- /boxA -->

  <div class="explain">
        <div class="start">
            <p class="d_btn"><a href="" class="btn">始める</a></p>
        </div>
</div> <!-- /explain -->
  </div> <!-- /wrap -->
  </div> <!-- /front-loop -->

  <!-- 以上メリット -->


<div id="popular_post_content" class="front-loop">

<h2>素早く、簡単に、法的に有効な遺言書を。<!-- (元人気記事) --></h2>


<div class="wrap">
<div class="clearfix boxA">
  <div class="test">
    <h2 class="midashi">質問に答える
    </h2>
    <i class="fa fa-mouse-pointer fa-5x"></i>
    <h1>遺産等のご意向に加え、大切な方へのメッセージ、緊急時の対応、葬儀のご希望等、順に質問に回答していただくことで、自動で法的に有効な遺言書データが完成します。</h1>
  </div>
  <div class="test">
    <h2 class="midashi">印刷する
    </h2>
    <i class="fa fa-print fa-5x"></i>
    <h1>データ化された遺言書を印刷していただきます。
    </h1>
  </div>
  <div class="test">
    <h2 class="midashi">署名する
    </h2>
    <i class="fa fa-pencil-square-o fa-5x"></i>
    <h1>お近くの公証役場で公証人、証人の目撃の下署名をしていただくことで、秘密証書遺言方式に則り、遺言書が法的に有効となります。</h1>
  </div> <!-- /test -->
  </div> <!-- /boxA -->

  <div class="explain">
        <div class="start">
            <p class="d_btn"><a href="" class="btn">始める</a></p>
        </div>
</div> <!-- /explain -->


<!--   <div class="front-loop-cont">
 -->  
<!-- 
<?php
      $i = 1;
      if ( have_posts() ) :
        // wp_reset_query();

        $args=array(
            'meta_query'=>
            array(
              array(  'key'=>'bzb_show_toppage_flag',
                         'compare' => 'NOT EXISTS'
              ),
              array(  'key'=>'bzb_show_toppage_flag',
                        'value'=>'none',
                        'compare'=>'!='
              ),
             'relation'=>'OR'
          ),
            'showposts'=>5,
            'meta_key'=>'views',
            'orderby'=>'meta_value_num',
            'order'=>'DESC'
          );
        query_posts($args);
        // query_posts('showposts=5&meta_key=views&orderby=meta_value_num&order=DESC');
        while ( have_posts() ) : the_post();

        $cf = get_post_meta($post->ID);
        $rank_class = 'popular_post_box rank-'.$i;
        // print_r($cf);
?>

  <article id="post-<?php echo the_ID(); ?>" <?php post_class($rank_class); ?>>
    <a href="<?php the_permalink(); ?>" class="wrap-a">

      <?php if( get_the_post_thumbnail() ) { ?>
      <div class="post-thumbnail">
        <?php the_post_thumbnail('loop_thumbnail'); ?>
      </div>
      <?php } else{ ?>
        <img src="<?php echo get_template_directory_uri(); ?>/lib/images/noimage.jpg" alt="noimage" width="800" height="533" />
      <?php } // get_the_post_thumbnail ?>
    <p class="p_category"><?php $cat = get_the_category(); $cat = $cat[0]; {
        echo $cat->cat_name;
      } ?></p>
    <h3><?php the_title(); ?></h3>
    <p class="p_rank">NO.<span><?php echo $i; ?></span></p>
    
    </a>
  </article>

<?php
        $i++;
        endwhile;
      endif;
?>

 -->
<!-- 

</div>/front-loop-cont
 -->

</div><!-- /wrap -->
</div><!-- popular_post_content -->


<!-- 上と重複させて料金プランに -->
<div id="popular_post_content" class="front-loop">

<h2>料金設定</h2>


<div class="wrap">
<div class="clearfix boxA">
  <div class="test">
    <h2 class="midashi"> お一人様
    </h2>
    <i class="fa fa-user fa-5x"></i>
    <h1>無料です</h1>
  </div>
  <div class="test">
    <h2 class="midashi"> ご夫婦
    </h2>
    <i class="fa fa-camera-retro fa-5x"></i>
    <h1>1万円です</h1>
  </div>
  <div class="test">
    <h2 class="midashi"> 世帯主様
    </h2>
    <i class="fa fa-users fa-5x"></i>
    <h1>3万円です</h1>
  </div> <!-- /test -->
  </div> <!-- /boxA -->

  <div class="explain">
        <div class="start">
            <p class="d_btn"><a href="" class="btn">始める</a></p>
        </div>
</div> <!-- /explain -->
  </div> <!-- /wrap -->
  </div> <!-- /front-loop -->

  <!-- 以上料金プラン -->

<!-- 上と重複させて特記事項に -->
<div id="popular_post_content" class="front-loop">

<h2>最高品質の法的書類をお届けします。</h2>


<div class="wrap">
<div class="clearfix boxA">
  <div class="test">
    <h2 class="midashi">確かな専門性
    </h2>
    <i class="fa fa-pencil fa-5x"></i>
    <h1>Dr.遺言書は資産管理に精通した弁護士達によって支えられています。</h1>
  </div>
  <div class="test">
    <h2 class="midashi"> 遺言書は十人十色
    </h2>
    <i class="fa fa-camera-retro fa-5x"></i>
    <h1>貴方の独自の状況に合わせて作成されます。</h1>
  </div>
  <div class="test">
    <h2 class="midashi"> 様々な用途
    </h2>
    <i class="fa fa-camera-retro fa-5x"></i>
    <h1>自筆証書遺言の見本、公正証書遺言の原案（下書き）としてもご利用頂けます。</h1>
  </div> <!-- /test -->
  </div> <!-- /boxA -->

  <div class="explain">
        <div class="start">
            <p class="d_btn"><a href="" class="btn">始める</a></p>
        </div>
</div> <!-- /explain -->
  </div> <!-- /wrap -->
  </div> <!-- /front-loop -->

  <!-- 以上特記事項 -->

<!-- 上と重複させてセキュリティに -->
<div id="popular_post_content" class="front-loop">

<h2>安心・安全のために</h2>


<div class="wrap">
<div class="clearfix boxA">
  <div class="test">
    <h2 class="midashi">データの暗号化
    </h2>
    <i class="fa fa-lock fa-5x"></i>
    <h1>お客様のデータは全て暗号化して厳重に管理しています。</h1>
  </div>
  <div class="test">
    <h2 class="midashi"> プライバシーの厳守
    </h2>
    <i class="fa fa-shield fa-5x"></i>
    <h1>個人情報の適切な管理を証明するため、一般財団法人日本情報経済社会推進協会による厳正な審査の上、Pマークを取得しております。また、社内に個人情報保護士の資格を有する最高情報責任者（CIO）を置き、安心してお使いいただける体制を構築しております。</h1>
  </div>
  <!-- <div class="test">
    <h2 class="midashi"> 
    </h2>
    <i class="fa fa-camera-retro fa-5x"></i>
    <h1>3万円です</h1>
  </div>  -->
  </div> <!-- /boxA -->

  <div class="explain">
        <div class="start">
            <p class="d_btn"><a href="" class="btn">始める</a></p>
        </div>
</div> <!-- /explain -->
  </div> <!-- /wrap -->
  </div> <!-- /front-loop -->

  <!-- 以上セキュリティ -->

<!-- 
<div id="recent_post_content" class="front-loop">

<h2><i class="fa fa-clock-o"></i> 機能</h2>
<div class="wrap">
  <div class="front-loop-cont">
<?php
      $i = 1;
      wp_reset_query();

        $args=array(
            'meta_query'=>
            array(
              array(  'key'=>'bzb_show_toppage_flag',
                         'compare' => 'NOT EXISTS'
              ),
              array(  'key'=>'bzb_show_toppage_flag',
                        'value'=>'none',
                        'compare'=>'!='
              ),
             'relation'=>'OR'
          ),
            'showposts'=>5,
            'order'=>'DESC'
          );

      query_posts($args);
      
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();

        $cf = get_post_meta($post->ID);
        $recent_class = 'popular_post_box recent-'.$i;
?>

  <article id="post-<?php echo the_ID(); ?>" <?php post_class($recent_class); ?>>
      <a href="<?php the_permalink(); ?>" class="wrap-a"><?php if( get_the_post_thumbnail() ) { ?>
        <div class="post-thumbnail">
        <?php the_post_thumbnail('loop_thumbnail'); ?>
        </div>
        <?php } else{ ?>
          <img src="<?php echo get_template_directory_uri(); ?>/lib/images/noimage.jpg" alt="noimage" width="800" height="533" />
        <?php } // get_the_post_thumbnail ?>
            <p class="p_category"><?php $cat = get_the_category(); $cat = $cat[0]; {
          echo $cat->cat_name;
        } ?></p>
            <h3><?php the_title(); ?></h3>
            <p class="p_date"><span class="date-y"><?php the_time('Y'); ?></span><span class="date-mj"><?php the_time('m/j'); ?></span></p></a>
  </article>

<?php
        $i++;
        endwhile;
      endif;
?>

</div>

        <div class="start">
            <p class="d_btn"><a href="<?php echo $url;?>" class="btn">始める</a></p>
        </div>

</div>
</div>
 -->




<!-- クローズアップ -->
<!-- <div id="front-contents" class="front-main-cont">
<?php
  $icon = 'none';
  $bzb_ruby = '';
  $bzb_catch = '';
  $title = '';
  $bzb_contents_header_array = get_option('bzb_contents_header');
  if(is_array($bzb_contents_header_array)){
    extract($bzb_contents_header_array) ;
  }
?>
  <header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="<?php echo $icon;?>"></i></div>
    <h2 class="cont-title"><?php echo $title;?>くろーずあっぷ</h2>
    <p class="cont-ruby"><?php echo $ruby;?>へへへ</p>
    <div class="tri-border"><span></span></div>
  </header>

<?php
  $i = 1;
  $bzb_contents = get_option('bzb_contents');
  if(is_array($bzb_contents)){
    $left_right = "";
  foreach((array)$bzb_contents as $key => $value){
    $left_right = ($i % 2 == 1) ? 'left' : 'right';
    extract(make_info_4top($value));
?>
  <section id="front-contents-1" class="c_box c_box_<?php echo $left_right;?>">
    <div class="wrap">
      <div class="c_box_inner">
        <div class="c_title">
          <p class="c_number"><?php echo $i;?></p>
          <h3><?php echo $title; ?></h3>
          <p class="c_english"><?php echo $bzb_ruby;?></p>
        </div>
        <div class="c_img_box" style="background-image:url(<?php echo $image;?>)"></div>
        <div class="c_text">
          <h4><?php echo nl2br($bzb_catch);?></h4>
          <p><?php echo $content;?></p>
          <?php if($button_url != ''){ ?>
          <p class="c_btn"><a href="<?php echo $button_url;?>" class="btn"><?php echo $button_text;?></a></p>
          <?php }else{ ?>
          <p class="c_btn"><a href="<?php echo $url;?>" class="btn">詳しく見る</a></p>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
<?php 
  $i++;
    }
  } 
?>


</div> --><!-- /front-contents -->



<!-- サービス紹介 -->
<?php
  $icon = 'none';
  $title = '';
  $bzb_ruby = '';
  $bzb_catch = '';
  $bzb_service_header_array = get_option('bzb_service_header');
  if(is_array($bzb_service_header_array)){
    extract($bzb_service_header_array) ;
  }

?>
<div id="front-service" class="front-main-cont">

  <header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="<?php echo $icon;?>"></i></div>
    <h2 class="cont-title"><?php echo $title;?>使い方</h2>
    <p class="cont-ruby"><?php echo $ruby;?>クリック。印刷。署名。</p>
    <div class="tri-border"><span></span></div>
  </header>


  <div class="wrap">
    <div class="front-service-inner">

<?php
  $i = 1;
  $bzb_service = get_option('bzb_service');
  if(isset($bzb_service)){
  foreach((array)$bzb_service as $key => $value){
    extract(make_info_4top($value));
?>
      <section id="front-service-1" class="c_box">
        <div class="c_title">
          <h3><?php echo $title;?>あああ</h3>
          <p class="c_english"><?php echo $bzb_ruby;?></p>
        </div>
        <div class="c_text">
          <h4><?php echo nl2br($bzb_catch);?>えええ</h4>
          <p><?php echo $service;?></p>
          <?php if(isset($button_text) && $button_text !== '') { ?>
            <p class="c_btn"><a href="<?php echo $button_url;?>" class="btn"><?php echo $button_text;?></a></p>
          <?php }else{ ?>
            <p class="c_btn"><a href="<?php echo $url;?>" class="btn">詳しく見る</a></p>
          <?php } ?>
        </div>
      </section>
  <?php
    }
  }
  ?>    
    </div>
  </div>

</div><!-- /front-contents -->






<!-- お問い合わせ -->
<div id="front-contact" class="front-main-cont">
  <?php 

  $icon = 0;
  $titile = '';
  $ruby = '';
  $bzb_contact_header_array = get_option('bzb_contact_header');
  if(is_array($bzb_contact_header_array)){
    extract($bzb_contact_header_array) ;
  }

  $bzb_contact_textarea = get_option('bzb_contact_textarea');
  ?>

  <header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="<?php echo $icon;?>"></i></div>
    <h2 class="cont-title"><?php echo $title;?>メディア掲載</h2>
    <p class="cont-ruby"><?php echo $ruby;?></p>
    <div class="tri-border"><span></span></div>
  </header>

  <section id="front-contents-1" class="c_box c_box_left">
    <div class="wrap">
      <div class="c_box_inner">
        <?php echo $content = apply_filters( 'the_content', $bzb_contact_textarea, 10 ); ?>
      </div>
    </div>
  </section>
</div><!-- front-contact -->


  </div><!-- /main-inner -->
</div><!-- /main -->
  
</div><!-- /content -->
<?php get_footer(); ?>


