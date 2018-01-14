<?php
namespace Renderer;

class JavascriptRenderer {
    protected $v8;
    protected $sources;

    public function __construct() {
        $this->v8 = new \V8Js();
        $this->sources = [];
    }

    public function addSources ($sources = []) {
        foreach($sources as $source) {
            $this->sources[] = $source;
        }
        return $this;
    }

    public function render() {
        ob_start();

        try {
            foreach($this->sources as $source) {
                $this->v8->executeString($source);
            }
        } catch(V8JsException $e) {
            throw $e;
        }
        
        return ob_get_clean();
    }

    public function echo() {
        echo $this->render();
        return $this;
    }
}
