function validate() {



      let aname = document.forms["myform"]["adminname"].value;
      let ename = document.forms["myform"]["email"].value;
      let uname = document.forms["myform"]["usernamne"].value;
      let pname = document.forms["myform"]["password"].value;
      let cpname = document.forms["myform"]["confirmpassword"].value;
      let aname = document.forms["myform"]["address"].value;



      if(aname == '')
      {
        alert("adminname cannot be empty");
        return false;
      }
      
      
    }
    
