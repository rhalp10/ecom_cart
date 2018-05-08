
<?php 
if (isset($cus_ID)) {
?>

<!-- Modal -->
<div id="setting"  class="modal fade" role="dialog" style=" padding: 50px !important;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header  bg-info">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Account Info</h4>
      </div>
      <div class="modal-body">
       
         <form enctype="multipart/form-data" method="post" action="action">
          <select class="pull-right" id="mySelect" onchange="onchange_Func()">
            <option value="def">Select</option>
            <option value="unlock">Enable</option>
            <option value="disable">Disable</option>
          </select>
          <br>
          <br>
          <h2>Your Personal Details</h2>
          <div class="content">
            <table class="form">
               <?php 
                  $sql = "SELECT * FROM `customer` WHERE cus_ID = '$cus_ID'";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      // output data of each row
                      $row = $result->fetch_assoc();
                           $cus_Name = $row["cus_Name"];
                           $cus_Email = $row["cus_Email"];
                           $cus_Phone = $row["cus_Phone"];
                           $cus_Address = $row["cus_Address"];
                           $cus_password = $row["cus_password"];
                      
                  } 
                  else {
                  }
                ?>
              <tbody>
                <tr>
                  <td><span class="required">*</span> Full Name:</td>
                  <td><input class="large-field" type="text" value="<?php echo $row["cus_Name"];?>" name="fullname"   required=""  id="e_fullname"></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> E-Mail:</td>
                  <td><input class="large-field" type="text" value="<?php echo $row["cus_Email"];?>" name="email" required=""  id="e_email"></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Phone:</td>
                  <td><input class="large-field" type="text" value="<?php echo $row["cus_Phone"];?>" name="phone" required=""  id="e_phone"></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Address:</td>
                  <td><input class="large-field" type="text" value="<?php echo $row["cus_Address"];?>" name="address" required=""  id="e_address"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="show_pass">
          <h2>Your Password</h2>
          <div class="content">
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> Current:</td>
                  <td><input class="large-field" type="password" value="" name="curpassword" required="" id="e_curpassword"></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Password:</td>
                  <td><input class="large-field" type="password" value="" name="password" required="" id="e_password"></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Password Confirm:</td>
                  <td><input class="large-field" type="password" value="" name="confirm" required="" id="e_confirm"></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="buttons">
            <div class="left">
              <input type="submit" class="button" value="Update" name="edit-profile">
            </div>
          </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="logout"  class="modal fade" role="dialog" style=" padding: 50px !important;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h4 class="modal-title">Logout</h4>
      </div>
      <div class="modal-body text-center">
        <form method="POST" action="logout">
        <div class="btn-group">
          <button type="submit" class="btn btn-primary">Logout</button>
          <button type="button" class="btn btn-primary"  data-dismiss="modal">Cancel</button>
        </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>
