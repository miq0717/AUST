<section class="promo box box-dark">        
    <div class="col-md-9">
    <h1 class="section-heading">Why AUST?</h1>
        <p>Ahsanullah University of Science & Technology is one of the leading University of Bangladesh.It's Ranked No.1 in all private universities of Bangladesh.Our student is now in different countries showing their talent and making our nation proud  </p>   
    </div>  
    
</section><!--//promo-->
<section class="news">
    <h1 class="section-heading text-highlight"><span class="line">Latest News</span></h1>     
    <div class="carousel-controls">
        <a class="prev" href="#news-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
        <a class="next" href="#news-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
    </div><!--//carousel-controls--> 
    <div class="section-content clearfix">
        <div id="news-carousel" class="news-carousel carousel slide">
            <div class="carousel-inner">
                <div class="item active">
                 <?php
                    $con=mysqli_connect("localhost","root","","project");
                    $rslt=mysqli_query($con,"SELECT * from news order by news_id desc");
                    while ($row=mysqli_fetch_array($rslt))
                    {
                ?>
                    <div class="col-md-4 news-item">
                        <h2 class="title"><?php echo $row['news_title'];?></h2>
                        <img class="thumb" src="assets/images/news/news-thumb-1.jpg"  alt="" />
                        <p><?php echo substr($row['news'],0,150);?></p>
                        <a class="read-more" href="news.php">Read more<i class="fa fa-chevron-right"></i></a>                
                    </div>
                <?php
                   }
                ?>
                </div>
                
        </div><!--//news-carousel-->  
    </div><!--//section-content-->     
</section><!--//news-->
<div class="row cols-wrapper">
    <div class="col-md-3">
        <section class="events">
            <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>
            <div class="section-content">
                <div class="event-item">
                <?php
                    $con=mysqli_connect("localhost","root","","project");
                    $rslt=mysqli_query($con,"SELECT * from event order by e_id desc");
                    while ($row=mysqli_fetch_array($rslt))
                    {
                ?> 
                    <p class="date-label">
                        <span class="month"><?php
                                        echo $row['month'];
                                ?></span>
                        <span class="date-number">
                        <?php
                            echo $row['date'];
                        ?>
                        </span>
                    </p>
                    <div class="details">
                        <h2 class="title">
                            <?php
                               echo $row['title'];
                            ?>
                        </h2>
                        <p class="time">
                            <i class="fa fa-clock-o"></i>
                            <?php
                                        echo $row['time'];
                            ?>
                        </p>
                        <p class="location">
                            <i class="fa fa-map-marker"></i>
                                <?php
                                        echo $row['loc'];
                                ?>
                        </p>                            
                    </div>
                    <?php
                        }
                    ?>
                </div>
                
                <a class="read-more" href="event.php">All events<i class="fa fa-chevron-right"></i></a>
            </div><!--//section-content-->
        </section><!--//events-->
    </div><!--//col-md-3-->
    <div class="col-md-6">
        <section class="course-finder">
            <h1 class="section-heading text-highlight"><span class="line">Departments</span></h1>
            <div class="section-content">
                <form class="course-finder-form" action="search.php" method="POST">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 subject">
                            <select class="form-control subject">
                                <option>Choose a Department</option>
                                <option>CSE</option>
                                <option>EEE</option>
                                <option>Civil</option>
                                <option>MPE</option>
                                <option>Textile</option>
                                <option>Architecture</option>
                                <option>BBA</option>
                            </select>
                        </div> 
                        <div class="col-md-7 col-sm-7 keywords">
                            <input class="form-control pull-left" type="text" placeholder="Search keywords" name="srch" />
                            <button type="submit" class="btn btn-theme"><i class="fa fa-search"></i></button>
                        </div> 
                    </div>                     
                </form><!--//course-finder-form-->
                <a class="read-more" href="#">View all Departments<i class="fa fa-chevron-right"></i></a>
            </div><!--//section-content-->
        </section><!--//course-finder-->
        <section class="video">
            <h1 class="section-heading text-highlight"><span class="line">History of AUST</span></h1>
           
            <div class="section-content">    
                                         
                <p class="description">

                Welcome to the AUST Website.
                 
                Sponsored by the Dhaka Ahsania Mission and approved by the Government of the  People's  Republic of Bangladesh, Ahsanullah University of Science and Technology has been successfully carrying out its  noble mission since 1995.
                 
                It maintains close collaboration with the International Association of Universities (IAU), University Grants Commission (UGC), Bangladesh and many other national and  international educational institutions and professional bodies. The Ahsanullah University of Science and Technology will be the premier centre of excellence in science, engineering and technology by creating and transferring knowledge with human touch to the young generations to come to enhance the quality of life in Bangladesh and beyond.The mission of the Ahsanullah University of Science and Technology is to develop human resources in the fields of science, engineering and technology to meet the ever changing needs of the society in the perspective of the highly complex and globalized world and to do so it aims at producing quality graduates imbued with the spirit of ethical values and equipped with knowledge and skills appropriate to the fast changing world so that they can face the challenges successfully wherever they are and contribute to social and economic development of the country in their own humble way.
               </p>
               <p>The aims and objectives of the University can be summarized as follows:</p>
               <p> i. To impart need based programs of science, technology, business and social sciences for the students who will attend classes in the University as well as who are unable to attend classes and desire home based study.</p>
               <p> ii. To offer programs covering all important fields and disciplines of science, technology, medical science, business and social sciences including teachers training.</p>
               <p>iii. To develop programs examining the modern trends on the need and development of science, technology, business, social sciences and human resource development; observing carefully the employment opportunities and market needs both at home and abroad.</p>
               <p> iv. To organize programs in science, technology, business and social science including teachers training for awarding degrees, diplomas and certificate of proficiency at all levels.</p>
               <p>  v. To arrange two methods of delivery <br>
                        a) in-campus education and <br>
                        b) open learning system.</p>
                <p> vi. To go for gradual expansion of departments and programs of learning as per rules and regulations of Private University Act, 1992 and in accordance with the needs of the country and the demand abroad.</p>
            </div><!--//section-content-->
        </section><!--//video-->
    </div>
    <div class="col-md-3">
        <section class="links">
            <h1 class="section-heading text-highlight"><span class="line">Quick Links</span></h1>
            <div class="section-content">
                <p><a href="cse.php"><i class="fa fa-caret-right"></i>Departments</a></p>
                <p><a href="event.php"><i class="fa fa-caret-right"></i>Events</a></p>
                <p><a href="contact.php"><i class="fa fa-caret-right"></i>Contact</a></p>
            </div><!--//section-content-->
        </section><!--//links-->
        <section class="testimonials">
            <h1 class="section-heading text-highlight"><span class="line"> Testimonials</span></h1>
            <div class="carousel-controls">
                <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
            </div><!--//carousel-controls-->
            <div class="section-content">
                <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <blockquote class="quote">                                  
                                <p><i class="fa fa-quote-left"></i>bla bla</p>
                            </blockquote>                
                            <div class="row">
                                
                            </div>                               
                        </div><!--//item-->
                    </div><!--//carousel-inner-->
                </div><!--//testimonials-carousel-->
            </div><!--//section-content-->
        </section><!--//testimonials-->
    </div><!--//col-md-3-->
</div><!--//cols-wrapper-->