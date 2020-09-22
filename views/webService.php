<!DOCTYPE html>
<html>
  <head>
    <title>Services</title>
    <link rel="stylesheet" href="../assets/css/webService.css">
  </head>
  <body>
        <?php
          include 'header.php';
        ?>


    <section id="newsletter">
      <div class="container">
        <h1>Stay Connected With Us</h1>
        <form>
          <input type="email" placeholder="Enter Email...">
          <button type="submit" class="button_1">Subscribe</button>
        </form>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Services</h1>
          <ul id="services">
            <li>
              <h3>Traning</h3>
              <p>You can master any competitive games staying with us. We will train you till the very end.</p>
						  <p>Pricing: starts from 1,500Tk</p>
            </li>
            <li>
              <h3>Recruting</h3>
              <p>If you are competitive game, we will recrute you for any kind of tournament based on your skills</p>
						  <p>Pricing: 250Tk per month</p>
            </li>
            <li>
              <h3>Personal Consultant</h3>
              <p>If you need any kind of personal consultant, our masters will always be there</p>
						  <p>Pricing: 2000Tk per month</p>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>For Any Query</h3>
            <form class="quote">
  						<div>
  							<label>Name</label><br>
  							<input type="text" placeholder="Name">
  						</div>
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="Emial Address">
  						</div>
  						<div>
  							<label>Message</label><br>
  							<textarea placeholder="Message"></textarea>
  						</div>
  						<button class="button_1" type="submit">Send</button>
					</form>
          </div>
        </aside>
      </div>
    </section>

  <?php
    include 'footer.php';
  ?>


  </body>
</html>