<?php
}
else{
?>
<!-- Modal -->
<div id="modal_login"  class="modal fade" role="dialog" style=" padding: 50px !important;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary" >
        <h4 class="modal-title " style="color: white;">Account Login</h4>
      </div>
      <div class="modal-body">
        <div id="content">
        <div class="login-content">
          <div class="left">
            <h2>New Customer</h2>
            <div class="content">
              <p><b>Register Account</b></p>
              <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
              <a class="button" type="button" data-toggle="modal" data-target="#modal_register">Continue</a></div>
          </div>
          <div class="right">
            <h2>Returning Customer</h2>
            <form enctype="multipart/form-data" method="post" action="Admin/index">
              <div class="content">
                <p>I am a returning customer</p>
                <b>E-Mail Address:</b><br>
                <input type="text" value="" name="email" required="">
                <br>
                <br>
                <b>Password:</b><br>
                <input type="password" value="" name="password" required="">
                <br>
                <a href="#">Forgotten Password</a><br>
                <br>
                <input type="submit" class="button" value="Login">
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="modal_register"  class="modal fade" role="dialog" style=" padding: 50px !important;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary" >
        <h4 class="modal-title " style="color: white;">Register Account</h4>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" method="post" action="action">
          <h2>Your Personal Details</h2>
          <div class="content">
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> Full Name:</td>
                  <td><input class="large-field" type="text" value="" name="fullname" required=""></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> E-Mail:</td>
                  <td><input class="large-field" type="text" value="" name="email" required=""></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Phone:</td>
                  <td><input class="large-field" type="text" value="" name="phone" required=""></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Address:</td>
                  <td><input class="large-field" type="text" value="" name="address" required=""></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <h2>Your Password</h2>
          <div class="content">
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> Password:</td>
                  <td><input class="large-field" type="password" value="" name="password" required=""></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Password Confirm:</td>
                  <td><input class="large-field" type="password" value="" name="confirm" required=""></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="buttons">
            <div class="left">
              <p>
                <input type="checkbox" value="1" name="agree" required="">
                &nbsp; I have read and agree to the <a alt="Privacy Policy" class="colorbox cboxElement" data-toggle="modal" data-target="#policy"><b>Privacy Policy</b></a> </p>
              <input type="submit" class="button" value="Continue" name="register">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="policy"  class="modal fade" role="dialog" style=" padding: 50px !important;">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Policy</h4>
      </div>
      <div class="modal-body">
        <style type="text/css">
          #policy {
            text-indent: 50px;
            text-align: justify;
            letter-spacing: 3px;
        }
        </style>
        <h1>Personal User Information</h1>
        <p id="policy">Backeball Wear and Accessories requires user registration. Users are free to visit Backeball Wear and Accessories, and navigate all its public pages.</p>
        <hr>
        <h1>Cookies</h1>

        <p id="policy">Our website uses cookies, like almost all websites. Cookies are small text files that are placed on your computer or mobile phone when you browse websites, to help provide you with the best experience we can.
       </p>
          <br>Our cookies help us:
        <ul>
          <li>Improve the speed of the site</li>
          <li>Continuously improve our website for you</li>
          <li>Allow you to share pages with social networks like Facebook</li>
          <li>Offer you free services/content (by advertising)</li>
          <li>Make our marketing more efficient (helping us keep the site free to use)</li>
        </ul>
        <p id="policy">We do not use cookies to:</p>
        <ul>
          <li>Collect any personally identifiable information (without your express permission)</li><li>Collect any sensitive information (without your express permission)</li><li>Pass personally identifiable data to third parties</li><li>Pay sales commissions</li>
        </ul>
        <p id="policy">You can learn more about all the cookies we use below</p>
        <hr>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php
  }
