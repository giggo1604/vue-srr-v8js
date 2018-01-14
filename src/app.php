<html>
    <body>
        <?php
            include_once('Renderer/VueRenderer.php');

            $renderer = new \Renderer\VueRenderer();

            $app_src = file_get_contents('../web/server.js');

            $props = [
                'navigation' => [
                    ['name' => 'Test1'],
                    ['name' => 'Test2']
                ]
            ];

            try {
                $renderer->addSources([$app_src])
                    ->setProps($props)
                    ->echo();
            } catch(V8JsException $e) {
                var_dump($e);
            }
        ?>
        <script>
            var PHP = { props: <?php echo json_encode($props); ?> }
        </script>
        <script src=client.js></script>
    </body>
</html>