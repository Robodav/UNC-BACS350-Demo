<?php
    /*
        render_page -- build a page with custom settings
    */
    function render_page($site_title, $page_title, $content) {
        return '
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>' . $page_title . '</title>
                    <link rel="icon" type="image/x-icon" href="/bacs350/images/favicon.ico">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://dvandiver.com/bacs350/unc.css">
                </head>
                <body>
                    <header>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1>' . $site_title . '</h1>
                                    <h2>' . $page_title . '</h2>
                                </div>
                                <div class="logo col-sm-4">
                                    <div class="pull-right">
                                        <img class="img-rounded img-responsive"
                                        src="/bacs350/images/David-Vandiver.jpg"
                                        alt="David Vandiver" width="150">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <main>
                        ' . $content . '
                    </main>
                </body>
            </html>
        ';
    }
    /*
        render_card -- build HTML text for a card
    */
    function render_card($title, $body) {
        return '
            <div class="card">
                <div class="card-header">
                    ' . $title . '
                </div>
                <div class="card-body card-padding">
                    ' . $body . '
                </div>
            </div>
        ';
    }

    /*
        render_card -- build HTML text for a card
    */
    function render_super_card($title, $body, $image) {
        return '
            <div class="card">
                <div class="card-header">
                    ' . $title . '
                </div>
                <div class="card-body card-padding">
                    ' . $body . '
                </div>
                <div class="card-image">
                    <img src="' . $image . '" alt="superhero image">
                </div>
            </div>
        ';
    }

    
    /*
        render_markdown -- Read Markdown Text from file and convert into HTML
    */
    function render_markdown($file) {
        $text = file_get_contents($file);
        require_once 'Parsedown.php';
        $converter = new Parsedown();
        return $converter->text($text);
    }
?>