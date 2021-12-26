<html>
    <head>
        <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

body { 
  background: url('{{ asset('img/contact.jpg')}}')center / cover no-repeat;
  	      height: 100vh;
	        margin: 0;
          position: relative;
}
form { max-width:420px; margin:50px auto; margin-top: 150px; }


.feedback-input {
  color:black;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: white;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}
h1{
    text-align: center;
    color:black;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; }
::-webkit-input-placeholder{
            color: rgb(82, 60, 60);
        }

        ::-moz-input-placeholder{
            color: rgb(77, 61, 61));
        }
        </style>
    </head>
    <body>
        <form>
            <h1>Leave us a Comment!</h1>      
            <input name="name" type="text" class="feedback-input" placeholder="Name" style="color: black"/>   
            <input name="email" type="texts" class="feedback-input" placeholder="Email" style="color: black"/>
            <textarea name="text" class="feedback-input" placeholder="Comment" style="color: black"></textarea>
            <input type="submit" value="SUBMIT"/>
          </form>
          






          <footer class="text-center text-lg-start bg-light text-muted" >
            <!-- Section: Social media -->
            <section
              class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" 
            >
              <!-- Left -->
              <div class="me-5 d-none d-lg-block">
                <span>Get connected with me on social networks:</span>
              </div>
              <!-- Left -->
          
              <!-- Right -->
              <div>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-github"></i>
                </a>
              </div>
              <!-- Right -->
            </section>
            <!-- Section: Social media -->
          
            <!-- Section: Links  -->
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      <i class="fas fa-gem me-3"></i>Company name
                    </h6>
                    <p>
                      Here you can use rows and columns to organize your footer content. Lorem ipsum
                      dolor sit amet, consectetur adipisicing elit.
                    </p>
                  </div>
                  <!-- Grid column -->
          
                  <!-- Grid column -->
                  
                  <!-- Grid column -->
          
                  <!-- Grid column -->
                 
                  <!-- Grid column -->
          
                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Contact
                    </h6>
                    <p><i class="fas fa-home me-3"></i> 73/2 C, Jonaki Road, Mirpur-1</p>
                    <p>
                      <i class="fas fa-envelope me-3"></i>
                      contactwnoor@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> +880 1571238110</p>
                    <p><i class="fas fa-print me-3"></i> +880 1301807991</p>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
              </div>
            </section>
            <!-- Section: Links  -->
          
          </footer>
          <!-- Footer -->
    </body>
</html>