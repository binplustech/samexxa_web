<?php include_once('./includes/header.php'); ?>
<title>Contact Us — Samexxa</title>
<main id="main">

  <section class="page-banner">
    <div class="wrap">
      <div class="crumb"><a href="index">Home</a> &nbsp;/&nbsp; Contact Us</div>
      <h1>We're here to help</h1>
      <p>Questions about an order, a seller account, or something else entirely — reach out and the Samexxa team will get back to you.</p>
    </div>
  </section>

  <section class="contact">
    <div class="wrap">

      <div class="info-card">
        <h2>Contact information</h2>
        <p>Choose the most convenient way to reach our team.</p>

        <div class="info-item">
          <div class="label">Email</div>
          <div class="value"><a href="mailto:samexxagwalior@gmail.com">samexxagwalior@gmail.com</a></div>
        </div>

        <div class="info-item">
          <div class="label">Mobile</div>
          <div class="value"><a href="tel:+919981612046">+91 9981612046</a></div>
        </div>

        <div class="info-item">
          <div class="label">Registered Office</div>
          <div class="value">
            29 30 BHIND SOMIL, APARTMENT, CITY CENTRE, Jiwaji University, Gird<br>
            Gwalior – 474011<br>
            Madhya Pradesh, India
          </div>
        </div>

        <div class="info-item">
          <div class="label">Company</div>
          <div class="value">
            Samexxa<br>
            (A unit of TejArpan Group Pvt. Ltd.)
          </div>
        </div>
      </div>

      <div class="form-card">
        <h2>Send an enquiry</h2>
        <p class="sub">Fill out the form below and our support team will get back to you, usually within 24 hours.</p>

        <form class="enquiry" onsubmit="return false;">
          <div class="field-row">
            <div class="field">
              <label for="cf-name">Your name</label>
              <input type="text" id="cf-name" name="name" placeholder="Full name" required>
            </div>
            <div class="field">
              <label for="cf-email">Email address</label>
              <input type="email" id="cf-email" name="email" placeholder="you@example.com" required>
            </div>
          </div>

          <div class="field">
            <label for="cf-type">Enquiry type</label>
            <select id="cf-type" name="type">
              <option>Customer Support</option>
              <option>Order Issue</option>
              <option>Seller Partnership</option>
              <option>Delivery Partner</option>
              <option>Press &amp; Media</option>
              <option>General Enquiry</option>
            </select>
          </div>

          <div class="field">
            <label for="cf-message">Message</label>
            <textarea id="cf-message" name="message" placeholder="Tell us a bit about what you need help with..." required></textarea>
          </div>

          <button type="submit" class="btn btn-solid submit-btn">Send enquiry</button>
          <p class="fine-print">Please do not include passwords, card details or other sensitive payment information.</p>
        </form>
      </div>

    </div>
  </section>

</main>

<?php include_once('./includes/footer.php'); ?>