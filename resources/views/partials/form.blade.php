<section class="container py-5">
    <h1 class="text-center">Add a Manga to the list</h1>
    <form action="/addManga" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Author</label>
            <input type="text" name="author" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Genre</label>
            <input type="text" name="genre" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" name="description" class="form-control">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>