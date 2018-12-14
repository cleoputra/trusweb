<!DOCTYPE html>
<html>
<head>
	<title>Post Content</title>
</head>
<body>
	 {{ csrf_field() }}
        <table>
            <tr>
                <th>Title</th><th>Post</th><th>Created At</th>
            </tr>
                @foreach ($post as $posts)
                <tr>
                    <td>{{ $posts->id }}</td>
                    <td>{{ $posts->title }}</td>
                    <td>{{ $posts->post }} </td>
                    <td>{{ $posts->created_at }]</td>
                </tr>
                @endforeach
        </table>
 	           

</body>
</html>