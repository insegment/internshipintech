		function validateForm() {
			invalid = 0;
		    var firstname = document.forms["arbor_form"]["fname"].value;
		    var lastname = document.forms["arbor_form"]["lname"].value;
		    var company = document.forms["arbor_form"]["company"].value;
		    var email = document.forms["arbor_form"]["email"].value;
		    var country = document.forms["arbor_form"]["country"];
		    var phone = document.forms["arbor_form"]["phone"].value;
		    var job = document.forms["arbor_form"]["job"].value;
		    var industry = document.forms["arbor_form"]["industry"];
			var nameExp = new RegExp(/^[a-zA-Z -]{2,}$/);
			var companyExp = new RegExp(/^[a-zA-Z -]{3,}$/);
			var emailExp = new RegExp (/[a-z0-9]+([-+._][a-z0-9]+){0,2}@.*?(\.(a(?:[cdefgilmnoqrstuwxz]|ero|(?:rp|si)a)|b(?:[abdefghijmnorstvwyz]iz)|c(?:[acdfghiklmnoruvxyz]|at|o(?:m|op))|d[ejkmoz]|e(?:[ceghrstu]|du)|f[ijkmor]|g(?:[abdefghilmnpqrstuwy]|ov)|h[kmnrtu]|i(?:[delmnoqrst]|n(?:fo|t))|j(?:[emop]|obs)|k[eghimnprwyz]|l[abcikrstuvy]|m(?:[acdeghklmnopqrstuvwxyz]|il|obi|useum)|n(?:[acefgilopruz]|ame|et)|o(?:m|rg)|p(?:[aefghklmnrstwy]|ro)|qa|r[eosuw]|s[abcdeghijklmnortuvyz]|t(?:[cdfghjklmnoprtvwz]|(?:rav)?el)|u[agkmsyz]|v[aceginu]|w[fs]|y[etu]|z[amw])\b){1,2}/);
			var phoneExp = new RegExp (/^[\\(]{0,1}([0-9]){3}[\\)]{0,1}[ ]?([^0-1]){1}([0-9]){2}[ ]?[-]?[ ]?([0-9]){4}[ ]*((x){0,1}([0-9]){1,5}){0,1}$/)
/*FIRST NAME*/
		    if (firstname == null || firstname == "") {
		    	document.getElementById("invalid_firstname").style.display = "block";
		    	document.getElementById("invalid_firstname").innerHTML = "You must type in a firstname!";
		        invalid += 1;
		    }
		    else{
				if (!firstname.match(nameExp)) {
						document.getElementById("invalid_firstname").style.display = "block";
						document.getElementById("invalid_firstname").innerHTML = "Only letters and at least 2 characters long!";
						invalid += 1;
					}
					else{
						document.getElementById("invalid_firstname").style.display = "none";
					}
		    }
/*LAST NAME*/
		    if (lastname == null || lastname == "") {
		    	document.getElementById("invalid_lastname").style.display = "block";
		    	document.getElementById("invalid_lastname").innerHTML = "You must type in a lastname!";
		        invalid += 1;
		    }
		    else{
				if (!lastname.match(nameExp)) {
						document.getElementById("invalid_lastname").style.display = "block";
						document.getElementById("invalid_lastname").innerHTML = "Only letters and at least 2 characters long!";
						invalid += 1;
					}
					else{
						document.getElementById("invalid_lastname").style.display = "none";
					}
		    }
/*COMPANY*/
		    if (company == null || company == "") {
		    	document.getElementById("invalid_company").style.display = "block";
		    	document.getElementById("invalid_company").innerHTML = "You must type in a company!";
		        invalid += 1;
		    }
		    else{
				if (!company.match(companyExp)) {
						document.getElementById("invalid_company").style.display = "block";
						document.getElementById("invalid_company").innerHTML = "Only letters and at least 3 characters long!";
						invalid += 1;
					}
					else{
						document.getElementById("invalid_company").style.display = "none";
					}
		    }
/*EMAIL*/
		    if (email == null || email == "") {
		    			document.getElementById("invalid_email").style.display = "block";
		   		    	document.getElementById("invalid_email").innerHTML = "You must type in a mail address!";
		   		        invalid += 1;
		   		    }
		   	else{
		   		if (!email.match(emailExp)) {
		   			document.getElementById("invalid_email").style.display = "block";
					document.getElementById("invalid_email").innerHTML = "Wrong mail!";
					invalid += 1;
				}
				else{
					document.getElementById("invalid_email").style.display = "none";
				}
		   	}
/*SELECT COUNTRY*/
			if (country.value == country[0].value ){
				document.getElementById("invalid_country").style.display = "block";
			    document.getElementById("invalid_country").innerHTML = "You must select a country!";
			  	invalid += 1;
			}
			else{
				document.getElementById("invalid_country").style.display = "none";
			}
/*US PHONE NUMBER*/
			if (phone == null || phone == "") {
				document.getElementById("invalid_phone").style.display = "block";
		    	document.getElementById("invalid_phone").innerHTML = "You must type in a phone number!";
		        invalid += 1;
		    }
		    else{
				if (!phone.match(phoneExp)) {
						document.getElementById("invalid_phone").style.display = "block";
						document.getElementById("invalid_phone").innerHTML = "Invalid phone number!";
						invalid += 1;
					}
					else{
						document.getElementById("invalid_phone").style.display = "none";
					}
		    }
/*JOB TITLE*/
		    if (job == null || job == "") {
		    	document.getElementById("invalid_job").style.display = "block";
		    	document.getElementById("invalid_job").innerHTML = "You must type in a job!";
		        invalid += 1;
		    }
		    else{
				if (!job.match(companyExp)) {
						document.getElementById("invalid_job").style.display = "block";
						document.getElementById("invalid_job").innerHTML = "Only letters and at least 3 characters long!";
						invalid += 1;
					}
					else{
						document.getElementById("invalid_job").style.display = "none";
					}
		    }
/*SELECT INDUSTRY*/
		    if (industry.value == industry[0].value ){
		    	document.getElementById("invalid_industry").style.display = "block";
			    document.getElementById("invalid_industry").innerHTML = "You must select an industry!";
			  	invalid += 1;
			}
			else{
				document.getElementById("invalid_industry").style.display = "none";
			}
/*INVALID*/
		    if (invalid != 0){
		    	return false;
		    	}
		    	else{
		    		return true;
		    	}		
		}

		function displayForm(){
			document.getElementById("form-whitepaper").style.display = "inline-block";
			document.getElementById("wp_button").style.display = "inline-block";
		}