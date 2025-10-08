<div id="Contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-solid fa-inbox"></i> de.paulo234@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i> +62 812 2784 1975</p>
                <div class="social-icons">
                    <a href="https://line.me/ti/p/alamf8mirM"><i class="fa-brands fa-line"></i></a>
                    <a href="https://www.instagram.com/vdepauloo?igsh=MTMwamc1M2lqYXowaw=="><i
                            class="fa-brands fa-instagram"></i></a>
                    <a
                        href="https://www.linkedin.com/in/deogratsias-jevon-ivander-arethusa-0b1676284?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                            class="fa-brands fa-linkedin"></i></a>
                </div>
                <a href="img/CV Example.pdf" download class="btn btn2">Download CV</a>
            </div>

            <div class="contact-right">
                <form action="contact.php" method="POST">
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <input type="email" name="Email" placeholder="Your Email" required>
                    <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>

                <?php if (!empty($msg)): ?>
                    <span id="msg"><?= htmlspecialchars($msg) ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright © Deogratsias Jevon 2025</p>
    </div>
</div>