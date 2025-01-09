 <!-- FOOTER-ALT -->
 <div class="footer-alt pt-5 pb-5" id="contact" style="background-color: #293C93; color:#fff">
     <div class="container"">
            <div class=" row">
         <div class="col-lg-12">
             <div>
                 <h2 class="text-center" style="font-size: 66px; font-weight: 400;">Let's Work Together!</h2>
                 <div class="d-flex justify-content-center" style="gap: 45px">
                     <div class="d-flex align-content-center" style="gap: 12px">
                         <img src="<?= base_url('public/images/WhatsApp.png') ?>" alt="wa" width="45" height="45">
                         <div class="text-left">
                             <p style="margin-bottom: -1px;">WHATSAPP US NOW</p>
                             <a href="https://wa.me/6282125267210" target="_blank" rel="noopener noreferrer" style="font-weight: 800; color: #fff">0821-2526-7210</a>
                         </div>
                     </div>
                     <div class="d-flex align-content-center" style="gap: 12px">
                         <img src="<?= base_url('public/images/iphone.png') ?>" alt="wa" width="45" height="45">
                         <div class="text-left">
                             <p style="margin-bottom: -1px;">CALL US TODAY</p>
                             <a href="javascript:void(0)" onclick="copyToClipboard('021-27842125')" style="font-weight: 800; color: #fff">021-27842125</a>
                         </div>
                     </div>
                     <div class="d-flex align-content-center" style="gap: 12px">
                         <img src="<?= base_url('public/images/Email.png') ?>" alt="wa" width="45" height="45">
                         <div class="text-left">
                             <p style="margin-bottom: -1px;">EMAIL US ANYTIME</p>
                             <p style="font-weight: 800;">langitdigital78@gmail.com</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 </div>
 <!-- END FOOTER-ALT -->

 <script>
     function copyToClipboard(text) {
         // Create a temporary input element
         const tempInput = document.createElement("input");
         tempInput.value = text;
         document.body.appendChild(tempInput);

         // Select and copy the text
         tempInput.select();
         tempInput.setSelectionRange(0, 99999); // For mobile devices
         document.execCommand("copy");

         // Remove the temporary input element
         document.body.removeChild(tempInput);

         // Optional: Alert the user
         alert("Copied to clipboard: " + text);
     }
 </script>