?>
<!-- Modal -->
<div id="checkout"  class="modal fade" role="dialog" style=" padding: 50px !important;">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Check out</h4>
      </div>
      <div class="modal-body">
       <div id="content">
        <h1>Checkout</h1>
        
        <div class="checkout">
          <div class="checkout-heading">Step 1: Account & Billing Details</div>
          <div class="checkout-content" style="display: block;">
            <?php 
            if (isset($cus_ID)) {
             ?>
             <form >
          <br>
          <br>
          <h2>Your Personal Details</h2>
          <div class="content">
            <table class="form">
               <?php 
                if (isset($cus_ID)) {
                  $sql = "SELECT * FROM `customer` WHERE cus_ID = '$cus_ID'";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      // output data of each row
                      $row = $result->fetch_assoc();
                           $cus_Name = $row["cus_Name"];
                           $cus_Email = $row["cus_Email"];
                           $cus_Phone = $row["cus_Phone"];
                           $cus_Address = $row["cus_Address"];
                           $cus_password = $row["cus_password"];
                      
                  } 
                  else {
                  }
                }
                ?>
              <tbody>
                <tr>
                  <td><span class="required">*</span> Full Name:</td>
                  <td><input class="large-field" type="text" value="<?php echo $row["cus_Name"];?>" name="fullname"   required=""  ></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> E-Mail:</td>
                  <td><input class="large-field" type="text" value="<?php echo $row["cus_Email"];?>" name="email" required=""  ></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Phone:</td>
                  <td><input class="large-field" type="text" value="<?php echo $row["cus_Phone"];?>" name="phone" required=""  ></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Address:</td>
                  <td><input class="large-field" type="text" value="<?php echo $row["cus_Address"];?>" name="address" required=""  ></td>
                </tr>
              </tbody>
            </table>
          </div>
          </div>
        </form>
             <?php
            }
            else{
              ?>
              <div class="left">
              <h2>New Customer</h2>
              <p>Checkout Options:</p>
              <label for="register">
                <input type="radio" checked="checked" id="register" value="register" name="account">
                <b>Register Account</b></label>
              <br>
              <!-- <label for="guest">
                <input type="radio" id="guest" value="guest" name="account">
                <b>Guest Checkout</b></label>
              <br> -->
              <br>
              <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
              <input type="button" data-toggle="modal" data-target="#modal_register" class="button" id="button-account" value="Continue">
              <br>
              <br>
            </div>
            <div class="right" id="login">
              <h2>Returning Customer</h2>
              <p>I am a returning customer</p>
              <b>E-Mail:</b><br>
              <input type="text" value="" name="email">
              <br>
              <br>
              <b>Password:</b><br>
              <input type="password" value="" name="password">
              <br>
              <a href="#">Forgotten Password</a><br>
              <br>
              <input type="button" class="button" id="button-login" value="Login">
              <br>
              <br>
            </div>
              <?php
            }
            ?>
            
          </div>
        </div>
        <div class="checkout">

          <div class="checkout-heading" data-toggle="collapse" data-target="#Shipping_Details">Step 2: Shipping Details</div>
          <div class="checkout-content collapse fade-in" id="Shipping_Details">
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> First Name:</td>
                  <td><input type="text" class="large-field" value="" name="firstname"></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Last Name:</td>
                  <td><input type="text" class="large-field" value="" name="lastname"></td>
                </tr>
                <tr>
                  <td>Company:</td>
                  <td><input type="text" class="large-field" value="" name="company"></td>
                </tr>
                <tr>
                  <td> Company ID:</td>
                  <td><input type="text" class="large-field" value="" name="company_id"></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Address 1:</td>
                  <td><input type="text" class="large-field" value="" name="address_1"></td>
                </tr>
                <tr>
                  <td>Address 2:</td>
                  <td><input type="text" class="large-field" value="" name="address_2"></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> City:</td>
                  <td><input type="text" class="large-field" value="" name="city"></td>
                </tr>
                <tr>
                  <td><span class="required" id="payment-postcode-required">*</span> Post Code:</td>
                  <td><input type="text" class="large-field" value="" name="postcode"></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Country:</td>
                  <td><select class="large-field" name="country_id">
                      <option value=""> --- Please Select --- </option>
                      <option value="244">Aaland Islands</option>
                      <option value="1">Afghanistan</option>
                      <option value="2">Albania</option>
                      <option value="3">Algeria</option>
                      <option value="4">American Samoa</option>
                      <option value="5">Andorra</option>
                      <option value="6">Angola</option>
                      <option value="7">Anguilla</option>
                      <option value="8">Antarctica</option>
                      <option value="9">Antigua and Barbuda</option>
                      <option value="10">Argentina</option>
                      <option value="11">Armenia</option>
                      <option value="12">Aruba</option>
                      <option value="13">Australia</option>
                      <option value="14">Austria</option>
                      <option value="15">Azerbaijan</option>
                      <option value="16">Bahamas</option>
                      <option value="17">Bahrain</option>
                      <option value="18">Bangladesh</option>
                      <option value="19">Barbados</option>
                      <option value="20">Belarus</option>
                      <option value="21">Belgium</option>
                      <option value="22">Belize</option>
                      <option value="23">Benin</option>
                      <option value="24">Bermuda</option>
                      <option value="25">Bhutan</option>
                      <option value="26">Bolivia</option>
                      <option value="245">Bonaire, Sint Eustatius and Saba</option>
                      <option value="27">Bosnia and Herzegovina</option>
                      <option value="28">Botswana</option>
                      <option value="29">Bouvet Island</option>
                      <option value="30">Brazil</option>
                      <option value="31">British Indian Ocean Territory</option>
                      <option value="32">Brunei Darussalam</option>
                      <option value="33">Bulgaria</option>
                      <option value="34">Burkina Faso</option>
                      <option value="35">Burundi</option>
                      <option value="36">Cambodia</option>
                      <option value="37">Cameroon</option>
                      <option value="38">Canada</option>
                      <option value="251">Canary Islands</option>
                      <option value="39">Cape Verde</option>
                      <option value="40">Cayman Islands</option>
                      <option value="41">Central African Republic</option>
                      <option value="42">Chad</option>
                      <option value="43">Chile</option>
                      <option value="44">China</option>
                      <option value="45">Christmas Island</option>
                      <option value="46">Cocos (Keeling) Islands</option>
                      <option value="47">Colombia</option>
                      <option value="48">Comoros</option>
                      <option value="49">Congo</option>
                      <option value="50">Cook Islands</option>
                      <option value="51">Costa Rica</option>
                      <option value="52">Cote D'Ivoire</option>
                      <option value="53">Croatia</option>
                      <option value="54">Cuba</option>
                      <option value="246">Curacao</option>
                      <option value="55">Cyprus</option>
                      <option value="56">Czech Republic</option>
                      <option value="237">Democratic Republic of Congo</option>
                      <option value="57">Denmark</option>
                      <option value="58">Djibouti</option>
                      <option value="59">Dominica</option>
                      <option value="60">Dominican Republic</option>
                      <option value="61">East Timor</option>
                      <option value="62">Ecuador</option>
                      <option value="63">Egypt</option>
                      <option value="64">El Salvador</option>
                      <option value="65">Equatorial Guinea</option>
                      <option value="66">Eritrea</option>
                      <option value="67">Estonia</option>
                      <option value="68">Ethiopia</option>
                      <option value="69">Falkland Islands (Malvinas)</option>
                      <option value="70">Faroe Islands</option>
                      <option value="71">Fiji</option>
                      <option value="72">Finland</option>
                      <option value="74">France, Metropolitan</option>
                      <option value="75">French Guiana</option>
                      <option value="76">French Polynesia</option>
                      <option value="77">French Southern Territories</option>
                      <option value="126">FYROM</option>
                      <option value="78">Gabon</option>
                      <option value="79">Gambia</option>
                      <option value="80">Georgia</option>
                      <option value="81">Germany</option>
                      <option value="82">Ghana</option>
                      <option value="83">Gibraltar</option>
                      <option value="84">Greece</option>
                      <option value="85">Greenland</option>
                      <option value="86">Grenada</option>
                      <option value="87">Guadeloupe</option>
                      <option value="88">Guam</option>
                      <option value="89">Guatemala</option>
                      <option value="241">Guernsey</option>
                      <option value="90">Guinea</option>
                      <option value="91">Guinea-Bissau</option>
                      <option value="92">Guyana</option>
                      <option value="93">Haiti</option>
                      <option value="94">Heard and Mc Donald Islands</option>
                      <option value="95">Honduras</option>
                      <option value="96">Hong Kong</option>
                      <option value="97">Hungary</option>
                      <option value="98">Iceland</option>
                      <option value="99">India</option>
                      <option value="100">Indonesia</option>
                      <option value="101">Iran (Islamic Republic of)</option>
                      <option value="102">Iraq</option>
                      <option value="103">Ireland</option>
                      <option value="104">Israel</option>
                      <option value="105">Italy</option>
                      <option value="106">Jamaica</option>
                      <option value="107">Japan</option>
                      <option value="240">Jersey</option>
                      <option value="108">Jordan</option>
                      <option value="109">Kazakhstan</option>
                      <option value="110">Kenya</option>
                      <option value="111">Kiribati</option>
                      <option value="113">Korea, Republic of</option>
                      <option value="114">Kuwait</option>
                      <option value="115">Kyrgyzstan</option>
                      <option value="116">Lao People's Democratic Republic</option>
                      <option value="117">Latvia</option>
                      <option value="118">Lebanon</option>
                      <option value="119">Lesotho</option>
                      <option value="120">Liberia</option>
                      <option value="121">Libyan Arab Jamahiriya</option>
                      <option value="122">Liechtenstein</option>
                      <option value="123">Lithuania</option>
                      <option value="124">Luxembourg</option>
                      <option value="125">Macau</option>
                      <option value="127">Madagascar</option>
                      <option value="128">Malawi</option>
                      <option value="129">Malaysia</option>
                      <option value="130">Maldives</option>
                      <option value="131">Mali</option>
                      <option value="132">Malta</option>
                      <option value="133">Marshall Islands</option>
                      <option value="134">Martinique</option>
                      <option value="135">Mauritania</option>
                      <option value="136">Mauritius</option>
                      <option value="137">Mayotte</option>
                      <option value="138">Mexico</option>
                      <option value="139">Micronesia, Federated States of</option>
                      <option value="140">Moldova, Republic of</option>
                      <option value="141">Monaco</option>
                      <option value="142">Mongolia</option>
                      <option value="242">Montenegro</option>
                      <option value="143">Montserrat</option>
                      <option value="144">Morocco</option>
                      <option value="145">Mozambique</option>
                      <option value="146">Myanmar</option>
                      <option value="147">Namibia</option>
                      <option value="148">Nauru</option>
                      <option value="149">Nepal</option>
                      <option value="150">Netherlands</option>
                      <option value="151">Netherlands Antilles</option>
                      <option value="152">New Caledonia</option>
                      <option value="153">New Zealand</option>
                      <option value="154">Nicaragua</option>
                      <option value="155">Niger</option>
                      <option value="156">Nigeria</option>
                      <option value="157">Niue</option>
                      <option value="158">Norfolk Island</option>
                      <option value="112">North Korea</option>
                      <option value="159">Northern Mariana Islands</option>
                      <option value="160">Norway</option>
                      <option value="161">Oman</option>
                      <option value="162">Pakistan</option>
                      <option value="163">Palau</option>
                      <option value="247">Palestinian Territory, Occupied</option>
                      <option value="164">Panama</option>
                      <option value="165">Papua New Guinea</option>
                      <option value="166">Paraguay</option>
                      <option value="167">Peru</option>
                      <option value="168">Philippines</option>
                      <option value="169">Pitcairn</option>
                      <option value="170">Poland</option>
                      <option value="171">Portugal</option>
                      <option value="172">Puerto Rico</option>
                      <option value="173">Qatar</option>
                      <option value="174">Reunion</option>
                      <option value="175">Romania</option>
                      <option value="176">Russian Federation</option>
                      <option value="177">Rwanda</option>
                      <option value="178">Saint Kitts and Nevis</option>
                      <option value="179">Saint Lucia</option>
                      <option value="180">Saint Vincent and the Grenadines</option>
                      <option value="181">Samoa</option>
                      <option value="182">San Marino</option>
                      <option value="183">Sao Tome and Principe</option>
                      <option value="184">Saudi Arabia</option>
                      <option value="185">Senegal</option>
                      <option value="243">Serbia</option>
                      <option value="186">Seychelles</option>
                      <option value="187">Sierra Leone</option>
                      <option value="188">Singapore</option>
                      <option value="189">Slovak Republic</option>
                      <option value="190">Slovenia</option>
                      <option value="191">Solomon Islands</option>
                      <option value="192">Somalia</option>
                      <option value="193">South Africa</option>
                      <option value="194">South Georgia &amp; South Sandwich Islands</option>
                      <option value="248">South Sudan</option>
                      <option value="195">Spain</option>
                      <option value="196">Sri Lanka</option>
                      <option value="249">St. Barthelemy</option>
                      <option value="197">St. Helena</option>
                      <option value="250">St. Martin (French part)</option>
                      <option value="198">St. Pierre and Miquelon</option>
                      <option value="199">Sudan</option>
                      <option value="200">Suriname</option>
                      <option value="201">Svalbard and Jan Mayen Islands</option>
                      <option value="202">Swaziland</option>
                      <option value="203">Sweden</option>
                      <option value="204">Switzerland</option>
                      <option value="205">Syrian Arab Republic</option>
                      <option value="206">Taiwan</option>
                      <option value="207">Tajikistan</option>
                      <option value="208">Tanzania, United Republic of</option>
                      <option value="209">Thailand</option>
                      <option value="210">Togo</option>
                      <option value="211">Tokelau</option>
                      <option value="212">Tonga</option>
                      <option value="213">Trinidad and Tobago</option>
                      <option value="214">Tunisia</option>
                      <option value="215">Turkey</option>
                      <option value="216">Turkmenistan</option>
                      <option value="217">Turks and Caicos Islands</option>
                      <option value="218">Tuvalu</option>
                      <option value="219">Uganda</option>
                      <option value="220">Ukraine</option>
                      <option value="221">United Arab Emirates</option>
                      <option selected="selected" value="222">United Kingdom</option>
                      <option value="223">United States</option>
                      <option value="224">United States Minor Outlying Islands</option>
                      <option value="225">Uruguay</option>
                      <option value="226">Uzbekistan</option>
                      <option value="227">Vanuatu</option>
                      <option value="228">Vatican City State (Holy See)</option>
                      <option value="229">Venezuela</option>
                      <option value="230">Viet Nam</option>
                      <option value="231">Virgin Islands (British)</option>
                      <option value="232">Virgin Islands (U.S.)</option>
                      <option value="233">Wallis and Futuna Islands</option>
                      <option value="234">Western Sahara</option>
                      <option value="235">Yemen</option>
                      <option value="238">Zambia</option>
                      <option value="239">Zimbabwe</option>
                    </select></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Region / State:</td>
                  <td><select class="large-field" name="zone_id">
                      <option value=""> --- Please Select --- </option>
                      <option value="3513">Aberdeen</option>
                      <option value="3514">Aberdeenshire</option>
                      <option value="3515">Anglesey</option>
                      <option value="3516">Angus</option>
                      <option value="3517">Argyll and Bute</option>
                      <option value="3518">Bedfordshire</option>
                      <option value="3519">Berkshire</option>
                      <option value="3520">Blaenau Gwent</option>
                      <option value="3521">Bridgend</option>
                      <option value="3522">Bristol</option>
                      <option value="3523">Buckinghamshire</option>
                      <option value="3524">Caerphilly</option>
                      <option value="3525">Cambridgeshire</option>
                      <option value="3526">Cardiff</option>
                      <option value="3527">Carmarthenshire</option>
                      <option value="3528">Ceredigion</option>
                      <option value="3529">Cheshire</option>
                      <option value="3530">Clackmannanshire</option>
                      <option value="3531">Conwy</option>
                      <option value="3532">Cornwall</option>
                      <option value="3949">County Antrim</option>
                      <option value="3950">County Armagh</option>
                      <option value="3951">County Down</option>
                      <option value="3952">County Fermanagh</option>
                      <option value="3953">County Londonderry</option>
                      <option value="3954">County Tyrone</option>
                      <option value="3955">Cumbria</option>
                      <option value="3533">Denbighshire</option>
                      <option value="3534">Derbyshire</option>
                      <option value="3535">Devon</option>
                      <option value="3536">Dorset</option>
                      <option value="3537">Dumfries and Galloway</option>
                      <option value="3538">Dundee</option>
                      <option value="3539">Durham</option>
                      <option value="3540">East Ayrshire</option>
                      <option value="3541">East Dunbartonshire</option>
                      <option value="3542">East Lothian</option>
                      <option value="3543">East Renfrewshire</option>
                      <option value="3544">East Riding of Yorkshire</option>
                      <option value="3545">East Sussex</option>
                      <option value="3546">Edinburgh</option>
                      <option value="3547">Essex</option>
                      <option value="3548">Falkirk</option>
                      <option value="3549">Fife</option>
                      <option value="3550">Flintshire</option>
                      <option value="3551">Glasgow</option>
                      <option value="3552">Gloucestershire</option>
                      <option value="3553">Greater London</option>
                      <option value="3554">Greater Manchester</option>
                      <option value="3555">Gwynedd</option>
                      <option value="3556">Hampshire</option>
                      <option value="3557">Herefordshire</option>
                      <option value="3558">Hertfordshire</option>
                      <option value="3559">Highlands</option>
                      <option value="3560">Inverclyde</option>
                      <option value="3972">Isle of Man</option>
                      <option value="3561">Isle of Wight</option>
                      <option value="3562">Kent</option>
                      <option value="3563">Lancashire</option>
                      <option value="3564">Leicestershire</option>
                      <option value="3565">Lincolnshire</option>
                      <option value="3566">Merseyside</option>
                      <option value="3567">Merthyr Tydfil</option>
                      <option value="3568">Midlothian</option>
                      <option value="3569">Monmouthshire</option>
                      <option value="3570">Moray</option>
                      <option value="3571">Neath Port Talbot</option>
                      <option value="3572">Newport</option>
                      <option value="3573">Norfolk</option>
                      <option value="3574">North Ayrshire</option>
                      <option value="3575">North Lanarkshire</option>
                      <option value="3576">North Yorkshire</option>
                      <option value="3577">Northamptonshire</option>
                      <option value="3578">Northumberland</option>
                      <option value="3579">Nottinghamshire</option>
                      <option value="3580">Orkney Islands</option>
                      <option value="3581">Oxfordshire</option>
                      <option value="3582">Pembrokeshire</option>
                      <option value="3583">Perth and Kinross</option>
                      <option value="3584">Powys</option>
                      <option value="3585">Renfrewshire</option>
                      <option value="3586">Rhondda Cynon Taff</option>
                      <option value="3587">Rutland</option>
                      <option value="3588">Scottish Borders</option>
                      <option value="3589">Shetland Islands</option>
                      <option value="3590">Shropshire</option>
                      <option value="3591">Somerset</option>
                      <option value="3592">South Ayrshire</option>
                      <option value="3593">South Lanarkshire</option>
                      <option value="3594">South Yorkshire</option>
                      <option value="3595">Staffordshire</option>
                      <option value="3596">Stirling</option>
                      <option value="3597">Suffolk</option>
                      <option value="3598">Surrey</option>
                      <option value="3599">Swansea</option>
                      <option value="3600">Torfaen</option>
                      <option value="3601">Tyne and Wear</option>
                      <option value="3602">Vale of Glamorgan</option>
                      <option value="3603">Warwickshire</option>
                      <option value="3604">West Dunbartonshire</option>
                      <option value="3605">West Lothian</option>
                      <option value="3606">West Midlands</option>
                      <option value="3607">West Sussex</option>
                      <option value="3608">West Yorkshire</option>
                      <option value="3609">Western Isles</option>
                      <option value="3610">Wiltshire</option>
                      <option value="3611">Worcestershire</option>
                      <option value="3612">Wrexham</option>
                    </select></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="checkout">
          <div class="checkout-heading" data-toggle="collapse" data-target="#Shipping_method">Step 3: Shipping Method</div>
          <div class="checkout-content collapse fade-in" id="Shipping_method">
            <p>Please select the preferred shipping method to use on this order.</p>
            <table class="radio">
              <tbody>
                <tr>
                  <td colspan="3"><b>Free Shipping</b></td>
                </tr>
                <tr class="highlight">
                  <td><label>
                      <input type="radio" checked="checked" id="" value="" name="shipping_method">
                      Free Shipping <b>($0.00)</b></label></td>
                </tr>
                <tr>
                  <td colspan="3"><b>Flat Rate</b></td>
                </tr>
                <tr class="highlight">
                  <td><label>
                      <input type="radio" checked="checked" id="" value="" name="shipping_method">
                      Flat Shipping Rate <b>($5.03)</b></label></td>
                </tr>
              </tbody>
            </table>
            <br>
            <b>Add Comments About Your Order</b>
            <textarea style="width: 96%;" rows="8" name="comment"></textarea>
            <br>
            <br>
          </div>
        </div>
        <div class="checkout">
          <div class="checkout-heading" data-toggle="collapse" data-target="#Payment_method">Step 4: Payment Method</div>
          <div class="checkout-content collapse fade-in"  id="Payment_method">
            <p>Please select the preferred payment method to use on this order.</p>
            <table class="radio">
              <tbody>
                <tr class="highlight">
                  <td><label>
                      <input type="radio" checked="checked" id="" value="" name="payment_method">
                      Cash On Delivery</label></td>
                </tr>
                <tr class="highlight">
                  <td><label>
                      <input type="radio" checked="checked" id="" value="" name="payment_method">
                      PayPal</label></td>
                </tr>
              </tbody>
            </table>
            <br>
            <b>Add Comments About Your Order</b>
            <textarea style="width: 96%;" rows="8" name="comment"></textarea>
            <br>
            <br>
          </div>
        </div>
        <div class="checkout">
          <div class="checkout-heading" data-toggle="collapse" data-target="#confirm_order">Step 5: Confirm Order</div>
          <div class="checkout-content collapse fade-in" id="confirm_order" >
            <div class="checkout-product">
              <div id="showcart1"></div>
            </div>
          </div>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </div>

      </div>

    </div>

  </div>

  <!-- Modal -->
<div id="modal_viewproduct" class="modal fade" role="dialog" style=" padding: 50px !important;">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Product Details</h4>
      </div>
      <div class="modal-body">
        <div id="viewprod-loader" style="display: none; text-align: center;">
            <img src="img/ajax-loader.gif">
        </div>
        <!-- content will be load here -->                          
        <div id="viewprod-content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>