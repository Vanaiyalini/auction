function validateForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === '') {
        alert('Please provide your username!');
        return false;
    }
    
    if (password === '') {
        alert('Please provide your password!');
        return false;
    }
    return true;
}