<?php
// Setting SEO for Google Search
echo ("<title>หน้าแรก - openQA</title>");
echo ("<meta name='description' content='Development by thinknightly & pradukfuu!!. 
ซอฟต์แวร์นี้พัฒนาให้งานประกันคุณภาพและมาตรฐานการศึกษาให้วิทยาลัยอาชีวศึกษาสุพรรณบุรี
และขอขอบคุณความคิดสร้างสรรค์ทาง qa.cvc.ac.th ของวิทยาลัยอาชีวศึกษาเชียงรายด้วยนะครับ'>");

// Import Header (Include CSS and JS)
include('assets/components/index/header.php');

// Import Navigator Bar
include('assets/components/index/navbar.php');
// Import Public Dashboard
include('assets/components/index/dashboard_public.php');

// Import Footer
include('assets/components/index/footer.php');
?>