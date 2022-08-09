
function changeNameCards() {
    const card6aus49 = document.getElementsByName("6aus49");
    const Freiheit = document.getElementsByName("freiheitplus")

    card6aus49[0].innerText = "LOTTO 6 aus 49";
    Freiheit[0].innerText = "Freiheit+";
}

changeNameCards();

setTimeout(() => {
    const alert = document.getElementById('alert-add-product');

    // 👇️ removes element from DOM
    alert.style.display = 'none';

    // 👇️ hides element (still takes up space on page)
    // box.style.visibility = 'hidden';
}, 5000);