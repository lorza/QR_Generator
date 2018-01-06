<html>
    <head>
        <link rel="stylesheet" href="node_modules/bulma/css/bulma.css">
    </head>
    <body>
        <div class="hero is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title has-text-centered">QR Generator</h1>
                    <?php
                        var_dump($_POST["text"]);

                        if ( !isset($_POST["text"]) ) {
                            echo "<div class='QR_PH'></div>";
                        } else {
                            // echo '<img src="qr.php?text="'. $_POST['text'] ." />";

                            echo "<div class='QR_PH'>
                                    <img src='qr.php?text=". $_POST['text'] ."' />
                                  </div> ";
                        }
                    ?>
                    <form method="POST">
                        <div class="field has-addons">
                            <div class="control is-expanded">
                                <input type="text" 
                                    class="input" 
                                    placeholder="Enter URL or string you would like to QR-ify"
                                    name="text"
                                >
                            </div>

                            <div class="control">
                                <input type="submit" class="button is-primary" value="Generate"/>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </body>
</html>

<style>
    .QR_PH {
        height: 200px;
        width: 200px;
        padding: 10px;
        background-color: lightgrey;
        margin: auto;
        margin-bottom: 20px;
    }
</style>