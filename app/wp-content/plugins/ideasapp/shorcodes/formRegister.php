<?php
function ideas_add_register_form () {
?>
    <form action="#" id="registerForm" name="registerForm" class="contact-form">
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required />
            <div class="label-box"></div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Your Mail" required />
            <div class="label-box"></div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="budget" name="budget" placeholder="Your Budget" required />
            <div class="label-box"></div>
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Your Messages" required></textarea>
            <div class="label-box"></div>
        </div>
        <div class="form-btn text-right">
            <button class="btn-1 contactsuccess">Hire Me</button>
        </div>
    </form>
<?php
    return;
}

add_shortcode('ideas_register', 'ideas_add_register_form');