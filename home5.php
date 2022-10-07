<section class="page-section" id="menu">
        
    <div id="portfolio" class="container">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-12 text-center">
                    <h2 class="mb-4">Partner Airlines</h2>
                    <hr class="divider">

                    </div>
                </div>
                <div class="row no-gutters">
                    <?php
                    $cats = $conn->query("SELECT * FROM airlines_list order by rand() asc");
                                while($row=$cats->fetch_assoc()):
                    ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box" href="#">
                            <img class="img-fluid" src="assets/img/<?php echo $row['logo_path'] ?>" alt="" />
                            
                        <div class="port-content text-center">
                           <a class="btn-primary btn">Find Flights</a>
                        </div>
                        </div>
                    </div>