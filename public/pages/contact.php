<?php require_once($root . 'templates/header.php'); ?>
    <div class="contact-container">
        <div class="contact-form">
            <h2>Leave us a message</h2>
            <form action="contact" method="#">
                <label for="formName">Name</label>
                <input class="input" type="text" id="formName" name="name" required>

                <label for="formEmail">Email</label>
                <input class="input" type="email" id="formEmail" name="email" required>

                <label for="formEnquiry">Enquiry</label>
                <textarea class="input" id="formEnquiry" name="enquiry" placeholder="Write something..." required></textarea>

                <input type="submit" value="Submit" href="#" class="submit">
            </form>
        </div>
        <div class="contact-desc">
            <div class="contact-address">
                <h2>Address</h2>
                <p>Jalan Teknologi 5, Taman Teknologi Malaysia, 57000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
            </div>
            <div class="contact-phone">
                <h2>Phone</h2>
                <p>+603 8996 1000</p>
            </div>
            <div class="contact-email">
                <h2>Email</h2>
                <a href="mailto:info@apu.edu.my" class="link">info@apu.edu.my</a>
            </div>
        </div>
    </div>
<?php require_once($root . 'templates/footer.php'); ?>