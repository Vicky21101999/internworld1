window.onload = function() {
const form = document.getElementById("form");
const cnameInput = document.getElementById("cname");
const snameInput = document.getElementById("sname");
const CityInput = document.getElementById("City");
const stateInput = document.getElementById("state");
const ZipInput = document.getElementById("Zip")
const CountryInput = document.getElementById("Country");
const EmailInput = document.getElementById("Email")
const RenumberInput = document.getElementById("Renumber");
const NumberInput = document.getElementById("Number");
const IndustryInput = document.getElementById("Industry");
const unameInput = document.getElementById("uname");
const passwordInput = document.getElementById("password");
const password1Input = document.getElementById("password1");

form.addEventListener("submit", function(event) {
    event.preventDefault();

    if (validateFrom()) {
        form.submit();
    }
});
    function validateFrom() {
        let isValid = true;

    if(cnameInput.value.trim() === ""){
        showError(cnameInput,'Enter your company name');
        isValid = false;
    }else{
        hideError(cnameInput);
    }
    if(snameInput.value.trim() === ""){
        showError(snameInput,'Enter your company address');
        isValid = false;
    }else{
        hideError(snameInput);
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
    if(EmailInput.value.trim() === "") {
        showError(EmailInput,'Enter your company email id');
        isValid = false;
    }else{
        hideError(EmailInput)
    }
    if(RenumberInput.value.trim() === ""){
        showError(RenumberInput,'Enter your company registration number');
        isValid = false;
    }else{
        hideError(RenumberInput);
    }
    if(NumberInput.value.trim() === ""){
        showError(NumberInput,'Enter your phonenumber');
        isValid = false;
    }else{
        hideError(NumberInput);
    }
    if(IndustryInput.value.trim() === ""){
        showError(IndustryInput,'Select Industry');
        isValid = false;
    }else{
        hideError(IndustryInput);
    }
    if(unameInput.value.trim() === ""){
        showError(unameInput,'Enter user name');
        isValid = false;
    }else{
        hideError(unameInput)
    }
    if(passwordInput.value.trim() === ""){
        showError(passwordInput,'Enter password');
        isValid = false;
    }else{
        hideError(passwordInput)
    }
    if(password1Input.value.trim() === ""){
        showError(password1Input,'Enter your confirm password');
        isValid = false;
    }else if (passwordInput.value !== password1Input.value){
        showError(password1Input,'Password not mached ')
        isValid = false;
    }else{
        hideError(password1Input);
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