<html>
    <body>
        <?php
            include_once('Renderer/VueRenderer.php');

            $renderer = new \Renderer\VueRenderer();

            try {
                $renderer
                    ->addSources([
                        file_get_contents('../web/server.js')
                    ])
                    ->setProps([
                        'navigation' => [
                            ['name' => 'Test1'],
                            ['name' => 'Test2']
                        ]
                    ])
                    ->echo();
            } catch(V8JsException $e) {
                var_dump($e);
            }
        ?>
    </body>
</html>
