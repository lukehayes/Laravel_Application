<h3>Create a new post:</h3>

<form action="{{route('post.store')}}" method="post">
    @csrf
    <input type="text" name="title" id="title" value="" placeholder="New Post Title">

    <textarea id="post-content" name="content" cols="30" rows="10"></textarea>

    <input type="submit" value="Create New Post">
    
</form>
