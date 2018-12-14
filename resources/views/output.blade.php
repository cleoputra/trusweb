 <!DOCTYPE html>
 <html>
 <head>
 	<title>OUTPUT</title>
	
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>

 <body>
	 <div class="container">
	 	<div class="row text-center">
	 		<div class="col-xs-10 col-xs-offset-1">
	 			<h1>Your Input</h1>	 			
	 		</div>	
	 	</div>
	 	<div class="row-text-center">
	 		<div class="col-xs-10 col-xs-offset-1">
	 			<a href="{{route('post.index')}}">Back</a>
	 		</div>
	 	</div>
	 	<div class="row-text-center">
	 		<div class="col-xs-10 col-xs-offset-1">
	 			{!! $postContent !!}
			</div>
	 	</div>
	 	<div class="row-text-center">
	 		<div class="col-xs-10 col-xs-offset-1">
	 			{!! $postTitle !!}
			</div>
	 	</div>
	 	
	 </div>
 </body>
 </html>