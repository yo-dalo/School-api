<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HTML</title>

  <!-- HTML -->


  <link rel="stylesheet" href="../cdn_modules/Swiper@11.0.5/swiper-bundle.min.css" />
  

<!-- utility  and header  and footer  Styles.-->

  <link rel="stylesheet" href="../css/utility/main-utility.css">
  <link rel="stylesheet" href="../css/header/nav.css">
 <link rel="stylesheet" href="../css/header/navBar.css">
  <link rel="stylesheet" href="../css/header/mainNav2.css">
  <link rel="stylesheet" href="../css/footer/footer.css">




<!-- page Styles
<link rel="stylesheet" href="style.css">
-->
<link rel="stylesheet" href="../css/index/index.css">
<link rel="stylesheet" href="../css/index/page_2.css">
<link rel="stylesheet" href="../css/index/page_3.css">
<link rel="stylesheet" href="../css/index/page_1-4.css">
<link rel="stylesheet" href="../css/index/page_1-5.css">

</head>

<body>
<div class="main">
<div class="page_1">

<?php
require("../php/conn.php");
require("../php/function.php");
require("./header.php");

?>
<div class="swiper poster mySwiper">
<div class="swiper-wrapper">
<?php
$sql = "SELECT * FROM Poster   ORDER BY Index_No DESC";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
echo "<div class='swiper-slide poster_sli'><a href='{$row['Url']}' ><img src='http://0.0.0.0:8080/x/uploads/{$row['Image']}'></a></div>";

}
}
?>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-pagination"></div>


</div>

<hr>
<div class="box_a">
<div class="bax_a_a">
Bullet-In
</div>
<div class="box_a_b">
<div class="box_a_b_a">
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
</div>
<div class="box_a_b_a">
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
</div>
<div class="box_a_b_a">
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
<h3> CBSE Basketball Cluster XV (Boys and Girls)</h3>
</div>

</div>

</div>
<div class="walcome_info">
<div class="info">
<h1>Welcome to Our School</h1>
<div class="line"></div>
<p class="info_p">
Rao Pahlad Singh (RPS) Sr. Sec. School, Khatod Mohindergarh, spread over 10 acres of open land in the lap of nature, is a school that was founded on the vision of spreading value-based education to every corner of the country. The vision spearheaded by Dr. O. P. Yadav, a well known advocate and educationist, is also committed passionately to the cause of quality education. This vision takes shape under the dynamism of its Chairperson Dr. Pavitra Rao and in the forth coming future the institute would be a model of quality education throughout the length and breadth of the state. Infact the school has been rooting records of its achievements for the last 23 years.
</p>
<div class="read_more">
<div class="read_more_btn">
Read More
</div>
</div>

</div>
</div>
<div class="box_X">
<div class="box_X_">
<div class="box_box">
<div class="img_box">
<img src="../img/active/archery.svg" alt="">
</div>
<li>archery</li>
</div>
<div class="box_box">
<div class="img_box">
<img src="../img/active/basketball.svg" alt="">
</div>
<li>basketball</li>
</div>
<div class="box_box">
<div class="img_box">
<img src="../img/active/boxing.svg" alt="">
</div>
<li>boxing</li>
</div>
<div class="box_box">
<div class="img_box">
<img src="../img/active/cycling.svg" alt="">
</div>
<li>cycling</li>
</div>
<div class="box_box">
<div class="img_box">
<img src="../img/active/handball.svg" alt="">
</div>
<li>handball</li>
</div>
<div class="box_box">
<div class="img_box">
<img src="../img/active/kabaddi.svg" alt="">
</div>
<li>kabaddi</li>
</div>
<div class="box_box">
<div class="img_box">
<img src="../img/active/volleyball.svg" alt="">
</div>
<li>volleyball</li>
</div>
<div class="box_box">
<div class="img_box">
<img src="../img/active/wrestling.svg" alt="">
</div>
<li>wrestling</li>
</div>

</div>

</div>
</div>


