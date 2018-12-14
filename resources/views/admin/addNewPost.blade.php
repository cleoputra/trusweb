<!DOCTYPE html>
<html>
<head>
    <title>Add New Post</title>
  <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
<body>



  <script>
      tinymce.init({
        selector: 'textarea',
        plugins: [
        "link image imagetools preview hr insertdatetime media autosave autolink lists hr preview",
        "template paste textcolor save table code searchreplace visualchars colorpicker "
        ],
        menubar: false,
        image_caption: true,
      });
  </script>


    <div class="top-right links">
        <a href="{{ url('home')}}">Home</a>
        
    </div>
      
  </div>


    <div class="col-md-8">

        <div id="post-header">
        
            <h2 class="text-center">Add New Post</h2>
        
        </div>

        <br/>

        <div id="post-form">
        
              <div class="form-group">
                    <form method="POST" action="{{route('post.add')}}">
                        @csrf
                        <label for="postTitle">Post Title</label>
                        <input class="form-control" name="postTitle" type="text"  value="">
                        <label for="postContent">Post Content</label>
                        <textarea type="text" name="postContent" class="form-control" value="">
                        </textarea>
                       
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                        <label for=""></label>
                        <input type="submit" class="btn btn-success btn-block" name="" >     
                    </form>   
                </div>
            
            
        </div>
    
    </div> <!-- Main Area -->
</html>
</body>