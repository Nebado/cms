<?php $this->theme->header(); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3><?= $page->title; ?></h3>
                <div>
                    <a href="<?php echo $baseUrl . '/page/' . \Engine\Helper\Text::transliteration($page->title) ?>">
                        <?php echo $baseUrl . '/page/' . \Engine\Helper\Text::transliteration($page->title) ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <form id="formPage">
                    <input type="hidden" name="page_id" id="formPageId" value="<?= $page->id; ?>" />
                    <div class="form-group">
                        <label for="formTitle">Title</label>
                        <input type="text" class="form-control" id="formTitle" placeholder="Title" value="<?= $page->title; ?>">
                    </div>
                    <div class="form-group">
                        <label for="formContent">Content</label>
                        <textarea name="content" id="redactor" class="form-control" id="formContent">
                            <?= $page->content; ?>
                        </textarea>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <div class="col">
                    <div>
                        <div class="segments">
                            <p>Update this page</p>
                            <div class="segment">
                            <hr>   
                            </div>
                                </button>
                                <div class="status">
                                    <div class="field">
                                        <label>Status</label>
                                        <select id="status" class="dropdown">
                                            <option value="publish"<?php if ('publish' == $page->status) echo ' selected'; ?>>Published</option>
                                            <option value="draft"<?php if ('draft' == $page->status) echo ' selected'; ?>>In Cart</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="segment">
                                    <button type="submit" class="btn btn-primary" onclick="page.update(this)">Update</button>
                                </div>
                        </div>
                        <hr>
                        <div class="segments">
                            <div class="segment">
                                <h4>Setting</h4>
                                <br>
                            </div>
                            <div class="form segment">
                                <div class="field">
                                    <label>Type page</label>
                                    <select id="type" class="dropdown">
                                        <option value="page">Basic</option>
                                        <?php foreach (getTypes('page') as $key => $type): ?>
                                            <option value="<?php echo $key ?>"<?php if ($key == $page->type) echo ' selected'; ?>>
                                                <?php echo $type ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</main>

<?php $this->theme->footer(); ?>
