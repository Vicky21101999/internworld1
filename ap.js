window.onload = function() {
    const form = document.getElementById("form");
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email")
    const phonenumberInput = document.getElementById("phonenumber");
    const resumeInput = document.getElementById("resume");
    
    form.addEventListener("submit", function(event) {
        event.preventDefault();
    
        if (validateFrom()) {
            form.submit();
        }
    });
        function validateFrom() {
            let isValid = true;
    
        if(nameInput.value.trim() === ""){
            showError(nameInput,'Enter your company name');
            isValid = false;
        }else{
            hideError(nameInput);
        }
        if(emailInput.value.trim() === ""){
            showError(emailInput,'Enter your company address');
            isValid = false;
        }else{
            hideError(emailInput);
        }
        if(phonenumberInput.value.trim() === ""){
            showError(phonenumberInput,'Enter your company address');
            isValid = false;
        }else{
            hideError(phonenumberInput);
        }
        if(resumeInput.value.trim() === ""){
            showError(resumeInput,'Enter your company address');
            isValid = false;
        }else{
            hideError(resumeInput);
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