<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color
        {
            color: black;
            padding-bottom: 20px;
        }
        label
        {
          display: inline-block;
          width: 200px;
        }
        .div_design
        {
          padding-bottom: 10px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
              <div class="div_center">
                  <h1 class="font_size">Mahsulotni Qo'shish</h1>
                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="div_design">
                    <label>Mahsulot Nomi :</label>
                    <input class="text_color" type="text" name="title" placeholder="nomini yozing" required="">
                  </div>
                  <div class="div_design">
                    <label>Mahsulot Tavsifi :</label>
                    <input class="text_color" type="text" name="description" placeholder="tavsifini yozing" required="">
                  </div>
                  <div class="div_design">
                    <label>Mahsulot Narxi :</label>
                    <input class="text_color" type="number" name="price" placeholder="narxini yozing" required="">
                  </div>
                  <div class="div_design">
                    <label>Chegirma Narxi :</label>
                    <input class="text_color" type="text" name="dis_price" placeholder="chegirma narxi">
                  </div>
                  <div class="div_design">
                    <label>Mahsulot Miqdori :</label>
                    <input class="text_color" type="number" min="0" name="quantity" placeholder="miqdorini yozing" required="">
                  </div>
                  <div class="div_design">
                    <label>Mahsulot Toifasi :</label>
                    <select class="text_color" name="category" required="">
                        <option value="" selected="">Bu yerga toifa qo'shing</option>
                        @foreach ($category as $category)
                          <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                        @endforeach
                        
                    </select>
                  </div>
                  <div class="div_design">
                    <label>Mahsulot Rasmi :</label>
                    <input type="file" name="image" required="">
                  </div>
                  <div class="div_design">
                      <input type="submit" value="Mahsulot Qo'shish" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>