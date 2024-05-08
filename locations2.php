<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Location2</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/hall1.jpeg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Sir MV Hall</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/hall1.jpeg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>SMALL HALL</h5><!--content title-->
                                                <p>
                                                Hall for Less than 50 people. <br>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>

                                                <p>
                                                
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Sir MV hall</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            NIE Mysore
                            </p>
                            <p class="definition"><!--content body-->
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi adipisci distinctio temporibus repudiandae voluptatum aliquid! 
                            Ipsa qui alias eveniet libero! Cupiditate veritatis unde perferendis ea modi, dolorum obcaecati deleniti ipsa.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/hall2.jpeg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Radhakrishnan Hall</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/hall2.jpeg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>MEDIUM HALL</h5><!--content title-->
                                                <p>
                                                Hall for 60 to 100 people.
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>

                                                <p>
                                                
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Radha krishnan hall</h1><!--location title-->
                            <p class="location">NIE Mysore</p><!--location secondary content-->
                            <p class="definition">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi adipisci distinctio temporibus repudiandae voluptatum aliquid! 
                            Ipsa qui alias eveniet libero! Cupiditate veritatis unde perferendis ea modi, dolorum obcaecati deleniti ipsa.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line--> 
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/hall3.jpeg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">HALL 3</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/hall3.jpeg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>BIG HALL</h5><!--content title-->
                                                <p>
                                                Hall for more than 100 people and less than 200 people.
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>

                                                <p>
                                                
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Sir Azeez Sait</h1>
                            <p class="location">NIE Mysore</p>
                            <p class="definition">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi adipisci distinctio temporibus repudiandae voluptatum aliquid! 
                            Ipsa qui alias eveniet libero! Cupiditate veritatis unde perferendis ea modi, dolorum obcaecati deleniti ipsa.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/hall4.jpeg" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">HALL 4</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/hall4.jpeg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>GRAND HALL</h5>
                                                <p>
                                                Hall for 500 people.
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>
                                                
                                                <p>
                                                
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                                Sunt, soluta quidem aut iusto nemo deleniti ab quam non hic 
                                                ducimus tempore adipisci earum eius numquam cum. Officia est tenetur esse!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">diamond jubliee</h1>
                            <p class="location">Nie Mysore</p>
                            <p class="definition">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi adipisci distinctio temporibus repudiandae voluptatum aliquid! 
                            Ipsa qui alias eveniet libero! Cupiditate veritatis unde perferendis ea modi, dolorum obcaecati deleniti ipsa.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>