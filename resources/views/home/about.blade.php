<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="/static/res/static/css/main.css">
  <link rel="stylesheet" type="text/css" href="/static/res/layui/css/layui.css">
  <script type="text/javascript" src="/static/res/layui/layui.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
</head>
<body>

  <div class="site-nav-bg">
    <div class="site-nav w1200">
      <p class="sn-back-home">
        <i class="layui-icon layui-icon-home"></i>
        <a href="/index">首页</a>
      </p>
      <div class="sn-quick-menu">
        <div class="login"><a href="/login">登录</a></div>
        <div class="sp-cart"><a href="/shopcart">购物车</a><span>2</span></div>
      </div>
    </div>
  </div>



  <div class="header">
    <div class="headerLayout w1200">
      <div class="headerCon">
        <h1 class="mallLogo">
          <a href="#" title="母婴商城">
            <img src="/static/res/static/img/logo.png">
          </a>
        </h1>
        <div class="mallSearch">
          <form action="" class="layui-form" novalidate>
            <input type="text" name="title" required  lay-verify="required" autocomplete="off" class="layui-input" placeholder="请输入需要的商品">
            <button class="layui-btn" lay-submit lay-filter="formDemo">
                <i class="layui-icon layui-icon-search"></i>
            </button>
            <input type="hidden" name="" value="">
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="content content-nav-base about-content">
    <div class="main-nav">
      <div class="inner-cont0">
        <div class="inner-cont1 w1200">
          <div class="inner-cont2">
            <a href="/commodity">所有商品</a>
            <a href="/buytoday">今日团购</a>
            <a href="/information">母婴资讯</a>
            <a href="/about"  class="active">关于我们</a>
          </div>
        </div>
      </div>
    </div>
    <div class="banner-box">
      <div class="banner"></div>
    </div>
    <div class="brief-content layui-clear w1200">
      <div class="img-box">
        <img src="/static/res/static/img/us_img1.jpg">
        <img class="top" src="/static/res/static/img/us_img2.jpg">
      </div>
      <div class="text">
        <p>我们的母婴产业2016年涉足母婴行业，以品牌经销为主，在强大市场的推动下，于2016年创立自己的独立品牌。公司立足于江西南昌，2年的品牌沉淀和运营经验让我们在行业中获得良好的口碑和市场份额。以直营+连锁加盟模式，让成功可复制，成为越来越多中小投资者的优选项目，更多的妈妈青睐我们的产品。</p>
      </div>
    </div>
    <div class="banner-text">
      <div class="w1200">
        <p>我们的母婴产业2016年涉足母婴行业，以品牌经销为主，在强大市场的推动下，于2016年创立自己的独立品牌。公司立足于江西南昌，2年的品牌沉淀和运营经验让我们在行业中获得良好的口碑和市场份额。以直营+连锁加盟模式，让成功可复制，成为越来越多中小投资者的优选项目，更多的妈妈青睐我们的产品。</p>
      </div>
    </div>
    <div class="after-sale w1200">
      <h4>配送售后</h4>
      <div class="item-box">
        <div class="item item1">
          <div class="img-box">
            <img src="/static/res/static/img/us_icon1.png">
          </div>
          <p>7天无理由退换货</p>
        </div>
        <div class="item item2">
          <div class="img-box">
            <img src="/static/res/static/img/us_icon2.png">
          </div>
          <p>全场满99元顺丰包邮</p>
        </div>
        <div class="item item3">
          <div class="img-box">
            <img src="/static/res/static/img/us_icon3.png">
          </div>
          <p>优质客服服务</p>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">

layui.config({
    base: '/static/res/static/js/util/' //你存放新模块的目录，注意，不是layui的模块目录
  }).use(['mm'],function(){
      var
     mm = layui.mm;
  
    

});
</script>
</body>
</html>