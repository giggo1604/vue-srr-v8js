<html>
    <body>
        <?php
            include_once('Renderer/VueRenderer.php');

            $renderer = new \Renderer\VueRenderer();

            $app_src = file_get_contents('../web/server.js');

            try {
                echo $renderer->addSources([$app_src])->render();
            } catch(V8JsException $e) {
                var_dump($e);
            }
        ?>
        <script src=client.js></script>
    </body>
</html>