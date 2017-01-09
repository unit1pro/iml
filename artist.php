<?php // include 'header.php'; ?>

<div class="">
    <div class="artist-containt">
        <div class="artist_wrapper">
            <div class="artist-text-field">
                <h3>ARTIST</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. 
                </p>
            </div>
            <div id="effect-2" class="effects clearfix">
                <div class="col-md-4 col-sm-4 col-xs-2" style="padding: 0px">
                    <div class="img" >
                        <img class="img-fluid" src="includes/images/artist1.webp">
                        <div class="overlay">
                            <a href="#" class="close-overlay" style="float: right;margin-right: 10px;color: #FFFFFF">X</a>
                            <h3>Artist Name</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-2" style="padding: 0px">
                    <div class="img" >
                        <img class="img-fluid" src="includes/images/artist2.webp">
                        <div class="overlay">
                            <a href="#" class="close-overlay" style="float: right;margin-right: 10px;color: #FFFFFF">X</a>
                            <h3>Artist Name</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-2" style="padding: 0px">
                    <div class="img" >
                        <img class="img-fluid" src="includes/images/artist3.webp">
                        <div class="overlay">
                            <a href="#" class="close-overlay" style="float: right;margin-right: 10px;color: #FFFFFF">X</a>
                            <h3>Artist Name</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-2" style="padding: 0px">
                    <div class="img" >
                        <img class="img-fluid" src="includes/images/artist4.webp">
                        <div class="overlay">
                            <a href="#" class="close-overlay" style="float: right;margin-right: 10px;color: #FFFFFF">X</a>
                            <h3>Artist Name</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-2" style="padding: 0px">
                    <div class="img" >
                        <img class="img-fluid" src="includes/images/artist5.png">
                        <div class="overlay">
                            <a href="#" class="close-overlay" style="float: right;margin-right: 10px;color: #FFFFFF">X</a>
                            <h3>Artist Name</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-2" style="padding: 0px">
                    <div class="img" >
                        <img class="img-fluid" src="includes/images/artist6.webp">
                        <div class="overlay">
                            <a href="#" class="close-overlay" style="float: right;margin-right: 10px;color: #FFFFFF">X</a>
                            <h3>Artist Name</h3>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
</script>
<?php // include 'footer.php'; ?> 