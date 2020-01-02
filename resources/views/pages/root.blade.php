@extends('layouts.app')
@section('title', '首页')

@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- 指示符 -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
      </ul>

      <!-- 轮播图片 -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="http://54d4a4629fb6b.t73.qifeiye.com/qfy-content/uploads/2015/06/c6bdf6f65f3845da9085e9ae5790b494.jpg" width="100%">
        </div>
        <div class="carousel-item">
          <img src="http://54d4a4629fb6b.t73.qifeiye.com/qfy-content/uploads/2015/06/27f237e6b7f96587b6202ff3607ad88a.jpg" width="100%" >
        </div>
        <div class="carousel-item">
          <img src="http://54d4a4629fb6b.t73.qifeiye.com/qfy-content/uploads/2015/06/c6bdf6f65f3845da9085e9ae5790b494.jpg" width="100%" >
        </div>
        <div class="carousel-item">
          <img src="http://54d4a4629fb6b.t73.qifeiye.com/qfy-content/uploads/2015/06/27f237e6b7f96587b6202ff3607ad88a.jpg" width="100%" >
        </div>
      </div>

      <!-- 左右切换按钮 -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon btn-lg" ></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon btn-lg"></span>
      </a>
    </div>


    <div class="mt-3">
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
    </div>
@stop

