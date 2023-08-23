window.onload = function() {
    const form = document.getElementById("form");
    const fnameInput = document.getElementById("fname");
    const lnameInput = document.getElementById("lname");
    const phonenumberInput = document.getElementById("phonenumber");
    const genderInput = document.getElementById("gender");
    const emailInput = document.getElementById("email");
    const CollegenameInput = document.getElementById("Collegename")
    const courseInput = document.getElementById("course");
    const subject1Input = document.getElementById("subject1");
    const CityInput = document.getElementById("City");
    const stateInput = document.getElementById("state");
    const ZipInput = document.getElementById("Zip")
    const CountryInput = document.getElementById("Country");
    const unameInput = document.getElementById("uname");
    const upswd1Input = document.getElementById("upswd1");
    const upswd2Input = document.getElementById("upswd2");
    
    form.addEventListener("submit", function(event) {
        event.preventDefault();
    
        if (validateFrom()) {
            form.submit();
        }
    });
        function validateFrom() {
            let isValid = true;
    
        if(fnameInput.value.trim() === ""){
            showError(fnameInput,'Enter your name');
            isValid = false;
        }else{
            hideError(fnameInput);
        }
        if(lnameInput.value.trim() === ""){
            showError(lnameInput,'Enter last name');
            isValid = false;
        }else{
            hideError(lnameInput);
        }
        if(phonenumberInput.value.trim() === ""){
            showError(phonenumberInput,'Enetr your phonenumber');
            isValid = false;
        }else if(phonenumberInput.value.length != 10){
            showError(phonenumberInput,'10 digit mobile number is required');
            isValid = false;
        }
        else{
            hideError(phonenumberInput);
        }
        if(genderInput.value.trim() === ""){
            showError(genderInput,'Select your gender');
            isValid = false;
        }else{
            hideError(genderInput);
        }
        if(emailInput.value.trim() === ""){
            showError(emailInput,'Enter your email id');
            isValid = false;
        }else{
            hideError(emailInput);
        }
        if(CollegenameInput.value.trim() === ""){
            showError(CollegenameInput,'Enter your College Name ');
            isValid = false;
        }else{
            hideError(CollegenameInput);
        }
        if(courseInput.value.trim() === "") {
            showError(courseInput,'Select your course');
            isValid = false;
        }else{
            hideError(courseInput)
        }
        if(subject1Input.value.trim() === ""){
            showError(subject1Input,'Enter your subject');
            isValid = false;
        }else{
            hideError(subject1Input);
        }
        if(CityInput.value.trim() === ""){
            showError(CityInput,'Enter your company address');
            isValid = false;
        }else{
            hideError(CityInput);
        }
        if(stateInput.value.trim() === ""){
            showError(stateInput,'Enter your company address');
            isValid = false;
        }else{
            hideError(stateInput);
        }
        if(ZipInput.value.trim() === ""){
            showError(ZipInput,'Enter your company address');
            isValid = false;
        }else{
            hideError(ZipInput);
        }
        if(CountryInput.value.trim() === ""){
            showError(CountryInput,'Enter your company address');
            isValid = false;
        }else{
            hideError(CountryInput);
        }
        if(unameInput.value.trim() === ""){
            showError(unameInput,'Enter your username');
            isValid = false;
        }else{
            hideError(unameInput);
        }
        if(upswd1Input.value.trim() === ""){
            showError(upswd1Input,'Enter your password');
            isValid = false;
        }else if(upswd1Input.value.length < 8){
            showError(upswd1Input,'8 digit mobile number is required');
            isValid = false;
        }
        else{
            hideError(upswd1Input);
        }
        if(upswd2Input.value === ""){
            showError(upswd2Input,'Confirm your password');
            isValid = false;
        }else if (upswd1Input.value !== upswd2Input.value){
            showError(upswd2Input,'Password not mached ')
            isValid = false;
        }
        else{
            hideError(upswd2Input)
        }
        return isValid;
    }
    function showError(inputElement, errorMessage) {
        const errorDiv = inputElement.nextElementSibling;
        inputElement.classList.add("error-input");
        errorDiv.textContent = errorMessage;
        }
        
        function hideError(inputElement) {
        const errorDiv = inputElement.nextElementSibling;
        inputElement.classList.remove("error-input");
        errorDiv.textContent = "";
        }
    };

