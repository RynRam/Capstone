<style type="text/css">
   #main{
    background: linear-gradient(rgba(139, 69, 19, 0.6), rgba(139, 69, 19, 0.6)), url(../../images/backend_images/Blogs/blog3.jpg) fixed center center;
    background-size: cover;
   }
   #services {
    background: linear-gradient(rgba(139, 69, 19, 0.6), rgba(139, 69, 19, 0.6)), url('../../images/backend_images/Blogs/blog3.jpg') fixed center center;
  background-size: cover;
  padding: 40px 0;
}
        #about {

  position: relative;
    background: linear-gradient(rgba(139, 69, 19, 0.6), rgba(139, 69, 19, 0.6)), url('../../images/backend_images/Blogs/blog3.jpg') fixed center center;
  background-size: cover;
  padding: 40px 0;
}
 </style> 
  <main id="main" class="wow fadeInUp">
      <section id="form">
        <div class="container">

          <header class="section-header wow fadeInUp" style="padding-top: 45px;">
            <h3>Fill Up</h3>
            <p>It’s easy, just fill up the form below with the necessary details</p>
          </header>

          <div class="row section-bg">
            <div class="form">
              <div class="col-md-12"><h3 style="border-bottom: 1px solid #222;">Contact Information</h3><div>
              <form action="/basic-catering" method="post" role="form" class="contactForm">
                  {{csrf_field()}}
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" name="fname" class="form-control" id="name" placeholder="First Name" required="true"  />
                    <div class="validation"></div>
                  </div>
                    <div class="form-group col-md-6">
                    <input type="text" name="lname" class="form-control" id="name" placeholder="Last Name" required="true" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" required="true">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="contact" placeholder="Contact No.(Ex. 09#########)" required="true"  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="address" id="address" placeholder="Complete Address" required="true" />
                  <div class="validation"></div>
                </div>
                <h3 style="border-bottom: 1px solid #222;">Reservation Details</h3>
                <!-- Food Package -->
                <div class="scoped"> 
                  <!-- checkbox style -->
                   <style scoped>
                      .scoped{
                        text-align: center;
                      }
                      @media (min-width: 1025px){
                        .scoped ul{
                        list-style-type: none;
                        text-align: center;
                      }
                       .scoped p {
                        color: #FFF;
                        padding: 5px;
                        background: #330101;
                        font-size:13px;
                        display: block !important;
                      }
                      .scoped li {
                        display: inline-block;
                      }
                      
                      input[type="radio"][id^="cb"] {
                        display: none;
                      }
                      
                      .scoped label{
                        border: 1px solid #fff;
                        padding: 10px;
                        display: block;
                        position: relative;
                        margin: 10px;
                        cursor: pointer;
                      }
                      
                      .scoped label:before {
                        background-color: white;
                        color: white;
                        content: " ";
                        display: block;
                        border-radius: 50%;
                        border: 1px solid grey;
                        position: absolute;
                        top: -5px;
                        left: -5px;
                        width: 25px;
                        height: 25px;
                        text-align: center;
                        line-height: 28px;
                        transition-duration: 0.4s;
                        transform: scale(0);
                      }
                      
                      .scoped label img {
                        height: 250px !important;
                        width: 250px !important;
                        transition-duration: 0.2s;
                        transform-origin: 50% 50%;
                        object-fit:cover;
                      }
                      
                      :checked + label {
                        border-color: #ddd;
                      }
                      
                      :checked + label:before {
                        content: "✓";
                        background-color: #18d36e !important;
                        transform: scale(1);
                      }
                      
                      :checked + .scoped label img {
                        transform: scale(0.9);
                        box-shadow: 0 0 5px #333;
                        z-index: -1;
                      }
                        }
                      @media (min-width: 320px){
                       .scoped label img {
                        height: 100px;
                        width: 100px;
                        transition-duration: 0.2s;
                        transform-origin: 50% 50%;
                         }
                      .scoped p {
                        font-size:13px;
                        display: none;
                        }
                        .scoped ul{
                        list-style-type: none;
                        padding: 0;
                        }
                      
                      .scoped li {
                        display: inline-block;
                        }
                      
                      input[type="radio"][id^="cb"] {
                        display: none;
                        }
                      
                      .scoped label{
                        border: 1px solid #fff;
                        padding: 10px;
                        display: block;
                        position: relative;
                        margin: 10px;
                        cursor: pointer;
                        }
                      
                      .scoped label:before {
                        background-color: white;
                        color: white;
                        content: " ";
                        display: block;
                        border-radius: 50%;
                        border: 1px solid grey;
                        position: absolute;
                        top: -5px;
                        left: -5px;
                        width: 25px;
                        height: 25px;
                        text-align: center;
                        line-height: 28px;
                        transition-duration: 0.4s;
                        transform: scale(0);
                        }
                      
                      :checked + label {
                        border-color: #f7f7f7;
                        }
                      
                      :checked + label:before {
                        content: "✓";
                        background-color: #18d36e !important;
                        transform: scale(1);
                        }
                      
                      :checked + .scoped label img {
                        transform: scale(0.9);
                        box-shadow: 0 0 5px #333;
                        z-index: -1;
                        }
                      }
                  </style>  
                  <!-- end style -->
                  <div class="w-100">
                    <label for="package">Packages (<i>Required</i>)</label>
                    <ul class="customr-control" name="package">
                       <?php $pl = 100;?>
                      @foreach($package as $package)  
                        <li>
                           <?php echo '<input type="radio" id="cb'.$pl.'" value="'.$package->id.'" data-checkbox-value="'.$package->id.'" name="package" required>'; ?>
                            <?php echo '<label for="cb'.$pl.'">'?><img src="{{asset('storage/upload/'.$package->file)}}">
                                <p class="text-center">{{$package->name}} <br>   &#8369;{{$package->price}} per head</p>
                            </label>
                        </li>
                        <?php $pl++;?>
                    @endforeach
                    </ul>
                  </div>
                </div>  
                <!-- End Food Package -->
                <div class="col-md-12">
                <div class="form-group col-md-3" style="display: inline-block;">
                  <label >Event Schedule</label>
              <input type="date" id="schedule" class="form-control fa fa-calendar" name="schedule" placeholder="Schedule" value="<?php date_default_timezone_set('Asia/Manila'); echo date('Y-m-d'); ?>">
                </div>
                <div class="form-group col-md-2" style="display: inline-block;">
                <label >Event Venue</label>
                <select class="form-control" name="venuename" id="select">
                  @foreach($venue as $venue)         
                  <option value="{{$venue->name}}">{{$venue->name}}</option>
                 @endforeach
                </select>
                </div>
               <div class="form-group col-md-2" style="display: inline-grid;">  
                <input type="text" id="venue" name="others" class="form-control" placeholder="(optional)">
                <button class="add-button" id="add" type="button">Add</button>
               </div>
                 <div class="form-group col-md-2" style="display: inline-block;">
                <label >Event Category</label>
                <select class="form-control" name="category">
                  @foreach($catering as $catering)                
                  <option value="{{$catering->id}}">{{$catering->name}}</option>
                 @endforeach
                </select>
              </div>
                <div class="form-group col-md-2" style="display: inline-block;">
                <label >Number of Pax (min:50)</label>
                  <input type="number" class="form-control" name="people" id="people" required="true" value="50" />
                  <div class="validation"></div>
                </div>
                </div>
                <div class="form-group text-center">
                <button type="submit" class="reserve-button">Send Reservation</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section><!-- #form -->
<div class="col-md-8" style="margin: 0 auto;background: #fff;border-radius: 8px;color: #000;">{!! $calendar_details->calendar() !!}</div>


@include('front.partials.section')
  </main>
