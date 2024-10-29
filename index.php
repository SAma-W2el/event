<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <div class="illustration">
    <img src="images/Marketing-amico.png" alt="" width="400" height="400">
  </div>
  <div class="form">
    <h2>Uram IT Event</h2>
  <form  class="form-group">
                <label for="name">Name : *</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name"><br>
            
                <label for="address">Address : *</label>
                <input type="text" id="address" name="address" required placeholder="Enter your address"><br>
            
                <label for="tel1">Phone number : *</label>
                <input type="tel" id="tel1" name="tel1" required placeholder="Enter your number"><br>
            
                <label for="tel2">Other Phone to contact :</label>
                <input type="tel" id="tel2" name="tel2" placeholder="Enter other number"><br>
            
                <label for="id">National ID : *</label>
                <input type="number" id="id" name="id" required placeholder="Enter your national id"><br>
                
                <label for="edu">Education : *</label>
                <select id="experience" name="experience" required>
                    <option value="" disabled selected>Select one...</option> 
                    <option value="student">Student</option>
                    <option value="graduated">Graduated</option>
                </select>

                <label for="experience">Experience : *</label>
                <input type="text" id="edu" name="edu" required placeholder="Enter your education"><br>
            
                <label for="field">Interested in field :</label>
                <select id="field" name="field" required>
                    <option value="" disabled selected>Select one...</option> 
                    <option value="e-marketing">E-Marketing</option>
                    <option value="online-sale">Online Sale</option>
                    <option value="field-sales">Field Sales</option>
                    <option value="sponsor-ads">Sponsor and Ads</option>
                    <option value="account-manager">Account Manager</option>
                    <option value="content-creator">Content Creator</option>
                </select><br><br>
                <button type="submit">Submit</button>
            </form>
            </div>
</div>
</body>
</html>