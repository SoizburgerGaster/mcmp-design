
    function divChange(id) {
    let currentDiv = document.getElementById(id);
    let openingDiv = document.getElementById(id+'Hidden');
    currentDiv.style.display= 'none';
    openingDiv.style.display= 'block';
    openingDiv.addEventListener('click', function() {
    currentDiv.style.display= 'block';
    openingDiv.style.display= 'none';
})
}
