const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

function testJs() {
    signUpButton.classList.add("right-panel-active");
    signInButton.classList.remove("right-panel-active");
}

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
