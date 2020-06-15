<?php $this->theme->header(); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-title">
                    <h2 class="header">
                        Plugins
                    </h2>
                </div>
            </div>
        </div>

        <div class="col">
            <table class="compact celled definition table">
                <thead class="full-width">
                    <tr>
                        <th>#</th>
                        <th>Plugin</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($plugins as $directory => $plugin): ?>
                        <tr>
                            <td>
                                <div class="fitted toggle checkbox">
                                    <input type="checkbox" data-active="<?php echo $plugin['is_active'] ?>" onchange="plugin.activate(this, <?php echo $plugin['plugin_id'] ?>)"<?php if (isset($plugin['is_active'])) echo ' checked'; ?>>
                                    <label></label>
                                </div>
                            </td>
                            <td>
                                <?= $plugin['name'] ?><br>
                                <?php if (isset($plugin['is_install'])): ?>
                                    <span class="disabled" style="color: #909090">
                                        Installed
                                    </span>
                                <?php else: ?>
                                    <a href="javascript:void(0)" onclick="plugin.install(this, '<?php echo $directory ?>')">
                                        Install
                                    </a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?= $plugin['description'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <button class="padding-right primary-button button">
                        <i class="upload icon"></i> Add Plugin
                    </button>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php $this->theme->footer(); ?>
