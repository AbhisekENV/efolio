<?php
require('../include/db.php');
if(isset($_POST['update-section'])){
    // print_r($_POST);
    $home = $_POST['home'] ?? 0;
    $about = $_POST['about'] ?? 0;
    $skill = $_POST['skill'] ?? 0;
    $portfolio = $_POST['portfolio'] ?? 0;
    $resume = $_POST['resume'] ?? 0;
    $article = $_POST['article'] ?? 0;
    $contact = $_POST['contact'] ?? 0;
    $services = $_POST['services'] ?? 0;
    $testimonials = $_POST['testimonials'] ?? 0;

    $query = "UPDATE section_control SET ";
    $query.="home_section='$home',";
    $query.="about_section='$about',";
    $query.="skill_section='$skill',";
    $query.="resume_section='$resume',";
    $query.="portfolio_section='$portfolio',";
    $query.="services_section='$services',";
    $query.="testimonials_section='$testimonials',";
    $query.="article_section='$article',";
    $query.="contact_section='$contact' WHERE id=1";

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php';</script>";                    

    }
}


elseif(isset($_POST['update-home'])){
    
    $title = mysqli_real_escape_string($db,$_POST['title']);
    $subtitle = mysqli_real_escape_string($db,$_POST['subtitle']);
    $showicons = $_POST['showicons'] ?? 0;
    


    $query = "UPDATE home SET ";
    $query.="title='$title',";
    $query.="subtitle='$subtitle',";
    $query.="showicons='$showicons' WHERE id=1";

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?homesetting=true';</script>";                    

    }

}


elseif(isset($_POST['update-about'])){
    
    $title = mysqli_real_escape_string($db,$_POST['abouttitle']);
    $subtitle = mysqli_real_escape_string($db,$_POST['aboutsubtitle']);
    $desc = mysqli_real_escape_string($db,$_POST['aboutdesc']);
    $imagename = time().$_FILES['profile']['name'];
    $imgtemp = $_FILES['profile']['tmp_name'];

    if($imgtemp==''){
        $q = "SELECT * FROM about WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['profile_pic'];
    }

    move_uploaded_file($imgtemp,"../images/$imagename");
    $query = "UPDATE about SET ";
    $query.="about_title='$title',";
    $query.="about_subtitle='$subtitle',";
    $query.="profile_pic='$imagename',";

    $query.="about_desc='$desc' WHERE id=1";

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?aboutsetting=true';</script>";                    

    }
}

elseif(isset($_POST['add-skill'])){    
$skillname = $_POST['skillname'];
$skilllevel = $_POST['skilllevel'];
    $query = "INSERT INTO skills (skill_name,skill_level) VALUES('$skillname','$skilllevel') ";   
    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?aboutsetting=true';</script>";                    

    }

}

elseif(isset($_POST['add-pi'])){
    
    $label = $_POST['label'];
    $value = $_POST['value'];
        $query = "INSERT INTO personal_info (label,value) VALUES('$label','$value') ";
        
        $run = mysqli_query($db,$query);
        if($run){
      echo "<script>window.location.href='../admin/index.php?aboutsetting=true';</script>";                    
    
        }
    
    }

    elseif(isset($_POST['add-project'])){
//    print_r($_FILES);
//    print_r($_POST);

        $type = $_POST['type'];
        $project_name = $_POST['project_name'];
        $project_link = $_POST['project_link'];
        $project_image = time().$_FILES['project_pic']['name'];
        move_uploaded_file($_FILES['project_pic']['tmp_name'],"../images/$project_image");

            $query = "INSERT INTO portfolio (project_type,project_pic,project_name,project_link) VALUES('$type','$project_image','$project_name','$project_link')";
            
            $run = mysqli_query($db,$query);
            if($run){
          echo "<script>window.location.href='../admin/index.php?portfoliosetting=true';</script>";                    
        
            }
        
        }

   
