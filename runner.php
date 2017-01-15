<?php
// 01:50 AM
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            if( !empty( $_GET['html'] ) ) {
                echo $_GET['html'];
            } else {
                echo '<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />';
                echo "\n";
                echo '<i class="fa fa-spinner fa-spin fa-fw"></i> Waiting for input...';
            }
        ?>

        <?php
            if( !empty( $_GET['js'] ) ) {
        ?>
        <script type="text/javascript">

            <?php
                echo base64_decode( $_GET['js'] );
            ?>

        </script>
        <?php
            }
        ?>
    </body>
</html>