  <!-- footer -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="col-lg-3 col-md-6 footer-links">
            <h4>Payments</h4>
            <ul>
              <li>        
              <div id="paypal-button" style="margin:0 auto;"></div>
              <script src="https://www.paypalobjects.com/api/checkout.js"></script>
              <script>
                paypal.Button.render({
                  // Configure environment
                  env: 'sandbox',
                  client: {
                    sandbox: 'AWbHet5U6VqpDjQ37uksQ7CFs7VlLfu6Hto088Mmf1xO_LOgRbnJhagtXmUjr1FYa5dDjDJlSucsa3Qi',
                    production: 'demo_production_client_id'
                  },
                  // Customize button (optional)
                  locale: 'en_US',
                  style: {
                    size: 'medium',
                    color: 'gold',
                    shape: 'pill',
                  },
              
                  // Enable Pay Now checkout flow (optional)
                  commit: true,
              
                  // Set up a payment
                  payment: function(data, actions) {
                    return actions.payment.create({
                        redirect_urls:{
                          return_url:'http://localhost:8000/execute-payment'
                        },
                      transactions: [{
                        amount: {
                          total: '10000',
                          currency: 'PHP'
                        }
                      }]
                    });
                  },
                  // Execute the payment
                  onAuthorize: function(data, actions) {
                    return actions.redirect();
                    // return actions.payment.execute().then(function() {
                      // Show a confirmation message to the buyer
                      // window.alert('Thankyou For Paying Reservation Fee!');
                    // });
                  }
                }, '#paypal-button');
              
              </script>
              </li>


            </ul>
        </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Help & Support</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
             <li><i class="ion-ios-arrow-right"></i> <a href="/terms&condition">Terms & Conditions</a></li>
         
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <strong>Address: </strong>254 M. Gregorio St. cor Reynoso St San Antonio Cavite City Cavite City, Philippines 4100<br/>
              <strong>Phone:</strong> 0927 999 2081<br>
              <strong>Email:</strong> Lynagailscater@gmail.com<br>
            </p>

            <div class="social-links text-center">
              <a href="https://www.facebook.com/Lynagails-Catering-Services-313110160307/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="https://www.instagram.com/lynagailscatering/"><i class="fa fa-instagram"></i></a>
              <a href="#" class="https://www.pinoyprofessionals.com/Food+Services/20623/lynagails-catering"><i class="fa fa-google-plus"></i></a>
        
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Join Our Mailing List</h4>
            <p>Receive invitations, updates and news</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe" disabled="true">
            </form>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- #footer -->
 <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <a href="https://www.messenger.com/t/313110160307" class="call"><i class="fa fa-comment"></i></a>