<div class="page_1-4">
<section class="short-info">
<div class="short-info_">
<h3>10+</h3>
<li>Year of Experience </li>
</div>
<div class="short-info_">
<h3>1000+</h3>
<li>Students </li>
</div>
<div class="short-info_">
<h3>32+</h3>
<li>Teachers</li>
</div>
<div class="short-info_">
<h3>16+</h3>
<li>Awards </li>
</div>
</section>

<section class="result">
   <div>
     
     
       <h2>
    CBSE RESULT OF CLASS <span>10TH</span> 2025
  </h2>
  
  <div class="students_card"> 
  
  
  <?php
$resultSql = "SELECT * FROM Result_10th  ORDER BY Index_No DESC";
$resultR = mysqli_query($con, $resultSql);

if (mysqli_num_rows($resultR) > 0) {
while ($rrow = mysqli_fetch_assoc($resultR)) {

   echo "<div class='student_card'> 
  
  <div class='student_img'>
    <img src='http://0.0.0.0:8080/x/uploads/{$rrow['Image']}'>
  </div>
  
  <div class='student_info'>
  <h3>{$rrow['Student_Name']}</h3>
    <h3>{$rrow['Marks_Percentage']}%</h3>
  </div>
  
  
  
  </div>";

  /*
  
  <div class="student_card"> 
  
  <div class="student_img">
    <img src="../img/student/resultstudent/SANIYA.jpg"  >
  </div>
  
  <div class="student_info">
    <h3>SANIYA</h3>
    <h3>98%</h3>
  </div>
  
  
  
  </div>
  <div class="student_card"> 
  
  <div class="student_img">
    <img src="../img/student/resultstudent/SAKSHI.jpg"  >
  </div>
  
  <div class="student_info">
    <h3>SAKSHI</h3>
    <h3>96%</h3>
  </div>
  
  
  
  </div>
  <div class="student_card"> 
  
  <div class="student_img">
    <img src="../img/student/resultstudent/RAKESH.jpg"  >
  </div>
  
  <div class="student_info">
    <h3>RAKESH</h3>
    <h3>91%</h3>
  </div>
  
  
  
  </div>*/
}}?>

  </div>
  
  
  

   </div>
  
   <div>
     
     
       <h2>
    CBSE RESULT OF CLASS <span>10TH</span> 2025
  </h2>
  
  <div class="students_card"> 
  
  
  <?php
$resultSql = "SELECT * FROM Result_12th  ORDER BY Index_No DESC";
$resultR = mysqli_query($con, $resultSql);

if (mysqli_num_rows($resultR) > 0) {
while ($rrow = mysqli_fetch_assoc($resultR)) {

   echo "<div class='student_card'> 
  
  <div class='student_img'>
    <img src='http://0.0.0.0:8080/x/uploads/{$rrow['Image']}'>
  </div>
  
  <div class='student_info'>
  <h3>{$rrow['Student_Name']}</h3>
    <h3>{$rrow['Marks_Percentage']}%</h3>
  </div>
  
  
  
  </div>";

  /*
  
  <div class="student_card"> 
  
  <div class="student_img">
    <img src="../img/student/resultstudent/SANIYA.jpg"  >
  </div>
  
  <div class="student_info">
    <h3>SANIYA</h3>
    <h3>98%</h3>
  </div>
  
  
  
  </div>
  <div class="student_card"> 
  
  <div class="student_img">
    <img src="../img/student/resultstudent/SAKSHI.jpg"  >
  </div>
  
  <div class="student_info">
    <h3>SAKSHI</h3>
    <h3>96%</h3>
  </div>
  
  
  
  </div>
  <div class="student_card"> 
  
  <div class="student_img">
    <img src="../img/student/resultstudent/RAKESH.jpg"  >
  </div>
  
  <div class="student_info">
    <h3>RAKESH</h3>
    <h3>91%</h3>
  </div>
  
  
  
  </div>*/
}}?>

  </div>
  
  
  

   </div>
