<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Transaction Pane</title>
    
    
    <link rel="stylesheet" href="css/maketransaction.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

  <div id="MakeTransactionPane">
    <h1>MAKE TRANSACTION PANE</h1>
    <h5>Welcome to Make Transaction Pane!!! Hope you will have a great experience here!!</h5>
    <div id="Form">
    <form class="row g-3"  method='POST'>

    <?php
    include 'connect.php';

    $sid = $_GET['id'];
    $sql ="select * from customers where id = $sid";

    $query = mysqli_query($con, $sql);
    $rows = mysqli_fetch_assoc($query);
    
    if(isset($_POST['sum'])){
    $sender= $_POST["Sender"];
    $sender_acc_number = $_POST["Sender_acc_number"];
    $sender_email = $_POST["Sender_email"];
    $recipient = $_POST["Recipient"];
    $recipient_acc_number = $_POST["Recipient_acc_number"];
    $recipient_email = $_POST["Recipient_email"];
    $country = $_POST["Country"];
    $transffered_amount = $_POST["Amount_Transfer"];
    $sender_acc_balance = $_POST["Sender_acc_balance"];
    $recipient_acc_balance = $_POST["Recipient_acc_balance"];

    $cmd="INSERT INTO transact(sender_customer_name, sender_account_number, sender_email,sender_account_balance, recipient_customer_name, recipient_account_number , recipient_email, recipient_account_balance, country, transferred_amount) VALUES('$sender', '$sender_acc_number', '$sender_email','$sender_acc_balance', '$recipient', '$recipient_acc_number', '$recipient_email','$recipient_acc_balance', '$country', '$transffered_amount' ) ";
    $result = mysqli_query($con, $cmd);
      
    if($result){
      ?>
         <script> alert('Transaction Successful');
                         
               </script>";
     
     <?php  
    }else{
      ?>
      <script> alert('Transaction Failed');
                         
               </script>";
    <?php    
    }
  }    
?>

        
                

            <div class="col-md-6">
              <label for="inputName4" class="form-label">Name(Sender*)</label>
              <input type="text" class="form-control" id="inputName4" name="Sender">
            </div>
            <div class="col-md-6">
              <label for="inputCustomerID4" class="form-label">Account Number(Sender*)</label>
              <input type="text" class="form-control" id="inputCustomerID4" name="Sender_acc_number">
            </div>
            <div class="col-12">
              <label for="inputEmail3" class="form-label">Email(Sender*)</label>
              <input type="email" class="form-control" id="inputEmail3" placeholder="name@gmail.com" name="Sender_email">
            </div>
            <div class="col-md-6">
              <label for="inputCustomerID4" class="form-label">Account Balance(Sender*)</label>
              <input type="text" class="form-control" id="inputCustomerID5" name="Sender_acc_balance">
            </div>
            
            <div class="col-md-6">
              <label for="inputName4" class="form-label">Name(Recipient*)</label>
              <input type="text" class="form-control" id="inputName5" name="Recipient" value="<?php echo $rows['Username']; ?>">
            </div>
            <div class="col-md-6">
              <label for="inputCustomerID4" class="form-label">Account Number(Recipient*)</label>
              <input type="text" class="form-control" id="inputCustomerID5" name="Recipient_acc_number" value="<?php echo $rows['Account_Number']; ?>">
            </div>
            <div class="col-12">
              <label for="inputEmail3" class="form-label">Email(Recipient*)</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="name@gmail.com" name="Recipient_email" value="<?php echo $rows['Email']; ?>">
            </div>
            <div class="col-md-6">
              <label for="inputCustomerID4" class="form-label">Account Balance(Recipient*)</label>
              <input type="text" class="form-control" id="inputCustomerID5" name="Recipient_acc_balance" value="<?php echo $rows['Account_Balance']; ?>">
            </div>
            
            <div class="col-md-6">
            <div class="col-md-4">
              <label for="inputCountry" class="form-label">Country</label>
              <select id="inputCountry" class="form-select" name="Country">
                
                  <option value="0">-- Select Country --</option>
                  <option selected="" value="United States">United States</option>
                  <option value="Canada">Canada</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antarctica">Antarctica</option>
                  <option value="Antigua">Antigua</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijani">Azerbaijani</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Netherlands">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia-Hercegovina">Bosnia-Hercegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Bouvet Island">Bouvet Island</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British IOT">British IOT</option>
                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Rep">Central African Rep</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos Islands">Cocos Islands</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="East Timor">East Timor</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Faeroe Islands">Faeroe Islands</option>
                  <option value="Falkland Islands">Falkland Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="French Southern">French Southern</option>
                  <option value="French Southern Ter">French Southern Ter</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Heard">Heard</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Ivory Coast">Ivory Coast</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Laos">Laos</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macau">Macau</option>
                  <option value="Macedonia">Macedonia</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia">Micronesia</option>
                  <option value="MNP">MNP</option>
                  <option value="Moldova">Moldova</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="NER">NER</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="Neutral Zone">Neutral Zone</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="North Korea">North Korea</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russia">Russia</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Saint Helena">Saint Helena</option>
                  <option value="Saint Lucia">Saint Lucia</option>
                  <option value="Saint Pierre">Saint Pierre</option>
                  <option value="Saint Vincent">Saint Vincent</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Scotland">Scotland</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovak Republic">Slovak Republic</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somali Democratic">Somali Democratic</option>
                  <option value="South Africa">South Africa</option>
                  <option value="South Georgia">South Georgia</option>
                  <option value="South Korea">South Korea</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
                  <option value="STP">STP</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Svalbard">Svalbard</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syria">Syria</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="TCA">TCA</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Toga">Toga</option>
                  <option value="Togolese">Togolese</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tongo">Tongo</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab">United Arab</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Upper Volta">Upper Volta</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="USSR(Former)">USSR(Former)</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Vatican City">Vatican City</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="VI, British">VI, British</option>
                  <option value="Viet Nam">Viet Nam</option>
                  <option value="Virgin Islands, USA">Virgin Islands, USA</option>
                  <option value="Western Sahara">Western Sahara</option>
                  <option value="WLF">WLF</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Yugoslavia">Yugoslavia</option>
                  <option value="Zaire">Zaire</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                  </select>
              
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Amount to Transfer</label>
              <input type="text" class="form-control" id="inputZip" placeholder="For Indian Rupees- Rs400" name="Amount_Transfer">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Are you sure to Transfer the amount??
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary" name='sum'>Make Transaction</button>
            </div>
          </form>
        </div>
      </div>
      
</body>
</html>