var shown = false;

function showhideEmail() {
    if (shown) {
        document.getElementById('email').textContent = "Show my email";
        shown = false;
    } else {
        var link = document.createElement('a');
        link.href = 'mailto:nagpalvv@outlook.com';
        link.textContent = 'nagpalvv@outlook.com';
        var emailDiv = document.getElementById('email');
        emailDiv.textContent = '';
        emailDiv.appendChild(link);
        shown = true;
    }
}