</section>



<section class="faculty">
<h4>A Traditional of Excellence</h4>
<h1>Facilities @ HPS,Chaunarywas</h1>
<div class="line">
<div class="line-1 "></div>
<div class="line-2 "></div>
</div>
<li>Educating Students for Sussess in A Changing Word ....</li>

<div class="facility-swipe">
<?php $facilities = getAll($conn, "SELECT * FROM facility WHERE status = 1 ORDER BY roll DESC"); //print_r($facilities) ?>

<?php foreach ($facilities as $facility): ?>
<div class="facility-card">
<div class="facility-Img">
<img src="http://0.0.0.0:8080/GSSS/Gsss_admin/uploads/facility_img/<?php echo htmlspecialchars($facility['img']); ?>" alt="" />
</div>

<div class="facility-Info">
<h2>
<?php echo htmlspecialchars($facility['name'] ?? 'No name'); ?>
</h2>
<p>
<?php echo htmlspecialchars($facility['title'] ?? 'No title'); ?>
</p>

<h3>Read More</h3>
</div>


</div>

<?php endforeach; ?>

</div>


</section>
</div>



<div class="page_2">
<div class="box_Y">
<div class="box_y_info">
  <?php $aom = getSingle($con, "SELECT * FROM Admission_Open_Message "); //print_r($facilities) ?>
<h1>Admission Open</h1>
<p style="color:blue">
  <?php //echo ($aom['Message']) ;?>
Life @ Rai Bahadur MMM GSSS Mahender Garh is characterized by an unwavering commitment to embracing the finest aspects of our diverse cultural heritage. Our curriculum is meticulously crafted to foster holistic development among our students. At the heart of our mission lies the aspiration to ignite creativity, urging each student to uncover their inherent talents and passions. 
</p>
<a href="<?php echo htmlspecialchars($aom['Read_More_Url'] ?? 'No name'); ?>"><button>Admissions Open</button></a>

</div>
</div>
<div class="box_Z">
<div class="left">
<div class="left_info">
<h1>Life @  Hindu School</h1>
<p>
Rai Bahadur MMM GSSS Mahender Garh: A prestigious school fostering holistic development and academic excellence in Mahender Garh.
</p>
</div>
<div class="scoller_2">

<ul>
<?php $newses = getAll($con, "SELECT * FROM Notification "); //print_r($facilities) ?>

<?php foreach ($newses as $newses): ?>
<li>
<a href="news_detail.php?id=<?php echo htmlspecialchars($newses['Id'] ?? '0'); ?>">
<?php echo htmlspecialchars($newses['Title'] ?? 'No name'); ?>
</a>

</li>
<?php endforeach; ?>

</ul>

<!-- add scoller_2 ❌❌ -->
</div>
</div>
<div class="right">
<img src="../img/student/student_1.jpg" alt="">
</div>
</div>
</div>
<div class="page_3">
<div class="box_teacher_info">
<div class="box_teacher_info_hading">
<h1>Meet Our Mentors</h1>
<div class="line_2"></div>
</div>
<div class="box_teacher_box">
<div class="left">
<div class="swiper mySwiperX2">
<div class="swiper-wrapper mySwiperX2_ ">
<?php
$sql = "SELECT * FROM Messages ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
while ($row_2 = mysqli_fetch_assoc($result)) {
echo "
                                                  <div class='swiper-slide  mySwiperX2_slide'>
                                                    <div class='info_box_xyz'>
                                                      <div class='info_box_xyz_img'>
                                                        <img src='http://0.0.0.0:8080/x/uploads/{$row_2['Image']}' alt=''>
                                                      </div>
                                                      <h2>{$row_2['Name']}</h2>
                                                      <li>{$row_2['Roll']}</li>
                                                      <p>
                                                      {$row_2['Description']}
                                                      </p>
                                                    </div>
                                                  </div>
                                  ";
}
}
?>


