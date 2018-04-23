function CheckForm() {
  var name1 = document.getElementById("name1");
  var name2 = document.getElementById("name2");
  var phone = document.getElementById("phone");
  var city = document.getElementById("city");
  var street = document.getElementById("street");
  var address_number = document.getElementById("address_number");
  var address_number2 = document.getElementById("address_number2");
  var address_code = document.getElementById("address_code");
  var birthday = document.getElementById("birthday");
  var email = document.getElementById("email");

  var name_regex = /^([A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]{2,30})$/;
  var number_regex = /^(\d{1,20})$/;
  var address_code_regex = /^(\d{2}-\d{3})$/;
  var phone_regex = /^(\d{9})$/;
  var email_regxp = /^([\w]{1,30}@[\w]{2,10}.[\w]{2,5})$/;
  var birthdate_regxp = /^([0-3][0-9]-[0-1][0-9]-\d{4})$/;

  var send = true;

  if (name_regex.test($("#name1").val())) {
    console.log("du");
    $("#name1").removeClass("is-invalid");
  } else {
    console.log("pa");
    $("#name1").addClass("is-invalid");
    send = false;
  }
  if (name_regex.test($("#name2").val())) {
    $("#name2").removeClass("is-invalid");
  } else {
    $("#name2").addClass("is-invalid");
    send = false;
  }
  if (email_regxp.test($("#email").val())) {
    $("#email").removeClass("is-invalid");
  } else {
    $("#email").addClass("is-invalid");
    send = false;
  }
  if (phone_regex.test($("#phone").val())) {
    $("#phone").removeClass("is-invalid");
  } else {
    $("#phone").addClass("is-invalid");
    send = false;
  }
  if (name_regex.test($("#city").val())) {
    $("#city").removeClass("is-invalid");
  } else {
    $("#city").addClass("is-invalid");
    send = false;
  }
  if (name_regex.test($("#street").val())) {
    $("#street").removeClass("is-invalid");
  } else {
    $("#street").addClass("is-invalid");
    send = false;
  }
  if (number_regex.test($("#address_number").val())) {
    $("#address_number").removeClass("is-invalid");
  } else {
    $("#address_number").addClass("is-invalid");
    send = false;
  }
  if (number_regex.test($("#address_number2").val())) {
    $("#address_number2").removeClass("is-invalid");
  } else {
    $("#address_number2").addClass("is-invalid");
    send = false;
  }
  if (address_code_regex.test($("#address_code").val())) {
    $("#address_code").removeClass("is-invalid");
  } else {
    $("#address_code").addClass("is-invalid");
    send = false;
  }
  if (birthdate_regxp.test($("#birthday").val())) {
    $("#birthday").removeClass("is-invalid");
  } else {
    $("#birthday").addClass("is-invalid");
    send = false;
  }
  return false;
  return send;
}
