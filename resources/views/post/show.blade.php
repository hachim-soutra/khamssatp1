@extends('layouts.app')

@section('content')
          <!--Start Post Section-->
        <section>
          <div class="container">
              <div class="row">
                  @forelse ($posts as $post)
                    <div class="col-lg-4 col-md-6 col-sm-12" >
                        <div class="card mt-2">
                            <div class="card-body">
                                @if ($post->type =="post")
                                    <img src="{{ asset('images/'.$post->img)}}" class="card-img-top" alt="..." style="height: 18rem;">
                                @else
                                    <iframe width="100%" height="18rem"
                                        src={{$post->link."&output=embed"}}>
                                    </iframe>
                                @endif
                                <h5 class="card-title">{{ $post->user->name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at }}</h6>
                                <h6 class="card-subtitle mb-2">{{$post->view }} مشاهدات</h6>
                                <p class="card-text">
                                    {{$post->description }}
                                    <br>
                                    {{-- <a href="{{ $post->lien }}" target="_blank">قراءة المزيد</a> --}}
                                </p>
                                <div class="row">

                                        <div class="col-12">
                                            <form action="{{ route('post.destroy',['post'=> $post])}}" method="POST">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button class="btn btn-primary btn-block" type="submit" name="delete"><i class="fa fa-trash" aria-hidden="true"></i> حدف المنشور </button>
                                            </form>
                                        </div>

                                    @if($post->view >= 100)
                                        <div class="col-12">
                                            <form action="{{ route('post.publish',['post'=> $post])}}" method="POST">
                                                {{ csrf_field() }}
                                                <button class="btn btn-primary btn-block" type="submit" name="delete"><i class="fa fa-trash" aria-hidden="true"></i> إعادة نشر المنشور </button>
                                            </form>
                                        </div>
                                    @endif


                                </div>

                            </div>
                        </div>
                    </div>
                  @empty
                  <div class="col-12">
                      <p>لا يوجد اي مشاركة الان</p>
                  </div>
                  @endforelse
            </div>
          </div>
        </section>
          <!--Start Add Post Modal-->
          <div class="modal fade" id="AddPostModal" tabindex="-1" role="dialog" aria-labelledby="AddPostModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <!--Start Form To Add Post-->
              <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="modal-header">
                      <h5 class="modal-title" id="AddPostModalTitle">أضف مشاركاتك هنا</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <!--Strat Radio Button To Select Post Or Video-->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="video" value="video"  checked="checked">
                            <label class="form-check-label" for="inlineRadio1">أضف فيديو</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="post" value="post">
                            <label class="form-check-label" for="inlineRadio2">أضف منشورا</label>
                        </div>
                        <!--End Radio Button To Select Post Or Video-->

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"> اسم مستعار</span>
                            </div>
                            <input type="text" class="form-control" name="username" @if($login  !=null ) disabled value={{$login->name }} @endIf   aria-label="Username" aria-describedby="basic-addon1">
                          </div>

                        <div class="input-group mb-3 mt-2">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="link_txt">رابط الفيديو</span>
                          </div>
                          <input type="url" class="form-control" name="link" placeholder="رابط الفيديو" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3 mt-2" id="photo_upload">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">رفع الصورة</span>
                          </div>
                          <input type="file" class="form-control" name="photo" placeholder="رفع الصورة.." aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                          <textarea name="desc" class="form-control" placeholder="وصف" aria-label="Username" maxlength="200"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"> إلغاء <i class="fa fa-times" aria-hidden="true"></i></button>
                      <button type="submit" class="btn btn-primary">إرسال <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </form>
              <!--End Form To Add Post-->
              </div>
            </div>
          </div>
          <!--Start Add Post Modal-->
          <!--End Post Section-->
@endsection
@section('js')
<script>
    $(document).ready(function(){
        if($('input[name="type"]').val() == "video"){
               $('#link_txt').text('رابط فيديو يوتيوب');
               $('#photo_upload').hide();
           }else{
                $('#photo_upload').show();
                $('#link_txt').text('رابط قراءة المزيد');

           }
        $('input[name="type"]').on('change', function() {
           if($('input[name="type"]').val() == "video"){

               $('#photo_upload').toggle();
           }else{
                $('#photo_upload').toggle();

           }
           $('#link_txt').text(
                   ('input[name="type"]').val() == "video" ?'رابط فيديو يوتيوب' : 'رابط قراءة المزيد'
                   );
        });
    });
</script>

@endsection
