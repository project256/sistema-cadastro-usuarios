let open = document.getElementById('openModal');
let close = document.getElementById('close');
let fade = document.getElementById('fade');
let cntModal = document.getElementById('ctnModal');

open.onclick = function() {fade.style.display = "flex"}

close.onclick = function() {fade.style.display = "none"}

fade.onclick = function() {fade.style.display = "none"}

cntModal.onclick = function(event) {event.stopPropagation()}