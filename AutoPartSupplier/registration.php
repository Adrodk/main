<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRKPARTS - Wholesale Automotive Parts Supplier &#8482; </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
    <link type="text/css" rel="stylesheet" href="style/registration.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <?php 
  include 'ext_php/connect.php';
  ?>

    <div class="container">
        <div class="header">
            <div class="logo pt-3">
                <a href="index.php">
                    <img src="images/corvette.png" alt="DRKPARTS-LOGO" id="clogo">
                    <img src="images/DRKParts2.png" alt="DRKPARTS-TITLE" id="tlogo">
                </a>
            </div>
         
            <div class="languages">
                
                <a href="#"><span class="fi fi-gb"></span></a>
                <a href="#"><span class="fi fi-pt"></span></a>
                <a href="#"><span class="fi fi-es"></span></a>      
                <a href="#"><span class="fi fi-fr"></span></a>
             
                
            </div><br />



            <section class="h-100 h-custom" id="regform">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                      <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                          <div class="row g-0">
                            <div class="col-lg-6">
                              <div class="p-5">
                                <h3 class="formtitle mb-5">Credentials</h3>
                                <div class="log_reg">
                                  <input type="text" id="username" class="form-control form-control-lg" />
                                  <label class="loglab">Username</label>
                                </div>
                                <div class="log_reg">
                                    <input type="password" id="password" class="form-control form-control-lg" />
                                    <label class="loglab">Password</label>
                                </div>
                              <div class="log_reg">
                                <input type="password" class="form-control form-control-lg" />
                                <label class="loglab">Re enter your password</label>
                              </div>
                                <h3 class="formtitle mb-5 mt-5">General Infomation</h3>
              
                                
              
                                <div class="row">
                                  <div class="col-md-6 mb-4 pb-2">
              
                                    <div class="form-outline">
                                      <input type="text" id="fname" class="form-control form-control-lg" />
                                      <label class="form-label">First name</label>
                                    </div>
              
                                  </div>
                                  <div class="col-md-6 mb-4 pb-2">
              
                                    <div class="form-outline">
                                      <input type="text" id="lname" class="form-control form-control-lg" />
                                      <label class="form-label">Last name</label>
                                    </div>
              
                                  </div>
                                </div>
              
                                
              
                                <div class="mb-4 pb-2">
                                  <div class="form-outline">
                                    <input type="text" class="form-control form-control-lg" />
                                    <label class="form-label">Supplier</label>
                                  </div>
                                </div>
              
                                <div class="row">
                                  <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">
              
                                    <div class="form-outline">
                                      <input type="text" class="form-control form-control-lg" />
                                      <label class="form-label">Business Type</label>
                                    </div>
                                    
              
                                  </div>
                                  <!-- <div class="col-md-6">
              
                                    <select class="select">
                                      <option value="1">Employees</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                      <option value="4">Four</option>
                                    </select>
              
                                  </div> -->
                                </div>
              
                              </div>
                            </div>
                            <div class="col-lg-6 bg-indigo">
                              <div class="p-5">
                                <h3 class="fw-normal mb-5">Contact Details</h3>
              
                                <div class="mb-4 pb-2">
                                  <div class="form-outline">
                                    <input type="text" class="form-control form-control-lg" />
                                    <label class="form-label">Street Number</label>
                                  </div>
                                </div>
              
                                <div class="mb-4 pb-2">
                                  <div class="form-outline">
                                    <input type="text" class="form-control form-control-lg" />
                                    <label class="form-label">Additional Information</label>
                                  </div>
                                </div>
              
                                <div class="row">
                                  <div class="col-md-5 mb-4 pb-2">
              
                                    <div class="form-outline">
                                      <input type="text" class="form-control form-control-lg" />
                                      <label class="form-label">Zip Code</label>
                                    </div>
              
                                  </div>
                                  <div class="col-md-7 mb-4 pb-2">
              
                                    <div class="state w-50">
                                
                                      <select type="text" class="form-control form-control-lg">
                                        <option value=" ">&nbsp;</option>
                                        <option value="AL">AL</option>
                                        <option value="AK">AK</option>
                                        <option value="AR">AR</option>
                                        <option value="AZ">AZ</option>
                                        <option value="CA">CA</option>
                                        <option value="CO">CO</option>
                                        <option value="CT">CT</option>
                                        <option value="DC">DC</option>
                                        <option value="DE">DE</option>
                                        <option value="FL">FL</option>
                                        <option value="GA">GA</option>
                                        <option value="HI">HI</option>
                                        <option value="IA">IA</option>
                                        <option value="ID">ID</option>
                                        <option value="IL">IL</option>
                                        <option value="IN">IN</option>
                                        <option value="KS">KS</option>
                                        <option value="KY">KY</option>
                                        <option value="LA">LA</option>
                                        <option value="MA">MA</option>
                                        <option value="MD">MD</option>
                                        <option value="ME">ME</option>
                                        <option value="MI">MI</option>
                                        <option value="MN">MN</option>
                                        <option value="MO">MO</option>
                                        <option value="MS">MS</option>
                                        <option value="MT">MT</option>
                                        <option value="NC">NC</option>
                                        <option value="NE">NE</option>
                                        <option value="NH">NH</option>
                                        <option value="NJ">NJ</option>
                                        <option value="NM">NM</option>
                                        <option value="NV">NV</option>
                                        <option value="NY">NY</option>
                                        <option value="ND">ND</option>
                                        <option value="OH">OH</option>
                                        <option value="OK">OK</option>
                                        <option value="OR">OR</option>
                                        <option value="PA">PA</option>
                                        <option value="RI">RI</option>
                                        <option value="SC">SC</option>
                                        <option value="SD">SD</option>
                                        <option value="TN">TN</option>
                                        <option value="TX">TX</option>
                                        <option value="UT">UT</option>
                                        <option value="VT">VT</option>
                                        <option value="VA">VA</option>
                                        <option value="WA">WA</option>
                                        <option value="WI">WI</option>
                                        <option value="WV">WV</option>
                                        <option value="WY">WY</option>
                                    
                                      </select>
                                      <label class="form-label">State</label>
                                    </div>
              
                                  </div>
                                </div>
              
                                
              
                                <div class="row">
                                  <div class="col-md-">
              
                                    
              
                                  </div>
                                  <div class="col-md-7">
              
                                    <div class="form-outline">
                                      <input type="text" class="form-control form-control-lg" />
                                      <label class="form-label">Phone Number</label>
                                    </div>
              
                                  </div>
                                </div>
              
                                <div class="mb-4">
                                  <div class="form-outline">
                                    <input type="text" class="form-control form-control-lg" />
                                    <label class="form-label">Your Email</label>
                                  </div>
                                </div>
              
                                <div class="form-check mb-4 pb-3">
                                  <input class="form-check-input" type="checkbox" value="" />
                                  <label class="form-check-label">
                                    I accept the <a href="#!"><u>Terms and Conditions</u></a> of your
                                    site.
                                  </label>
                                </div>
              
                                <button class="reg_btn btn-lg" id="regbtn"><script>window.alert('Hello everyone');</script>Submit</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>



            <hr class="hrline"><br/>
            <div class="footer">
                <div class="copy">
                    <span>&#169; 2022 DRKPARTS, Inc.</span>
                </div>
                <div class="flinks">
                    <a href="#" class="privacy">Privacy Policy &#9900; </a> 
                    <a href="#" class="conditions">Terms & Conditions &#9900; </a>
                    <a href="#" class="contact_us">Contact Us</a><br /><br>
                </div>
            </div>
            
        </div>
        
    </div>
    
        



    

    <script src="script/script.js"></script>
</body>
</html>