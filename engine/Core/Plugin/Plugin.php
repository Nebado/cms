<?php

namespace Engine\Core\Plugin;

use \Engine\Service;

class Plugin extends Service
{
    public function install($directory)
    {
        $this->getLoad()->model('Plugin');

        $pluginModel = $this->getModel('plugin');

        if (!$pluginModel->isInstallPlugin($directory)) {
            $pluginModel->addPlugin($directory);
        }
    }

    public function activate($id, $active)
    {
        $this->getLoad()->model('Plugin');

        $pluginModel = $this->getModel('plugin');
        $pluginModel->activatePlugin($id, $active);
    }

    public function getActivatePlugins()
    {
        $this->getLoad()->model('Plugin');

        $pluginModel = $this->getModel('plugin');

        return $pluginModel->getActivePlugins();
    }
}
