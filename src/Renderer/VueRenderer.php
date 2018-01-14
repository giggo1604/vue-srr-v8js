<?php
namespace Renderer;

include_once('JavascriptRenderer.php');

class VueRenderer extends JavascriptRenderer {
    public function __construct() {
        parent::__construct();
        $this->addSources([
            'var process = { env: { VUE_ENV: "server", NODE_ENV: "production" }}; this.global = { process: process };',
            file_get_contents('./../node_modules/vue-server-renderer/basic.js')
        ]);
    }

    public function setProps($props) {
        $this->v8->props = $props;
        return $this;
    }
}
