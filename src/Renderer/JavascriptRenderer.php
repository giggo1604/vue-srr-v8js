<?php
namespace Renderer;

class JavascriptRenderer {
    private $v8;
    private $sources;
    private $reset;

    public function __construct() {
        $this->v8 = new \V8Js();
        $this->sources = [];
        $this->reset = true;
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
            foreach($this->sources as $source)
            $this->v8->executeString($source);
        } catch(V8JsException $e) {
            throw $e;
        }
        
        $result = ob_get_clean();

        if ($this->reset === true) {
            $this->sources = [];
        }

        return $result;
    }
}
