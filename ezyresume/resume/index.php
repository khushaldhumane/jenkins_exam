<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Resume | ezyResume</title>
    <link rel="shortcut icon" type="icon/png" href="../icon/r.png"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container text-light">
    
    <div class="form-container">
    <h1 class="text-center  fw-bold">Resume Form</h1>
    <div class="form-text text-light">None of the data entered here will be stored</div>
           <form action="submit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" value="HGsZOXpfNC">
            <div class="cards p-3 mb-3">    
                <h2>Profile Image</h2>
                <div class="mb-3">
                    <label class="form-label">Select a square image 1:1 (Recommended)</label>
                    <input class="form-control dp" name="profile_image" type="file" required>
                </div>
            </div>
            <div class="cards p-3 mb-3">    
                <h2>Contact</h2>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" pattern="[A-Za-z]{1,}" required>
                    </div>
                    <div>
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" pattern="[A-Za-z]{1,}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Profession</label>
                    <input type="text" class="form-control" name="profession" pattern="[A-Za-z]{1,}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" required>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+91-0123456789" pattern="[+][0-9]{2}-[0-9]{10}" required>
                </div>
            </div>
            <div class="cards p-3 mb-3">    
                <h2>Skills (Max:5)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" pattern="[A-Za-z]{1,}">Skillset Name</label>
                    <input type="text" class="form-control" name="skill1" required>
                    <select class="form-select mt-2" name="skill_level1" required>
                        <option value="">Select Level of Your Skill</option>
                        <option value="1">1 - Novice</option>
                        <option value="2">2 - Advanced Beginner</option>
                        <option value="3">3 - Competent</option>
                        <option value="4">4 - Proficient</option>
                        <option value="5">5 - Expert</option>
                    </select>
                </div>
                <div id="addSkill"></div>
                <div class="mb-3">
                    <button type="button" id="skill_hide" class="addbtn btn-primary form-control" onclick="addSkill()">Add Skills (Max:5)</button>
                </div>
            </div>
            <div class="cards p-3 mb-3">    
                <h2>Hobbies (Max:4)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hobby</label>
                    <input type="text" name="hobby1" class="form-control" pattern="[A-Za-z]{1,}" required>
                </div>
                <div id="addHobby"></div>
                <div class="mb-3">
                    <button type="button" id="hobby_hide" class="addbtn btn-primary form-control" onclick="addHobby()">Add Hobies (Max:4)</button>
                </div>
            </div>
            <div class="cards p-3 mb-3">    
                <h2>About Me</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="about_me" style="height: 100px" pattern="[A-Za-z]{1,}" required></textarea>
                </div>
            </div>
            <div class="cards p-3 mb-3">    
                <h2>Education (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">School/College/University</label>
                    <input type="text" name="institute1" class="form-control" pattern="[A-Za-z]{1,}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Degree Name</label>
                    <input type="text" name="degree1" class="form-control" pattern="[A-Za-z]{1,}">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <label for="exampleInputEmail1" class="form-label">From</label>
                        <input type="text" name="from1" class="form-control" pattern="[0-9]{4}">
                    </div>
                    <div>
                        <label for="exampleInputEmail1" class="form-label">To</label>
                        <input type="text" name="to1" class="form-control" pattern="[0-9]{4}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Grade/Score/CGPA</label>
                    <input type="text" name="grade1" class="form-control">
                </div>
                <div id="addEducation"></div>
                <div class="mb-3">
                    <button type="button" id="education_hide" class="addbtn btn-primary form-control" onclick="addEducation()">Add Qualifications (Max:3)</button>
                </div>
            </div>
            <div class="cards p-3 mb-3">    
                <h2>Experience (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" name="title1" class="form-control" pattern="[A-Za-z]{1,}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name="description1" class="form-control" >
                </div>
                <div id="addExperience"></div>
                <div class="mb-3">
                    <button type="button" id="experience_hide" class="addbtn btn-primary form-control" onclick="addExperience()">Add Experiences (Max:3)</button>
                </div>
            </div>
            <input type="submit" class=" subbtn form-control my-2">
        </form>
    </div>
    </div>
    <footer style="margin-top:12px;" class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); text-align: center; color: white; padding:8px ">
  This Site is designed and Developed By Khushal Dhumane <br> 
  Copyright © 2023 www.ezyResume.unaux.com - All Rights Reserved 
  </div>
</footer>
    <script src="app.js"></script>
</body>
</html>