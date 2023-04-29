 <style>
   /* Dropdown Button */
.dropbtn {
  color: #ffffff;
  background:none!important;
  font-size: 16px;
  margin-right: 6px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  color:#ff4a37 !important;
  border:none!important;
  outline:none!important;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

@media screen and (max-width:576px){
    .dropdown {
        margin-left:-10px!important;
}

}
/* Dropdown cheveron icon styling */
.fa-chevron-down{
    font-size:12px!important;
    margin-left:8px!important;
}
/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  background-color: #ff6d6d;
  min-width: 160px; 
  margin-top: 12px;
  left: 5px;
  border-radius:6px;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: #fff!important;
  font-size:13px!important;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;color:#ff4a37 !important}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}

/* Show list of dropdowns in mobile device */
.dropdown-list-phone{
    display:flex;
    flex-direction:column;
    text-align:left;
    box-shadow:0 0.25rem 1rem rgba(0,0,0,0.2);
    margin:10px;
}
.dropdown-list-phone a{
    color:#cbcaca!important;
    padding:5px 0;
}
 </style>
 <header class="u-align-center-sm u-align-center-xs u-black u-clearfix u-header u-header" id="sec-cf8a">
     <div class="u-clearfix u-sheet u-sheet-1">
         <a href="{{ url('/') }}" data-page-id="81999359" class="u-image u-logo u-image-1" data-image-width="2333"
             data-image-height="794" title="Home">
             <img src="{{ asset('assets/public/images/logoforwebsite.svg') }}" class="u-logo-image u-logo-image-1">
         </a>
         <nav class="u-align-left u-menu u-menu-dropdown u-offcanvas u-menu-1">
             <div class="menu-collapse u-custom-font"
                 style="font-size: 1rem; letter-spacing: 0px; font-family: CeraProLight; font-weight: 700;">
                 <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link"
                     href="#">
                     <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="">
                         <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8a8f"></use>
                     </svg>
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="svg-8a8f" x="0px" y="0px" viewBox="0 0 302 302"
                         style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content">
                         <g>
                             <rect y="36" width="302" height="30"></rect>
                             <rect y="236" width="302" height="30"></rect>
                             <rect y="136" width="302" height="30"></rect>
                         </g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                         <g></g>
                     </svg>
                 </a>
             </div>
             <div class="u-custom-menu u-nav-container">
                 <ul class="u-custom-font u-nav u-spacing-20 u-unstyled u-nav-1">
                     <li class="u-nav-item"><a
                             class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white"
                             href="{{ url('/') }}" style="padding: 10px;">Home</a>
                     </li>
                     <li class="u-nav-item"><a
                             class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white"
                             href="{{ url('page?action=about') }}" style="padding: 10px;">About</a>
                     </li>
                     <!-- <li class="u-nav-item"><a
                             class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white"
                             href="{{ url('page?action=services') }}" style="padding: 10px;">Services</a>
                     </li> -->
                     <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Services<i class="fa-solid fa-chevron-down"></i></button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="{{ url('page?action=transporter') }}">Transporter Service</a>
                            <a href="{{ url('page?action=loader') }}">Loader Service</a>
                            <a href="{{ url('page?action=driver') }}">Driver Service</a>
                        </div>
                    </div>
                  
                     <li class="u-nav-item"><a
                             class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white"
                             href="{{ url('page?action=blog') }}" style="padding: 10px;">Blog</a>
                     </li>
                     <li class="u-nav-item"><a
                             class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white"
                             href="{{ url('page?action=contact') }}" style="padding: 10px;">Contact</a>
                     </li>

                 </ul>
             </div>
             <div class="u-custom-menu u-nav-container-collapse">
                 <div
                     class="u-align-left u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                     <div class="u-inner-container-layout u-sidenav-overflow">
                         <div class="u-menu-close"></div>
                         <ul class="u-align-left u-nav u-popupmenu-items u-unstyled u-nav-2">
                             <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                     href="{{ url('page?action=about') }}" style="padding: 10px;">About</a>
                             </li>
                             <!-- <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                     href="{{ url('page?action=services') }}" style="padding: 10px;">Services</a>
                             </li> -->
                             <div class="dropdown">
                                <button class="dropbtn">Services<i class="fa-solid fa-chevron-down"></i></button>
                                <div id="" class="dropdown-list-phone" style="display:flex;flex-direction:column;">
                                    <a href="{{ url('page?action=transporter') }}">Transporter Service</a>
                                    <a href="{{ url('page?action=loader') }}">Loader Service</a>
                                    <a href="{{ url('page?action=driver') }}">Driver Service</a>
                                </div>
                            </div>
                             <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                     href="{{ url('page?action=blog') }}" style="padding: 10px;">Blog</a>
                             </li>
                             <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                     href="{{ url('page?action=contact') }}" style="padding: 10px;">Contact</a>
                             </li>

                         </ul>
                     </div>
                 </div>
                 <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
             </div>
         </nav>
         <div class="u-hidden-xs u-social-icons u-spacing-10 u-social-icons-1">
             <a class="u-social-url" title="facebook" target="_blank"
                 href="https://www.facebook.com/Trollaexpress-101391802454922"><span
                     class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link"
                         preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                         <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c358"></use>
                     </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                         id="svg-c358">
                         <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                         <path fill="#FFFFFF"
                             d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z">
                         </path>
                     </svg></span>
             </a>
             <a class="u-social-url" target="_blank" data-type="LinkedIn" title="LinkedIn"
                 href="https://www.linkedin.com/company/trollaexpress"><span
                     class="u-icon u-social-icon u-social-linkedin u-icon-2"><svg class="u-svg-link"
                         preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                         <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-66f0"></use>
                     </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                         id="svg-66f0">
                         <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                         <path fill="#FFFFFF"
                             d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z">
                         </path>
                     </svg></span>
             </a>
             <a class="u-social-url" target="_blank" data-type="Email" title="Email"
                 href="Contact@trollaexpress.com"><span class="u-icon u-social-email u-social-icon u-icon-3"><svg
                         class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112"
                         style="">
                         <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-919e"></use>
                     </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                         id="svg-919e">
                         <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                         <path id="path3864" fill="#FFFFFF"
                             d="M27.2,28h57.6c4,0,7.2,3.2,7.2,7.2l0,0v42.7c0,3.9-3.2,7.2-7.2,7.2l0,0H27.2
	c-4,0-7.2-3.2-7.2-7.2V35.2C20,31.1,23.2,28,27.2,28 M56,52.9l28.8-17.8H27.2L56,52.9 M27.2,77.7h57.6V43.5L56,61.3L27.2,43.5V77.7z
	">
                         </path>
                     </svg></span>
             </a>
         </div>
     </div>
 </header>

 <script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
 </script>
