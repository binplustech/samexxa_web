<footer id="contact">
  <div class="wrap">
    <div class="footer-top">
      <div class="footer-brand">
        <a class="brand" href="index#top">
          <img src="https://samexxa.com/assets/logo1.png" alt="Samexxa cart icon">
          <!--<span>Samexxa</span>-->
        </a>
        <p>Every need, one Samexxa. A local marketplace for groceries, gadgets, fashion and everything in between.</p>
        <div class="social-row">
          <a href="#" aria-label="Samexxa on Instagram">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="1"/></svg>
          </a>
          <a href="#" aria-label="Samexxa on Facebook">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 9h3V6h-3c-1.7 0-3 1.3-3 3v2H8v3h3v6h3v-6h3l1-3h-4v-2c0-.6.4-1 1-1z"/></svg>
          </a>
          <a href="#" aria-label="Samexxa on X">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><line x1="5" y1="5" x2="19" y2="19"/><line x1="19" y1="5" x2="5" y2="19"/></svg>
          </a>
          <a href="#" aria-label="Samexxa on YouTube">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="6" width="18" height="12" rx="4"/><path d="M10.5 9.5v5l4.3-2.5z" fill="currentColor" stroke="none"/></svg>
          </a>
        </div>
      </div>

      <div class="col">
        <h4>Company</h4>
        <ul>
          <li><a href="about-us">About Us</a></li>
          <li><a href="contact-us">Contact Us</a></li>
          <li><a href="faq">FAQ</a></li>
        </ul>
      </div>

      <div class="col" id="faq">
        <h4>Legal</h4>
        <ul>
          <li><a href="terms">Terms &amp; Conditions</a></li>
          <li><a href="return-refund">Return &amp; Refund Policy</a></li>
          <li><a href="privacy-policy">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="col newsletter">
        <h4>Mail Us / Registered Office Address</h4>
        <p style="font-size:13.5px; color:rgba(246,248,247,.65); line-height:1.5;">
            <b>Samexxa (A unit of TejArpan Group Pvt. Ltd.)</b><br>
            29 30 BHIND SOMIL, APARTMENT, CITY CENTRE, Jiwaji University, Gird<br>
            Gwalior – 474011<br>
            Madhya Pradesh, India<br>
            ☎ +91 9981612046<br>
            ✉ samexxagwalior@gmail.com<br>
            CIN: U47912MP2026PTC087098<br>
            
        </p>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="fb-brand">
        <!--<img src="https://samexxa.com/assets/logo.png" alt="">-->
        <span>© 2026 Samexxa. All rights reserved.</span>
      </div>
      <!--<span>Terms, Privacy and Return &amp; Refund content is managed from the Super Admin CMS and shared with the app.</span>-->
    </div>
  </div>
</footer>

<script>
  var header = document.getElementById('site-header');
  window.addEventListener('scroll', function(){
    if (window.scrollY > 8) header.classList.add('scrolled');
    else header.classList.remove('scrolled');
  });

  var menuBtn = document.getElementById('menuBtn');
  var panel = document.getElementById('mobilePanel');
  menuBtn.addEventListener('click', function(){
    var open = panel.classList.toggle('open');
    menuBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
  panel.querySelectorAll('a').forEach(function(a){
    a.addEventListener('click', function(){
      panel.classList.remove('open');
      menuBtn.setAttribute('aria-expanded', 'false');
    });
  });
</script>

</body>
</html>
