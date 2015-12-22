<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="Styles/globalstyles.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- TemplateBeginEditable name="body-css" -->
<div id="container">
  <div id="banner">
    <h1><a href="index.html">Diggers Beach Volleyball</a></h1>
  </div>
  <ul class="navbar">
    <li> <a href="who-can-play.html"> Who can play? </a> </li>
    <li> <a href="about-volley.html"> About Volleyball </a> </li>
    <li> <a href="announcements.html"> Announcements </a> </li>
    <li> <a href="contact.html"> Contact Us </a> </li>
    
    <li> <a href="links.html"> Links </a></li>
    <li> <a href="ladder.html"> Ladder </a></li>
    <li> <a href="announcements.html"> Announcements </a> </li>
    <li> <a href="links.html"> Links </a></li>
    <li> <a href="ladder.html"> Ladder </a></li>
  </ul>
  <div class="content">
    <div class="subtitle">
      <p>Sign Up</p>
    </div>
    <form id="form1" name="form1" method="post">
      <p>
        <label for="firstname">First Name:</label>
        <input name="firstname" type="text" required="required" id="textfield" size="30">
      </p>
      <p>
        <label for="lastname">Last Name:</label>
        <input name="lastname" type="text" required="required" id="textfield2" size="30" maxlength="30">
      </p>
      <p>
        <label for="tel">Phone Number:</label>
        <input name="tel" type="tel" required="required" id="tel" size="30" maxlength="30">
      </p>
      <p>
        <label for="email">Email:</label> 
        <input name="email" type="email" required="required" id="email" size="30" maxlength="30">
      </p>
      <p>
        <label for="date">Date of Birth:</label>
        <input name="date" type="date" required="required" id="date" max="2015-01-01" min="1950-01-01" size="30">
      </p>
      <p>
        <label for="select">Competition Day:</label>  
        <select name="select" required id="select">  <option value="">Select...</option>
  <option value="Mon">Monday</option>
  <option value="Tue">Tuesday</option>
  <option value="Wed">Wednesday</option>
  <option value="Thu">Thursday</option>
  <option value="Fri">Friday</option>
  <option value="Sat">Saturday</option>
  <option value="Sun">Sunday</option>
        </select>
      </p>
      <p>
        <textarea name="textarea" id="textarea">Participants in Diggers Beach Volleyball play at their own risk and are responsible for their own safety and should only play if they are capable. Check with your doctor before you begin.
Game fees must be paid prior to the start of the game. Games may be cancelled up to 4 hours beforehand to get a refund. Without 4 hours' notice, participants will forfeit the game and be charged 50% of the game fee.
</textarea>
        <input name="checkbox" type="checkbox" required="required" id="checkbox">
      I have read and agree to Diggers Beach Volleyball Playing Guidelines<p>
        <input type="submit" name="submit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset">
      </p>
    </form>
  </div>
<div class="footer">
    <p>Copyright All Rights Reserved</p>
  </div>
</div>
<!-- TemplateEndEditable -->
</body>
</html>