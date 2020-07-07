
   
   // future dates
   
   const dateOfBirth = document.querySelector("#date"); 
   let endDate,
      dateValue;
   
   const disableFutureDates = () =>{
      let date = new Date(); 
   
      let day = date.getDate();
      if (day < 10) day = '0' + day;
    
      let month = date.getMonth() + 1; 
      if (month < 10) month = '0' + month;
    
      let year = date.getFullYear();
      if (year < 10) year = '0' + year;
   
      endDate = year + "-" + month + "-" + day;
      dateOfBirth.setAttribute("max", endDate);
   }
   
   // manual date input
   
   const checkDate = () => {
      dateValue = dateOfBirth.value; 
      let error = dateOfBirth.nextElementSibling; 
      if(Date.parse(dateValue) > Date.parse(endDate)) {
         let error = dateOfBirth.nextElementSibling; 
         error.classList.add("show");
      } else if (error.classList.contains("show")) error.classList.remove("show");
   }
   
   // attachment
   
   const photoSelfie = document.querySelector("#selfie");
   
   let fileName = "";
   
   const onChange = () => {
      let error = document.querySelector(".selfie-feedback");
      if (error.classList.contains("show")) error.classList.remove("show");
   
      let attachedFile = photoSelfie .files[0];
      if (attachedFile.size > 1024 * 1024) {
         error.classList.add("show");
      } else  {
         fileName = attachedFile.name;
      } 
   }  
   
   // tel
   
   const phoneInput = document.querySelectorAll(".phone"); 
   
   const mask = (value, mask) => {
      return value.split("").reduce((accum, letter) => accum.replace("_", letter), mask)
   };
   
   const stripToNumbers = value => {
      return value.replace( /\D+/g, '');
   };
   
   const handleInput = ({data, target, inputType}) => {
      const {placeholder, value} = target;
      const strippedValue = stripToNumbers(value);
      const lastDigit = strippedValue[strippedValue.length-1];
      const maxLenght = placeholder.length - 1;
      if(strippedValue.length >= maxLenght) {
         target.value = value.slice(0, placeholder.length);
         return
      }
      
      if(parseInt(data) === NaN && inputType === "insertText") {
         return;
      }
      
      target.value = mask(strippedValue, placeholder);
      target.selectionEnd = target.value.lastIndexOf(lastDigit)+1;
      target.selectionStart = target.value.lastIndexOf(lastDigit)+1;
   };
   
   // submit
   
   const submit = document.querySelector("form"); 
   const formFields = Array.from(document.querySelectorAll("[required]"));
   
   
   const submitForm = (event) => {
      event.preventDefault();
      const formData = new FormData(document.forms.form);
      if(fileName !="") sendFile(formData);
      popupWindow();
      submit.reset();
   }

   const sendFile = (formData) => {
      return fetch('blocks/file.php', { 
         method: 'POST',
         body: formData
      })
   };
   
//pop-up

   const overlay = document.querySelector(".overlay");
   const popup = document.querySelector(".popup");
   const thanks = document.querySelector(".thanks");
   const closeButton = document.querySelector(".close-button");
   const xclose = document.querySelector(".xclose");
   
   const popupWindow = () => {
      overlay.classList.add("show");
      popup.classList.add("show");
      thanks.innerHTML = "Thanks " + formFields[3].value + " " + formFields[4].value + " for submitting your form";
      closeButton.addEventListener("click", function(){
         overlay.classList.remove("show");
         popup.classList.remove("show");
      });
      xclose.addEventListener("click", function(){
         overlay.classList.remove("show");
         popup.classList.remove("show");
      });
      overlay.addEventListener("click", function(){
         overlay.classList.remove("show");
         popup.classList.remove("show");
      })
   }
   
   // init
   
    
         
      photoSelfie.addEventListener("change", onChange);
      disableFutureDates();
      dateOfBirth.addEventListener("input", checkDate)
      phoneInput.forEach(element => {
         element.addEventListener("input", handleInput)
      });
      submit.addEventListener("submit", submitForm)
   
   
  