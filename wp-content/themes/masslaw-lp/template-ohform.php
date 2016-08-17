<?php
/*
* Template Name: Openhouse Form
*/


function masslaw_scripts_oh() {

	wp_enqueue_script( 'masslow_scripts_oh',  get_template_directory_uri() . '/script.js', array( 'jquery' ), null, true );
	wp_localize_script( 'masslow_scripts_oh', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'site_url' => site_url() ));        
}
add_action( 'wp_enqueue_scripts', 'masslaw_scripts_oh' );


 get_header(); ?>

		<?php if ( have_posts() ) : ?>
				
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php the_content(); ?>
					<div class="container">
						<form class="jotform-form" action="http://submit.jotformpro.com/submit/43066178792969/" method="post" name="form_43066178792969" id="43066178792969" accept-charset="utf-8" novalidate="true">
							  <input type="hidden" name="formID" value="43066178792969">
							  <input type="hidden" name="action" value="sendphp">
								<input type="hidden" name="lead-source" value="<?php echo (isset($_GET['utm_source']))?htmlspecialchars($_GET["utm_source"]):"organic" ?>" >
							  <div class="form-all">
							    <ul class="form-section">
							      <li id="cid_22" class="form-input-wide" data-type="control_head">
							        <div class="form-header-group">
							          <div class="header-text httal htvam">
							            <h2 id="header_22" class="form-header">
							              REGISTER FOR AN OPEN HOUSE
							            </h2>
							          </div>
							        </div>
							      </li>
							      <li class="form-line" data-type="control_text" id="id_31">
							        <div id="cid_31" class="form-input-wide">
							          <div id="text_31" class="form-html">
							            <p><span style="font-size:small;">Note: online registration is not necessary in order to attend an open house.</span></p>
							          </div>
							        </div>
							      </li>
							      <li class="form-line" data-type="control_textbox" id="id_1">
							        <label class="form-label form-label-left form-label-auto" id="label_1" for="input_1">
							          First Name
							          <span class="form-required">
							            *
							          </span>
							        </label>
							        <div id="cid_1" class="form-input">
							          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_1" name="q1_firstName" size="20" value="">
							        </div>
							      </li>
							      <li class="form-line" data-type="control_textbox" id="id_3">
							        <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3"> Middle Initial </label>
							        <div id="cid_3" class="form-input">
							          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_3" name="q3_middleInitial" size="20" value="">
							        </div>
							      </li>
							      <li class="form-line" data-type="control_textbox" id="id_4">
							        <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4">
							          Last Name
							          <span class="form-required">
							            *
							          </span>
							        </label>
							        <div id="cid_4" class="form-input">
							          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_4" name="q4_lastName" size="20" value="">
							        </div>
							      </li>
							      <li class="form-line" data-type="control_textbox" id="id_5">
							        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> Title </label>
							        <div id="cid_5" class="form-input">
							          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_5" name="q5_title" size="20" value="">
							        </div>
							      </li>
							      <li class="form-line" data-type="control_address" id="id_8">
							        <label class="form-label form-label-left form-label-auto" id="label_8" for="input_8">
							          Address
							          <span class="form-required">
							            *
							          </span>
							        </label>
							        <div id="cid_8" class="form-input">
							          <table summary="" undefined="" class="form-address-table" border="0" cellpadding="0" cellspacing="0">
							            <tbody><tr>
							              <td colspan="2">
							                <span class="form-sub-label-container">
							                  <input class="form-textbox validate[required] form-address-line" type="text" name="q8_address8[addr_line1]" id="input_8_addr_line1">
							                  <label class="form-sub-label" for="input_8_addr_line1" id="sublabel_8_addr_line1"> Street Address </label>
							                </span>
							              </td>
							            </tr>
							            <tr>
							              <td colspan="2">
							                <span class="form-sub-label-container">
							                  <input class="form-textbox form-address-line" type="text" name="q8_address8[addr_line2]" id="input_8_addr_line2" size="46">
							                  <label class="form-sub-label" for="input_8_addr_line2" id="sublabel_8_addr_line2"> Street Address Line 2 </label>
							                </span>
							              </td>
							            </tr>
							            <tr>
							              <td width="50%">
							                <span class="form-sub-label-container">
							                  <input class="form-textbox validate[required] form-address-city" type="text" name="q8_address8[city]" id="input_8_city" size="21">
							                  <label class="form-sub-label" for="input_8_city" id="sublabel_8_city"> City </label>
							                </span>
							              </td>
							              <td>
							                <span class="form-sub-label-container">
							                  <input class="form-textbox validate[required] form-address-state" type="text" name="q8_address8[state]" id="input_8_state" size="22">
							                  <label class="form-sub-label" for="input_8_state" id="sublabel_8_state"> State / Province </label>
							                </span>
							              </td>
							            </tr>
							            <tr>
							              <td width="50%">
							                <span class="form-sub-label-container">
							                  <input class="form-textbox validate[required] form-address-postal" type="text" name="q8_address8[postal]" id="input_8_postal" size="10">
							                  <label class="form-sub-label" for="input_8_postal" id="sublabel_8_postal"> Postal / Zip Code </label>
							                </span>
							              </td>
							              <td>
							                <span class="form-sub-label-container">
							                  <select class="form-dropdown validate[required] form-address-country" name="q8_address8[country]" id="input_8_country">
							                    <option value="" selected=""> Please Select </option>
							                    <option selected="selected" value="United States"> United States </option>
							                    <option value="Afghanistan"> Afghanistan </option>
							                    <option value="Albania"> Albania </option>
							                    <option value="Algeria"> Algeria </option>
							                    <option value="American Samoa"> American Samoa </option>
							                    <option value="Andorra"> Andorra </option>
							                    <option value="Angola"> Angola </option>
							                    <option value="Anguilla"> Anguilla </option>
							                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
							                    <option value="Argentina"> Argentina </option>
							                    <option value="Armenia"> Armenia </option>
							                    <option value="Aruba"> Aruba </option>
							                    <option value="Australia"> Australia </option>
							                    <option value="Austria"> Austria </option>
							                    <option value="Azerbaijan"> Azerbaijan </option>
							                    <option value="The Bahamas"> The Bahamas </option>
							                    <option value="Bahrain"> Bahrain </option>
							                    <option value="Bangladesh"> Bangladesh </option>
							                    <option value="Barbados"> Barbados </option>
							                    <option value="Belarus"> Belarus </option>
							                    <option value="Belgium"> Belgium </option>
							                    <option value="Belize"> Belize </option>
							                    <option value="Benin"> Benin </option>
							                    <option value="Bermuda"> Bermuda </option>
							                    <option value="Bhutan"> Bhutan </option>
							                    <option value="Bolivia"> Bolivia </option>
							                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
							                    <option value="Botswana"> Botswana </option>
							                    <option value="Brazil"> Brazil </option>
							                    <option value="Brunei"> Brunei </option>
							                    <option value="Bulgaria"> Bulgaria </option>
							                    <option value="Burkina Faso"> Burkina Faso </option>
							                    <option value="Burundi"> Burundi </option>
							                    <option value="Cambodia"> Cambodia </option>
							                    <option value="Cameroon"> Cameroon </option>
							                    <option value="Canada"> Canada </option>
							                    <option value="Cape Verde"> Cape Verde </option>
							                    <option value="Cayman Islands"> Cayman Islands </option>
							                    <option value="Central African Republic"> Central African Republic </option>
							                    <option value="Chad"> Chad </option>
							                    <option value="Chile"> Chile </option>
							                    <option value="People's Republic of China"> People's Republic of China </option>
							                    <option value="Republic of China"> Republic of China </option>
							                    <option value="Christmas Island"> Christmas Island </option>
							                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
							                    <option value="Colombia"> Colombia </option>
							                    <option value="Comoros"> Comoros </option>
							                    <option value="Congo"> Congo </option>
							                    <option value="Cook Islands"> Cook Islands </option>
							                    <option value="Costa Rica"> Costa Rica </option>
							                    <option value="Cote d'Ivoire"> Cote d'Ivoire </option>
							                    <option value="Croatia"> Croatia </option>
							                    <option value="Cuba"> Cuba </option>
							                    <option value="Cyprus"> Cyprus </option>
							                    <option value="Czech Republic"> Czech Republic </option>
							                    <option value="Denmark"> Denmark </option>
							                    <option value="Djibouti"> Djibouti </option>
							                    <option value="Dominica"> Dominica </option>
							                    <option value="Dominican Republic"> Dominican Republic </option>
							                    <option value="Ecuador"> Ecuador </option>
							                    <option value="Egypt"> Egypt </option>
							                    <option value="El Salvador"> El Salvador </option>
							                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
							                    <option value="Eritrea"> Eritrea </option>
							                    <option value="Estonia"> Estonia </option>
							                    <option value="Ethiopia"> Ethiopia </option>
							                    <option value="Falkland Islands"> Falkland Islands </option>
							                    <option value="Faroe Islands"> Faroe Islands </option>
							                    <option value="Fiji"> Fiji </option>
							                    <option value="Finland"> Finland </option>
							                    <option value="France"> France </option>
							                    <option value="French Polynesia"> French Polynesia </option>
							                    <option value="Gabon"> Gabon </option>
							                    <option value="The Gambia"> The Gambia </option>
							                    <option value="Georgia"> Georgia </option>
							                    <option value="Germany"> Germany </option>
							                    <option value="Ghana"> Ghana </option>
							                    <option value="Gibraltar"> Gibraltar </option>
							                    <option value="Greece"> Greece </option>
							                    <option value="Greenland"> Greenland </option>
							                    <option value="Grenada"> Grenada </option>
							                    <option value="Guadeloupe"> Guadeloupe </option>
							                    <option value="Guam"> Guam </option>
							                    <option value="Guatemala"> Guatemala </option>
							                    <option value="Guernsey"> Guernsey </option>
							                    <option value="Guinea"> Guinea </option>
							                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
							                    <option value="Guyana"> Guyana </option>
							                    <option value="Haiti"> Haiti </option>
							                    <option value="Honduras"> Honduras </option>
							                    <option value="Hong Kong"> Hong Kong </option>
							                    <option value="Hungary"> Hungary </option>
							                    <option value="Iceland"> Iceland </option>
							                    <option value="India"> India </option>
							                    <option value="Indonesia"> Indonesia </option>
							                    <option value="Iran"> Iran </option>
							                    <option value="Iraq"> Iraq </option>
							                    <option value="Ireland"> Ireland </option>
							                    <option value="Israel"> Israel </option>
							                    <option value="Italy"> Italy </option>
							                    <option value="Jamaica"> Jamaica </option>
							                    <option value="Japan"> Japan </option>
							                    <option value="Jersey"> Jersey </option>
							                    <option value="Jordan"> Jordan </option>
							                    <option value="Kazakhstan"> Kazakhstan </option>
							                    <option value="Kenya"> Kenya </option>
							                    <option value="Kiribati"> Kiribati </option>
							                    <option value="North Korea"> North Korea </option>
							                    <option value="South Korea"> South Korea </option>
							                    <option value="Kosovo"> Kosovo </option>
							                    <option value="Kuwait"> Kuwait </option>
							                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
							                    <option value="Laos"> Laos </option>
							                    <option value="Latvia"> Latvia </option>
							                    <option value="Lebanon"> Lebanon </option>
							                    <option value="Lesotho"> Lesotho </option>
							                    <option value="Liberia"> Liberia </option>
							                    <option value="Libya"> Libya </option>
							                    <option value="Liechtenstein"> Liechtenstein </option>
							                    <option value="Lithuania"> Lithuania </option>
							                    <option value="Luxembourg"> Luxembourg </option>
							                    <option value="Macau"> Macau </option>
							                    <option value="Macedonia"> Macedonia </option>
							                    <option value="Madagascar"> Madagascar </option>
							                    <option value="Malawi"> Malawi </option>
							                    <option value="Malaysia"> Malaysia </option>
							                    <option value="Maldives"> Maldives </option>
							                    <option value="Mali"> Mali </option>
							                    <option value="Malta"> Malta </option>
							                    <option value="Marshall Islands"> Marshall Islands </option>
							                    <option value="Martinique"> Martinique </option>
							                    <option value="Mauritania"> Mauritania </option>
							                    <option value="Mauritius"> Mauritius </option>
							                    <option value="Mayotte"> Mayotte </option>
							                    <option value="Mexico"> Mexico </option>
							                    <option value="Micronesia"> Micronesia </option>
							                    <option value="Moldova"> Moldova </option>
							                    <option value="Monaco"> Monaco </option>
							                    <option value="Mongolia"> Mongolia </option>
							                    <option value="Montenegro"> Montenegro </option>
							                    <option value="Montserrat"> Montserrat </option>
							                    <option value="Morocco"> Morocco </option>
							                    <option value="Mozambique"> Mozambique </option>
							                    <option value="Myanmar"> Myanmar </option>
							                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
							                    <option value="Namibia"> Namibia </option>
							                    <option value="Nauru"> Nauru </option>
							                    <option value="Nepal"> Nepal </option>
							                    <option value="Netherlands"> Netherlands </option>
							                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
							                    <option value="New Caledonia"> New Caledonia </option>
							                    <option value="New Zealand"> New Zealand </option>
							                    <option value="Nicaragua"> Nicaragua </option>
							                    <option value="Niger"> Niger </option>
							                    <option value="Nigeria"> Nigeria </option>
							                    <option value="Niue"> Niue </option>
							                    <option value="Norfolk Island"> Norfolk Island </option>
							                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
							                    <option value="Northern Mariana"> Northern Mariana </option>
							                    <option value="Norway"> Norway </option>
							                    <option value="Oman"> Oman </option>
							                    <option value="Pakistan"> Pakistan </option>
							                    <option value="Palau"> Palau </option>
							                    <option value="Palestine"> Palestine </option>
							                    <option value="Panama"> Panama </option>
							                    <option value="Papua New Guinea"> Papua New Guinea </option>
							                    <option value="Paraguay"> Paraguay </option>
							                    <option value="Peru"> Peru </option>
							                    <option value="Philippines"> Philippines </option>
							                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
							                    <option value="Poland"> Poland </option>
							                    <option value="Portugal"> Portugal </option>
							                    <option value="Puerto Rico"> Puerto Rico </option>
							                    <option value="Qatar"> Qatar </option>
							                    <option value="Romania"> Romania </option>
							                    <option value="Russia"> Russia </option>
							                    <option value="Rwanda"> Rwanda </option>
							                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
							                    <option value="Saint Helena"> Saint Helena </option>
							                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
							                    <option value="Saint Lucia"> Saint Lucia </option>
							                    <option value="Saint Martin"> Saint Martin </option>
							                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
							                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
							                    <option value="Samoa"> Samoa </option>
							                    <option value="San Marino"> San Marino </option>
							                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
							                    <option value="Saudi Arabia"> Saudi Arabia </option>
							                    <option value="Senegal"> Senegal </option>
							                    <option value="Serbia"> Serbia </option>
							                    <option value="Seychelles"> Seychelles </option>
							                    <option value="Sierra Leone"> Sierra Leone </option>
							                    <option value="Singapore"> Singapore </option>
							                    <option value="Slovakia"> Slovakia </option>
							                    <option value="Slovenia"> Slovenia </option>
							                    <option value="Solomon Islands"> Solomon Islands </option>
							                    <option value="Somalia"> Somalia </option>
							                    <option value="Somaliland"> Somaliland </option>
							                    <option value="South Africa"> South Africa </option>
							                    <option value="South Ossetia"> South Ossetia </option>
							                    <option value="Spain"> Spain </option>
							                    <option value="Sri Lanka"> Sri Lanka </option>
							                    <option value="Sudan"> Sudan </option>
							                    <option value="Suriname"> Suriname </option>
							                    <option value="Svalbard"> Svalbard </option>
							                    <option value="Swaziland"> Swaziland </option>
							                    <option value="Sweden"> Sweden </option>
							                    <option value="Switzerland"> Switzerland </option>
							                    <option value="Syria"> Syria </option>
							                    <option value="Taiwan"> Taiwan </option>
							                    <option value="Tajikistan"> Tajikistan </option>
							                    <option value="Tanzania"> Tanzania </option>
							                    <option value="Thailand"> Thailand </option>
							                    <option value="Timor-Leste"> Timor-Leste </option>
							                    <option value="Togo"> Togo </option>
							                    <option value="Tokelau"> Tokelau </option>
							                    <option value="Tonga"> Tonga </option>
							                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
							                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
							                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
							                    <option value="Tunisia"> Tunisia </option>
							                    <option value="Turkey"> Turkey </option>
							                    <option value="Turkmenistan"> Turkmenistan </option>
							                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
							                    <option value="Tuvalu"> Tuvalu </option>
							                    <option value="Uganda"> Uganda </option>
							                    <option value="Ukraine"> Ukraine </option>
							                    <option value="United Arab Emirates"> United Arab Emirates </option>
							                    <option value="United Kingdom"> United Kingdom </option>
							                    <option value="Uruguay"> Uruguay </option>
							                    <option value="Uzbekistan"> Uzbekistan </option>
							                    <option value="Vanuatu"> Vanuatu </option>
							                    <option value="Vatican City"> Vatican City </option>
							                    <option value="Venezuela"> Venezuela </option>
							                    <option value="Vietnam"> Vietnam </option>
							                    <option value="British Virgin Islands"> British Virgin Islands </option>
							                    <option value="Isle of Man"> Isle of Man </option>
							                    <option value="US Virgin Islands"> US Virgin Islands </option>
							                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
							                    <option value="Western Sahara"> Western Sahara </option>
							                    <option value="Yemen"> Yemen </option>
							                    <option value="Zambia"> Zambia </option>
							                    <option value="Zimbabwe"> Zimbabwe </option>
							                    <option value="other"> Other </option>
							                  </select>
							                  <label class="form-sub-label" for="input_8_country" id="sublabel_8_country"> Country </label>
							                </span>
							              </td>
							            </tr>
							          </tbody></table>
							        </div>
							      </li>
							      <li class="form-line" data-type="control_phone" id="id_10">
							        <label class="form-label form-label-left form-label-auto" id="label_10" for="input_10"> Work Number </label>
							        <div id="cid_10" class="form-input">
							          <span class="form-sub-label-container">
							            <input class="form-textbox" type="tel" name="q10_workNumber[area]" id="input_10_area" size="3">
							            <span class="phone-separate">
							              &nbsp;-
							            </span>
							            <label class="form-sub-label" for="input_10_area" id="sublabel_area"> Area Code </label>
							          </span>
							          <span class="form-sub-label-container">
							            <input class="form-textbox" type="tel" name="q10_workNumber[phone]" id="input_10_phone" size="8">
							            <label class="form-sub-label" for="input_10_phone" id="sublabel_phone"> Phone Number </label>
							          </span>
							        </div>
							      </li>
							      <li class="form-line" data-type="control_phone" id="id_13">
							        <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13"> Home Number </label>
							        <div id="cid_13" class="form-input">
							          <span class="form-sub-label-container">
							            <input class="form-textbox" type="tel" name="q13_homeNumber13[area]" id="input_13_area" size="3">
							            <span class="phone-separate">
							              &nbsp;-
							            </span>
							            <label class="form-sub-label" for="input_13_area" id="sublabel_area"> Area Code </label>
							          </span>
							          <span class="form-sub-label-container">
							            <input class="form-textbox" type="tel" name="q13_homeNumber13[phone]" id="input_13_phone" size="8">
							            <label class="form-sub-label" for="input_13_phone" id="sublabel_phone"> Phone Number </label>
							          </span>
							        </div>
							      </li>
							      <li class="form-line" data-type="control_email" id="id_17">
							        <label class="form-label form-label-left form-label-auto" id="label_17" for="input_17">
							          E-mail
							          <span class="form-required">
							            *
							          </span>
							        </label>
							        <div id="cid_17" class="form-input">
							          <input type="email" class=" form-textbox validate[required, Email]" id="input_17" name="q17_email17" size="30" value="" placeholder="ex: myname@example.com">
							        </div>
							      </li>
							      <li class="form-line" data-type="control_dropdown" id="id_12">
							        <label class="form-label form-label-left form-label-auto" id="label_12" for="input_12"> Semester of desired enrollment: 
							        <span class="form-required">
							            *
							          </span>
							        </label>
							        <div id="cid_12" class="form-input">
							          <select class="form-dropdown" style="width:150px" id="input_12" name="q12_semesterOf">
							            <option value="">  </option>
							            <!-- <option value="Spring 2016"> Spring 2016 </option> -->
							            <option value="Fall 2016"> Fall 2016 </option>
							          </select>
							        </div>
							      </li>
							      <li class="form-line" data-type="control_dropdown" id="id_14">
							        <label class="form-label form-label-left form-label-auto" id="label_14" for="input_14">
							          Open House Attendance Dates:
							          <span class="form-required">
							            *
							          </span>
							        </label>
							        <div id="cid_14" class="form-input">
							          <select class="form-dropdown validate[required]" style="width:150px" id="input_14" name="q14_openHouse">
							            <option value="">  </option>
							            <option value="September 13, 2016 - TUESDAY 7:00 PM">September 13, 2016 - TUESDAY 7:00 PM</option>
							          </select>
							        </div>
							      </li>
							      <li class="form-line always-hidden" data-type="control_dropdown" id="id_15">
							        <label class="form-label form-label-left form-label-auto" id="label_15" for="input_15">
							          How did you hear about Massachusetts School of Law?
							          <span class="form-required">
							            *
							          </span>
							        </label>
							        <div id="cid_15" class="form-input always-hidden">
							          <select class="form-dropdown validate[required]" style="width:150px" id="input_15" name="q15_howDid">
							            <option value="">  </option>
							            <option selected="selected" value="inSegment PPC"> inSegment PPC </option>
							          </select> 
							        </div>
							      </li>
							      <li class="form-line" data-type="control_textbox" id="id_16">
							        <label class="form-label form-label-left form-label-auto" id="label_16" for="input_16"> If Other: </label>
							        <div id="cid_16" class="form-input">
							          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_16" name="q16_ifOther" size="20" value="">
							        </div>
							      </li>
							      <li class="form-line" data-type="control_button" id="id_2">
							        <div id="cid_2" class="form-input-wide">
							          <div class="form-buttons-wrapper">
							            <button id="input_2" type="submit" class="form-submit-button">
							              Submit Form
							            </button>
							          </div>
							        </div>
							      </li>
							      <li style="display:none">
							        Should be Empty:
							        <input type="text" name="website" value="">
							      </li>
							    </ul>
							  </div>
							  <input type="hidden" id="simple_spc" name="simple_spc" value="43066178792969-43066178792969">
							  <script type="text/javascript">
							  document.getElementById("si" + "mple" + "_spc").value = "43066178792969-43066178792969";
							  </script>
							  <input type="hidden" class="form-hidden" value="1" id="input_32" name="q32_clickTo">
							</form>
						</div>

			<?php endwhile; ?>		

		<?php endif; ?>

<?php get_footer(); ?>