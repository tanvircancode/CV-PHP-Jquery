<?php

include('config.php');

if(isset($_GET['id'])){
  $_SESSION['id']  = $_GET['id'];
}



// $id = $_GET['id'] ?? '';
// echo $id;exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>CV</title>
  
  <link rel="stylesheet" href="css/style.css" />

</head>

<body>
  <div id="main">
    <!-- <form id="addForm"> -->
      <div class="intro">
        <div class="intro_desc">
        
        <form action="" id="nameForm">
          <input type="text" id="full_name" name="full_name" readonly />
          <input type="text" name="sid" id="edit-id" value="<?php echo $_GET['id']?>" hidden="" />
          <button class='name-edit-btn' >Edit</button> 
          <input type="button" id="name-form-submit" value="Update" style="display: none;" /></br>
        </form>
        
        <form action="" id="addressForm">
          <input type="text" id="address" name="address"  readonly />
          <input type="text" name="sid" id="edit-id" value="<?php echo $_GET['id']?>" hidden="" />
          <button class='address-edit-btn'>Edit</button> 
          <input type="button" id="address-form-submit" value="Update" style="display: none;"/></br>
       </form>
       <form action="" id="phoneForm">
          <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"  readonly  />
          <input type="text" name="sid" id="edit-id" value="<?php echo $_GET['id']?>" hidden="" />
          <button class='phone-edit-btn'>Edit</button> 
          <input type="button" id="phone-form-submit" value="Update" style="display: none;"/></br>
       </form>

       <form action="" id="emailForm">
          <input type="email" id="email" name="email"  readonly />
          <input type="text" name="sid" id="edit-id" value="<?php echo $_GET['id']?>" hidden="" />
          <button class='email-edit-btn'>Edit</button> 
          <input type="button" id="email-form-submit" value="Update" style="display: none;"/></br>
       </form>

       
         
          <!-- <label class="avatar-lbl" for="avatar">Choose a picture:</label>
          <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" /> -->
        </div>
      </div>
      <div class="career">
        <p>Career Objective</p>
        <textarea rows="6" cols="100" class="textarea-obj" name="objective" id="textarea-input" readonly></textarea>
      </div>
      </br>
      <div id="exp-dropdown" style="display: none;">
        <span class="p-exp-duration">Number of Experience:</span>
        <select id="number-of-exp">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
        </select>
      </div>
      <div id="experience-one">
        <p class="experi">Experience</p>
        <input type="text" id="designation-one" name="designation-one"  readonly/></br>
        <input type="text" id="company-name-one" name="company-name-one"  readonly/></br>
        <span class="p-exp-duration">Duration(in years):</span>
        <input type="text" id="exp-duration-one" name="exp-duration-one"  readonly/></br>

        <!-- <select name="exp-duration-one" id="exp-duration-one">
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select> -->
      </div>
      <div id="experience-two" >
        <p class="experi">Experience</p>
        <input type="text" id="designation-two" name="designation-two"  readonly /></br>
        <input type="text" id="company-name-two" name="company-name-two" readonly  /></br>
        <span class="p-exp-duration">Duration(in years):</span>
        <input type="text" id="exp-duration-two" name="exp-duration-two" readonly  /></br>

        <!-- <select name="exp-duration-two" id="exp-duration-two">
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select> -->
      </div>
      <p class="academic">Academic Qualifications</p>
      <div class="academic">
        <div class="uni">
          <p class="academic-uni">University</p>
          <label style="font-size:14px; margin-left:15px !important;" >Degree : </label>
          <input type="text" id="uni-degree" name="uni-degree" readonly />  </br>
          <label style="font-size:14px; margin-left:15px !important;">Uni Name : </label>
          <input type="text" id="uni-name" name="uni-name" readonly  /></br>
          <label style="font-size:14px; margin-left:15px !important;">cgpa : </label>
          <input type="text" id="uni-cgpa" name="uni-cgpa" readonly  /></br>
          <label style="font-size:14px; margin-left:15px !important;">passing year : </label>
          <input type="text" id="uni-pass-year" name="uni-pass-year" readonly /></br>

          <!-- <select name="uni-pass-year" id="uni-pass-year">
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
          </select> -->

        </div>
        <div class="hsc">
          <p class="academic-hsc">HSC</p>
          <label style="font-size:14px; margin-left:15px !important;" >College : </label>
          <input type="text" id="coll-name" name="coll-name"  readonly /></br>
          <label style="font-size:14px; margin-left:15px !important;" >GPA : </label>
          <input type="text" id="coll-cgpa" name="coll-cgpa" readonly /></br>
          <label style="font-size:14px; margin-left:15px !important;" >passing year : </label>
          <input type="text" id="coll-pass-year" name="coll-pass-year" readonly /></br>

          <!-- <select name="coll-pass-year" id="coll-pass-year">
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
          </select> -->

        </div>
        <div class="ssc">
          <p class="academic-ssc">SSC</p>
           <label style="font-size:14px; margin-left:15px !important;" >School : </label>
          <input type="text" id="skl-name" name="skl-name" readonly /></br>
          <label style="font-size:14px; margin-left:15px !important;" >GPA : </label>
          <input type="text" id="skl-cgpa" name="skl-cgpa" readonly /></br>
          <label style="font-size:14px; margin-left:15px !important;" >passing year : </label>
          <input type="text" id="skl-pass-year" name="skl-pass-year" readonly /></br>

          <!-- <select name="skl-pass-year" id="skl-pass-year">
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
          </select> -->

        </div>
      </div>
      <p class="project-para">Projects</p>
      <div class="projects">
        <p>Project One:</p>
       <label style="font-size:15px">Project Title : </label>
        <input type="text" id="project-one-name" name="project-one-name" readonly /></br>
        <label style="font-size:15px">Project Description : </label>
        <textarea rows="3" cols="100" class="project-one-textarea" name="project-one-textarea"
          id="project-one-textarea" readonly></textarea></br>
        <span class="project-one-span">Year:</span>
        <input type="text" id="project-one" name="project-one" readonly />
        <!-- <select name="project-one" id="project-one">
          <option>2015</option>
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
        </select></br> -->
        <label style="font-size:15px">Project Link : </label>
        <input type="text" id="project-one-link" name="project-one-link" placeholder="Project Link" readonly/></br>
      </div>
      <div class="projects" id="project_two">
        <p>Project Two : </p>
        <label style="font-size:15px">Project Title : </label>
        <input type="text" id="project-two-name" name="project-two-name" placeholder="Project Title"  readonly /></br>
        <label style="font-size:15px">Project Description : </label>
        <textarea rows="3" cols="100" class="project-two-textarea" name="project-two-textarea"
          id="project-two-textarea" placeholder="Project Description" readonly ></textarea></br>
        <span class="project-two-span">Year:</span>
        <input type="text" id="project-two" name="project-two"  readonly  />

        <!-- <select name="project-two" id="project-two">
          <option>2015</option>
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
        </select></br> -->
        <label style="font-size:15px">Project Link : </label>
        <input type="text" id="project-two-link" name="project-two-link" placeholder="Project Link" readonly /></br>
      </div>
      <div class="projects" id="project_three">
      <button class='project-dlt-btn' data-proj='three'>Delete project three</button> 
        <p>Project Three : </p>
        <label style="font-size:15px">Project Title : </label>
        <input type="text" id="project-three-name" name="project-three-name" placeholder="Project Title" readonly /></br>
        <label style="font-size:15px">Project Description : </label>
        <textarea rows="3" cols="100" class="project-three-textarea" name="project-three-textarea"
          id="project-three-textarea" placeholder="Project Description" readonly></textarea> </br>
        <span class="project-three-span">Year:</span>
        <input type="text" id="project-three" name="project-three"  readonly />

        <!-- <select name="project-three" id="project-three">
          
          <option>2015</option>
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
        </select></br> -->
        <label style="font-size:15px">Project Link : </label>
        <input type="text" id="project-three-link" name="project-three-link" placeholder="Project Link" readonly/></br>
      </div>
      <div class="projects" id="project_four">
      <button class='project-dlt-btn' data-proj='four'>Delete project four</button> 
        <p>Project Four : </p>
        <label style="font-size:15px">Project Title : </label>
        <input type="text" id="project-four-name" name="project-four-name" placeholder="Project Title" readonly/></br>
        <label style="font-size:15px">Project Description : </label>
        <textarea rows="3" cols="100" class="project-four-textarea" name="project-four-textarea"
          id="project-four-textarea" placeholder="Project Description" readonly ></textarea></br>
        <span class="project-four-span">Year:</span>
        <input type="text" id="project-four" name="project-four" readonly />
        <!-- <select name="project-four" id="project-four">
          <option>2015</option>
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
        </select></br> -->
        <label style="font-size:15px">Project Link : </label>
        <input type="text" id="project-four-link" name="project-four-link" placeholder="Project Link" readonly /></br>
      </div>

      <div class="skills">
        <p>Skills : </p>
        <textarea rows="3" cols="100" class="skills-textarea" name="skills-textarea" id="skills-textarea" readonly ></textarea>
      </div>
      
      



    <!-- </form> -->
    
    <div id="error-message" class="messages"></div>
    <div id="success-message" class="messages"></div>

    

  </div>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {

      var proj_one_year = $('#project-two option:selected').text();
        console.log(proj_one_year);


      $('#exp-dropdown').on('change', function () {
        var exp_val = $('#number-of-exp option:selected').text();

        if (exp_val === '1') {
          console.log($('#number-of-exp option:selected').text());

          $("#experience-one").show();
        } else if (exp_val === '2') {
          $("#experience-one").show();
          $("#experience-two").show();
        }

      });
       // error or success msg
       function message(message, status) {
        if (status) {
          $("#success-message").html(message).slideDown();
          $("#error-message").slideUp();
          setTimeout(function () {
            $("#success-message").slideUp();
          }, 4000);
        } else {
          $("#error-message").html(message).slideDown();
          $("#success-message").slideUp();
          setTimeout(function () {
            $("#error-message").slideUp();
          }, 4000);
        }
      }

     

      
      function jsonData(targetForm) {
        var arr = targetForm.serializeArray();
        

        var obj = {};
        for (var a = 0; a < arr.length; a++) {
          console.log(arr[a].value);
          obj[arr[a].name] = arr[a].value;
        }
        var json_string = JSON.stringify(obj);
        return json_string;
      }

      

        // Fetch single record show in modal box
        // $(document).on("click", ".edit-btn", function () {
            // $("#modal").show();
            // var studentId = $(this).data("eid");
            var studentId = <?php echo $_GET['id']; ?>;
            // console.log(studentId);
        var obj = {
          sid: studentId
        };
        
        var myJSON = JSON.stringify(obj);

        $.ajax({
          url: "http://localhost/cv/api-fetch-single.php",
          type: "POST",
          data: myJSON,
          success: function (data) {
              
            $.each(data, function (key, value) {
              $("#full_name").val(value.full_name);
              $("#address").val(value.address);
              // $("#edit-id").val(value.id);
              $("#phone").val(value.phone);
              $("#email").val(value.email);
              if(value.objective === ''){
                $(".career").hide();
              }
              $("#textarea-input").val(value.objective);
              
              if(value.designation_one===''){
                $("#experience-one").hide();
              };
              $("#designation-one").val(value.designation_one);
              $("#company-name-one").val(value.company_name_one);
              $("#exp-duration-one").val(value.exp_duration_one);
              if(value.designation_two===''){
                $("#experience-two").hide();
              };
              $("#designation-two").val(value.designation_two);
              $("#company-name-two").val(value.company_name_two);
              $("#exp-duration-two").val(value.exp_duration_two);
              $("#uni-degree").val(value.uni_degree);
              $("#uni-name").val(value.uni_name);
              
              $("#uni-cgpa").val(value.uni_cgpa);
              $("#uni-pass-year").val(value.uni_pass_year);
              $("#coll-name").val(value.coll_name);
              $("#coll-cgpa").val(value.coll_cgpa);
              $("#coll-pass-year").val(value.coll_pass_year);
              $("#skl-name").val(value.skl_name);
              $("#skl-cgpa").val(value.skl_cgpa);
              $("#skl-pass-year").val(value.skl_pass_year);
              $("#project-one-name").val(value.project_one_name);
              $("#project-one-textarea").val(value.project_one_textarea);
              $("#project-one").val(value.project_one);
              $("#project-one-link").val(value.project_one_link);
              if(value.project_two_name === ''){
                $("#project_two").hide();
              }
              $("#project-two-name").val(value.project_two_name);
              $("#project-two-textarea").val(value.project_two_textarea);
              $("#project-two").val(value.project_two);
              $("#project-two-link").val(value.project_two_link);
              if(value.project_three_name === ''){
                $("#project_three").hide();
              }
              $("#project-three-name").val(value.project_three_name);
              $("#project-three-textarea").val(value.project_three_textarea);
              $("#project-three").val(value.project_three);
              $("#project-three-link").val(value.project_three_link);
              if(value.project_four_name === ''){
                $("#project_four").hide();
              }
              $("#project-four-name").val(value.project_four_name);
              $("#project-four-textarea").val(value.project_four_textarea);
              $("#project-four").val(value.project_four);
              $("#project-four-link").val(value.project_four_link);
              $("#skills-textarea").val(value.skills_textarea);
            });
          },
        });
      // });

      // delete record
      $(document).on("click", ".project-dlt-btn", function (e) {
        e.preventDefault();
        if (confirm("Do you really want to delete this record? ")) {
          var project = $(this).data("proj");
          // console.log(project);
            var studentId = <?php echo $_GET['id']; ?>;
           
            var obj = { sid: studentId , number: project};
            
            var myJSON = JSON.stringify(obj);
            console.log(myJSON);
            

            $.ajax({
              url: "http://localhost/cv/project-delete.php",
              type: "POST",
              data: myJSON,
              success: function (data) {
                message(data.message, data.status);
                if (data.status) {
                  if(data.number === 'three'){
                    $("#project_three").hide();
                  }
                  if(data.number === 'four'){
                    $("#project_four").hide();
                  }
                }
              },
            });
          }
      });


    //  Name edit start
      $(".name-edit-btn").on("click", function (e) {
        e.preventDefault();
        var studentId = <?php echo $_GET['id']; ?>;
        var obj = {
          sid: studentId
        };
        document.getElementById("full_name").readOnly = false; 
        
        var myJSON = JSON.stringify(obj);

        $.ajax({
          url: "http://localhost/cv/api-fetch-single.php",
          type: "POST",
          data: myJSON,
          success: function (data) {
              
            $.each(data, function (key, value) {
              $("#full_name").val(value.full_name);
              
              $("#full_name").focus();
              $("#name-form-submit").show();
            });
          },
        });
        });


        $("#name-form-submit").on("click", function (e) {
        e.preventDefault();
        var arr = $("#nameForm").serializeArray();
        
        var obj = {};
          for (var a = 0; a < arr.length; a++) {
            
            obj[arr[a].name] = arr[a].value;
          }

          var json_string = JSON.stringify(obj);
          // console.log(json_string);

          $.ajax({
              url: "http://localhost/cv/api-update.php",
              type: "POST",
              data: json_string,
              success: function (data) {
                message(data.message, data.status);
                $("#name-form-submit").hide();
              },
            });
          
        });
        // name end

        //  Address edit start
      $(".address-edit-btn").on("click", function (e) {
        e.preventDefault();
        var studentId = <?php echo $_GET['id']; ?>;
        var obj = {
          sid: studentId
        };
        document.getElementById("address").readOnly = false; 
        
        var myJSON = JSON.stringify(obj);

        $.ajax({
          url: "http://localhost/cv/api-fetch-single.php",
          type: "POST",
          data: myJSON,
          success: function (data) {
              
            $.each(data, function (key, value) {
              $("#address").val(value.address);
              // $("#address").writeonly;
              $("#address").focus();
              $("#address-form-submit").show();
            });
          },
        });
        });


        $("#address-form-submit").on("click", function (e) {
        e.preventDefault();
        var arr = $("#addressForm").serializeArray();
        // console.log(arr);
        var obj = {};
          for (var a = 0; a < arr.length; a++) {
            
            obj[arr[a].name] = arr[a].value;
          }

          var json_string = JSON.stringify(obj);
          console.log(json_string);

          $.ajax({
              url: "http://localhost/cv/api-update-address.php",
              type: "POST",
              data: json_string,
              success: function (data) {
                message(data.message, data.status);
                $("#address-form-submit").hide();
              },
            });
          
        });
        // Address end

           //  Phone edit start
      $(".phone-edit-btn").on("click", function (e) {
        e.preventDefault();
        var studentId = <?php echo $_GET['id']; ?>;
        var obj = {
          sid: studentId
        };
        document.getElementById("phone").readOnly = false; 
        
        var myJSON = JSON.stringify(obj);

        $.ajax({
          url: "http://localhost/cv/api-fetch-single.php",
          type: "POST",
          data: myJSON,
          success: function (data) {
              
            $.each(data, function (key, value) {
              $("#phone").val(value.phone);
              // $("#phone").writeonly;
              $("#phone").focus();
              $("#phone-form-submit").show();
            });
          },
        });
        });


        $("#phone-form-submit").on("click", function (e) {
        e.preventDefault();
        var arr = $("#phoneForm").serializeArray();
        // console.log(arr);
        var obj = {};
          for (var a = 0; a < arr.length; a++) {
            
            obj[arr[a].name] = arr[a].value;
          }

          var json_string = JSON.stringify(obj);
          console.log(json_string);

          $.ajax({
              url: "http://localhost/cv/api-update-phone.php",
              type: "POST",
              data: json_string,
              success: function (data) {
                message(data.message, data.status);
                $("#phone-form-submit").hide();
              },
            });
          
        });
        // phone end

        //  Email edit start
      $(".email-edit-btn").on("click", function (e) {
        e.preventDefault();
        var studentId = <?php echo $_GET['id']; ?>;
        var obj = {
          sid: studentId
        };
        document.getElementById("email").readOnly = false; 
        
        var myJSON = JSON.stringify(obj);

        $.ajax({
          url: "http://localhost/cv/api-fetch-single.php",
          type: "POST",
          data: myJSON,
          success: function (data) {
              
            $.each(data, function (key, value) {
              $("#email").val(value.email);
              // $("#email").writeonly;
              $("#email").focus();
              $("#email-form-submit").show();
            });
          },
        });
        });


        $("#email-form-submit").on("click", function (e) {
        e.preventDefault();
        var arr = $("#emailForm").serializeArray();
        // console.log(arr);
        var obj = {};
          for (var a = 0; a < arr.length; a++) {
            
            obj[arr[a].name] = arr[a].value;
          }

          var json_string = JSON.stringify(obj);
          console.log(json_string);

          $.ajax({
              url: "http://localhost/cv/api-update-email.php",
              type: "POST",
              data: json_string,
              success: function (data) {
                message(data.message, data.status);
              $("#email-form-submit").hide();
                
              },
            });
          
        });
        // email end
      


    });
  </script>
</body>

</html>