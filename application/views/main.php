<?php include('home.php') ?>

<link href="http://fonts.googleapis.com/css?family=satisfy" rel = "stylesheet" type="text/css"/>
     <script src=" http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js "></script>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="water-slide" class="carousel slide " data-ride="carousel">
<!--
                    <ol class="carousel-indicators">
                        indicators
                        <li data-target="#water-slide" data-slide-to="0" class="active"></li>
                        <li data-target="#water-slide" data-slide-to="1"></li>
                        <li data-target="#water-slide" data-slide-to="2"></li>
                    </ol>
-->

                    <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active ">
                        <img src="https://www.biotecnika.org/wp-content/uploads/2016/09/1445605262Bisleri_1.jpg" alt="Bisleri" style="height: 400px; width: 1500px" >
                        <div class="carousel-caption">

                        </div>
                    </div>

                    <div class="item ">
                    <img src="http://www.aquafreshgurgaon.com/images/banner6.jpg" alt="Auea" style="height: 400px; width: 1500px">
                        <div class="carousel-caption">

                        </div>
                    </div>

                    <div class="item">
                        <img src="https://i.ytimg.com/vi/tO9efIxkqPU/maxresdefault.jpg" alt="Ice Mountain" style="height: 400px; width: 1500px" >
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#water-slide" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#water-slide" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <style>
            .thumbnail{
                background-color: white;
                
            }
        h1{
            font-size: 30px;
            color: cornflowerblue;
        }
        </style>
 
  
 <?php
    foreach($details as $list): ?>
        <div class="column">
            <div class="col-sm-4 col-md-3">
                <div class="thumbnail">
                    <img style="width: 200px; height: 200px ; " src="<?= base_url('Design/img/').$list->Blogo ?>" alt="<?= $list->Bname  ?>"  >
                    <div class="caption">
                        <h1><?= $list->Bname  ?></h1>
                        <?= form_open("Detail/in/{$list->Bname}"),
                         form_hidden('nam', $list->Bname),
                         form_submit(['value'=>'View Detail', 'class'=>"btn btn-primary"]),
                         form_close();
                         ?>
                     </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>