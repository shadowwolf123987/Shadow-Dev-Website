<div>
    <form method="post" id="enquiryForm">
    <div class="enquiryForm">
        <h2 class="enquiryTitle">Submit An Enquiry</h2>

        <input class="enquiryInput" name="name" placeholder="Name..." required>
        <input class="enquiryInput" name="email" placeholder="Email..." required>
        <input class="enquiryInput" name="subject" placeholder="Subject..." required>
        <textarea class="enquiryInput enquiryMessage" name="message" cols="50" rows="6" placeholder="Message..." required></textarea>

        <button type="submit">SUBMIT</button>

        <button class="g-recaptcha"
            data-sitekey="6LcvyLcpAAAAAM_BS4lLTpZ6uaWdo1_lCsAoXt7A"
            data-callback='onSubmit'
            data-action='submit'>
            Submit
        </button>
    </div>
    </form>
</div>

<script>
  function onSubmit(token) {
    document.getElementById("enquiryForm").submit();
  }
</script>