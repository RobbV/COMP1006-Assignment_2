/* Delete confirmation */
$('.confirmation').on('click', function() {
   return confirm('Are you sure you want to delete this record?');
});
// setup your IIFE (Immediately Invoked Function Expression)
(function () {
    "use strict";
    var login = "<div id=\"login\"><h2>Log In</h2> <form class=\"login\" action=\"validate.php\" method=\"post\"><div class=\"form-group\"><label for=\"username\" class=\"col-sm-2\">Username:</label><input class=\"form-control\" type=\"username\" name="username" /></div><div class=\"form-group\"><label for=\"password\" class=\"col-sm-2\">Password:</label><input class=\"form-control\" type=\"passwor\d" name=\"password\" /></div><div class=\"col-sm-offset-2\"><input type=\"submit\" value=\"Login\" class=\"btn btn-primary\" /></div></form></div><!-- login closing div -->"
    var register = "<button id=\"myregister\" type=\"button\" class=\"btn btn-default\">Register</button><div id=\"register\"><h2>User Registration</h1><form class=\"reg\" action=\"save-reg.php\" method=\"post\">  <!-- username input --><div class=\"\"><label for=\"username\">Username:</label><input class=\"form-control\" type=\"username\" name=\"username\" placeholder=\"username\"></div><!-- close username div -->  <!-- password input --><div class=\"\"><label for=\"password\">Password:</label><input class=\"form-control\" type=\"password\" name=\"password\" placeholder=\"password\"></div><!-- close password div --><!-- confirm password input --><div class=\"\"><label for=\"confirm\">Confirm Password</label><input class=\"form-control\" type=\"password\" name=\"confirm\" placeholder=\"password\"></div><!-- close confirm password div --><!-- register as client --><div class=\"\"><label for=\"client\"> Register as Client:</label><input class=\"form-control\" name=\"client\" id=\"client\" type=\"checkbox\" /></div><!-- close register as client --><!-- register as admin --><div class=\"\"><label for=\"admin\"> Register as Admin:</label><input name=\"admin\" id=\"admin\" type=\"checkbox\" /></div><!-- close register as admin --><!-- submit --><div class=\"\"><input type=\"submit\" value=\"Register\" /></div></form>div> <!-- register closing div -->"
    var button = document.getElementById("mylogin");
       button.addEventListener("click", function(){
           myContent = login;
           replaceContent();
       });
       var button = document.getElementById("myregister");
          button.addEventListener("click", function(){
              myContent = register;
              replaceContent();
          });

       function replaceContent() {

        var content;

        content = document.getElementById("content");

        content.innerHTML = myContent;
    }
  })();
