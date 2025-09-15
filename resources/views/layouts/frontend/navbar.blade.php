 <!-- MENU -->
 <section class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

         <div class="navbar-header">
             <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                 <span class="icon icon-bar"></span>
                 <span class="icon icon-bar"></span>
                 <span class="icon icon-bar"></span>
             </button>

             <!-- LOGO -->
             <a href="{{ route('fronthero.index') }}" class="navbar-brand">
                 <i class="fa fa-h-square"></i>ealth Center
             </a>
         </div>

         <!-- MENU LINKS -->
         <ul class="nav navbar-nav navbar-right">
             <li><a href="#top" class="smoothScroll">Home</a></li>
             <li><a href="#about" class="smoothScroll">About Us</a></li>
             <li><a href="#team" class="smoothScroll">Doctors</a></li>
             <li><a href="#news" class="smoothScroll">News</a></li>
             <li><a href="#google-map" class="smoothScroll">Contact</a></li>
             <li class="appointment-btn"><a href="#appointment" class="smoothScroll">Make an appointment</a></li>
         </ul>

         <script>
             document.addEventListener("DOMContentLoaded", function() {
                 const sections = document.querySelectorAll("section[id]");
                 const navLinks = document.querySelectorAll(".navbar-nav a.smoothScroll");

                 window.addEventListener("scroll", () => {
                     let current = "";
                     sections.forEach(section => {
                         const sectionTop = section.offsetTop - 70; // offset navbar
                         const sectionHeight = section.offsetHeight;
                         if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
                             current = section.getAttribute("id");
                         }
                     });

                     navLinks.forEach(link => {
                         link.parentElement.classList.remove("active"); // hapus active dari <li>
                         if (link.getAttribute("href") === "#" + current) {
                             link.parentElement.classList.add("active"); // kasih active ke <li>
                         }
                     });
                 });
             });
         </script>

     </div>
 </section>
