// domain_check.js
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    const domainName = document.getElementById('domain_name').value;
    fetch(`/check-domain?domain_name=${encodeURIComponent(domainName)}`)
        .then(response => response.json())
        .then(data => {
            const resultDiv = document.getElementById('result');
            resultDiv.innerText = data.exists ? 'Domain name Not Avaiblable!' : 'Domain name Available!';
        })
        .catch(error => {
            console.error('Error:', error);
        });
});
