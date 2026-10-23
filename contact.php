<?php
$page = "Contact";

include("INC/header.php");
?>
<div class="container my-5 py-3">
    <div class="row g-5 justify-content-center">
        
        <div class="col-lg-8">
            <div class="p-4 border rounded bg-white shadow-sm">
                <h4 class="fw-bold text-dark mb-4 border-bottom border-warning border-3 d-inline-block pb-2">Send a Message</h4>
                
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label text-secondary small fw-semibold">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label text-secondary small fw-semibold">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="message" class="form-label text-secondary small fw-semibold">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message here..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-dark w-100 py-2 fw-semibold text-warning">Send Message</button>
                </form>
            </div>
        </div>



    </div>
</div>


<?php include("INC/footer.php") ?>