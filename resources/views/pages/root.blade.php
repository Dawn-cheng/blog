@extends('layouts.app')
@section('title', '首页')

@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- 指示符 -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- 轮播图片 -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://static.runoob.com/images/mix/img_fjords_wide.jpg" width="100%">
        </div>
        <div class="carousel-item">
          <img src="https://static.runoob.com/images/mix/img_nature_wide.jpg" width="100%">
        </div>
        <div class="carousel-item">
          <img src="https://static.runoob.com/images/mix/img_mountains_wide.jpg" width="100%">
        </div>
      </div>

      <!-- 左右切换按钮 -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <div class="container mt-3">
      <div class="d-flex mb-3">
        <div class="card height-content ml-2 mr-2 p-2" >
          <img class="card-img-top" src="https://static.runoob.com/images/mix/img_avatar.png" alt="Card image" width="80%" height="80%">
          <div class="card-body">
            <p class="card-text">Some example text.</p>
          </div>
        </div>
        <div class="card height-content ml-2 mr-2 p-2" >
          <img class="card-img-top" src="https://static.runoob.com/images/mix/img_avatar.png" alt="Card image" width="80%" height="80%">
          <div class="card-body">
            <p class="card-text">Some example text.</p>
          </div>
        </div>
        <div class="card height-content ml-2 mr-2 p-2" >
          <img class="card-img-top" src="https://static.runoob.com/images/mix/img_avatar.png" alt="Card image" width="80%" height="80%">
          <div class="card-body">
            <p class="card-text">Some example text.</p>
          </div>
        </div>
      </div>

      <div class="d-flex mb-3">
        <div class="card height-content ml-2 mr-2 p-2" >
          <img class="card-img-top" src="https://static.runoob.com/images/mix/img_avatar.png" alt="Card image" width="80%" height="80%">
          <div class="card-body">
            <p class="card-text">Some example text.</p>
          </div>
        </div>
        <div class="card height-content ml-2 mr-2 p-2" >
          <img class="card-img-top" src="https://static.runoob.com/images/mix/img_avatar.png" alt="Card image" width="80%" height="80%">
          <div class="card-body">
            <p class="card-text">Some example text.</p>
          </div>
        </div>
        <div class="card height-content ml-2 mr-2 p-2" >
          <img class="card-img-top" src="https://static.runoob.com/images/mix/img_avatar.png" alt="Card image" width="80%" height="80%">
          <div class="card-body">
            <p class="card-text">Some example text.</p>
          </div>
        </div>
      </div>

      <div class="d-flex mb-3">
        <div class="card height-content ml-2 mr-2 p-2" >
          <img class="card-img-top" src="https://static.runoob.com/images/mix/img_avatar.png" alt="Card image" width="80%" height="80%">
          <div class="card-body">
            <p class="card-text">Some example text.</p>
          </div>
        </div>
        <div class="card height-content ml-2 mr-2 p-2" >
          <img class="card-img-top" src="https://static.runoob.com/images/mix/img_avatar.png" alt="Card image" width="80%" height="80%">
          <div class="card-body">
            <p class="card-text">Some example text.</p>
          </div>
        </div>
        <div class="card height-content ml-2 mr-2 p-2" >
          <img class="card-img-top" src="https://static.runoob.com/images/mix/img_avatar.png" alt="Card image" width="80%" height="80%">
          <div class="card-body">
            <p class="card-text">Some example text.</p>
          </div>
        </div>
      </div>

      <div class="d-flex mb-3">
        <div class="card p-2 flex-fill bg-info height-content ml-2 mr-2">
          <div class="card-body">Basic card</div>
        </div>
        <div class="card p-2 flex-fill bg-info height-content ml-2 mr-2">
          <div class="card-body">Basic card</div>
        </div>
        <div class="card p-2 flex-fill bg-info height-content ml-2 mr-2">
          <div class="card-body">Basic card</div>
        </div>
      </div>

      <div class="d-flex mb-3">
        <div class="card p-2 flex-fill bg-info height-content ml-2 mr-2">
          <div class="card-body">Basic card</div>
        </div>
        <div class="card p-2 flex-fill bg-info height-content ml-2 mr-2">
          <div class="card-body">Basic card</div>
        </div>
        <div class="card p-2 flex-fill bg-info height-content ml-2 mr-2">
          <div class="card-body">Basic card</div>
        </div>
      </div>

    </div>

    <div class="container">
      <ul class="pagination pagination-sm">
        <li class="page-item"><a class="page-link" href="#">上一页</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item"><a class="page-link" href="#">7</a></li>
        <li class="page-item"><a class="page-link" href="#">下一页</a></li>
      </ul>
    </div>
  
@stop

