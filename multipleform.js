$(document).ready(function() {
$('select#select_btn').change(function() {
var sel_value = $('option:selected').val();
if (sel_value == 0) {
$("#form_submit").empty(); // Resetting Form
$("#form1").css({
'display': 'none'
});
} else {
$("#form_submit").empty(); //Resetting Form
    
create(sel_value);
// Appending Submit Button To Form
$("#form_submit").append($("<input/>", {
type: 'submit',
value: 'Register'
}))
}
});
function create(sel_value) {
for (var i = 1; i <= sel_value; i++) {
$("div#form1").slideDown('slow');
$("div#form1").append($("#form_submit").append($("<div/>", {
id: 'head'
}).append($("<h3/>").text("Child " + i)), $("<input/>", {
type: 'text',
placeholder: 'Name',
name: 'name_' + i
}), $("<br/>"), $("<input/>", {
type: 'text',
placeholder: 'Surname',
name: 'email_' + i
}), $("<br/>"), $("<input/>", {
placeholder: 'Passport number',
type: 'text',
name: 'Passport_number' + i
}), $("<br/>"), $("<input/>", {
placeholder: 'Age',
type: 'number',
name: 'Age' + i

}), $("<br/>"), $("<hr/>"), $("<br/>")))
}
}
});



