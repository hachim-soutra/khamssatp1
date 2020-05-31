<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
          <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" >
          <link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css')}}" >
          <link rel="stylesheet" href="{{ asset('css/main.css')}}">
          <title>Admin</title>
    </head>
    <body>
        <!--Start Navbare Section-->
        <div class="row m-0 p-0">
        <nav class="col-12 navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">شعار</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#"><i class="fa fa-home"></i> الصفحة الرئيسية <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown active">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> الملف الشخصي
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">تعديل الملف الشخصي <i class="fa fa-edit"></i></a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"> تسجيل خروج <i class="fa fa-sign-out"></i></a>
                      </div>
                    </li>

                  </ul>

                  <form class="form-inline ">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">إظهار مشاركات اليوم</a>
                      </li>
                    </ul>
                  </form>
                  <form class="form-inline ">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">إظهار مشاركات اخر 7 ايام</a>
                      </li>
                    </ul>
                  </form>
                  <form class="form-inline ">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">إظهار مشاركات آخر 30 يومًا</a>
                      </li>
                    </ul>
                  </form>
                </div>
            </div>

        </nav>
      </div>
        <!--End Navbare Section-->


          <!--Start Analytic-->
        <section>
          <div class="container text-center mt-3">
            <div class="row">
                <div class="col">
                      <div class="card border-primary mb-3">
                        <div class="card-header"><h1>اليوم</h1></div>
                        <div class="card-body text-primary">
                          <h3 class="card-title"><span>المشاركات</span> 55</h3>
                          <p class="card-text">12000 مشاهدة</p>
                        </div>
                      </div>
                </div>

                <div class="col">
                      <div class="card border-success mb-3">
                        <div class="card-header"><h1>اخر 7 ايام</h1></div>
                        <div class="card-body text-succes">
                          <h3 class="card-title"><span>المشاركات</span> 660</h3>
                          <p class="card-text">40022 مشاهدة</p>
                        </div>
                      </div>
                </div>

                <div class="col">
                      <div class="card border-info mb-3">
                        <div class="card-header"><h1>آخر 30 يومًا</h1></div>
                        <div class="card-body text-info">
                          <h3 class="card-title"><span>المشاركات</span> 4900</h3>
                          <p class="card-text">10089 مشاهدة</p>
                        </div>
                      </div>
                </div>
            </div>
          </div>
        </section>
          <!--End Analytic-->



          <!--Start Post Section-->
        <section>
          <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card mt-2">
                      <div class="card-body">
                        <img src="{{ asset('img/Video.png')}}" class="card-img-top" alt="..." style="height: 18rem;">
                        <h5 class="card-title">اسم المستخدم</h5>
                        <h6 class="card-subtitle mb-2 text-muted">قبل 45 دقيقة</h6>
                        <p class="card-text">بعض الأمثلة السريعة على النص لبناء عنوان البطاقة وتشكيل الجزء الأكبر من محتوى البطاقة</p>
                        <button disabled type="button" class="btn btn-dark">
                          <i class="fa fa-eye" aria-hidden="true"></i> <span class="badge badge-light">320</span>
                        </button>
                        <button class="btn btn-danger" type="button" name="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <button class="btn btn-warning" type="button" name="hide"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                      </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card mt-2">
                      <div class="card-body">
                        <img src="{{ asset('img/Video.png')}}" class="card-img-top" alt="..." style="height: 18rem;">
                        <h5 class="card-title">اسم المستخدم</h5>
                        <h6 class="card-subtitle mb-2 text-muted">قبل 45 دقيقة</h6>
                        <p class="card-text">بعض الأمثلة السريعة على النص لبناء عنوان البطاقة وتشكيل الجزء الأكبر من محتوى البطاقة</p>
                        <button disabled type="button" class="btn btn-dark">
                          <i class="fa fa-eye" aria-hidden="true"></i> <span class="badge badge-light">320</span>
                        </button>
                        <button class="btn btn-danger" type="button" name="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <button class="btn btn-warning" type="button" name="hide"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                      </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card mt-2">
                      <div class="card-body">
                        <img src="{{ asset('img/Video.png')}}" class="card-img-top" alt="..." style="height: 18rem;">
                        <h5 class="card-title">اسم المستخدم</h5>
                        <h6 class="card-subtitle mb-2 text-muted">قبل 45 دقيقة</h6>
                        <p class="card-text">بعض الأمثلة السريعة على النص لبناء عنوان البطاقة وتشكيل الجزء الأكبر من محتوى البطاقة</p>
                        <button disabled type="button" class="btn btn-dark">
                          <i class="fa fa-eye" aria-hidden="true"></i> <span class="badge badge-light">320</span>
                        </button>
                        <button class="btn btn-danger" type="button" name="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <button class="btn btn-warning" type="button" name="hide"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                      </div>
                  </div>
                </div>


            </div>
          </div>
        </section>
          <!--End Post Section-->

          <!--Start Add Post Section-->
          <section>
            <div class="container">
              <div class="row justify-content-md-center form-zon mt-3">
                <div class="col-12 text-center">
                    <h2 class="text-muted">أضف مشاركاتك هنا</h2>
                </div>
                <div class="col-8 ">
                <form class="mt-2" action="{{ route('user.store') }}" method="post">

                    @csrf
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"> اسم مستعار</span>
                      </div>
                      <input type="text" class="form-control" name="username" placeholder=" اسم مستعار" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">رابط الفيديو</span>
                      </div>
                      <input type="text" class="form-control" name="videolink" placeholder="رابط الفيديو" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                      <textarea name="description" class="form-control" placeholder="وصف" aria-label="Username"></textarea>
                    </div>

                    <div class="input-group mb-3">
                      <button type="submit" class="btn btn-success btn-block">  إرسال <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </section>
          <!--End Add Post Section-->


        <!--Start Footer Section-->
            <footer class="FooteSection mt-2">

              <div class="footer-copyright text-center py-3">© 2020 حقوق النشر:
                  <a href="#"> موقع انترنت</a>
              </div>

            </footer>
        <!--End Footer Section-->


          <script src="{{ asset('js/jquery-3.3.1.slim.min.js')}}" ></script>
          <script src="{{ asset('js/popper.min.js')}}" ></script>
          <script src="{{ asset('js/bootstrap.min.js')}}" ></script>
          <script src="{{ asset('js/main.js')}}" ></script>

      </body>
</html>
