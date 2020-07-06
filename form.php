<?php
   include("blocks/head.php");
   $page = "form";
   include("blocks/header.php");
?>  

<div class="main" id="top">
   <div class="main-header px-xl-5 mx-xl-4 px-0 mx-0">
      <div class="header-text px-xl-5 mx-xl-5 px-3 mx-0">
         <h1 class="text-light">Contacts</h1>
         <p class="text-light">Get in touch with by completing the below form or call us now</p>
      </div>
   </div>
   <div class="bg-body">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
         <polygon fill="#fff" points="0,257 0,260 3000,260 3000,0"></polygon>
      </svg>
   </div>
   </div>
   <div class="form-section container pb-5 mb-5">
      <div class="row pb-5">
         <div class="form col-lg-6 col-md-7 offset-lg-1">
            <div class="card">
               <form class="card-body p-5" name="form" enctype="multipart/form-data">
                  <h6 class="form-header">Before You Begin</h6>
                  <div class="form-group">
                     <label class="form-label mb-3" for="branch">Please select the NZLH Branch Closest To You<sup class="text-danger ml-1">*</sup></label> 
                     <select class="select custom-select" id="branch" name="branch" required>
                        <option value=""></option>
                        <option value="Auckland">Auckland</option>
                        <option value="Hamilton">Hamilton</option>
                        <option value="Wellington">Wellington</option>
                     </select>
                        <div class="invalid-feedback">Please select the branch!</div>
                     </div>
                  <h6 class="form-header">Personal Data</h6>
                  <p class="form-text">Before you start please have ready, your passport, birth sertificate, driver's license and any proof of your qualifications.</p>
                  <div class="form-group">
                     <label class="form-label" for="date">Birth Date<sup class="text-danger ml-1">*</sup></label>
                     <input class="form-control" type="date" id="date" name="birthDate" required>
                     <div class="invalid-feedback">Please enter the correct your of your birth!</div>
                  </div>
                  <div class="form-group">
                     <label class="form-label" for="selfie">Take a selfie for your file - [Files of type: jpg, jpeg, gif, png & pdf] (Limited to 1MB)<sup class="text-danger ml-1">*</sup></label>
                     <div class="d-flex">
                        <input class="form-control pb-2" type="file" id="selfie" name="photo" accept=".jpg, .jpeg, .gif, .png, .pdf" required>
                        <!--<button class="upload" type="button">Upload</button> -->
                     </div>
                     <div class="invalid-feedback selfie-feedback">Please check the size of the file!</div>
                  </div>
                  <div class="row">
                     <div class="form-group col-lg-6">
                        <label class="form-label" for="first-name">First name<sup class="text-danger ml-1">*</sup></label>
                        <input class="form-control" type="text" id="first-name"  name="firstName" placeholder="John" maxlength="50" required>
                        <div class="invalid-feedback">Please enter your first name!</div>
                     </div>
                     <div class="form-group col-lg-6">
                        <label class="form-label" for="last-name">Last name<sup class="text-danger ml-1">*</sup></label>
                        <input class="form-control" type="text" id="last-name" name="lastName" placeholder="Smith" maxlength="50" required>
                        <div class="invalid-feedback">Please enter your last name!</div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="form-label" for="email">Email address<sup class="text-danger ml-1">*</sup></label>
                     <input class="form-control" type="email" id="email" name="email" placeholder="j.smith@example.com" required="">
                     <div class="invalid-feedback">Please enter a valid email address!</div>
                  </div>
                  <div class="row">
                     <div class="form-group col-lg-6">
                        <label class="form-label" for="phone">Mobile phone<sup class="text-danger ml-1">*</sup></label>
                        <input class="form-control phone" type="text" id="phone" name="phone" data-format="custom" data-blocks="2 7"
                         placeholder="__-___-___" pattern="\d{2}-\d{3}-\d{3}" required>
                           <div class="invalid-feedback">Please enter your mobile phone!</div>
                     </div>
                     <div class="form-group col-lg-6">
                        <label class="form-label" for="phone">Home phone</label>
                        <input class="form-control phone" type="text" id="homePhone" name="homePhone" data-format="custom" 
                           data-blocks="3 2 2" placeholder="___-__-__" pattern="\d{3}-\d{2}-\d{2}">
                     </div>
                  </div>
                  <div class="send pt-2">
                     <button class="btn btn-primary main-btn" id="submit" type="submit">Submit</button>
                  </div>
               </form>
            </div>
         </div>
         <div class="contact col-lg-4 col-md-4 offset-md-1">
            <h2>Contact details</h2>
            <h3>North America - New York, NY</h3>
            <div class="contact-details">
               <div class="d-flex mb-3">
                  <i class="mt-1 address-icon" data-feather="map-pin"></i>
                  <div>396 Lillian Blvd, Holbrook,
                     <br>
                     NY 11741, USA
                     <br>
                     <a class="map-link" href="#map" data-scroll="">See on the map</a>
                  </div>
               </div>
               <div class="d-flex mb-3">
                  <i class="mt-1 address-icon" data-feather="mail"></i>
                  <div>new.york@example.com</div>
               </div>
               <div class="d-flex mb-3">
                  <i class="mt-1 address-icon" data-feather="phone"></i>
                  <div>+ 1 526 220 0459</div>
               </div>
            </div>
            <h3>Europe - Berlin, Germany</h3>
            <div class="contact-details">
               <div class="d-flex mb-3">
                  <i class="mt-1 address-icon" data-feather="map-pin"></i>
                  <div>Mohrenstrasse 37 10117,
                     <br>
                     Berlin, Germany
                     <br>
                  </div>
               </div>
               <div class="d-flex mb-3">
                  <i class="mt-1 address-icon" data-feather="mail"></i>
                  <div>berlin@example.com</div>
               </div>
               <div class="d-flex align-items-center mb-3">
                  <i class="mt-1 address-icon" data-feather="phone"></i>
                  <div>030 778 345 26</div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="map" id="map">
      <a  href="https://www.google.com/maps/place/396+Lillian+Blvd,+Holbrook,+NY+11741,+USA/@40.7928618,-73.0784627,16.13z/data=!4m5!3m4!1s0x89e8483b8bffed93:0x53467ceb834b7397!8m2!3d40.7940399!4d-73.0737162?hl=en" target="_blank"><img class="img" src="./img/map02.jpg" alt=""></a>
      <img class="marker" src="./img/marker.png" alt="">
   </div>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91476818218!2d-74.11976253858133!3d40.69740344296443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sua!4v1568574342685!5m2!1sen!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"><img src="./img/map01.jpg" alt=""></iframe>
      <!--pop-up -->
      <div class="overlay"></div>
   <div class="popup">
      <div class="xclose"></div>
      <p class="thanks"></p>
      <button class="btn btn-primary main-btn close-button">Close</button>            
   </div>
      <script src="script/form.js"></script>
<?php
   include("blocks/footer.php");
?> 



