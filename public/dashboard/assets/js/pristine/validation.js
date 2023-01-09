var pristine;
window.onload = function () {

   var form = document.getElementById("form");

   pristine = new Pristine(form);

   form.addEventListener('submit', function (e) {

      var valid = pristine.validate();
      if(!valid)
      {
        e.preventDefault();
      }

   });
};




var pristine1;
window.onload = function () {

   var form1 = document.getElementById("form1");

   pristine1 = new Pristine(form1);

   form1.addEventListener('submit', function (e1) {

      var valid1 = pristine1.validate();
      if(!valid1)
      {
        e1.preventDefault();
      }

   });
};




