function checkRadioButton(){var e=document.querySelector('input[name="radio-200"]'),n=document.querySelector('input[name="text-571"]');function t(){e.checked?n.classList.remove("hidden"):n.classList.add("hidden")}document.addEventListener("change",(function(e){"radio-200"===e.target.name&&t()})),t()}window.onload=checkRadioButton;