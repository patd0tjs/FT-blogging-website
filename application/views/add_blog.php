<center>
    <h1>Add Blog</h1>
    <form action="<?=base_url()?>Blogs/add" method="post" class="p-3">
        <div class="form-floating mb-3">
            <input type="text" name="title" class="form-control"placeholder="Name" required>
            <label>Title</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="description" class="form-control"placeholder="Name" required>
            <label>Description</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="content" class="form-control"placeholder="Name" required>
            <label>Content</label>
        </div>
        <input type="submit" class="btn btn-success" value="Post">
    </form>
</center>