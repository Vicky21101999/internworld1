window.onload = function() {
    const form = document.getElementById("form");
    const cnameInput = document.getElementById("cname");
    const TitelInput = document.getElementById("Titel");
    const JobdescriptionInput = document.getElementById("Jobdescription");
    const RequirementsInput = document.getElementById("Requirements");
    const DurationInput = document.getElementById("Duration")
    const sdateInput = document.getElementById("sdate");
    const DeadlineInput = document.getElementById("Deadline")
    const StipendInput = document.getElementById("Stipend");
    const RequiredskillsInput = document.getElementById("Requiredskills");
    const ApplicationInput = document.getElementById("Application");
    const emailInput = document.getElementById("email");
    const numberInput = document.getElementById("number");
    
    form.addEventListener("submit", function(event) {
        event.preventDefault();
    
        if (validateFrom()) {
            form.submit();
        }
    });
        function validateFrom() {
            let isValid = true;
    
        if(cnameInput.value.trim() === ""){
            showError(cnameInput,'Enter your Company name');
            isValid = false;
        }else{
            hideError(cnameInput);
        }
        if(TitelInput.value.trim() === ""){
            showError(TitelInput,'Enter your Titel');
            isValid = false;
        }else{
            hideError(TitelInput);
        }
        if(JobdescriptionInput.value.trim() === ""){
            showError(JobdescriptionInput,'Enter your Jobdescription');
            isValid = false;
        }else{
            hideError(JobdescriptionInput);
        }
        if(RequirementsInput.value.trim() === ""){
            showError(RequirementsInput,' Requirements');
            isValid = false;
        }else{
            hideError(RequirementsInput);
        }
        if(DurationInput.value.trim() === "Duration") {
            showError(DurationInput,'');
            isValid = false;
        }else{
            hideError(DurationInput)
        }
        if(sdateInput.value.trim() === ""){
            showError(sdateInput,'Application start date');
            isValid = false;
        }else{
            hideError(sdateInput);
        }
        if(DeadlineInput.value.trim() === ""){
            showError(DeadlineInput,'Deadline');
            isValid = false;
        }else{
            hideError(DeadlineInput);
        }
        if(StipendInput.value.trim() === ""){
            showError(StipendInput,'Stipend');
            isValid = false;
        }else{
            hideError(StipendInput);
        }
        if(RequiredskillsInput.value.trim() === ""){
            showError(RequiredskillsInput,'Requiredskills');
            isValid = false;
        }else{
            hideError(RequiredskillsInput);
        }
        if(ApplicationInput.value.trim() === ""){
            showError(ApplicationInput,'Application procedure');
            isValid = false;
        }else{
            hideError(ApplicationInput)
        }
        if(emailInput.value.trim() === ""){
            showError(emailInput,'Enter your email id');
            isValid = false;
        }else{
            hideError(emailInput);
        }
        if(numberInput.value.trim() === ""){
            showError(
                numberInput,'Enetr your Number');
            isValid = false;
        }else{
            hideError(numberInput)
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

