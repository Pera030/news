<?php require('partials/header.php');?>
    
<!--  Header  -->
    <header>
        <div class="container">
            <div class="col">
                <h1>Your news portal</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Laborum debitis perspiciatis exercitationem voluptates autem quae!</p>
                <button type="button">Try for free</button>
            </div>
            <div class="col">
                <h4>Subscribe today</h4>
                <p>Subscribe to our weekly Newsletter br and receive updates via email.</p>
                <form>
                    <input type="text" placeholder="How my I help">
                    <input type="submit" value="search">
                </form>
            </div>
        </div>    
    </header>
    
<!--  Main Content  -->
    <section class="main container">
    <!--  Main article  -->
        <article>
            <div class="post">
                <img src="img/blog1.jpg" alt="">
                <div class="text">
                    <span><i class="fab fa-facebook-square"></i>&nbsp; facebook</span>
                    <span><i class="fab fa-twitter"></i>&nbsp; twitter</span>
                    <h2>Blog one</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque debitis incidunt vero. Soluta perspiciatis, aliquid ad dolor perferendis fugit id itaque accusantium rem, nam quam alias dolores fuga autem, possimus.</p>
                    <p>Date: <a href="">22.may 2020</a> | by <a href="">Admin</a></p>
                </div>
            </div>
            <div class="post">
                <img src="img/blog2.jpg" alt="">
                <div class="text">
                    <span><i class="fab fa-facebook-square"></i>&nbsp; facebook</span>
                    <span><i class="fab fa-twitter"></i>&nbsp; twitter</span>
                    <h2>Blog two</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque debitis incidunt vero. Soluta perspiciatis, aliquid ad dolor perferendis fugit id itaque accusantium rem, nam quam alias dolores fuga autem, possimus.</p>
                    <p>Date: <a href="">22.may 2020</a> | by <a href="">Admin</a></p>
                </div>
            </div>
            <div class="post">
                <img src="img/blog3.jpg" alt="">
                <div class="text">
                    <span><i class="fab fa-facebook-square"></i>&nbsp; facebook</span>
                    <span><i class="fab fa-twitter"></i>&nbsp; twitter</span>
                    <h2>Blog three</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque debitis incidunt vero. Soluta perspiciatis, aliquid ad dolor perferendis fugit id itaque accusantium rem, nam quam alias dolores fuga autem, possimus.</p>
                    <p>Date: <a href="">22.may 2020</a> | by <a href="">Admin</a></p>
                </div>
            </div>
        </article>
        
    <!--  Aside  -->
        <?php require('partials/sidebar.php');?>
    </section>

<!--  Footer   -->
    <?php require('partials/footer.php');?>