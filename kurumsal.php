<?php

$query = $db->query("SELECT * FROM kurumsal where id=1", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
foreach( $query as $row ){?>

<section class="section normalhead lb">
    <div class="container">
        <div class="section-title text-center">

            <h3>Kurumsal</h3>
        </div><!-- end section-title -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                <h2><?php echo $row["baslik"] ?></h2>
                <p class="lead"><?php echo $row["slogan"] ?></p>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="content col-md-12">
                <div class="blog-box clearfix page-template">
                    <div class="blog-single">
                        <p> <?php echo $row["yazi"] ?> </p>
                    </div><!-- end blog-desc -->
                </div><!-- end blog-box -->
            </div><!-- end content -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->
    <?php
}
}

?>
