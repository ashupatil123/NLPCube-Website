
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NLP Cube | Enquire</title>
    
    <meta name="description" content="NLP Cube - Professional and Creative Augmented Reality Software, Mobile Application and Website Development company based in Pune India. Also offering other services ecommerce websites development, web application development, ecommerce development,search engine optimization services in Pune, India." />
    <meta name="keywords" content="Android application development company,website development company,software development company, mobile application development, Augmented Reality Development Company,ecommerce websites development,SEO services pune,seo company in pune" />
    <meta name="author" content="NLP Cube, Pune" />
    <meta name="development" content="NLP Cube" />
    <meta name="robots" content="index, follow" />
    <meta name="REVISIT-AFTER" content="2 days" />
    <meta name="url" content="www.nlpcube.com" />
    <link href="www.nlpcube.com" rel="canonical" />

    <!-- FAVICON -->
    <link rel="apple-touch-icon" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/elements.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
            
body {
  background-color: #f1f1f1;
}

.logo{
  width: 200px;
  margin: 100px 0 0;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  /*width: 70%;*/
  max-width: 600px;
  min-width: 300px;
}

h1 {
  text-align: center;  
  
}
label{
    font-family: 'Poppins', sans-serif;
}

input {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: transparent;
    border-color: currentcolor currentcolor #213284;
    -o-border-image: none;
    border-image: none;
    border-radius: 0;
    border-style: none none solid;
    border-width: 0 0 1px;
    box-shadow: none;
    /*color: #fff;*/
    display: block;
    font-size: 14px;
    height: auto;
    line-height: 1.5;
    padding: 5px 0;
    -webkit-transition: border-color 0.2s ease 0s;
    transition: border-color 0.2s ease 0s;
    width: 100%;
    font-family: 'Poppins', sans-serif;
    padding: 10px 0;
  /*padding: 10px;
  margin-bottom: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;*/
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
    margin: 10px 0;
  background-color: rgb(48,79,254);
  border-radius: 5px;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: rgb(48,79,254);
}
input[type=checkbox]{
     display: -webkit-inline-box; 
    height: 16px!important;
    margin: 4px 0 0;
    line-height: normal;
    width: 16px;
}
    </style>

</head>


<body>

    <center><a href="index.php"> 
        <img src="assets/img/logo/logo.png" class="logo" width="200">
    </a></center>

    <form id="regForm" action="/action_page.php">
        <h1>Get A Quote:</h1><br />
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <label>Please select the services you are looking for *</label>
            
            <div class="form-group">
                <input type="checkbox" class="form-control" name="service1" value="web"> Get an Awesome Website Designed and Developed
            </div>

            <div class="form-group">
                <input type="checkbox" class="form-control" name="service2" value="dm"> Digital Marketing - Generate Leads Online, Build a Brand Online
            </div>

            <div class="form-group">
                <input type="checkbox" class="form-control" name="service3" value="web"> Get a Web Product / Web Application / Web Portal
            </div>

            <div class="form-group">
                <input type="checkbox" class="form-control" name="service4" value="app"> Develop a Mobile Application
            </div>
            <div class="form-group">
                <input type="checkbox" class="form-control" name="service5" value="uiux"> Get UI / UX Design / Implementation Services
            </div>

            <div class="form-group">
                <input type="checkbox" class="form-control" name="service6" value="consulting"> Get Consultation Services for Digital Marketing and Web Development
            </div>
        </div>
        <div class="tab">
            <label>Contact Info:</label>
          <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
          <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
        </div>
        <div class="tab">
            <label>Birthday:</label>
          <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
          <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
          <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
        </div>
        <div class="tab">
            <label>Login Info:</label>
          <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
          <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>
        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" class="slider-btn wow fadeInUp" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" class="slider-btn wow fadeInUp" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
          
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
    </form>

</body>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>