elseif(isset($_POST['update-contact'])){
    
    $address = mysqli_real_escape_string($db,$_POST['address']);
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $query = "UPDATE contact SET ";
    $query.="address='$address',";
    $query.="email='$email',";
    $query.="mobile='$mobile' WHERE id=1";

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?contactsetting=true';</script>";                    

    }
} 
//add resume  
elseif(isset($_POST['add-resume'])){
  $type = mysqli_real_escape_string($db,$_POST['type']); 
  $title = mysqli_real_escape_string($db,$_POST['title']); 
  $org = mysqli_real_escape_string($db,$_POST['org']);
  $time = mysqli_real_escape_string($db,$_POST['time']);
  $about = mysqli_real_escape_string($db,$_POST['about']);
  $query = "INSERT INTO `resume`(`type`, `title`, `time`, `org`, `about_exp`) VALUES ('$type','$title','$org','$time','$about')";
  $run = mysqli_query($db,$query);
  if($run){
echo "<script>window.location.href='../admin/index.php?resumesetting=true';</script>";                    

  }
}       
//add services   
elseif(isset($_POST['add_services'])){
  $orgname = mysqli_real_escape_string($db,$_POST['orgname']); 
  $orgaddress = mysqli_real_escape_string($db,$_POST['orgaddress']);
  $orgphone = mysqli_real_escape_string($db,$_POST['orgphone']);
  $orgwebsite = mysqli_real_escape_string($db,$_POST['orgwebsite']);
  $daytime = mysqli_real_escape_string($db,$_POST['daytime']);
  $query = "INSERT INTO `services`(`orgname`, `orgaddress`, `orgphone`, `orgwebsite`, `daytime`) VALUES ('$orgname','$orgaddress','$orgphone','$orgwebsite','$daytime')";
  $run = mysqli_query($db,$query);
  if($run){
echo "<script>window.location.href='../admin/index.php?servicessetting=true';</script>";                    

  }
}     
//add testimonials
elseif(isset($_POST['add_testimonials'])){
  $people = mysqli_real_escape_string($db,$_POST['people']); 
  $org = mysqli_real_escape_string($db,$_POST['org']);
  $quotes = mysqli_real_escape_string($db,$_POST['quotes']);
  $target="../images/";
  $imagename = time().$_FILES['people_images']['name'];
  move_uploaded_file($_FILES['people_images']['tmp_name'],$target.$imagename);
  $query = "INSERT INTO `testimonials`(`images`, `people`, `org`, `quotes`) VALUES ('$imagename','$people','$org','$quotes')";
  $run = mysqli_query($db,$query);
  if($run){
echo "<script>window.location.href='../admin/index.php?testimonialssetting=true';</script>";                    

  }
}           
elseif(isset($_POST['update-socialmedia'])){
    
    // print_r($_POST);
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $skype = $_POST['skype'];
    $linkedin = $_POST['linkedin'];
    $query = "UPDATE social_media SET ";
    $query.="twitter='$twitter',";
    $query.="facebook='$facebook',";
    $query.="instagram='$instagram',";
    $query.="skype='$skype',";
    $query.="linkedin='$linkedin' WHERE id=1";

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?contactsetting=true';</script>";                    

    }

}  

elseif(isset($_POST['update-background'])){
    
    $imagename = time().$_FILES['background']['name'];
    $imgtemp = $_FILES['background']['tmp_name'];
    move_uploaded_file($imgtemp,"../images/$imagename");
    $query = "UPDATE site_background SET ";
    $query.="background_img='$imagename' WHERE id=1";
    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?changebackground=true';</script>";                    

    }

}
elseif(isset($_POST['article-upload'])){
 

echo "<script>window.location.href='../admin/index.php?article=true';</script>";                    
}
elseif(isset($_POST['update-article-auth'])){
  $name = mysqli_real_escape_string($db,$_POST['name']);
  $name_show = mysqli_real_escape_string($db,$_POST['name_show']);
  $gmail = mysqli_real_escape_string($db,$_POST['gmail']);
  $s="UPDATE `article_auth` SET `name`='$name',`name_show`='$name_show',`gmail`='$gmail' WHERE id=1";
  $run = mysqli_query($db,$s); 
    if($run){
  echo "<script>window.location.href='../admin/index.php?article=true';</script>";                    
  }
}
elseif(isset($_POST['update-seo'])){   
    $title = mysqli_real_escape_string($db,$_POST['page_title']);
    $keyword = mysqli_real_escape_string($db,$_POST['keyword']);
    $desc = mysqli_real_escape_string($db,$_POST['description']);
    $imagename = time().$_FILES['siteicon']['name'];
    $imgtemp = $_FILES['siteicon']['tmp_name'];

    if($imgtemp==''){
        $q = "SELECT * FROM seo WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['siteicon'];
    }

    move_uploaded_file($imgtemp,"../images/$imagename");

    $query = "UPDATE seo SET ";
    $query.="page_title='$title',";
    $query.="keywords='$keyword',";
    $query.="description='$desc',";
    $query.="siteicon='$imagename' WHERE id=1";
    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?seosetting=true';</script>";                    

    }
}
elseif(isset($_POST['update-account'])){
    // print_r($_FILES);
   
    $fullname = mysqli_real_escape_string($db,$_POST['fullname']);
    $email = mysqli_real_escape_string($db,$_POST['Email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $imagename = time().$_FILES['profilepic']['name'];
    $imgtemp = $_FILES['profilepic']['tmp_name'];
    if($imgtemp==''){
        $q = "SELECT * FROM admin WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['admin_profile'];
    }
    move_uploaded_file($imgtemp,"../images/$imagename");
    $query = "UPDATE admin SET ";
    $query.="fullname='$fullname',";
    $query.="email='$email',";
    $query.="password='$password',";
    $query.="admin_profile='$imagename' WHERE id=1";
    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?accountsetting=true';</script>";                    

    }
  }
  else{
    echo "<h1>Bad Request</h1>";
  }
  ?>