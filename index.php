<?php 
session_start();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/ico" sizes="32x32" href="/assets//logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <title>Reddula Pvt. Ltd.</title>
  </head>
  <body>
    <div>
      <div class="firstpage container-fluid">
        <div class="navbar navbar-expand-lg Navbar">
          <div class="container-fluid">
            <a class="navbar-brand text-light d-flex brand" href="#"
              ><img src="assets/logo.png" class="logo"
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mx-auto">
                <li class="nav-item navItem">
                  <a class="nav-link text-light active"
                    aria-current="page"
                    href="#"
                    onclick="scrollToSection('logo')"

                    >Home</a
                  >
                </li>
                <li class="nav-item navItem">
                  <a class="nav-link text-light" href="#" onclick="scrollToSection('ourmission')" >About</a>
                </li>
                <li class="nav-item navItem">
                  <a class="nav-link text-light" href="#" onclick="scrollToSection('Pricing')">Products</a>
                </li>
                <li class="nav-item navItem">
                  <a class="nav-link text-light" href="#" onclick="scrollToSection('footlogo')" >Contact Us </a>
                </li>
              </ul>
            </div>
            <a href="signin.php" class="btn btn-success">Sign In/Sign Up</a>
          </div>
        </div>
        <div
          class="mainpage container-fluid p-5 d-flex justify-center"
          style="padding-top: 10% !important"
        >
          <div class="lefthalf col-6 d-flex">
            <div class="maintext"><span>Reddula</span> Private Ltd.</div>
            <div class="subtext">
              Your Source for Sustainable Health<br />
              Cultivating Wellness, Nourishing the Planet
            </div>
            <div class="d-flex gap-4">
              <button class="button view">View Products</button>
              <button class="button rounded-0">What's new?</button>
            </div>
          </div>
        </div>
      </div>
      <section id="Pricing"> 
      <div class="secondpage container-fluid">
        <h2 class="text-center Pricing"><strong>Pricing</strong></h2>
        <div
          class="row card-wrap p-4 justify-content-center flex-column flex-md-row"
        >
          <div class="col-md-4 mb-4">
            <div class="card p-5">
              <h3 class="price"><strong>Rs. 119</strong></h3>
              <p class="heading-card">Standard Pack</p>
              <p>Your daily dose of pure spirulina goodness.</p>
              <div class="px-4">
                <ul class="list-group text-success" style="font-size: 0.9rem">
                  <li>100% Pure Spirulina Powder</li>
                  <li>Organically Sourced</li>
                  <li>Rich in Protein</li>
                  <li>High Chlorophyll Content</li>
                  <li>Tested for Purity and Quality</li>
                  <li>Supports Immune System</li>
                </ul>
              </div>
              <div class="p-2 d-flex justify-content-center">
                <button
                  class="btn text-light btn-rounded"
                  style="background-color: #10292b"
                  onclick="openWhatsApp()"
                >
                  Buy Now
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div
              class="card p-5 text-white middle"
              style="background-color: #10292b"
            >
              <h3 class="price"><strong>Rs. 249</strong></h3>
              <p class="heading-card" style="color: #8bd14e">Premium Blend</p>
              <p>Experience the power of premium spirulina blend.</p>
              <div class="px-4">
                <ul class="list-group" style="font-size: 0.9rem">
                  <li>Premium Spirulina Blend</li>
                  <li>Sustainably Harvested</li>
                  <li>Enhanced Nutritional Profile</li>
                  <li>Antioxidant-Rich Superfood</li>
                  <li>Detoxifies and Boosts Energy</li>
                  <li>Vegan and Gluten-Free</li>
                </ul>
              </div>
              <div class="p-2 d-flex justify-content-center">
                <button
                  class="btn btn-rounded"
                  style="background-color: #8bd14e"
                  onclick="openWhatsApp()"
                >
                  Buy Now
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card p-5">
              <h3 class="price"><strong>Rs. 299</strong></h3>
              <p class="heading-card">Organic Superfood</p>
              <p>Discover the magic of organic spirulina with chlorella.</p>
              <div class="px-4">
                <ul class="list-group text-success" style="font-size: 0.9rem">
                  <li>Organic Chlorella</li>
                  <li>Dual Superfood Powerhouse</li>
                  <li>Vitamins and Minerals</li>
                  <li>Balances pH Levels</li>
                  <li>Supports Digestive Health</li>
                  <li>Great for Smoothies</li>
                </ul>
              </div>
              <div class="p-2 d-flex justify-content-center">
                <button
                  class="btn text-light btn-rounded"
                  style="background-color: #10292b"
                  onclick="openWhatsApp()"
                >
                  Buy Now
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>

      <div class="third">
        <div
          class="round-green p-5 text-light d-flex flex-column justify-content-center text-center"
        >
          <p style="opacity: 0.6; font-size: 0.7rem; letter-spacing: 2px">
            WHAT WE STAND FOR
          </p>
          <h2 class="ourmission p-2">Our Mission</h2>
          <p class="text-center" style="opacity: 0.6">
            We are dedicated to promoting vibrant health and well-being through
            the power of Spirulina. Our mission is to provide high-quality
            Spirulina products that nourish both body and soul, offering a
            natural source of vitality and nourishment for all. With a
            commitment to sustainability and excellence, we stand for your
            journey towards a healthier, more vibrant you.
          </p>
        </div>
      </div>
      <div class="fourth p-5 d-md-flex flex-column flex-md-row">
        <div class="left-fourth w-100 w-md-50 p-5">
          <p style="letter-spacing: 2px">WHAT MAKES US DIFFERENT</p>
          <h1 style="font-weight: bold" class="ourapproach">Our Approach</h1>
        </div>
        <div class="right-fourth w-100 w-md-50 p-3">
          <p style="color: darkgreen">
            At Reddula Pvt. Ltd., our commitment to excellence sets us apart.
            We take pride in sourcing the purest Spirulina, cultivated with care
            to harness its incredible nutritional value. Our approach is rooted
            in sustainability and quality, ensuring that every product we offer
            supports your journey to a healthier, more vibrant life.
          </p>
          <p style="color: darkgreen">
            Discover the power of Spirulina and join us in the pursuit of a
            healthier lifestyle. With our premium Spirulina products, you'll
            experience a natural source of vitality and well-being like never
            before.
          </p>
          <p style="color: darkgreen">
            We are dedicated to your well-being and the well-being of our
            planet. Our Spirulina is not just a product; it's a commitment to a
            sustainable and healthier future for all.
          </p>
        </div>
      </div>
    </div>
    <div class="fifth container-fluid p-5">
      <h2 style="font-weight: bold; text-align: center; padding: 1rem">
        Give Your Suggestions!
      </h2>
      <div class="d-flex form-container p-1 p-md-5">
        <form
        action="https://getform.io/f/ajjejgya" method="POST"

          class="p-5 col-12 col-md-8 d-flex flex-column gap-4"
          style="border: 1px solid green"
          
        >
          <div class="form-group">
            <label for="name" name="name">Your Name</label>
            <input name="name"
              type="text"
              class="form-control"
              id="name"
              placeholder="Enter your name"
            />
          </div>

          <div class="d-flex gap-2">
            <div class="form-group col-6">
              <label for="exampleInputEmail1" name="email">Email address</label>
              <input name="email"
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter email"
              />
            </div>

            <div class="form-group col-6">
              <label for="phoneNumber" name="phoneNumber">Phone Number</label>
              <input
              name="phoneNumber"
                type="tel"
                class="form-control"
                id="phoneNumber"
                placeholder="Enter your phone number"
              />
            </div>
          </div>

          <div class="form-group">
            <label for="message"  name="message">Message</label>
            <textarea name="message"
              class="form-control"
              id="message"
              rows="2"
              placeholder="Your message or feedback"
            ></textarea>
          </div>

          <div class="form-group">
            <label for="productPreference"  name="Preference">Product Preference</label>
            <select class="form-control" id="productPreference"  name="Preference">
              <option value="spirulinaPowder">Spirulina Powder</option>
              <option value="spirulinaCapsules">Spirulina Capsules</option>
              <option value="spirulinaTablets">Spirulina Tablets</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="form-check" >
            <input  name="checkbox"
              type="checkbox"
              class="form-check-input"
              id="subscribeToNewsletter"
            />
            <label class="form-check-label" for="subscribeToNewsletter"
              >Subscribe to our newsletter</label
            >
          </div>

          <button name="submit"
            type="submit"
            class="btn btn-primary"
            style="background-color: #10292b; border: none; border-radius: 0"
          >
            Submit
          </button>
        </form>
        <div class="images col-4 d-none d-md-flex flex-column d-md-block">
          <img src="assets/spir3.jpeg" alt="Spirulina 1" />
          <img src="assets/spir5.avif" alt="Spirulina 1" />
          <img src="assets/spir2.jpg" alt="Spirulina 2" />
        </div>
      </div>
    </div>

    <footer style="background-color: #10292b; color: white" id="footer">
      <div class="container-fluid p-5">
        <div class="row">
          <div class="col-md-6">
            <div class="footlogo">
              <div class="details1">
                <h3><span style="color: #8bd14e">Reddula</span> Pvt. Ltd.</h3>
                <div style="height: auto; padding: 1rem 0">
                  <p>Follow us</p>
                  <div class="icons w-50 d-flex gap-4">
                    <a href="#"
                      ><i
                        class="fab fa-facebook"
                        style="color: white; font-size: 2rem"
                      ></i
                    ></a>
                    <a href="#"
                      ><i
                        class="fab fa-instagram"
                        style="color: white; font-size: 2rem"
                      ></i
                    ></a>
                    <a href="#"
                      ><i
                        class="fab fa-linkedin"
                        style="color: white; font-size: 2rem"
                      ></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="about">
              <div class="head">About</div>
              <div class="details">
                <a>About Us</a>
                <a>Products</a>
                <a>News</a>
                <a>Careers</a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="about">
              <div class="head">Company</div>
              <div class="details">
                <a>Our Team</a>
                <a>Partner With Us</a>
                <a>FAQ</a>
                <a>Blog</a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="about">
              <div class="head">Support</div>
              <div class="details">
                <a>Account</a>
                <a>Support Center</a>
                <a>Feedback</a>
                <div class="about">
                <a>Contact Us</a>
               <div class="details">
               <a href="mailto:support@reddula.com">Email Us : reddulapvtltd@gmail.com</a><br>
               <a href="tel:+7995282666">Call Us : +7995282666</a>
              <a href="https://www.linkedin.com/company/reddula" target="_blank">LinkedIn</a>
              
              </div>
              
                <a>Accessibility</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footerend text-center">
        <div class="copy">
          Copyright Reddula Pvt. Ltd 2021 All rights reserved
        </div>
        <div class="privacy" style="opacity: 0.5; font-size: small">
          Privacy Policy | Terms and Conditions
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>

  </body>
</html>
