<div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">اخر الفيديوهات</h4>
          <p class="card-category">بتم عرض اخر الفيدويهات هنا</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-warning">
              <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>muslim</th>
                    <th>category</th>
                    <th>created_at</th>
                    <th>updated_at</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($video_pag as $video)


                <tr>
                    <td>{{ $video->id }}</td>
                    <td>{{ $video->name }}</td>
                    <td>{{ $video->muslim->name }}</td>
                    <td>{{ $video->cat->name }}</td>
                    <td>{{ $video->created_at->diffForHumans() }}</td>
                    <td>{{ $video->updated_at->diffForHumans() }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">اخر التعليقات</h4>
            <p class="card-category">بتم عرض اخر التعليقات هنا</p>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <tr>
                      <th>ID</th>
                      <th>Comment</th>
                      <th>username</th>
                      <th>video name</th>
                      <th>created_at</th>
                      <th>updated_at</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($comment_pag as $comment)
                  <tr>
                      <td>{{ $comment->id }}</td>
                      <td>{{ $comment->comment }}</td>
                      <td>{{ $comment->user->name }}</td>
                      <td>{{ $comment->video->name }}</td>
                      <td>{{ $comment->created_at->diffForHumans() }}</td>
                      <td>{{ $comment->updated_at->diffForHumans() }}</td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
