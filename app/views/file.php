<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $name ?> - Felicity'16 Organise</title>
        <script src="<?= base_url() ?>js/lib/marked.min.js"></script>
        <link rel="stylesheet" href="<?= base_url() ?>css/common.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/file.css">
    </head>
    <body>
        <?php
            if ($is_admin):
        ?>
        <div class="admin_panel">
            <a href="edit">Edit</a>
        </div>
        <?php
            endif;
        ?>
        <nav>
            <a href="..">Go back to directory</a>
        </nav>
        <article class="file">
            <h1 class="file_title"><?= $name ?></h1>
            <section id="file_md" class="file_content"><?= $data ?></section>
        </article>
        <script>
            (function(){
                // Convert markdown
                file_md = document.getElementById('file_md');
                mdText = file_md.innerHTML;
                file_md.innerHTML = marked(mdText);
            })();
        </script>
    </body>
</html>
