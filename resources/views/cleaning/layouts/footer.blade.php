<footer class="main-f">

  <section class='little'>
          <div class='diduknow'>
              <img src="{{ asset('images/didu.svg') }}" width="300px" alt="Plus" priority class="imageplus" />
              <p class='elite'>If you search on the web/internet for “ <span>a Mechanic, Interior Designer, Catering services,
  Plumber, Electrician and many more near me,</span>” you would get hundreds if not thousands of
  results, including dozens of local businesses who allege to be the best. You do not have time to
  vet dozens of professional service providers or businesses.</p><p> Well, searching through such results
  is a thing of the past. You just need someone you can trust, to point you in the right direction;
  period! Rely on Mr.KIM’s national network of vetted, trusted, experienced and reliable local
  professionals service providers for all your project’s service needs in your area. Mr. Kim is here
  to help. You Name it! We do it!</p>
              </div>
              </section>
  
      <section class='newsletter'>
      <div class='newsletters'>
          <h1>Deals, Inspiration, Expert Tips and Trends</h1>
          <p>SignUp for emails to learn more about our special Offers, promotions, Inspiration, Tips, Trends and more...</p>
          <form action="/subscribe" method="POST" class="footer-form">
          @csrf
              <input type='text' name="name" placeholder='Full Name' class='mb-2'/>
              <input type='email' name="email" placeholder='Email Address' class='mb-2'/>
          <p class='papa'>By clicking the button below, I agree to receive periodic deals, inspirations, expert tips, trends, and many more via email from Mr. KIM at the email address I have provided on my own volition. I authorize Mr.KIM to send such messages using automated means or otherwise. I understand that my consent to receive communications in this way is not required as a condition to use Mr.KIM platform. I understand that I may opt-out of receiving emails at any time by clicking Unsubscribe. I have read and agree to the Privacy Policy and Terms  and conditions. I agree that electronic receipt generated from clicking this button shall constitute my electronic signature for purposes of this agreement.</p>
        <button type="submit">SUBSCRIBE</button>
        </form>
      </div>
      </section>
          
  
      <div class="barmain">
          <section class='barbottom'>
              <div class="bottombar">
                  <h4>Download App</h4>
                  <p>Download Mr. Kim App for an unlimited number of Job Opportunities</p>
                  <div>
                      <img src="{{ asset('images/google-store.png') }}" width="183px" alt="Plus" priority class="storeicons" />
                      <img src="{{ asset('images/apple-store.png') }}" width="183px" alt="Plus" priority class="storeicons" />
                 </div>
              </div>
          </section>
       </div>
  
      <section class='mainafoot'>
          <div class='mainfotter'>
            <div class='spotsone'>
              <h4>Mr.KIM ... You Name It! We Do It!</h4>
              <ul>
                <li>
                  <a href=""><p>About Us</p></a>
                </li>
                <li>
                  <a href=""><p>Who We Are</p></a>
                </li>
                <li>
                  <a href=""><p>Our Core Values</p></a>
                </li>
                <li>
                  <a href=""><p>Corporate Responsibility</p></a>
                </li>
                   
              </ul>
            </div>
            <div class='spotstwo'>
              <h4>Customers</h4>
              <ul>
                <li>
                  <a href=""><p>How It Works</p></a>
                </li>
                <li>
                  <a href=""><p>Get The App</p></a>
                </li>
                <li>
                  <a href=""><p>Why choose Mr. Kim</p></a>
                </li>
              </ul>
            </div>
            <div class='spotsthree'>
              <h4>Resources</h4>
              <ul>
                <!-- <li>
                  <a href="/financing"><p>Financing My Project</p></a>
                </li>
                <li>
                  <a href="/solution"><p>Solution Center & Expert Tips</p></a>
                </li> -->
               
                <!-- <li>
                  <a href="/signup"><p>Sign Up As Pro</p></a>
                </li> -->
                <li>
                  <a href=""><p>Legal</p></a>
                </li>
                <li>
                  <a href=""><p>Safety</p></a>
                </li>
  
                
                <li>
                  <a href=""><p>FAQs</p></a>
                </li>
              </ul>
            </div>
            <div class='spotsfour'>
              <h4>Support</h4>
              <ul>
                <li>
                  <a href=""><p>Help</p></a>
                </li>
                
                <li>
                  <a href=""><p>Contact Us</p></a>
                </li>
              </ul>
            </div>
          </div>
      </section>
      <button id="scrollToTop" class="scroll-to-top">↑</button>
  
   
      <section class="main-footer">
              <div class="footer">
                  <p><small>Copyright © <span><script>document.write( new Date().getFullYear() );</script></span> Mr. Kim</small></p>
                  <div class="manure">
                      
                  </div>
                  <div class="socials">
                  <img src="{{ asset('images/facebook.svg') }}" width="30px" alt="facebook" class="facebook" priority/>
                      <img src="{{ asset('images/linkedin.svg') }}" width="30px" alt="linkedin" class="linkedin" priority/>
                      <img src="{{ asset('images/instagram.svg') }}" width="30px" alt="instagram" class="instagram" priority/>
                  </div>
              </div>
          </section>
      </footer>
  
      <script src="{{ asset('js/scroll.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>
      <script src="{{ asset('js/navbar.js') }}"></script>
      <script src="{{ asset('js/slick.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
      
      <script>
      // Check if geolocation is supported
      if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var latitude = position.coords.latitude;
          var longitude = position.coords.longitude;
  
          // Create a Geocoder instance
          var geocoder = new google.maps.Geocoder();
  
          // Define the location based on latitude and longitude
          var latlng = new google.maps.LatLng(latitude, longitude);
  
          // Perform reverse geocoding
          geocoder.geocode({ 'location': latlng }, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
              if (results[0]) {
                // Display the formatted address
                document.getElementById("location").innerText = "Address: " + results[0].formatted_address;
              } else {
                document.getElementById("location").innerText = "No results found";
              }
            } else {
              document.getElementById("location").innerText = "Geocoder failed due to: " + status;
            }
          });
        });
      } else {
        // Geolocation is not supported
        document.getElementById("location").innerText = "Geolocation is not supported by your browser";
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript"  src="{% static 'js/main.js' %}"></script>
    <script type="text/javascript"  src="{% static 'js/jquery-3.7.1.min.js' %}"></script>
    <script type="text/javascript"  src="{% static 'js/navbar.js' %}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $(".slick-slider").slick({
        infinite: true,
        speed: 8000,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
       });
     
     // Image Slider Demo:
     // https://codepen.io/vone8/pen/gOajmOo
    </script>
  
    <script>
      function initialize() {
          const input = document.getElementById('autocomplete');
          const autocomplete = new google.maps.places.Autocomplete(input);
  
          autocomplete.addListener('place_changed', function() {
              const place = autocomplete.getPlace();
              console.log('Selected Place:', place);
  
              // You can extract more details about the place
              // For example:
              const placeName = place.name;
              const placeAddress = place.formatted_address;
              const placeCoordinates = place.geometry.location;
  
              console.log('Name:', placeName);
              console.log('Address:', placeAddress);
              console.log('Coordinates:', placeCoordinates.lat(), placeCoordinates.lng());
  
              // Optionally, you can populate other fields in your form or perform other actions
          });
      }
  
      google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  
  <script>
  
  document.addEventListener('DOMContentLoaded', function () {
    const accordionHeaders = document.querySelectorAll('.accordion-header');
  
    accordionHeaders.forEach(header => {
        header.addEventListener('click', function () {
            const currentlyActiveAccordion = document.querySelector('.accordion-header.active');
            if (currentlyActiveAccordion && currentlyActiveAccordion !== header) {
                currentlyActiveAccordion.classList.toggle('active');
                currentlyActiveAccordion.nextElementSibling.style.display = 'none';
            }
  
            header.classList.toggle('active');
            const content = header.nextElementSibling;
            if (header.classList.contains('active')) {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        });
    });
  });
  
  </script>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const toggleButton = document.getElementById('toggle-button');
      const navbarLinks = document.getElementById('navbar-links');
  
      toggleButton.addEventListener('click', function() {
          navbarLinks.classList.toggle('active');
      });
  });
  </script>
  
  <script>
    function showTabContent() {
      // Hide all content divs
      const contents = document.querySelectorAll('.tab-content');
      contents.forEach(content => content.style.display = 'none');
  
      // Get the selected value from the dropdown
      const selectedValue = document.getElementById('tab-selector').value;
  
      // Show the selected content div
      const selectedContent = document.getElementById(selectedValue);
      if (selectedContent) {
          selectedContent.style.display = 'block';
      }
  }
  
  // Initialize to show the first tab content by default
  document.addEventListener('DOMContentLoaded', () => {
      showTabContent();
  });
  </script>
  
  <script>
    // Toggle mobile menu
  const mobileMenu = document.getElementById('mobileMenu');
  const navLinks = document.getElementById('navLinks');
  
  mobileMenu.addEventListener('click', () => {
      navLinks.classList.toggle('active');
  });
  
  // Toggle profile dropdown menu
  const profileBtn = document.getElementById('profileBtn');
  const dropdownMenu = document.getElementById('dropdownMenu');
  
  profileBtn.addEventListener('click', (e) => {
      e.preventDefault();
      dropdownMenu.classList.toggle('show');
  });
  
  // Close dropdown if clicked outside
  window.addEventListener('click', (e) => {
      if (!profileBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
          dropdownMenu.classList.remove('show');
      }
  });
  
  </script>
  
  <script>
    let subMenu = document.getElementById('subMenu');
    function toggleMenu() {
      subMenu.classList.toggle('open-menu');
    }
  </script>
  
  <script>
    // Get the button
    var scrollTopBtn = document.getElementById("scrollTopBtn");
  
    // Show the button when the user scrolls down 100px from the top
    window.onscroll = function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollTopBtn.style.display = "block";
        } else {
            scrollTopBtn.style.display = "none";
        }
    };
  
    // Function to scroll to the top
    function scrollToTop() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
  </html>
  