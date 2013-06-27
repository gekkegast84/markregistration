<div class='center-wrapper'>
    <center><h1>markregistration</h1></center>
    <div class='offset3 span6'>
        <?php
        foreach ($result as $usert) {
            echo"
          <form class='form-horizontal' action='change_info' method='POST'>
          <div class='control-group'>
            <label class='control-label' for='inputUsername'>username:</label>
            <div class='controls'>
              <input type='text' name='username' value=' $usert->username'>
            </div>
          </div>

          <div class='control-group'>
            <label class='control-label' for='inputSurname'>surname:</label>
            <div class='controls'>
              <input type='text' name='surname' placeholder=' $usert->surname '>
            </div>
          </div>

          <div class='control-group'>
            <label class='control-label' for='inputInitials'>initials:</label>
            <div class='controls'>
              <input type='text' name='initials' placeholder=' $usert->initials '>
            </div>
          </div>

          <div class='control-group'>
            <label class='control-label' for='inputNickname'>nickname:</label>
            <div class='controls'>
              <input type='text' name='nickname' placeholder=' $usert->nickname '>
            </div>
          </div>

          <div class='control-group'>
            <label class='control-label' for='inputPrefix'>prefix:</label>
            <div class='controls'>
              <input type='text' name='prefix' placeholder=' $usert->prefix '>
            </div>
          </div>

          <div class='control-group'>
            <label class='control-label' for='inputDob'>date of birth:</label>
            <div class='controls'>
              <input type='text' name='dob' placeholder=' $usert->dob '>
            </div>
          </div>

          <div class='control-group'>
            <label class='control-label' for='inputPicture'>picture:</label>
            <div class='controls'>
              <input type='text' name='picture' placeholder=' $usert->picture '>
            </div>
          </div>

          <div class='control-group'>
            <label class='control-label' for='inputClassname'>classname:</label>
            <div class='controls'>
              <input type='text' name='classname' placeholder=' $usert->classname '>
            </div>
          </div>

          <div class='control-group'>
            <label class='control-label' for='inputCohort'>cohort:</label>
            <div class='controls'>
              <input type='text' name='cohort' placeholder=' $usert->cohort '>
            </div>
          </div>

            <div class='control-group'>
              <label class='control-label' for='inputcity'>city:</label>
              <div class='controls'>
                <input type='text' name='city' placeholder=' $usert->city '>
              </div>
            </div>

            <div class='control-group'>
              <label class='control-label' for='inputPostcode'>postcode:</label>
              <div class='controls'>
                <input type='text' name='postcode' placeholder=' $usert->postcode '>
              </div>
            </div>

            <div class='control-group'>
              <label class='control-label' for='inputStreet'>street:</label>
              <div class='controls'>
                <input type='text' name='street' placeholder=' $usert->street '>
              </div>
            </div>

            <div class='control-group'>
              <label class='control-label' for='inputPhone'>phone:</label>
              <div class='controls'>
                <input type='text' name='phone' placeholder=' $usert->phone '>
              </div>
            </div>

            <div class='control-group'>
              <label class='control-label' for='inputMobilePhone'>mobilephone:</label>
              <div class='controls'>
                <input type='text' name='mobilephone' placeholder=' $usert->mobilephone '>
              </div>
            </div>

            <div class='control-group'>
              <label class='control-label' for='inputSex'>gender:</label>
              <div class='controls'>
                <input type='text' name='sex' placeholder=' $usert->sex '>
              </div>
            </div>

            <div class='control-group'>
              <label class='control-label' for='inputNationaliteit'>nationality:</label>
              <div class='controls'>
                <input type='text' name='nationaliteit' placeholder=' $usert->nationaliteit '>
              </div>
            </div>
          </div>   
          <div class='control-group'>
            <div class='controls'>
              <button type='submit' class='btn'>submit</button>
            </div>
          </div>
        </form>";
        }
        ?>
    </div>
</div>