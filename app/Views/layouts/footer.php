<footer id="contact" class="container-footer p-5">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h3 class="text-center mb-4 title-footer">Let's Work Together!</h3>
        <div class="d-lg-flex d-sm-flex justify-content-center gap-lg-5">
            <div class="d-flex align-content-center gap-3 mb-sm-3 custom-div-footer">
                <img src="<?= base_url('public/images/WhatsApp.png') ?>" alt="wa" width="45" height="45">
                <div class="text-left">
                    <p style="margin-bottom: -1px;">WHATSAPP US NOW</p>
                    <a href="https://wa.me/6282125267210" class="text-footer" target="_blank" rel="noopener noreferrer">0821-2526-7210</a>
                </div>
            </div>
            <div class="d-flex align-content-center gap-3 custom-div-footer">
                <img src="<?= base_url('public/images/iPhone.png') ?>" alt="wa" width="45" height="45">
                <div class="text-left">
                    <p style="margin-bottom: -1px;">CALL US TODAY</p>
                    <a href="javascript:void(0)" class="text-footer" onclick="copyToClipboard('021-27842125')">021-27842125</a>
                </div>
            </div>
            <div class="d-flex align-content-center gap-3 custom-div-footer">
                <img src="<?= base_url('public/images/Email.png') ?>" alt="wa" width="45" height="45">
                <div class="text-left">
                    <p style="margin-bottom: -1px;">EMAIL US ANYTIME</p>
                    <a href="javascript:void(0)" class="text-footer" onclick="copyToClipboard('langitdigital78@gmail.com')">langitdigital78@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</footer>
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