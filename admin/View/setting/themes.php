<?php $this->theme->header(); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col page-title">
                <h2 class="ui header">
                    Themes
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="setting-tabs">
                    <?php Theme::block('setting/tabs') ?>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach($themes as $theme): ?>                
                <div class="col">
                    <div class="card">
                        <div class="image">
                            <img src="<?= $theme->screen ?>">
                        </div>
                        <div class="content">
                            <span class="header"><?= $theme->name ?></span>
                            <div class="meta">
                                <span>Version: <?= $theme->version ?></span>
                            </div>
                            <div class="description">
                                <?= $theme->description ?>
                            </div>
                        </div>
                        <div class="extra content">
                            <?php if ($activeTheme == $theme->dirTheme): ?>
                                <button class="button" disabled>
                                    Activated
                                </button>
                            <?php else: ?>
                                <button class="primary button" onclick="setting.setActiveTheme(this, '<?= $theme->dirTheme ?>')">
                                    Activate
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php $this->theme->footer(); ?>
