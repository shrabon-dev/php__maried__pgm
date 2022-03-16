<?php require_once 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Married</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
</head>
<body class="body_t">
  

<div class="container">
  <div class="row-2">
  <h4>আপনি কি আপনার বউয়ের ভালোবাসা পেতে চান? তাহলে এই পরিক্ষাটা দেন:</h4>
  <div class="flex">
     <form action="check2.php" method="POST">
          <p>১. আপনি কি রান্না করতে পারেন?</p>
         <input type="radio" name="ranna__op" id="ranna_yes" value="r_five">
         <label for="ranna_yes"> হ্যাঁ</label>
         <input type="radio" name="ranna__op" id="ranna_no" value="r_zero">
         <label for="ranna_no">না</label>
         <p>২. আপনি কি বিছানা গুছাতে পারেন?</p>
         <input type="radio" name="bisana__op" id="bisana_yes" value="b_five">
         <label for="bisana_yes"> হ্যাঁ</label>
         <input type="radio" name="bisana__op" id="bisana_no" value="b_zero">
         <label for="bisana_no">না</label>
         <p>৩. আপনার কি রাগ বেশি?</p>
         <input type="radio" name="rag__op" id="rag_yes" value="rag_five">
         <label for="rag_yes"> হ্যাঁ</label>
         <input type="radio" name="rag__op" id="rag_no" value="rag_zero">
         <label for="rag_no">না</label>
         <p>৪. আপনি কি  উকুন আনতে পারেন?</p>
         <input type="radio" name="ukun__op" id="ukun_yes" value="u_five">
         <label for="ukun_yes"> হ্যাঁ</label>
         <input type="radio" name="ukun__op" id="ukun_no" value="u_zero">
         <label for="ukun_no">না</label>
         <p>৫. আপনি কি থালা বাসুন পরিস্কার করতে পারেন?</p>
         <input type="radio" name="thala__op" id="thala_yes" value="t_five">
         <label for="thala_yes"> হ্যাঁ</label>
         <input type="radio" name="thala__op" id="thala_no" value="t_zero">
         <label for="thala_no">না</label>
         <p>৫. আপনি কি মিথ্যা বলতে পারেন?</p>
         <input type="radio" name="mittha__op" id="mittha_yes" value="m_five">
         <label for="mittha_yes"> হ্যাঁ</label>
         <input type="radio" name="mittha__op" id="mittha_no" value="m_zero">
         <label for="mittha_no">না</label>

     <button type="submit" name="submit">Submit</button>
     </form>
     <div class="span">
         <?php if(isset($_POST['submit'])): ?>
     <h5>    <?php echo $output ."<br>".$output_cmt ?></h5>
         <?php endif; ?>
     </div>
     </div>
  </div>
</div>



</body>
</html>