<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
require('templates/head.php');

?>

</head>
<body>
    <?php require('templates/navigation.php');?>
    <?php require('templates/banner.php');?>
  <div class="container main">
      <div class="row content">
          <div class="col-md-8">
              <section class="slider">
                    <div id="slider" class="flexslider">
                      <ul class="slides">
                        <li>
                            <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_lemon.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_donut.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_caramel.jpg" />
                            </li>
                        <li>
                            <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_lemon.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_donut.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_caramel.jpg" />
                            </li>
                        <li>
                            <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_lemon.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_donut.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_caramel.jpg" />
                            </li>
                      </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                      <ul class="slides">
                        <li>
                            <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_lemon.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_donut.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_caramel.jpg" />
                            </li>
                        <li>
                            <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_lemon.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_donut.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_caramel.jpg" />
                            </li>
                        <li>
                            <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_lemon.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_donut.jpg" />
                            </li>
                            <li>
                            <img src="images/kitchen_adventurer_caramel.jpg" />
                            </li>
                      </ul>
                    </div>
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            
            <script defer src="flex/js/jquery.flexslider.js"></script>
             <script type="text/javascript">
                    $(function(){
                      SyntaxHighlighter.all();
                    });
                    $(window).load(function(){
                      $('#carousel').flexslider({
                        animation: "slide",
                        controlNav: false,
                        animationLoop: false,
                        slideshow: false,
                        itemWidth: 210,
                        itemMargin: 5,
                        asNavFor: '#slider'
                      });

                      $('#slider').flexslider({
                        animation: "slide",
                        controlNav: false,
                        animationLoop: false,
                        slideshow: false,
                        sync: "#carousel",
                        start: function(slider){
                          $('body').removeClass('loading');
                        }
                      });
                    });
          </script>

            </section>
            <div class="tab-booking">
                <ul class="nav nav-tabs"role="tablist">
                    <li ><a data-toggle="tab" href="#des">Description</a></li>
                    <li ><a data-toggle="tab" href="#tourop">Tour Option</a></li>
                    <li class="active"><a data-toggle="tab" href="#detail">Details Itinerary</a></li>
                </ul>
                <div class="tab-content">
<!--                   description-->
                    <div id="des" class="tab-pane fade ">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur eaque ipsum corporis vero, ex velit assumenda autem qui beatae explicabo reprehenderit voluptatem dignissimos rerum nihil! Corporis aliquam veritatis facere laudantium!</p>
                        <h3>Hightlights</h3>
                        <ul>
                                <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                        </ul>
                        <h3>What's include</h3>
                        <ul>
                            <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                        </ul>
                        <h3>What's inclued</h3>
                        <ul>
                            <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                            <li>Lorem Ipsum is simply dummy text</li>
                        </ul>
                    </div>
<!--                    tour option-->
                    <div id="tourop" class="tab-pane fade ">
