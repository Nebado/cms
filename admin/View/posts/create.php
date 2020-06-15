<?php $this->theme->header(); ?>

    <main>
      <div class="container">
        <div class="row">
          <div class="col">
            <h3>Create Post</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-9">
            <form>
              <div class="form-group">
                <label for="formTitle">Title</label>
                <input type="text" class="form-control" id="formTitle" placeholder="Title">
              </div>
              <div class="form-group">
                <label for="formContent">Content</label>
                <textarea name="content" id="redactor" class="form-control" id="formContent"></textarea>
              </div>
            </form>
          </div>
          <div class="col-3">
            <div>
              <p>Publish this post</p>
              <button type="submit" class="btn btn-primary" onclick="post.add()">Publish</button>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php $this->theme->footer(); ?>