</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-pagination"></div>
</div>
</div>
<div class="right">
<div class="right_box_x">
<iframe width="100%" height="100%" src="https://www.youtube.com/embed/0o1aJkP-a9c" frameborder="0" allowfullscreen></iframe>
</div>
<div class="right_box_y">
<div class="right_box_y_1">
CEO Window
</div>
<div class="right_box_y_2">
CEO Window
</div>
</div>

</div>
</div>

</div>

</div>

<div class="page_4">
<section class="faculty">
<h4>A Traditional of Excellence</h4>
<h1>Achievements @ HPS,M Garh</h1>
<div class="line">
<div class="line-1 "></div>
<div class="line-2 "></div>
</div>
<li>Educating Students for Sussess in A Changing Word ....</li>

<div class=" mySwiperX3  ">
<div class="facility-swipe  ">
<div class=" swiper-slide facility-card  ">
<div class="facility-Img">
<img src="../img/achievement/a2.jpg" alt="" />
</div>

<div class="facility-Info">
<h2>
Best Library Award
</h2>
<p>
Library with 15,000+ books and digital resources, awarded for nurturing reading habits and academic curiosity in students.
</p>

<h3>Read More</h3>
</div>


</div>
<div class=" swiper-slide facility-card   ">
<div class="facility-Img">
<img src="../img/achievement/a3.jpg" alt="" />
</div>

<div class="facility-Info">
<h2>
Quiz Competition Winner
</h2>
<p>
Secured 1st place in district general knowledge quiz organized by the local education authority.
</p>

<h3>Read More</h3>
</div>


</div>
<div class=" swiper-slide facility-card   ">
<div class="facility-Img">
<img src="../img/achievement/a4.jpg" alt="" />
</div>

<div class="facility-Info">
<h2>
Clean School Award
</h2>
<p>
1st place in Swachh Bharat School Challenge for cleanliness, hygiene, and eco-friendly infrastructure.
</p>

<h3>Read More</h3>
</div>


</div>
<div class=" swiper-slide facility-card   ">
<div class="facility-Img">
<img src="../img/achievement/a5.jpg" alt="" />
</div>

<div class="facility-Info">
<h2>
sports Academy
</h2>
<p>
At HPS, sports and games curriculum is an integral and compulsry part of tha education process Sports help to build Character and ....
</p>

<h3>Read More</h3>
</div>


</div>
<div class=" swiper-slide facility-card   ">
<div class="facility-Img">
<img src="../img/achievement/a6.jpg" alt="" />
</div>

<div class="facility-Info">
<h2>
Science Fair Winner
</h2>
<p>
Students created eco-friendly projects and won 1st place at the state-level inter-school science exhibition.
</p>

<h3>Read More</h3>
</div>


</div>


</div>



</div>






</section>

</div>


<?php
require("./footer.php");
?>


<!----- footer  -->
</div>
<script type="text/javascript" src="cdn_modules/Swiper@11.0.5/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>

function sw(classX) {
var swiper = new Swiper(classX, {
spaceBetween: 30,
centeredSlides: true,
autoplay: {
delay: 2500,
disableOnInteraction: false,
},
pagination: {
el: ".swiper-pagination",
clickable: true,
},
navigation: {
nextEl: ".swiper-button-next",
prevEl: ".swiper-button-prev",
},
});
}

sw(".mySwiper")
sw(".mySwiperX2")
sw(".mySwiperX3")

mySwiperX2

</script>
<script>
var swiper = new Swiper(".mySwiper_1", {
effect: "cards",
grabCursor: true,
});
</script>




<script type="text/javascript" src="../cdn_modules/gsap@3.12.5/gsap.min.js"></script>
<script type="text/javascript" src="../cdn_modules/gsap@3.12.5/ScrollTrigger.min.js"></script>
<script src="../js/page_1-5.js"></script>
<script src="./../main.js"></script>
<script src="./../js/mainNav2.js"></script>



<script src="../yo.js/jquery.js"></script>
<script src="../yo.js2/_.ejs"></script>

</body>

</html>