<!--                       Bảng 1-->
                        <div class="row wp-tour">
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                        <h3>Standard package 2*</h3>
                                        <h5>Price for Standard package 2*</h5>
                                    </div>
                                    </div>
                                    <div class="wp-in-tour">
                                       <div class="row">
                                            <div class="col-md-12">
                                            <strong>2016</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong>Vaild from</strong><span>:01/01/2016</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong>Vaild to</strong>
                                            <span>:12/31/2016</span>
                                        </div>
                                       </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                            <table class="table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width:90px;">Quantity</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4+</td>
                                                        <td>6+</td>
                                                        <td>8+</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Price/Pax</td>
                                                        <td>1170</td>
                                                        <td>1035</td>
                                                        <td>983</td>
                                                        <td>892</td>
                                                        <td>835</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <p><strong>Price from: &nbsp;&nbsp;&nbsp;&nbsp;</strong>$1170</p>
                                            <p><strong>Promotion:&nbsp;&nbsp;&nbsp;&nbsp;</strong>0%</p>
                                            <p><strong>Single supplement:&nbsp;&nbsp;&nbsp;&nbsp;</strong>$175</p>
                                        </div>
                                        </div>
                                        
                                           <div class="row">
                                                <div class="col-md-12">
                                                <strong>Minium quantity:</strong><span>2</span>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <strong>Maximum quantity:</strong><span>10</span>
                                               </div>
                                           </div>
                                        
                                    </div>
                        </div>
                        <!--                       Bảng 2-->
                        <div class="row wp-tour">
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                        <h3>Standard package 2*</h3>
                                        <h5>Price for Standard package 2*</h5>
                                    </div>
                                    </div>
                                    <div class="wp-in-tour">
                                       <div class="row">
                                            <div class="col-md-12">
                                            <strong>2016</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong>Vaild from</strong><span>:01/01/2016</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong>Vaild to</strong>
                                            <span>:12/31/2016</span>
                                        </div>
                                       </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                            <table class="table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width:90px;">Quantity</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4+</td>
                                                        <td>6+</td>
                                                        <td>8+</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Price/Pax</td>
                                                        <td>1170</td>
                                                        <td>1035</td>
                                                        <td>983</td>
                                                        <td>892</td>
                                                        <td>835</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <p><strong>Price from: &nbsp;&nbsp;&nbsp;&nbsp;</strong>$1170</p>
                                            <p><strong>Promotion:&nbsp;&nbsp;&nbsp;&nbsp;</strong>0%</p>
                                            <p><strong>Single supplement:&nbsp;&nbsp;&nbsp;&nbsp;</strong>$175</p>
                                        </div>
                                        </div>
                                        
                                           <div class="row">
                                                <div class="col-md-12">
                                                <strong>Minium quantity:</strong><span>2</span>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <strong>Maximum quantity:</strong><span>10</span>
                                               </div>
                                           </div>
                                        
                                    </div>
                        </div>
                        <!--                       Bảng 3-->
                        <div class="row wp-tour">
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                        <h3>Standard package 2*</h3>
                                        <h5>Price for Standard package 2*</h5>
                                    </div>
                                    </div>
                                    <div class="wp-in-tour">
                                       <div class="row">
                                            <div class="col-md-12">
                                            <strong>2016</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong>Vaild from</strong><span>:01/01/2016</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <strong>Vaild to</strong>
                                            <span>:12/31/2016</span>
                                        </div>
                                       </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                            <table class="table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width:90px;">Quantity</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td>4+</td>
                                                        <td>6+</td>
                                                        <td>8+</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Price/Pax</td>
                                                        <td>1170</td>
                                                        <td>1035</td>
                                                        <td>983</td>
                                                        <td>892</td>
                                                        <td>835</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <p><strong>Price from: &nbsp;&nbsp;&nbsp;&nbsp;</strong>$1170</p>
                                            <p><strong>Promotion:&nbsp;&nbsp;&nbsp;&nbsp;</strong>0%</p>
                                            <p><strong>Single supplement:&nbsp;&nbsp;&nbsp;&nbsp;</strong>$175</p>
                                        </div>
                                        </div>
                                        
                                           <div class="row">
                                                <div class="col-md-12">
                                                <strong>Minium quantity:</strong><span>2</span>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <strong>Maximum quantity:</strong><span>10</span>
                                               </div>
                                           </div>
                                        
                                    </div>
                        </div>
                        
                        
                    </div>
                    <div id="detail" class="tab-pane fade in active">
                            <!--                           day 1-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-1"><span class="fa fa-plus"></span> Day 1: Noi Bai Arrival</a>
                                </div>    
                                <div id="day-1" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            <!--                           day 2-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-2"><span class="fa fa-plus"></span> Day 2: Hanoi city tour full day(B,L)</a>
                                </div>    
                                <div id="day-2" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            <!--                           day 3-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-3"><span class="fa fa-plus"></span> Day 1: Noi Bai Arrival</a>
                                </div>    
                                <div id="day-3" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            <!--                           day 4-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-4"><span class="fa fa-plus"></span> Day 1: Noi Bai Arrival</a>
                                </div>    
                                <div id="day-4" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            <!--                           day 5-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-5"><span class="fa fa-plus"></span> Day 1: Noi Bai Arrival</a>
                                </div>    
                                <div id="day-5" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            <!--                           day 6-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-6"><span class="fa fa-plus"></span> Day 1: Noi Bai Arrival</a>
                                </div>    
                                <div id="day-6" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            <!--                           day 7-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-7"><span class="fa fa-plus"></span> Day 1: Noi Bai Arrival</a>
                                </div>    
                                <div id="day-7" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            <!--                           day 8-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-8"><span class="fa fa-plus"></span> Day 1: Noi Bai Arrival</a>
                                </div>    
                                <div id="day-8" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            <!--                           day 9-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-9"><span class="fa fa-plus"></span> Day 1: Noi Bai Arrival</a>
                                </div>    
                                <div id="day-9" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            <!--                           day 10-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-10"><span class="fa fa-plus"></span> Day 1: Noi Bai Arrival</a>
                                </div>    
                                <div id="day-10" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            <!--                           day 11-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-11"><span class="fa fa-plus"></span> Day 1: Noi Bai Arrival</a>
                                </div>    
                                <div id="day-11" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            <!--                           day 12-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" href="#day-12"><span class="fa fa-plus"></span> Day 1: Noi Bai Arrival</a>
                                </div>    
                                <div id="day-12" class="panel-body collapse">
                                    Upon arrival at the airport, pickup and transfer to city center by private car and driver. Check in hotel and then free time at your leisure. Overnight at the hotel.
                                </div>
                            </div>
                            
                    </div>
                </div>
            </div>
            
          </div>
          <?php require("templates/sidebar.php");  ?>
      </div>
  </div>
  <?php require("templates/footer.php"); ?>
