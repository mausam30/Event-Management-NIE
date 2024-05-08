<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event2</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What's On</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">JAN</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">10</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/event1.jpeg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Event 1</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            NIE Mysore
                            </p>
                            <p class="definition"><!--event content definition-->
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">APR</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">29</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/event2.jpeg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Event 2</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            NIE Mysore
                            </p>
                            <p class="definition"><!--event content definition-->
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                           
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">OCT</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">25</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/event3.jpeg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Event 3</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            NIE Mysore
                            </p>
                            <p class="definition"><!--event content definition-->
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">DEC</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">30</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/event4.jpeg" class = "img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Event 4</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            NIE Mysore
                            </p>
                            <p class="definition"><!--event content definition-->
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            
                       </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>